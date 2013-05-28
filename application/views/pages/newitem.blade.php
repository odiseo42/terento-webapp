@layout('templates.main')
@section('content')
	{{ Form::open('renta') }}
		<!-- title field -->
		<p>{{ Form::label('title', 'Título') }}</p>
		{{ $errors->first('title', '<div class="alert alert-error">:message</div>') }}
		<p>{{ Form::text('title', Input::old('title')) }}</p>
		<!-- body field -->
		<p>{{ Form::label('description', 'Descripción') }}</p>
		{{ $errors->first('description', '<div class="alert alert-error">:message</div>') }}
		<p>{{ Form::textarea('description', Input::old('description')) }}</p>
		<!-- submit button -->
		<p>{{ Form::submit('Publicar', array('class' => 'btn')) }}</p>
	{{ Form::close() }}
@endsection