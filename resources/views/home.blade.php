@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-3 p-5">
            <img src="svg/logo.svg" alt="" class="rounded-circle" style="height:120px; width:120px;">
        </div>

        <div class="col-9 pt-5">
            <div>
                <h1>instagramNickname</h1>
            </div>
            <div class="d-flex">
                <div><strong>153 </strong>post</div>
                <div class="pl-5"><strong>23k </strong>followers</div>
                <div class="pl-5"><strong>212 </strong>following</div>
            </div>
            <div class="pt-5"><strong>nameAndSurname</strong></div>
            <div>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu placerat lacus, eu tristique velit. Integer sit amet mauris ac ante dictum molestie eu vitae dui. Pellentesque a gravida nisi. Ut ac mi lacinia, consectetur enim in, mollis velit. Nam accumsan lorem sit amet luctus auctor. Donec at lectus ut leo interdum imperdiet eu vestibulum tortor.
            </div>
            <div><a href="#">someshortlink.com</a></div>
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