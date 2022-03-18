<x-guest-layout title="Verify Email">
    <div class="card-body">
        <h1 class="card-title text-center mb-4">
            Email verification required
        </h1>

        <div class="text-muted mb-3">
            Thanks for signing up! Before getting started, could you verify your email address by clicking on the link
            we just emailed to you? If you didn't receive the email, we will gladly send you another.
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-important alert-success">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif


        <div class="form-footer d-flex justify-content-between" x-data="{processing: false}">
            <form method="POST" action="{{ route('verification.send') }}" @submit="processing=true">
                @csrf
                <button class="btn btn-primary" :class="{'btn-loading':processing}" :disabled="processing">
                    {{ __('Resend Verification Email') }}
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
