@extends('layouts/main')
@section('title', '.:Update Data :.')
@section('profile')
<div class="col-lg-12 bg-dark py-4 text-warning"> <b></b>
    <div class="dropdown float-right">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i> PROFILE USER
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#Profile">{{Auth::user() -> nama_user}}</a>
          <a class="dropdown-item" href="/logout">Log Out</a>
        </div>
    </div>     
</div>
@endsection
@section('isi')
<div class="container-fluid mt-4 rounded">
    <form action="/video/update/data/{{$data -> id}}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')
        <div><h3>Update Data Video</h3></div>
        <div class="form-group w-50">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" value="{{$video->username}}">
        </div>
       
</div>
@endsection
