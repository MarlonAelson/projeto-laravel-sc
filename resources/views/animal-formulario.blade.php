<div class="row">

    <div class="col-12">
    
        <div class="card-body">
            
            <div class="row">

                <div  class="col-2">
                <div class="form-group">
                    <label class="form-label" for="id">
                        ID:
                    </label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $animal->id ?? '' }}" disabled>
                    </div>
                </div>

                <div class="col-5">
                    <div class="form-group">
                        <label class="form-label" for="nome">
                            Nome:*
                        </label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $animal->nome ?? old('nome') }}" maxlength="60" required>
                    </div>
                </div>

                <div class="col-5">
                    <div class="form-group">
                        <label class="form-label" for="raca">
                            Raça:*
                        </label>
                        <input type="text" class="form-control" id="raca" name="raca" value="{{ $animal->raca ?? old('raca') }}" maxlength="60" required>
                    </div>
                </div>
        </div>
    </div>

</div>