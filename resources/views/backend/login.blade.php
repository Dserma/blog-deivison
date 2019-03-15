@extends('backend.layouts.default')
@section('conteudo')
    
    <link rel="stylesheet" href="resources/assets/backend/css/login.css">
        
        <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    @unless($errors->count()==0)
      @foreach($errors->all() as $err)
      <p class = "alert alert-danger col-md-6 col-md-offset-3 animated slideInUp">{{$err}}</p>
      @endforeach
      @endunless
    <form action="{{route('backend.login')}}" method="post">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email" required>
      <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senha" required>
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
        
@endsection

