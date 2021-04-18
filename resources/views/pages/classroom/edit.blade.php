@extends('layouts.global')

@section('pages')
<h1>Edit Classroom</h1>

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif

<div class="row d-flex justify-content-between">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100">
            <div class="card-body">
                <form action="{{route('classroom.update', $classroom->id)}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$classroom->name}}" name="name"
                            placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$classroom->room}}" name="room"
                            placeholder="code room">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-8 mb-4">
        <div class="card border-left-primary shadow h-100">
            <div class="card-header">
                <h4>Student List</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($classroom->students as $data)
                    <li class="list-group-item">{{$data->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
