@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-2">
                    <a href="/profile/{{ $post->user_id }}">
                        <img src="{{$post->user->profile->profileImage()}}" 
                        class="w-100 rounded-circle" style="max-width: 50px"> 
                    </a>
                </div>
                <div>
                    <a href="/profile/{{ $post->user_id }}" 
                    class="font-weight-bold text-dark">
                    {{ $post->user->nickname }}</a>
                    <b>&nbsp &nbsp·</b>
                    <a href="#" class="pl-2">Follow</a>
                </div>
            </div>

            <hr>

            <p>
            <a href="/profile/{{ $post->user_id }}" 
            class="font-weight-bold text-dark">
            {{ $post->user->nickname }}</a> {{ $post->title }}
            </p>
        </div>
    </div>
</div>
@endsection