<form wire:submit="save">
    <input type="text" wire:model="form.name">

    <textarea wire:model="form.bio"></textarea>

    <input type="date" wire:model="form.dob" />

    <button type="submit">Save</button>
</form>
