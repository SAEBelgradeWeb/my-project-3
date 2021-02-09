@extends('layouts.app')


@section('main-content')
<h1 class="text-4xl text-red-500 mb-4">{{$user->name }} {{$user->lastname}}</h1>
<h2>Email: {{$user->email}}</h2>

<a href="{{route('users.index')}}" class="border rounded-xl block mt-5 bg-red-200 w-40 text-center p-2">Back</a>

@endsection
