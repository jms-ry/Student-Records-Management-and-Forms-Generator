<x-guest-layout>
  <form method="POST" action="{{ route('register') }}">
    @csrf
    
    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
      <x-input-label for="password" :value="__('Password')" />

      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

      <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <hr class="fw-bold text-primary-content mt-2"></hr>
    <h6 class="mt-2 fw-bold text-primary-content">Address Information</h6>
    <div class="grid grid-cols-2 gap-1 mt-2">
      <div>
        <x-input-label for="barangay" :value="__('Barangay')" />
        <x-text-input id="barangay" class="block mt-1 w-full" type="text" name="barangay" :value="old('barangay')" required autofocus autocomplete="barangay" />
        <x-input-error :messages="$errors->get('barangay')" class="mt-2" />
      </div>
      <div>
        <x-input-label for="municipality" :value="__('Municipality')" />
        <x-text-input id="municipality" class="block mt-1 w-full" type="text" name="municipality" :value="old('municipality')" required autofocus autocomplete="municipality" />
        <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
      </div>
    </div>

    <div class="grid grid-cols-2 gap-1 mt-2">
      <div>
        <x-input-label for="province" :value="__('Province')" />
        <x-text-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')" required autofocus autocomplete="province" />
        <x-input-error :messages="$errors->get('province')" class="mt-2" />
      </div>
      <div>
        <x-input-label for="zip_code" :value="__('Zip Code')" />
        <x-text-input id="zip_code" class="block mt-1 w-full" type="text" name="zip_code" :value="old('zip_code')" required autofocus autocomplete="zip_code" />
        <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
      </div>
    </div>


    <div class="flex items-center justify-end mt-4">
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('welcome') }}">
        {{ __('Already registered?') }}
      </a>
      <button class="btn btn-active btn-info btn-sm ms-3">{{ __('Register') }}</button>
    </div>
  </form>
</x-guest-layout>
