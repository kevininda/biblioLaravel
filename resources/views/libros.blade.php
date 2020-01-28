@include('header')
  <body>
    <style>
        .container{
          margin-top: 40px;
        }
      
      </style>
  <div class="container">
    <table id="table_id" class="display">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Nombre</th>
          <th scope="col">idAutor</th>
          <th scope="col">Año</th>
        </tr>
      </thead>
      <tbody>
      @foreach($libros as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->nombre}}</td>
          <td>{{$item->idAutor}}</td>
          <td>{{$item->anio}}</td>
        </tr>
        @endforeach()
        </tr>
      </tbody>
    </table>
  </div>    
@extends('footer')