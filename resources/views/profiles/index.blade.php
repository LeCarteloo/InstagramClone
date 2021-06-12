@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" alt="" class="rounded-circle w-100">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->nickname }}</h1>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div><strong> {{ $user->posts->count() }} </strong>post</div>
                <div class="pl-5"><strong>23k </strong>followers</div>
                <div class="pl-5"><strong>212 </strong>following</div>
            </div>
            <div class="pt-5"><strong>{{ $user->profile->title }}</strong></div>
            <div> {{ $user->profile->description }} </div>
            <div><a href="/post"> {{ $user->profile->url}} </a></div>
        </div>

        <div class="row pt-5">
            @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100 pb-5" alt="">
                </a>

            </div>
            @endforeach

        </div>

    </div>

</div>
@endsection