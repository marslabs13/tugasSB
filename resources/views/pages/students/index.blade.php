@extends('layouts.global')

@section('pages')
<h1>Students</h1>

@if (session('success'))
<div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
@endif

<!-- Page Heading -->
{{-- <div class="d-flex justify-content-end">
    <a href="{{route('classroom.create')}}" class="btn btn-primary mb-2">+ Add Classroom</a>
</div> --}}

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Students</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th class="text-center">Class</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->address}}</td>
                        <td class="text-center">{{$student->classroom->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
