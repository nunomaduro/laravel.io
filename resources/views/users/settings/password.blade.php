@title('Password')

<section aria-labelledby="password_settings_heading" class="mt-6">
    <x-buk-form method="PUT" action="{{ route('settings.password.update') }}">
        <div class="shadow sm:overflow-hidden sm:rounded-md">
            <div class="space-y-6 bg-white px-4 py-6 sm:p-6">
                <div>
                    <h2 id="password_settings_heading" class="text-lg font-medium leading-6 text-gray-900">Password</h2>
                    <p class="mt-1 text-sm leading-5 text-gray-500">Update the password used for logging into your account.</p>
                </div>

                <div class="grid grid-cols-12 gap-6">
                    @if (Auth::user()->hasPassword())
                        <div class="col-span-12">
                            <x-forms.label for="current_password" />

                            <x-forms.inputs.password name="current_password" required />
                        </div>
                    @endif

                    <div class="col-span-12">
                        <x-forms.label for="password">New Password</x-forms.label>

                        <x-forms.inputs.password name="password" required />
                    </div>

                    <div class="col-span-12">
                        <x-forms.label for="password_confirmation">Confirm New Password</x-forms.label>

                        <x-forms.inputs.password name="password_confirmation" required />
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <x-buttons.primary-button type="submit">Update Password</x-buttons.primary-button>
            </div>
        </div>
    </x-buk-form>
</section>
