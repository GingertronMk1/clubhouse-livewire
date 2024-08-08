<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <x-input name="name" wire:model="form.name" />
    <x-input type="datetime-local" name="start" wire:model="form.start" />
    <x-input type="textarea" name="description" wire:model="form.description" />
    <x-input type="textarea" name="summary" wire:model="form.summary" />
    <input type="submit" value="Create">
</form>
