@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      
        <div>
            <h3>Student Details</h3>
            <hr>
            <p><b>Student Name :</b> {{ $student->name }}</p>
            <p><b>Student Email :</b> {{ $student->email }} </p>
            <p><b>Student Phone :</b> {{ $student->phone }}</p>
            
      </div>
    </div>
  </div>
</div>

@endsection