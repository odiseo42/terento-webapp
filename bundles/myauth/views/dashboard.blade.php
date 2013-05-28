@layout('templates.main')
@section('content')
	Welcome back {{ Auth::user()->username }}<br />
	{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'logout') }}

@endsection