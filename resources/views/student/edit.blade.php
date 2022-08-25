@extends('student.layout')
@section('content')

<div class="m-5">
    <form action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        @method("put")
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" value="{{$student->name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Class</label>
            <input type="text" name="class" value="{{$student->class}}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Image</label>
            <input type="file" name="image" value="{{$student->image}}" class="form-control" id="shi">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Subject</label>
            <input type="text" name="subject" value="{{$student->subject}}" class="form-control" id="shi">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Mark</label>
            <input type="number" name="mark" value="{{$student->mark}}" class="form-control" id="shi">
        </div>
        <div class="mb-3">
            <label for="shi" class="form-label">Status</label>
            <input type="text" name="status" value="{{$student->status}}" class="form-control" id="shi">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection