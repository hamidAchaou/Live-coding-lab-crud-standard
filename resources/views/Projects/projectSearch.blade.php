@foreach ($Projects as $Project)
    <tr>
        <td>{{ $Project->nom }}</td>
        <td>{{ $Project->description }}</td>
        <td>
            <a href="{{ route('projects.tasks',['projectId'=> $Project->id] )}}" class="btn btn-sm btn-default mx-2">
                <i class="fa-regular fa-eye"></i>
            </a>

        </td>
    </tr>
@endforeach
<tr>
    <td></td>
    <td></td>
    <td>
        <div class="pagination m-0 float-right">
            {{ $Projects->links() }}
        </div>

    </td>
</tr>
