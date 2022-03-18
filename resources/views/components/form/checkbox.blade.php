<label class="form-check">
    <input {{ $attributes->merge(['type' => 'checkbox', 'class' => 'form-check-input']) }}>
    <span class="form-check-label">{{ $slot }}</span>
</label>
