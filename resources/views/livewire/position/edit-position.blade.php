<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <x-input name="name" wire:model="form.name" />
    <x-input type="textarea" name="description" wire:model="form.description" />
    <x-input type="number" name="default_number" wire:model="form.default_number" min="0" />
    <x-input type="number" name="sort_order" wire:model="form.sort_order" min="0" />
    <x-input type="range" name="preview_x" wire:model.live="form.preview_x" min="" max="{{ self::MAX_PERCENT }}" />
    <x-input type="range" name="preview_y" wire:model.live="form.preview_y" min="" max="{{ self::MAX_PERCENT }}" />

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
    <input type="submit" value="Update">
</form>
