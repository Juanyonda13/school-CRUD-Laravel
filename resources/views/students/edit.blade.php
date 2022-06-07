@extends('Template.Template')
@section('Webtemplates')
<section class="container-fluid d-flex justify-content-center">
    <form action="{{route('students.update',$student,$degrees)}}" method="post" class="mt-4">
        @method('PUT')
        {{ csrf_field() }}
        <div class="form-floating">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="num_list" value="{{$student->num_list}}">
              <option selected>{{$student->num_list}}</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
          </div>

        <div class="row g-3 align-items-center">
            <div class="col-6 mt-4">
              <label for="inputPassword6" class="col-form-label" >name of the student</label>
            </div>
            <div class="col-6 mt-4">
              <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="name" value="{{$student->name}}">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-6 mt-4">
              <label for="inputPassword6" class="col-form-label">surname of the student</label>
            </div>
            <div class="col-6 mt-4">
              <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="surname" value="{{$student->surname}}">
            </div>
        </div>

        <div class="form-floating mt-4">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="gender" value="{{$student->gender}}">
              <option selected>{{$student->gender}}</option>
              <option value="m">boy</option>
              <option value="w">girl</option>
            </select>
            <label for="floatingSelect">Works with selects</label>
        </div>

        <div class="form-floating mt-4">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="degrees_id" value="{{$student->degrees_id}}">
              <option selected="true" >{{$student->degrees_id}}</option>
              @foreach ($degrees as $degree)
              <option value="{{$degree->id}}">{{$degree->name}}</option>
              @endforeach
            </select>
            <label for="floatingSelect">Works with selects</label>
        </div>
        
        <section class="container w-100 d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">to accept</button>
        </section>
         
    </form>

</section>
    
@endsection