@extends('student.layout')
@section('content')
<a href="{{route('student.index')}}" class="btn btn-success ms-5 mt-5 me-5">Back</a>
<div class="row m-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Class</th>
                <th>Image</th>
                <th>Mark</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->image}}</td>
                <td>{{$student->mark}}</td>
                <td>{{$student->status}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection