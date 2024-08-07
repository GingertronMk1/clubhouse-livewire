<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <input type="text" wire:model="form.name">
    <textarea wire:model="form.description"></textarea>
    <input type="number" wire:model="form.defaultNumber" min="0">
    <input type="number" wire:model="form.sortOrder" min="0">
    <input type="range" wire:model.live="form.previewX" min="0" max="100" />
    <input type="range" wire:model.live="form.previewY" min="0" max="100" />

    ({{ $form->previewX }}, {{ $form->previewY }})
    <div class="relative min-h-64 bg-green-500">
        <div
            class="absolute w-4 h-4 bg-red-950"
            style="
                bottom: {{ $form->previewY }}%;
                left: {{ $form->previewX }}%;
            "
        ></div>
    </div>
</form>
