<x-layout>

    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">

            <x-forms.header title="Create Your Account!" subtitle="Boost your studying potential" />

            <x-forms.form method="POST" action="/register">
                <x-forms.input label="Name" name="name"/>
                <x-forms.input label="Email" name="email" type="email"/>
                <x-forms.input label="Password" name="password" type="password"/>
                <x-forms.input label="Repeat Your Password" name="password_confirmation" type="password"/>

                <div class="flex items-center justify-end mt-4">

                    <x-forms.button>Create account</x-forms.button>
                </div>
            </x-forms.form>
        </div>

        <x-forms.footer-links title="Already created an account?" link_text="Sign In" link_url="/login"/>
    </div>

</x-layout>
