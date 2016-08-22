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
  .box_flex .box_center input{
    font-family: 'LatoBlackItalic', sans-serif;
    font-weight: bold;
    margin-top: 5rem;
  }
</style>
@endsection
  @section('content')
    <div class="box_flex">
      <div class="box_center">
        <h1>BIENVENIDO A LA INSTALACION</h1>
          <form action="{{action('Install\InstallController@viewFirst')}}" method="GET">
            <input type="submit" class="btn btn-success" value="EMPEZAR">
          </form>
      </div>
    </div>
  @endsection
