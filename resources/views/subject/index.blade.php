@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    <div class="row"> 
      <a class="btn btn-primary" href="{{ route('subject.create') }}">Add</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>ID</th> 
          <th>Name</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($subjects as $subject) 
          <tr> 
            <td><a href="{{ route('subject.show', $subject->id) }}">{{ $subject->id }}</a></td> 
            <td><a href="{{ route('subject.show', $subject->id) }}">{{ $subject->name }}</a></td> 
            <td><a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('subject.destroy', $subject->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Delete</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table>
    <a href="{{ route('activity.index') }}" class="btn btn-primary">Create new activity</a>
  <div> 
@endsection 