<x-app-layout>
    <a href="{{ route('competition.create') }}">Create</a>
    <table class="table-fixed">
        <tbody class="divide-y-2">
            @foreach($competitions as $competition)
                <tr>
                    <td><a href="{{ route('competition.show', ['competition' => $competition]) }}">{{ $competition->name }}</a></td>
                    <td class="whitespace-pre-line">{{ $competition->description }}</td>
                    <td>{{ $competition->parent?->name ?? 'No parent competition' }}</td>
                    @php $childCount = $competition->children->count(); @endphp
                    <td>{{ $childCount === 1 ? '1 Child' : "{$childCount} Children" }}</td>
                    <td><a href="{{ route('competition.edit', ['competition' => $competition]) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
