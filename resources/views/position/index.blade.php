<x-app-layout>
    <a href="{{ route('sport.position.create', ['sport' => $sport]) }}">Create</a>
    <table class="table-fixed">
        <tbody class="divide-y-2 divide-black">
        @foreach($sport->positions as $position)
            <tr class="py-4">
                <td><a href="{{ route('sport.position.show', ['sport' => $sport, 'position' => $position]) }}">{{ $position->name }}</a></td>
                <td class="whitespace-pre-line">{{ $position->description }}</td>
                <td>{{ $position->default_number }}</td>
                <td>{{ $position->sort_order }}</td>
                <td><a href="{{ route('sport.position.edit', ['sport' => $sport, 'position' => $position]) }}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
