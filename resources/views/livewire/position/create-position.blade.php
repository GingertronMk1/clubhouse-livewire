<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <input type="text" wire:model="form.name">
    <textarea wire:model="form.description"></textarea>
    <input type="number" wire:model="form.defaultNumber" min="0">
    <input type="number" wire:model="form.sortOrder" min="0">
    <input type="range" wire:model.live="form.previewX" min="" max="{{ self::MAX_PERCENT }}" />
    <input type="range" wire:model.live="form.previewY" min="" max="{{ self::MAX_PERCENT }}" />

    ({{ $this->previewXBounded }}, {{ $this->previewYBounded }})
    <div class="relative min-h-64 bg-green-500 aspect-square">
        <div
            class="absolute w-4 h-4 bg-red-950"
            style="
                bottom: {{ $this->previewYBounded }}%;
                left: {{ $this->previewXBounded }}%;
                transform: translate(-50%, 50%);
            "
        ></div>
    </div>
</form>
