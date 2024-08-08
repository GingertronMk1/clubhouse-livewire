<x-app-layout>

    <a href="{{ route('person.create') }}">Create</a>
    <ul>
    @foreach($people as $person)
        <li>{{ $person->name }}
            <ul>
                <li
                    x-data="{dob: '{{ $person->dob }}'}"
                    x-text="dob ? (new Date(dob)).toLocaleDateString() : 'No DOB specified'"></li>
                <li>{{ $person->user?->name ?? 'Person not associated with User' }}</li>
                <li><a href="{{ route('person.edit', ['person' => $person]) }}">Edit</a></li>
            </ul>
        </li>
        @if(!$loop->last)
            <hr>
            @endif
    @endforeach
    </ul>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</x-app-layout>
