@extends('affairs_default')
@section('subtitle','test sidebar')
@section('content')
<H3> Testing </H3>
@endsection
@section('extra_sidebar')
<li class="dropdown"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"/></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">測試欄一<span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a>
      <ul class="dropdown-menu forAnimate" role="menu">
        <li><a href="{{URL::to('createusuario')}}">Crear</a></li>
        <li><a href="#">Modificar</a></li>
        <li><a href="#">Reportar</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
        <li class="divider"></li>
        <li><a href="#">Informes</a></li>
      </ul>
</li>          
<li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>        
<li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
@endsection
