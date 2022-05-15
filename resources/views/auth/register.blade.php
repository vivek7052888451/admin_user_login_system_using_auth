@extends('user.layout.app')
@section('content')
 <section id="aa-catg-head-banner">
    <img src="{{ asset('frontend/img/fashion/fashion-header-bg-8.jpg')}}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Account Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>                   
          <li class="active">Account</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="{{ route('login') }}" class="aa-login-form" method="post">
                    @csrf
                  <label for="">Username or Email address<span>*</span></label>
                   <input type="text" placeholder="Username or email" name="email">
                    @if($errors->has('email'))
                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                    @endif
                   <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                     @if($errors->has('password'))
                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                    @endif
                    <button type="submit" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="{{ route('register') }}" class="aa-login-form" method="post">
                    @csrf
                    <label for="">Username<span>*</span></label>
                    <input type="text" placeholder="Username" name="name">
                    @if($errors->has('name'))
                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                    @endif
                    <label for="">Email address<span>*</span></label>
                    <input type="text" placeholder="User email" name="email">
                    @if($errors->has('email'))
                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                    @endif
                    <label for="">Password<span>*</span></label>
                    
                    <input type="password" placeholder="Password" name="password">
                    @if($errors->has('password'))
                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                    @endif
                    <label for="">Confirm Password<span>*</span></label>
                    <input type="password" placeholder="Password Confirmation" name="password_confirmation">
                   
                    <button type="submit" class="aa-browse-btn">Register</button>                    
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
@endsection