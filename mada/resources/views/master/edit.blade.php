@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-9">
           <div class="card">
               <div class="card-header"><h1>Edit Master</h1></div>
               <div class="card-body">
               <form method="POST" action="{{route('master.update', $master)}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="master_name" class="form-control" value="{{old('master_name', $master->name)}}">
                        <small class="form-text text-muted">Masters name</small>
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" name="master_surname" class="form-control" value="{{old('master_surname', $master->surname)}}">
                        <small class="form-text text-muted">Masters surname</small>
                    </div>
                    <div class="form-group">
                        <div class="list-img">
                        @if($master->portret)
                        <img src="{{$master->portret}}" alt="{{$master->name}} {{$master->surname}}">
                        @else
                        <img src="{{asset('portrets/nophotoavailable.jpg')}}" alt="{{$master->name}} {{$master->surname}}">
                        @endif
                        </div>
                        <label>Portret</label>
                        <input type="file" name="master_portret" class="form-control">
                        <small class="form-text text-muted">Masters portret</small>
                    </div>
                     @csrf
                     <button type="submit" class="btn btn-primary">SAVE</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection



