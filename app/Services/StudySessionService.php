<?php

namespace App\Services;

use App\Models\User;
use App\Models\StudyProgress;
use App\Models\StudySession;
use App\Models\StudySessionRecord;
use Illuminate\Support\Carbon;


class StudySessionService {

    public static function createStudySession(User $user) {

        $date = Carbon::today();

        //obtener todas las tarjetas que se tienen que mostrar en la fecha

        $cards = $user->studyProgress()
            ->where('next_date_to_show', '<=', $date)
            ->with('card')
            ->get()
            ->pluck('card')
            ->flatten();
            // ->pluck('card_id')->toArray();

        if($cards->isEmpty()) {
            return false;
        }

        //crear una nueva sesion de estudio si no existe una sesion de estudio
        $study_session = $user->studySession()
            ->where('session_date', '<=', $date)
            ->where('is_completed', false)
            ->get()
            ->first();

        if(!$study_session) {
            $study_session = $user->studySession()->create([
                'is_completed' => false,
                'session_date' => $date,
            ]);
        }
        //crear un registro por cada tarjeta y asociarlo a la sesión de estudio
        $study_session_existent_cards = $study_session->studySessionRecords()
            ->get()
            ->pluck('card_id')
            ->flatten()
            ->toArray();

        $cards->each(function ($card) use($study_session_existent_cards, $study_session) {
            if(!in_array($card->id, $study_session_existent_cards)) {
                StudySessionRecord::create([
                    'e_factor' => $card->studyProgress->e_factor,
                    'interval' => $card->studyProgress->interval,
                    'study_session_id' => $study_session->id,
                    'card_id' => $card->id,
                ]);
            }
        });


        dd($cards, $study_session, $study_session_existent_cards);
    }

}
