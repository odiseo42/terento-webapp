@layout('templates.main')
@section('content')
	{{ Form::open('login') }}
		<!-- check for login errors flash var -->
		@if (Session::has('login_errors'))
			<div class="alert alert-error">Username or password incorrect.</div>
		@endif    
		<!-- username field -->
		<p>{{ Form::label('email', 'E-mail') }}</p>
		<p>{{ Form::text('email') }}</p>
		<!-- password field -->
		<p>{{ Form::label('password', 'Password') }}</p>
		<p>{{ Form::password('password') }}</p>
		<!-- submit button -->
		<p>{{ Form::submit('Login', array('class' => 'btn')) }}</p>
	{{ Form::close() }}

@endsection