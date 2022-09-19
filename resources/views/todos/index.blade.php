@extends('layouts.app')
@section('title','Home Todos')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success">
                    <h4 class="card-title">Todo List</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                      @foreach($todos as $todo)
                      <li class="list-group-item">{{$todo->name}}
                        @if(!$todo->complete)
                        <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-end 
                            mx-2">Complete</a>
                        @endif
                        <a href="/todos/{{$todo->id}}" class="btn btn-success btn-sm float-end">View More</a>
                      </li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

