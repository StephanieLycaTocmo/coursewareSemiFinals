@extends('base')

@section('content')

@include('info')

<style>

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    
</style>

    <div class="float-right">
    <a href="{{url('courses/create')}}" class="btn btn-success">Add Course</a>
    </div>
    
    <h1>Courses</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Instructor</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
            @foreach($courses as $course)

            <tr>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->start}}</td>
                <td>{{$course->end}}</td>
                <td>{{$course->instructor->user->lname}}</td>
                <td class="text-center">
                    <a href="{{url('/courses/edit', ['id'=>$course])}}" class="btn btn-secondary btn-sm">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection