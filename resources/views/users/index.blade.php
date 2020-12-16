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
    <a href="{{url('/users/create')}}" class="btn btn-success">Add New User</a>
</div>
<h1>Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID Number</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->lname}}</td>
            <td>{{$user->fname}}</td>
            <td>{{$user->email}}</td>
            <td class="text-center">
                <a href="{{url('/users/edit', ['id'=>$user])}}" class="btn btn-secondary btn-sm">Edit</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop