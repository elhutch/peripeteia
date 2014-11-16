@extends('layout')

<title>Register</title>

@section('content')

<div class="center row">
  <div class="section-container tabs" data-section="tabs">
    <section class="active">
      <p class="title" data-section-title><a href="#">Sign Up</a></p>
      <div class="content" data-section-content>
        <p>
          <div class="row">
            <div class="large-12 columns">
              <div class="signup-panel">
                <p class="welcome">Hello, new user!</p>
                  <div class="row collapse">
                    <div class="small-12  columns">
                    	<div class="form-group">
						{{Form::text('username', null, array('placeholder'=>'Username'), ['class' => 'form-control'])}}
						</div>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-12  columns">
                    	<div class="form-group">
							{{Form::text('email', null, array('placeholder'=>'Email'), ['class' => 'form-control'])}}
						</div>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-12 columns ">
                      	<div class="form-group">
							{{Form::password('password', array('placeholder'=>'Password'), ['class' => 'form-control'])}}
						</div>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-12 columns ">
                      	<div class="form-group">
							{{Form::password('passwordConfirmation', array('placeholder'=>'Confirm Password'),  ['class' => 'form-control'])}}
						</div>
                    </div>
                  </div>
                <a href="#" class="button ">Sign Up! </a>
              </div>
            </div>
           </div>
       	</p>
      </div>
    </section>
   
    <section>
      <p class="title" data-section-title><a href="#">Sign In</a></p>
      <div class="content" data-section-content>
        <p>
          <div class="row">
            <div class="large-12 columns">
              <div class="signup-panel">
                <p class="welcome">Welcome back!</p>
                <form>
                  <div class="row collapse">
                    <div class="small-12  columns">
                    	<div class="form-group">
							{{Form::text('username', null, array('placeholder'=>'Username'), ['class' => 'form-control'])}}
						</div>
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-12 columns ">
                      	<div class="form-group">
							{{Form::password('password', array('placeholder'=>'Password'), ['class' => 'form-control'])}}
						</div>
                    </div>
                  </div>
                </form>
                <a href="#" class="button ">Sign In! </a>
              </div>
            </div>
           </div>
       	</p>
      </div>
    </section>
  </div>
</div>              

@stop