<div>
     <h1>{{ $titulo }}</h1>

    @if(count($alunos) > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno }}</li>
            @endforeach
        </ul>
    @else
    <p>Nenhum aluno na lista</p>
    @endif

</div>
