<x-app-layout>
    <a href="{{ route('team.create') }}">Create</a>
    <table class="table-fixed">
        <tbody class="divide-y-2">
        @foreach($teams as $team)
            <tr>
                <td><a href="{{ route('team.show', ['team' => $team]) }}">{{ $team->name }}</a></td>
                <td>{{ $team->description }}</td>
                <td style="background-color: {{ $team->colour }}; color: {{ $team->colour }};">{{ $team->colour }}</td>
                <td><a href="{{ route('team.edit', ['team' => $team]) }}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
