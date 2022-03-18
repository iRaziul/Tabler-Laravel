<x-guest-layout title="Reset Password">
    <form method="POST" action="{{ route('password.update') }}" class="card-body" x-data="{processing:false}"
        @submit="processing=true">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <h1 class="card-title text-center mb-4">Reset your password</h1>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <x-form.input type="email" name="email" :value="old('email', $request->email)" required autofocus />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <x-form.input type="password" name="password" required />
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <x-form.input type="password" name="password_confirmation" required />
        </div>

        <div class="form-footer">
            <button class="btn btn-primary w-100">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
