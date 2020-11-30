<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courseware</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="{{'/'}}">Courseware</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{url('/')}}">Home</a>
                    <a class="nav-item nav-link " href="{{url('/users')}}">Users</a>
                    <a class="nav-item nav-link " href="{{url('/learners')}}">Learners</a>
                    <a class="nav-item nav-link " href="{{url('/instructors')}}">Instructors</a>
                    <a class="nav-item nav-link " href="{{url('/courses')}}">Courses</a>
                </div>
            </div>
        </div>
</nav><br>

<div class="container">
    @yield('content')
</div>

</body>
</html>