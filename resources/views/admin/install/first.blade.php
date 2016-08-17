@extends('layouts.install')

@section('style')
<style>
  .box_flex{
    display: flex;
    height: 100vh;
    align-items: center;
  }
  .box_flex .box_center{
    margin: 0 auto;
    text-align: center;
  }
  .box_flex .box_center h1{
    font-family: 'LatoBlackItalic', sans-serif;
    font-weight: bold;
    color: #666;
    letter-spacing: 2px;
    text-shadow: 1px 7px 9px #d0d0d0;
  }
  .box_flex .box_center a{
    font-family: 'LatoBlackItalic', sans-serif;
    font-weight: bold;
    margin-top: 5rem;
  }
  .form-control:focus {
      border-color: #5cb85c;
      outline: 0;
      -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(92,184,92,0.6);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(92, 184, 92, 0.6);
  }
  textarea{
    max-height: 20vh;
  }
</style>
@endsection
  @section('content')
    <div class="box_flex">
      <div class="box_center">
        <h2>Rellene el formulario</h2>
        <span>Los campos con * son obligatorios</span>
        <form method="POST" class="" role="form">
          {{ csrf_field() }}
          @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <input type="text" id="Title" placeholder=" * Titulo de la pagina" class="form-control" name="title" value="{{ old('title') }}">
          </div>

          <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <select name="country" id="" value="{{ old('country') }}" class="form-control">
            <option >Selecione un país</option>
            <option value="venezuela">Venezuela</option>
            <option value="peru">Perú</option>
            <option value="colombia">Colombia</option>
            <option value="chile">Chile</option>
            </select>
          </div>

          <div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
            <textarea  id="Direction" placeholder="Ingrese su dirección" class="form-control" name="direction" value="{{ old('direction') }}"></textarea>
          </div>

          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <input type="tel" id="Phone" placeholder="Numero de teléfono" class="form-control" name="phone" value="{{ old('phone') }}">
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Siguiente">
          </div>

        </form>
      </div>
    </div>
  @endsection