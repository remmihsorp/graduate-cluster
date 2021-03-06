@layout('base.default')

@section('mainbody')

<div class="row login">
  <div class="large-5 columns page-centre">
    <div class="login-box">

      {{ Form::open('login/create', 'POST') }}
      {{ Form::token() }}

        <div class="row">
	  <div class="large-12 columns">
            {{ Form::label('email', 'Email') }}
	    {{ Form::text('email', Input::old('email')) }}
	  </div>
        </div>
      
        <div class="row">
	  <div class="large-12 columns">
            {{ Form::label('password', 'Password') }}
	    {{ Form::password('password') }}
	  </div>
        </div>

        <div class="row">
	  <div class="large-12 large-centered columns">
	    <input type="submit" class="button expand" value="Log In"/>
	  </div>
        </div>

      {{ Form::close() }}

        <div class="row">
	  <div class="large-6 columns">
	    <p class="left">{{ HTML::link_to_ROUTE('verify', 'Forgot Password?') }}<p>
	  </div>


        </div>
      
    </div>
  </div>

  <div class="large-1 columns page-centre"></div>
  <div class="large-6 columns page-centre">
    {{ render('error.validation') }}
  </div>
</div>
{{ render('error.validation_js') }}
@endsection
