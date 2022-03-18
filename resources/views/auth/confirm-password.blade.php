<x-guest-layout title="Confirm Password">
    <form method="POST" action="{{ route('password.confirm') }}" class="card-body" x-data="{processing:false}"
        @submit="processing=true">
        @csrf

        <h1 class="card-title text-center mb-4">Confirm your password</h1>
        <div class="mb-3 fs-4 text-muted">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <div>
            <label for="password" class="form-label">Password</label>
            <x-form.input type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="form-footer">
            <button class="btn btn-primary w-100" :class="{'btn-loading': processing}" :disabled="processing">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>

</x-guest-layout>
