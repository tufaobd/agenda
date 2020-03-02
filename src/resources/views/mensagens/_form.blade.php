<div class="row filters">
    <div class="col-md-4 col-12">
        <label for="contato">Contato <span class="text-danger">*</span></label>
        <select name="contato_id" id="contato_id">
            @foreach($contatos as $contato)
                <option value="{{$contato->id}}">{{$contato->nome}}</option>
            @endforeach
        </select>
     </div>
    <div class="col-md-4 col-12">
        <label for="descricao">Descrição<span class="text-danger">*</span></label>
        <textarea class="form-control" cols="10" rows="5" id="descricao" name="descricao" required >
        {{@old('descricao')??$mensagem->descricao??''}}
        </textarea>
    </div>
</div>
