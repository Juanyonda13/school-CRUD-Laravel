@extends('Template.Template')
@section('Webtemplates')
<table class="table col-12 mx-5">
    <thead>
        <tr>
            <th>id</th>
            <th>num list</th>
            <th>name of the student</th>
            <th>surname of the student</th>
            <th>gender</th>
            <th>degree_id</th>
        </tr>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td scope="row">{{$student->id}} </td>
                <td>{{$student->num_list}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->degrees_id}}</td>
                <td>       
                        <form action="{{route ('students.destroy',$student->id)}}" method="POST">
                            <a href="{{route('students.edit', $student)}} " class="btn btn-warning btn-sm" role="button">Editar</a>
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm"  role="button" type="submit">Eliminar</button>  
                            </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </thead>
</table>
<section class="mx-5">
    {{$students->links()}}
</section>
@endsection