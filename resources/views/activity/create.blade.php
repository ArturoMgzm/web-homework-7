@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      New Activity 
    </div> 
    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 
      <form method="post" action="{{ route('activity.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="name">Name:</label> 
          <input type="text" class="form-control" name="name" /> 
        </div> 
        <div class="form-group"> 
          <label for="type">Type:</label> 
          <input type="text" class="form-control" name="type" /> 
        </div> 
        <div class="form-group"> 
          <label for="grade">Grade:</label> 
          <input type="number" class="form-control" name="grade" /> 
        </div> 
        <div class="form-group"> 
          <label for="date">Grade:</label> 
          <input type="date" class="form-control" name="date" /> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('activity.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection 