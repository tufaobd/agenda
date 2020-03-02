@section('title')
    @parent
@stop

@section('content')

<h1>Contatos</h1>
<div class="d-flex flex-row-reverse">
    <a class="btn btn-success" style="cursor: pointer;" href="{{route('contatos.create')}}"><i class="fas fa-plus">&nbsp;</i> Adicionar</a>
</div>

<table>
    <thead>
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Email</td>
        <td>Telefone</td>
        <td>Excluir</td>
        <td>Alterar</td>

    </tr>
    </thead>
    <tbody>
    @forelse($contato as $contato)
        <tr>
            <td>{{$contato->nome}}</td>
            <td>{{$contato->sobrenome}}</td>
            <td>{{$contato->email}}</td>
            <td>{{$contato->telefone}}</td>
            <td><a class="btn btn-success" style="cursor: pointer;" href="{{route('contatos.destroy', $contato)}}"><i class="fas fa-plus">&nbsp;</i>
                    Excluir Contato</a></td>
            </td>
            <td><a class="btn btn-success" style="cursor: pointer;" href="{{route('contatos.edit', $contato)}}"><i class="fas fa-plus">&nbsp;</i>
                    Alterar Contato</a></td>
        </tr>
    @empty
        <tr>
            <td class="text-center" colspan="6">
                Sem Contatos Cadastrados
            </td>
        </tr>
    @endforelse
    </tbody>
</table>
