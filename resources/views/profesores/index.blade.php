@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Profesores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>DNI</th>
               <th>Telefono</th>
               <th>Mail</th>
               <th>Foto</th>
               <th>Estado</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($profes->count())
              @foreach($profes as $v_profesores)
              <tr>
                <td>{{$v_profesores->nombre}}</td>
                <td>{{$v_profesores->dni}}</td>
                <td>{{$v_profesores->telefono}}</td>
                <td>{{$v_profesores->mail}}</td>
                <td>{{$v_profesores->foto}}</td>
                <td>{{$v_profesores->estado}}</td>
                <!--
                <td><a class="btn btn-primary btn-xs" href="{{action('LibroController@edit', $libro->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                -->
                <td>
                  <!--
                  <form action="{{action('LibroController@destroy', $libro->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 -->
                 </td>
               </tr>
               @endforeach
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      <!--{{ $libros->links() }}-->
    </div>
  </div>
</section>

@endsection
