
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="col-12">
            
        <div class="row">

            <div  class="col-2">
            <div class="form-group">
                <label class="form-label" for="id">
                    ID:
                </label>
                    <input type="text" class="form-control" id="id" name="id" value="{{ $usuario->id ?? '' }}" disabled>
                </div>
            </div>

            <div class="col-5">
                <div class="form-group">
                    <label class="form-label" for="name">
                        Nome:*
                    </label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name ?? old('name') }}" maxlength="60" required>
                </div>
            </div>

            <div class="col-5">
                <div class="form-group">
                    <label class="form-label" for="password">
                        Senha:*
                    </label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $usuario->password ?? old('password') }}" maxlength="60" required>
                </div>
            </div>
        </div>

        <div class="row">
            
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="email">
                        Email:*
                    </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email ?? old('email') }}" maxlength="60" required>
                </div>
            </div>

        </div>

    </div>