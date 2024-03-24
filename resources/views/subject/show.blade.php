@extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      View Subject 
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
        <input type="text" class="form-control" name="name" value="{{ $subject->name }}" disabled /> 
      </div> 
      <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-primary">Edit</a> 
      <a href="{{ route('subject.index') }}" class="btn btn-primary">Index</a> 
    </div> 
  </div> 
@endsection 