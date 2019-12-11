@extends('pages.auth._layout')

@section('title', 'ورود کاربران')

@section('main')
    <div class="form-group">
        <input type="email" class="form-control ltr text-left" title="ایمیل" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control ltr text-left" title="گذرواژه" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-purple btn-block" title="" placeholder="Password" value="ورود">
    </div>
@endsection
