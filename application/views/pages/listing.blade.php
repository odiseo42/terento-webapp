@layout('templates.main')
@section('content')
    @foreach ($items as $item)
        <div class="item">
            <h1>{{ HTML::link('articulos/'.$item->id, $item->title) }}</h1>
            <p>{{ substr($item->description,0, 120).' [..]' }}</p>
            <p>{{ HTML::link('articulos/'.$item->id, 'Read more &rarr;') }}</p>
        </div>
    @endforeach
@endsection