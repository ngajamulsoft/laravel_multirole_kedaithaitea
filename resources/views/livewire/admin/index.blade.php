<div class="d-flex align-items-center gap-2 justify-content-center">
    {{-- Badge Status --}}
    @if($user->is_active)
        <span class="badge bg-success">Active</span>
    @else
        <span class="badge bg-danger">Inactive</span>
    @endif

    {{-- Tombol Toggle --}}
    <button 
        wire:click="toggleUser" 
        class="badge border-0 {{ $user->is_active ? 'bg-warning' : 'bg-success' }}"
        title="{{ $user->is_active ? 'Nonaktifkan' : 'Aktifkan' }}"
    >
        <i class="ri-refresh-line mr-0"></i>
    </button>
</div>
