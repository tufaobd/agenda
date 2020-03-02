@if($errors->count())
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif


<form role="form" id="form1" action="{{route('store')}}" method="post" >
    {{csrf_field()}}
    @include('mensagens._form')
    <div class="row">
        <div class="ml-3 mt-3">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Salvar</button>
        </div>
    </div>
</form>
