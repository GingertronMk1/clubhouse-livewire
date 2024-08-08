<x-app-layout>
    <a href="{{ route('sport.position.create', ['sport' => $sport]) }}">Create</a>
    <table class="table-fixed">
        @foreach($sport->positions as $position)
            <tr>
                <td><a href="{{ route('sport.position.show', ['sport' => $sport, 'position' => $position]) }}">{{ $position->name }}</a></td>
                <td>{{ $position->description }}</td>
                <td>{{ $position->default_number }}</td>
                <td>{{ $position->sort_order }}</td>
                <td><a href="{{ route('sport.position.edit', ['sport' => $sport, 'position' => $position]) }}">Edit</a></td>
            </tr>
        @endforeach
    </table>
</x-app-layout>
