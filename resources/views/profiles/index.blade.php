@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://www.lendio.com/wp-content/uploads/2018/03/Wordpress-Lendio-Logo_blue.jpg" alt="" class="rounded-circle w-100 h-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong>posts</div>
                <div class="pr-5"><strong>23k </strong>followers</div>
                <div class="pr-5"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.lendio.com/">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <img src="https://wallpapercave.com/wp/wp2446261.jpg" alt="" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="https://wallpaperaccess.com/full/1104816.jpg" alt="" class="w-100 h-100">
        </div>
        <div class="col-4">
            <img src="https://wallpaperaccess.com/full/732213.jpg" alt="" class="w-100 h-100">
        </div>
    </div>
</div>
@endsection
