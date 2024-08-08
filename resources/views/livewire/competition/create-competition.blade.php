<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <x-input name="name" wire:model="form.name" />
    <x-input type="textarea" name="description" wire:model="form.description" />
    <x-input
        type="select"
        name="sport_id"
        wire:model="form.sport_id"
        :options="$sports"
    />
    <x-input
        type="select"
        name="parent_id"
        wire:model="form.parent_id"
        :options="$competitions"
        :canBeNull="true"
    />
    <input type="submit" value="Create">
</form>
