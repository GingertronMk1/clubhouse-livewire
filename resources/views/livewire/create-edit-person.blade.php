<form wire:submit="save" class="flex flex-col">
    <input type="text" wire:model.blur="form.name">

    <textarea wire:model="form.bio"></textarea>

    <input type="date" wire:model="form.dob" />

    <select wire:model.blur="form.user_id">
        <option value="">---</option>
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    {{ $form->user_id }}
    {{ $form->name }}

    <button type="submit">Save</button>
</form>
