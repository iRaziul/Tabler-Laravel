@props(['name' => null])

@php
$types = ['success', 'danger', 'info', 'warning', 'status'];
$name .= $name ? '-' : null;
@endphp

@foreach ($types as $type)
    @if (Session::has($name . $type))
        <div class="alert alert-important alert-{{ $type == 'status' ? 'success' : $type }}" role="alert">
            {{ session($name . $type) }}
        </div>
    @endif
@endforeach
