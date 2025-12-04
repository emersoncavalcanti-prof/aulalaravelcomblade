<div>
   
    <input type="text" wire:model.live.debounce.500ms="search" placeholder="Buscar usuários..." class="form-control mb-3">

    <div class="d-flex justify-content-end mb-3">
        <a class="btn btn-success" href="{{route("usuarios.novo")}}">Novo Cadastro</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{route('usuarios.alterar', $user->id)}}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                        <a href="#" wire:click='apagar({{$user->id}})' class="btn btn-danger"><i class="bi bi-trash"></i></aa>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

</div>
