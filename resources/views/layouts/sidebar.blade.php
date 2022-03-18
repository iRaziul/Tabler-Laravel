<aside class="navbar navbar-vertical navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- logo -->
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard.index') }}">
                <x-application-logo class="navbar-brand-image" />
            </a>
        </h1>

        <!-- sidebar -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <x-nav-items class="nav-vertical pt-lg-3" :items="[
                'Dashboard' => [
                    'icon' => 'dashboard',
                    'url' => route('dashboard.index'),
                ],
                'Management' => [],

                'Users' => [
                    'icon' => 'users',
                    'url' => 'home',
                ],
                '-',

                'Settings' => [
                    'icon' => 'settings',
                    'items' => [
                        'Account' => [
                            'url' => route('account.edit'),
                            'active' => 'account.edit',
                        ],
                    ]
                ],
            ]" />
        </div>
    </div>
</aside>
<form action="{{ route('logout') }}" method="post" id="logout-form" hidden class="d-none">@csrf</form>
