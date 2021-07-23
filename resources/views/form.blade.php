@extends('layout');

@section('title', isset($user)  ?  ' Update' .$user->name : 'Create user')

@section('content')
 <form method="POST"
    @if(isset($user))
    action="{{ route('users.update', $user ) }}"
       @else action="{{ route('users.store') }}"
     @endif >
     @csrf
     @isset($user)
         @method('PUT ')
     @endisset
     <div class="row">
         <div class="col">
             <input name="name" value="{{isset($user) ? $user->name: null }}" type="text" class="form-control" placeholder="Name" aria-label="name">
         </div>
         <div class="col">
             <input name="email"  value="{{isset($user) ? $user->email: null }}" type="text" class="form-control" placeholder="Email" aria-label="email">
         </div>
         <div class="col">
             <button type="submit" class="btn btn-success">Create</button>
         </div>
     </div>
     <div class=" mt-2" >
    <a class="btn btn-primary"  role="button" href="/" >Back</a>
     </div>
 </form>

@endsection
