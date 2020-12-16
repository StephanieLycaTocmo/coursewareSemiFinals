@extends ('base')

@section('content')


<div class="modal fade" id="deleteInstructorModal" tabindex="-1" aria-labelledby="deleteInstructorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="deleteInstructorModalLabel">Delete Instructor - {{$instructor->user->lname . ", " . $instructor->user->fname}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {!! Form::open(['url'=>'/instructors', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this instructor?
                {{ Form::hidden('instructor_id', $instructor->id)}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Instructor</button>
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>   

    

    <br>
    <div class="row">
        <div class="col-md-5">
            <h1 class="card-header bg-secondary text-white text-center" >Edit Instructor {{$instructor->user->lname}}</h1>
            {!! Form::model($instructor, ['url'=>"/instructors/$instructor->id", 'method'=>'patch']) !!}  

            @include('instructors._form')

             <div class="form-group">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteInstructorModal">
                        Delete
                    </button>
                    <a href="{{url('/instructors')}}" class="btn btn-secondary float-right" style="margin-left: 5px">Cancel</a>
                    <button class="btn btn-success float-right">Update</button>
            </div>
                
            {!! Form::close() !!}
        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>
@endsection