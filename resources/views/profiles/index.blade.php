@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">
            <img src="/svg/logo.svg" alt="" class="rounded-circle" style="height:120px; width:120px;">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->nickname }}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div><strong>153 </strong>post</div>
                <div class="pl-5"><strong>23k </strong>followers</div>
                <div class="pl-5"><strong>212 </strong>following</div>
            </div>
            <div class="pt-5"><strong>{{ $user->profile->title }}</strong></div>
            <div> {{ $user->profile->description }} </div>
            <div><a href="/post"> {{ $user->profile->url}} </a></div>
        </div>

        <div class="row pt-5">

            <div class="col-4">
            <img src="https://i.pinimg.com/564x/80/39/29/803929eef1902751e1bad274889d474c.jpg" class="w-100" alt="">
            </div>

            <div class="col-4">
            <img src="https://i.pinimg.com/564x/80/39/29/803929eef1902751e1bad274889d474c.jpg" class="w-100" alt="">
            </div>

            <div class="col-4">
            <img src="https://i.pinimg.com/564x/80/39/29/803929eef1902751e1bad274889d474c.jpg" class="w-100" alt="">
            </div>
        </div>

    </div>

</div>
@endsection