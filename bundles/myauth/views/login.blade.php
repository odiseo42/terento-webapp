@layout('templates.main')
@section('content')
	{{ Form::open('login') }}
		<!-- check for login errors flash var -->
		@if (Session::has('error'))
			<div class="alert alert-error">E-mail or password incorrect.</div>
		@endif  
		@if (Session::has('success'))
			<div class="alert alert-success">Tu cuenta ha sido creada. Entra a continuación</div>
		@endif    
		<!-- username field -->
		<p>{{ Form::label('username', 'Email') }}</p>
		<p>{{ Form::text('username') }}</p>
		<!-- password field -->
		<p>{{ Form::label('password', 'Password') }}</p>
		<p>{{ Form::password('password') }}</p>
		<!-- submit button -->
		<p>{{ Form::submit('Login', array('class' => 'btn')) }}</p>
	{{ Form::close() }}

@endsection