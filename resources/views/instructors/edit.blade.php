@extends ('base')

@section('content')

    <h1>Edit Instructor {{$instructor->user->lname}}</h1>

    <br>
    <div class="row">
        <div class="col-md-5">
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch']) !!}  

            @include('instructors._form')

            <div class="form-group">
                <button class="btn btn-primary float-right">Update Instructor</button>
            </div>
                
            {!! Form::close() !!}
        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection