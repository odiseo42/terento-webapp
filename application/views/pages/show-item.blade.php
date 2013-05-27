@layout('templates.main')
@section('content')
    <div class="post">
        <h1>{{ HTML::link('articulos/'.$item->id, $item->title) }}</h1>
        <p>{{ $item->description }}</p>
        <p>{{ HTML::link('/', '&larr; Back to index.') }}</p>
    </div>
@endsection