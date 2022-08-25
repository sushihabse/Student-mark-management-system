@extends('student.layout')
@section('content')

<div class="m-5">
    <a href="{{route('welcome')}}" class="btn btn-info" >Home</a>
    <a href="{{route('student.create')}}" class="btn btn-primary">Add New students +</a>
</div>

<div class="row m-5">
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th scope="col">Sl No</th>
                <th scope="col">Name</th>
                <th scope="col">class</th>
                <th scope="col">Image</th>
                <th scope="col">Subject</th>
                <th scope="col">Mark</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr class="text-center">
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->image}}</td>
                <td>{{$student->subject}}</td>
                <td>{{$student->mark}}</td>
                <td>{{$student->status}}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-success m-1"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-success m-1"><i class="fa-solid fa-eye"></i></a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="post" onsubmit="return confirm('Are you sure?');">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-1"> <i class="fa-solid fa-trash-can"></i> </button>
                    </form>
                </td>
                </tr>
            <tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection