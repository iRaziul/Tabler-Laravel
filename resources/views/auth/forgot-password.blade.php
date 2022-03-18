<x-guest-layout title="Forgot Password">
    <form method="POST" action="{{ route('password.email') }}" class="card-body" x-data="{processing:false}"
        @submit="processing=true">
        @csrf
        <h1 class="card-title text-center mb-4">Forgot Password</h1>

        <small class="d-block text-muted mb-4">
            Forgot your password? No problem. Just let us know your email address and we will email you a password
            reset link that will allow you to choose a new one.
        </small>

        {{-- flash message --}}
        <x-flash />

        <div>
            <label for="email" class="form-label">Email address</label>
            <x-form.input type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="form-footer">
            <button class="btn btn-primary w-100" :class="{'btn-loading': processing}" :disabled="processing">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>

    <x-slot name="footer">
        <div class="text-center text-muted mt-3">
            <a href="{{ route('login') }}">Back to Login</a>
        </div>
    </x-slot>
</x-guest-layout>
