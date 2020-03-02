<div class="row filters">
    <div class="col-md-4 col-12">
        <label for="nome">Nome <span class="text-danger">*</span></label>
        <input class="form-control" type="text" id="nome" name="nome" value="{{@old('nome')??$contato->nome??''}}" required />
    </div>

    <div class="col-md-4 col-12">
        <label for="sobrenome">Sobrenome<span class="text-danger">*</span></label>
        <input class="form-control" type="text" id="sobrenome" name="sobrenome" value="{{@old('sobrenome')??$contato->sobrenome??''}}" required />
    </div>

    <div class="col-md-4 col-12">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input class="form-control" type="text" id="email" name="email" value="{{@old('email')??$contato->email??''}}" required />
    </div>

    <div class="col-md-4 col-12">
        <label for="telefone">Telefone <span class="text-danger">*</span></label>
        <input class="form-control" type="text" id="telefone" name="telefone" value="{{@old('telefone')??$contato->telefone??''}}" required />
    </div>
</div>
