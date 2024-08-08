<x-app-layout>
    <a href="{{ route('person.create') }}">Create</a>
    <table class="table-fixed">
    @foreach($people as $person)
        <tr>
            <td>{{ $person->name }}</td>
            <td x-data="{dob: '{{ $person->dob }}'}"
                x-text="dob ? (new Date(dob)).toLocaleDateString() : 'No DOB specified'"></td>
            <td>{{ $person->user?->name ?? 'Person not associated with User' }}</td>
            <td><a href="{{ route('person.edit', ['person' => $person]) }}">Edit</a></td>
        </tr>
    @endforeach
    </table>
</x-app-layout>
