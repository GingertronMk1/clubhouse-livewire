<x-app-layout>
    <a href="{{ route('game.create') }}">Create</a>
    <table class="table-fixed">
        <tbody class="divide-y-2">
        @foreach($games as $game)
            <tr>
                <td><a href="{{ route('game.show', ['game' => $game]) }}">{{ $game->name }}</a></td>
                <td class="whitespace-pre-line">{{ $game->description }}</td>
                <td class="whitespace-pre-line">{{ $game->summary }}</td>
                <td>{{ $game->team1->name }}</td>
                <td>{{ $game->team2->name }}</td>
                <td><a href="{{ route('game.edit', ['game' => $game]) }}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
