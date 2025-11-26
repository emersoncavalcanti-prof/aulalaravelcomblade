<div>
   
    <input type="text" wire:model.live.debounce.500ms="search" placeholder="Buscar usuários..." class="form-control mb-3">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

</div>
