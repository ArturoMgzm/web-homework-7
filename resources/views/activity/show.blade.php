@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      View Activity 
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

      <div class="form-group"> 
          <label for="name">Name:</label> 
          <input type="text" class="form-control" name="name" value="{{ $activity->name }}" disabled/> 
        </div> 
        <div class="form-group"> 
          <label for="type">Type:</label> 
          <input type="text" class="form-control" name="type" value="{{ $activity->type }}" disabled/> 
        </div> 
        <div class="form-group"> 
          <label for="grade">Grade:</label> 
          <input type="number" class="form-control" name="grade" value="{{ $activity->grade }}" disabled/> 
        </div> 
        <div class="form-group"> 
          <label for="date">Grade:</label> 
          <input type="date" class="form-control" name="date" value="{{ $activity->date }}" disabled/> 
        </div> 
      <a href="{{ route('activity.edit', $activity->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('activity.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection 