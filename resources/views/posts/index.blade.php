@extends('layouts.app')

@section('content');

<table>
    <thead>
      <tr>
   
        <th>Title</th>
        <th>Body</th>
        <th>Category</th>
        <th rowspan="2">Action</th>


      </tr>
    </thead>
    <tbody>
     
      @foreach ($posts as $po )
      <tr>
            <td> {{ $po->title}} </td>
            <td> {{ $po->body}}</td>
            <td> {{ $po->category['categoryname']}} </td>
            <td>
                <button class="button" >Edit</button>
                <button class="button">Delete</button>
            </td>
      </tr>

      @endforeach
      </tbody>
  </table>

  @endsection;
