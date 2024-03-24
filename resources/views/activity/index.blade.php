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
      <a class="btn btn-primary" href="{{ route('activity.create') }}">Add</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>ID</th> 
          <th>Name</th> 
          <th>Type</th>
          <th>Grade</th> 
          <th>Date</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($activities as $activity) 
          <tr> 
            <td><a href="{{ route('activity.show', $activity->id) }}">{{ $activity->id }}</a></td> 
            <td><a href="{{ route('activity.show', $activity->id) }}">{{ $activity->name }}</a></td> 
            <td><a href="{{ route('activity.show', $activity->id) }}">{{ $activity->type }}</a></td>
            <td><a href="{{ route('activity.show', $activity->id) }}">{{ $activity->grade }}</a></td>
            <td><a href="{{ route('activity.show', $activity->id) }}">{{ $activity->date }}</a></td> 
            <td><a href="{{ route('activity.edit', $activity->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('activity.destroy', $activity->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Delete</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table>
    <a href="{{ route('subject.index') }}" class="btn btn-primary">Back to subjects</a>
  <div> 
@endsection 