<form wire:submit="save" class="flex flex-col max-w-2xl space-y-6 mx-auto w-11/12">
    <input type="text" wire:model="form.name">
    <textarea wire:model="form.bio"></textarea>
    <input type="date" wire:model="form.dob">
    <select wire:model="form.user_id">
        <option value="">---</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Update">
</form>
