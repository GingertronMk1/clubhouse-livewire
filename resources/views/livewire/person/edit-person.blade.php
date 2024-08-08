<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <x-input type="text" name="name"  wire:model="form.name" />
    <x-input type="textarea" name="bio"  wire:model="form.bio" />
    <x-input type="date" name="dob" wire:model="form.dob" label="Date of Birth" />
    <x-input
        type="select"
        name="user_id"
        wire:model="form.user_id"
        :options="$users"
        :canBeNull="true"
    />
    <input type="submit" value="Update">
</form>
