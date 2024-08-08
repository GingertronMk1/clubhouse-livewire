<x-app-layout>
    <a href="{{ route('sport.create') }}">Create</a>
    <table class="table-fixed">
        <tbody class="divide-y-2">
            @foreach($sports as $sport)
                <tr>
                    <td><a href="{{ route('sport.show', ['sport' => $sport]) }}">{{ $sport->name }}</a></td>
                    <td>{{ $sport->description }}</td>
                    <td><a href="{{ route('sport.position.index', ['sport' => $sport]) }}">{{ count($sport->positions) }} Positions</a></td>
                    <td><a href="{{ route('sport.edit', ['sport' => $sport]) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
