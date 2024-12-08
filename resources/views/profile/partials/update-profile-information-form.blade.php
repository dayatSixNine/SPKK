<section>
    <header>
        <h2 class="text-lg font-medium text-black dark:text-gray-100">
            {{ __('Informasi User') }}
        </h2>

        <p class="mt-1 text-sm text-gray-900 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="POST" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="POST" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('PATCH')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div>
            <x-input-label for="dob" :value="__('Tanggal Lahir')" />
            <x-text-input id="dob" name="dob" type="date" class="mt-1 block w-full" :value="old('dob', $user->dob)" />
            <x-input-error class="mt-2" :messages="$errors->get('dob')" />
        </div>

        <div class="flex items-center gap-4 text-black">
            <x-primary-button class="text-black">{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>