<x-layout>

    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">

            <x-forms.header title="Welcome Back!" subtitle="Login or create account" />

            <x-forms.form method="POST" action="/login" >
                <x-forms.input label="Email" name="email" type="email"/>
                <x-forms.input label="Password" name="password" type="password"/>

                <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-sm text-gray-600 dark:text-gray-200 hover:text-gray-500">Forget Password?</a>

                    <x-forms.button>Sign In</x-forms.button>
                </div>
            </x-forms.form>
        </div>

        <x-forms.footer-links title="Don't have an account?" link_text="Register" link_url="/register"/>
    </div>
</x-layout>
