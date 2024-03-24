@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      New Subject 
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
      <form method="post" action="{{ route('subject.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="name">name:</label> 
          <input type="text" class="form-control" name="name" /> 
        </div> 
        <button type="submit" class="btn btn-primary">Save</button> 
        <a href="{{ route('subject.index') }}" class="btn btn-primary">Return</a> 
      </form> 
    </div> 
  </div> 
@endsection 