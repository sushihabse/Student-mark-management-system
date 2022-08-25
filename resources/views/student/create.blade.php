@extends('student.layout')
@section('content')


<h1 class="btn btn-success ms-5 mt-5 me-5">Please type students information</h1>
<div class="ms-5 me-5">
    <form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Class</label>
            <input type="text" name="class" value="" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Image</label>
            <input type="file" name="image" value="" class="form-control" id="shi">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Subject</label>
            <input type="text" name="subject" value="" class="form-control" id="shi">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Mark</label>
            <input type="number" name="mark" value="" class="form-control" id="shi">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Status</label>
            <input type="text" name="status" value="" class="form-control" id="shi">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection