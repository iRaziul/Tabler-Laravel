<x-guest-layout title="Login">
    <form method="POST" action="{{ route('login') }}" class="card-body" x-data="{processing:false}"
        @submit="processing=true">
        @csrf

        <h1 class="card-title text-center mb-4">
            Login to your account
        </h1>
        {{-- Flash Alert --}}

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <x-form.input type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">
                Password

                @if (Route::has('password.request'))
                    <a class="form-label-description" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </label>
            <x-form.input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="mb-3">
            <x-form.checkbox name="remember" :checked="old('remember')">
                Keep me logged in
            </x-form.checkbox>
        </div>

        <div class="form-footer">
            <button class="btn btn-primary w-100" :class="{'btn-loading': processing}" :disabled="processing">Log
                in</button>
        </div>
    </form>

    @if (Route::has('register'))
        <x-slot name="footer">
            <div class="text-center text-muted mt-3">
                Don't have an account? <a href="{{ route('register') }}">Register</a>
            </div>
        </x-slot>
    @endif
</x-guest-layout>
