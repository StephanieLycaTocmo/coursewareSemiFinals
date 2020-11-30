@extends('base')

@section('content')

<style>

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
    
</style>

<h1>Courses</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Instructor</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)

        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->name}}</td>
            <td>{{$course->description}}</td>
            <td>{{$course->start}}</td>
            <td>{{$course->end}}</td>
            <td>{{$course->instructors}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
