@extends('layouts.app')
@section('title','Edit Todos')
@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success">
                    <h4 class="card-title">Edit Todo</h4>
                </div>
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form action="/todos/{{ $todo->id}}/update" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $todo->name }}">
                        </div>
                        <div class="form-group mt-3">
                             <label for="">Details</label>
                             <textarea name="details" class="form-control">{{ $todo->details }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                             <input type="submit" name="submit" class="form-control btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

