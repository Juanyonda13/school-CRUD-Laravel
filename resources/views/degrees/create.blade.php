@extends('Template.Template')
@section('Webtemplates')
<section class="container-fluid d-flex justify-content-center">
    <form lass="mt-4"action="{{route('degrees.store')}}" method="post">
        {{ csrf_field() }}
        <div class="row g-3 align-items-center">
            <div class="col-6 mt-4">
              <label for="inputPassword6" class="col-form-label">name of the degree</label>
            </div>
            <div class="col-6 mt-4">
              <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="name">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-6 mt-4">
              <label for="inputPassword6" class="col-form-label">period</label>
            </div>
            <div class="col-6 mt-4">
              <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="period">
            </div>
        </div>

        <section class="container w-100 d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">to accept</button>
            
        </section>
    </form>
</section>
    
    
@endsection