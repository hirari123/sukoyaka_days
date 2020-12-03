<!-- トップページ -->

@extends('layouts.common')

@section('content')

@if(!Auth::check())
<div id="login-wrapper" class="row">
  <div class="col-7">
    <h1 class="text-while"><b>Hello Hackers!</b></h1>
    <p class="text-white">健やかday'sは、多忙な日々を送るエンジニアに向けて、お手軽に行える腰痛体操です</p>
  </div>
  <div class="col-5">
    <form action="{{route('login')}}">
      @csrf
      <table>
        <tr>
          <th>お名前</th>
          <td><input type="text" class="form-control" placeholder="こしいたくん" size="50" value="{{old('username')}}" name="username" required autofocus></td>
        </tr>
        <tr>
          <th>メールアドレス</th>
          <td><input type="email" class="form-control" placeholder="sukoyaka@days.com" size="50" value="{{old('email')}}" name="email" required></td>
        </tr>
        <tr>
          <th>パスワード</th>
          <td><input type="password" class="form-control" value="{{old('password')}}" name="password" required size="50"></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" value="ログイン" class="form-control"></td>
        </tr>
      </table>
    </form>
  </div>
</div>
@else
@endif

@endsection