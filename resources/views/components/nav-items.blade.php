@props(['items'])

<ul {{ $attributes->class('nav nav-pills') }}>
    @foreach ($items as $label => $nav)
        <!-- divider -->
        @if ($nav === '-')
            <li class="dropdown-divider"></li>
        @elseif (empty($nav))
            <!-- Label -->
            <li class="nav-item">
                <span class="nav-link text-uppercase fw-bold mt-2">{{ $label }}</span>
            </li>
        @elseif(!empty($nav['items']))
            <!-- Dropdown menu -->
            <li class="nav-item">
                <a href="#{{ str($label)->slug() }}" class="nav-link" data-bs-toggle="collapse"
                    aria-expanded="{{ is_active_nav($nav) }}">
                    @isset($nav['icon'])
                        <span class="nav-link-icon">
                            <x-icon :name="$nav['icon']" />
                        </span>
                    @endisset
                    <span class="nav-link-title">{{ $label }}</span>
                    <span class="nav-link-toggle"></span>
                </a>
                <x-nav-items :items="$nav['items']" :id="str($label)->slug()"
                    :class="is_active_nav($nav) ? 'collapse show' : 'collapse'" />
            </li>
        @else
            <!-- Link -->
            <li class="nav-item">
                <a href="{{ $nav['url'] }}" @class(['nav-link', 'active' => is_active_nav($nav)])>
                    @isset($nav['icon'])
                        <span class="nav-link-icon">
                            <x-icon :name="$nav['icon']" />
                        </span>
                    @endisset
                    <span class="nav-link-title">{{ $label }}</span>
                </a>
            </li>
        @endif
    @endforeach
</ul>
