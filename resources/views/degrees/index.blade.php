@extends('Template.Template')
@section('Webtemplates')
<table class="table col-12 mx-5">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">grado</th>
          <th scope="col">periodo</th>
          <th scope="col">#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($degrees as $degree)     
        <tr>
            <td scope="row">{{$degree->id}}</td>
            <td>{{$degree->name}}</td>
            <td>{{$degree->period}}</td>
            <td>
                <form action="{{route ('degrees.destroy',$degree->id)}}" method="POST">
                <a href="{{route('degrees.edit', $degree)}} " class="btn btn-warning btn-sm" role="button">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm"  role="button" type="submit">Eliminar</button>  
                </form>
              </td>
        </tr>
        @endforeach
    </tbody>
</table>
<section class="mx-5">
    {{$degrees->links()}}
</section>

@endsection