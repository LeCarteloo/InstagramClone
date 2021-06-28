@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" alt="" class="rounded-circle" width="100%" >
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex pb-3 align-items-center">
                    <h1>{{ $user->nickname }}</h1>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div><strong> {{ $user->posts->count() }} </strong>post</div>
                <div class="pl-5"><strong> {{ $user->profile->followers->count() }} </strong>followers</div>
                <div class="pl-5"><strong> {{ $user->following->count() }} </strong>following</div>
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