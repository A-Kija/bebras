<ul class="list-group">
    @foreach ($masters as $master)
    <li class="list-group-item">
    <div class="list-bin">
        <div class="list-title">
        {{$master->name}} {{$master->surname}}
        </div>
        <div class="list-buttons">
        <a class="btn btn-info" href="{{route('master.edit',[$master])}}">
            Edit
        </a>
        <form method="POST" action="{{route('master.destroy', $master)}}">
            @csrf
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
        </div>

    </div>
    <div class="list-img">
    @if($master->portret)
        <img src="{{$master->portret}}" alt="{{$master->name}} {{$master->surname}}">
    @else
        <img src="{{asset('portrets/nophotoavailable.jpg')}}" alt="{{$master->name}} {{$master->surname}}">
    @endif
    </div>
    </li>
@endforeach
</ul>