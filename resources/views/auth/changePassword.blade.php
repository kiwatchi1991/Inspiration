@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')
@section('title','パスワード変更')

@section('content')
<div class="l-changePassword">
    <change-password :old="{{ json_encode(Session::getOldInput()) }}" :errors="{{ $errors }}"
        endpoint="{{route('changepassword')}}">
    </change-password>
</div>
@endsection