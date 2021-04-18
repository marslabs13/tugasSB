@extends('layouts.global')

@section('pages')
<h1>Create Classroom</h1>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100">
        <div class="card-header">
            Tambah Class
        </div>
        <div class="card-body">
            <form action="{{route('classroom.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="room" placeholder="code room">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
