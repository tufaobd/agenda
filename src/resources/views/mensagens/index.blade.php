@section('title')
    @parent
@stop

@section('content')

    <h1>Mensagem</h1>
    <div class="d-flex flex-row-reverse">
        <a class="btn btn-success" style="cursor: pointer;" href="{{route('mensagens.create')}}"><i class="fas fa-plus">&nbsp;</i>
            Criar Mensagem</a>
    </div>

    <table>
        <thead>
        <tr>
            <td>Contato</td>
            <td>Mensagem</td>
            <td>Excluir</td>
            <td>Alterar</td>

        </tr>
        </thead>
        <tbody>
        @forelse($mensagens as $mensagem)
            <tr>
                <td>{{$mensagem->contato->nome}}</td>
                <td>{{$mensagem->descricao}}</td>
                <td><a class="btn btn-success" style="cursor: pointer;" href="{{route('mensagens.destroy', $mensagem)}}"><i class="fas fa-plus">&nbsp;</i>
                        Excluir Mensagem</a></td>
                </td>
                <td><a class="btn btn-success" style="cursor: pointer;" href="{{route('mensagens.edit', $mensagem)}}"><i class="fas fa-plus">&nbsp;</i>
                        Alterar Mensagem</a></td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="2">
                    Sem Mensagens Cadastradas
                </td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <br>

    <div class="links">
        <a href="{{route('contatos.index')}}">Contatos</a>
        <a href="{{route('mensagens.index')}}">Mensagens</a>
        <a href="https://github.com/tufaobd/agenda">GitHub</a>
    </div>
