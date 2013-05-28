@layout('templates.main')
@section('content')
	<div class="post">
		<h1>{{ HTML::link('articulos/'.$item->id, $item->title) }}</h1>
		<p>{{ $item->description }}</p>
		<p>{{ HTML::link('catalogo', '&larr; Regresar al listado.') }}</p>
	</div>
@endsection