@foreach ($tasks as $Task)
    <tr>
        <td>{{ $Task->nom }}</td>
        <td>{{ $Task->description }}</td>

        <td class="d-flex">
            <a href="{{ route('tasks.edit', ['task' => $Task->id]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{ route('tasks.destroy', ['task' => $Task->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
@endforeach
<tr>
    <td></td>
    <td></td>
    <td>
        <div class="pagination m-0 float-right">
            {{ $tasks->links() }}
        </div>

    </td>
</tr>
