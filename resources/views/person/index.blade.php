<x-app-layout>
    <ul>
    @foreach($people as $person)
        <li>{{ $person->name }} | <span x-data="{dob: '{{ $person->dob }}'}" x-text="dob ? (new Date(dob)).toLocaleDateString() : 'No DOB specified'"></span>  </li>
    @endforeach
    </ul>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</x-app-layout>
