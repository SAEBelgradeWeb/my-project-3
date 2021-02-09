@extends('layouts.app')

@section('main-content')
{{--    @php--}}
{{--        $name = "Katarina";--}}
{{--    @endphp--}}

{{--    @if($name == "Nikola")--}}
{{--        <h2>Hello Nikola</h2>--}}
{{--    @endif--}}

    <h1 class="text-4xl text-green-700 mb-3">All users list</h1>

    <ul>
        @foreach($users as $user)
            <li>
                <a href="/users/{{$user->id}}">{{ strtoupper($user->name) }} {{$user->lastname}} - {{ $user->email
                }}</a>
            </li>
        @endforeach
    </ul>
@endsection


