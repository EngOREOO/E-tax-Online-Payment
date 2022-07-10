@extends('layouts.master')
@section('cont')

<div class="signupFrm">
      <form action="{{route('login')}}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <h1 class="title">انشاء حساب</h1>

        <div class="inputContainer">
          <input type="email" name="email" class="input" placeholder="ادخل الايميل" />
          <label for="" class="label">الايميل</label>
        </div>

        <div class="inputContainer">
          <input type="password" name="password" class="input" placeholder="ادخل كلمة السر" />
          <label for="" class="label">كلمة السر</label>
        </div>

        <button type="submit" class="submitBtn">تسجيل الان</button>
      </form>
    </div>

@endsection