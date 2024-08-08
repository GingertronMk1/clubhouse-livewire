<form wire:submit="save">
    <input type="text" wire:model="form.name" />
    <textarea wire:model="form.description"></textarea>
    <input type="color" wire:model="form.colour">
    <input type="submit" value="Submit">
</form>
