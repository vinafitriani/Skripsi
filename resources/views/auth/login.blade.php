@extends('layouts.app')

@if ( app()->getLocale() == "en" )
@section('pageTitle', 'Login')
@else
@section('pageTitle', 'Masuk')
@endif

@section('content')
<h1 style="text-align:center; color:#8397b3">{{ trans('sentence.login') }}</h1>
<div class="container">
  <div class="shadow p-4 mb-4 bg-white">
    <form method="POST" action="{{ route('login') }}" class="needs-validation" style="float:center" novalidate>
    @csrf
      <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" id="uname" placeholder="Enter username" name="username" required>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
        <div class="valid-feedback">{{ trans('sentence.validfeedback') }}.</div>
        <div class="invalid-feedback">{{ trans('sentence.invalidfeedback') }}.</div>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%">{{ trans('sentence.login') }}</button>
    </form>
  </div>
</div><br><br>
@endsection
