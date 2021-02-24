@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add tutor</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">    
              <label for="nombre_emp">Empresa:</label>
              <input type="text" class="form-control" name="nombre_emp" value="{{old('nombre_emp')}}" required/>
              {!!$errors->first('nombre_emp', '<small class="text-danger">:message</small></br>')!!}
          </div>

          <div class="form-group">    
              <label for="tipo_identidad">Tipo de documento:</label>
              <input type="text" class="form-control" name="tipo_identidad" value="{{old('tipo_identidad')}}" required/>
              {!!$errors->first('tipo_identidad', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="nie_emp">Documento de identidad:</label>
              <input type="text" class="form-control" name="nie_emp" value="{{old('nie_emp')}}" required/>
              {!!$errors->first('nie_emp', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="nombre_tutor">Nombre:</label>
              <input type="text" class="form-control" name="nombre_tutor" value="{{old('nombre_tutor')}}" required/>
              {!!$errors->first('nombre_tutor', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="apellido_tutor">Primer apellido:</label>
              <input type="text" class="form-control" name="apellido_tutor" value="{{old('apellido_tutor')}}" required/>
              {!!$errors->first('apellido_tutor', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="apellido2_tutor">Segundo apellido:</label>
              <input type="text" class="form-control" name="apellido2_tutor" value="{{old('apellido2_tutor')}}" required/>
              {!!$errors->first('apellido2_tutor', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="pais_doc_identidad">Pais documento de identidad:</label>
              <input type="text" class="form-control" name="pais_doc_identidad" value="{{old('pais_doc_identidad')}}" required/>
              {!!$errors->first('pais_doc_identidad', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="provincia">Provincia:</label>
              <input type="text" class="form-control" name="provincia" value="{{old('provincia')}}"/>
              {!!$errors->first('Provincia', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="municipio">Municipio:</label>
              <input type="text" class="form-control" name="municipio" value="{{old('municipio')}}"/>
              {!!$errors->first('municipio', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="estado_tutor">Estado tutor:</label>
              <select class="form-control" name='estado_tutor' id="estado_tutor">
                    <option value="activo" @if (old('estado_tutor') === 'continua') selected @endif>Tutor en activo</option>
                    <option value="ocupado" @if (old('estado_tutor') === 'partida') selected @endif>Tutor ocupado</option>
              </select>
              {!!$errors->first('estado_tutor', '<small class="text-danger">:message</small></br>')!!}
          
          </div>

          <div class="form-group">    
              <label for="tlf_tutor">Telefono:</label>
              <input type="text" class="form-control" name="tlf_tutor" value="{{old('tlf_tutor')}}" required/>
              {!!$errors->first('tlf_tutor', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <div class="form-group">    
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{old('email')}}" required/>
              {!!$errors->first('Email', '<small class="text-danger">:message</small></br>')!!}

          </div>

          <button type="submit" class="btn btn-primary-outline">Add tutor</button>
      </form>
  </div>
</div>
</div>
@endsection