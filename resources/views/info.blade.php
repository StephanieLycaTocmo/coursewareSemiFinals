@if($info = Session::get('info'))

<div class="card">
    <div class="card-body bg-info text-white">
        {{$info}}
    </div>
</div>

@endif