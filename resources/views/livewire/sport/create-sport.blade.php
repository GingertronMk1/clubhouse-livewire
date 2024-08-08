<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <input type="text" wire:model="form.name">
    <textarea wire:model="form.description"></textarea>
    <input type="submit" value="Create">
</form>
