<x-guest-layout title="Register">
    <form method="POST" action="{{ route('register') }}" class="card-body" x-data="{processing:false}"
        @submit="processing=true">
        @csrf

        <h1 class="card-title text-center mb-4">
            Create new account
        </h1>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <x-form.input type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <x-form.input type="email" name="email" :value="old('email')" required />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <x-form.input type="password" name="password" required required autocomplete="new-password" />
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <x-form.input type="password" name="password_confirmation" required />
        </div>

        <div class="form-footer">
            <button class="btn btn-primary w-100" :class="{'btn-loading': processing}"
                :disabled="processing">Register</button>
        </div>
    </form>

    <x-slot name="footer">
        <div class="text-center text-muted mt-3">
            Already have an account? <a href="{{ route('login') }}" tabindex="-1">Login</a>
        </div>
    </x-slot>
</x-guest-layout>
