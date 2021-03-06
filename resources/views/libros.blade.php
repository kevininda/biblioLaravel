@include('header')
  <body>
    <style>
        .container{
          margin-top: 40px;
        }

        .btn{
          margin-bottom: 10px;
        }
      
      </style>
    
  <div class="container">
    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#addLibro" >Agregar libro</button>  
    <table id="table_id" class="display">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Nombre</th>
          <th scope="col">idAutor</th>
          <th scope="col">Año</th>
          <th scope="col">Estado</th>
        </tr>
      </thead>
      <tbody>
      @foreach($libros as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->nombre}}</td>
          <td>{{$item->idAutor}}</td>
          <td>{{$item->anio}}</td>
          @if ($item->estado == 1)
          <td>Disponible</td>
          @else
          <td>Prestado</td> 
          @endif

        </tr>
        @endforeach()
        </tr>
      </tbody>
    </table>
    @include('addLibro')
  </div>    
@extends('footer')