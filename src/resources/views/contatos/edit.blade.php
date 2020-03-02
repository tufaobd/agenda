@section('title')
    @parent
@stop

@section('content')

    <h1>Editar Contato</h1>
    <form role="form" id="form1" action="{{route('contatos.update',$contato)}}" method="post">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        @include('contatos._form')
        <div class="row">
            <div class="ml-3 mt-3">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Atualizar</button>
            </div>
        </div>
    </form>
