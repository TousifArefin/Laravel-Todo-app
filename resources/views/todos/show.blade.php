@extends('layouts.app')
@section('title','Details Todo')
@section('content')

<div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $todo->name}}</h4>
                </div>
                <div class="card-body">
                    <p>{{ $todo->details}}</p>
                    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-success btn-sm">Edit</a> ||
                    <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
    </div>

@endsection