@extends('base')

@section('content')
    

    <div class="row">
        <div class="col-md-5">
            
            
                    {!! Form::open(['url'=>'/courses', 'method'=>'post']) !!}
                    @include('courses._form')

                <div class="form-group">
                    <a href="{{url('/courses')}}" class="btn btn-danger float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-success float-right">Add Course</button>
               
            </div>
        
            {!! Form::close() !!}
        </div>
        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection