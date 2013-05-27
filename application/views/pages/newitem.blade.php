@layout('templates.main')
@section('content')
    {{ Form::open('renta') }}
        <!-- title field -->
        <p>{{ Form::label('title', 'Título') }}</p>
        {{ $errors->first('title', '<p class="error">:message</p>') }}
        <p>{{ Form::text('title', Input::old('title')) }}</p>
        <!-- body field -->
        <p>{{ Form::label('description', 'Descripción') }}</p>
        {{ $errors->first('description', '<p class="error">:message</p>') }}
        <p>{{ Form::textarea('description', Input::old('description')) }}</p>
        <!-- submit button -->
        <p>{{ Form::submit('Create') }}</p>
    {{ Form::close() }}
@endsection