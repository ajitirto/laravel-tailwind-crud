<div>
    <a href="{{ route('live.create') }}" class="btn btn-md btn-success mb-3">TAMBAH LIVE</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">TITLE</th>
                <th scope="col">CONTENT</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lives as $live)
            <tr>
                <td>{{ $live->title }}</td>
                <td>{{ $live->content }}</td>
                <td class="text-center">
                    <a href="{{ route('live.edit', $live->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    <button wire:click="destroy({{ $live->id }})" class="btn btn-sm btn-danger">DELETE</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $lives->links() }}
</div>

