@extends('layout');

@section('title','User' .$user->name);

@section('content')
    <div class="row">
    <div class="col">
         <a class="btn btn-primary"  role="button" href="/" >Back</a>
    </div> </div>
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id : {{$user->id}}</li>
            <li class="list-group-item">Name : {{$user->name}}</li>
            <li class="list-group-item">Email : {{$user->email}} </li>
            <li class="list-group-item">Created at : {{$user->created_at->format('d/m/y H:i:s')}} </li>
            <li class="list-group-item">Updated at : {{$user->updated_at->format('d/m/y H:i:s')}} </li>


        </ul>
    </div>
    <form method ="POST" action="{{route('users.destroy',$user)}}" >
        <a  class="btn btn-warning"  role="button"  href="{{ route('users.edit', $user)}}">Edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger"  type ="submit">Delete</button>
    </form>
@endsection
