<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::controller( Controller::detect() );

Route::get('/', function()
{	
	return View::make('templates.main')->with('isLanding', true);
});

Route::get('login', function() {
    return View::make('pages.login');
});

Route::post('login', function() {
    $userdata = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );
    if ( Auth::attempt($userdata) )
    {
        return Redirect::to('/');
    }
    else
    {
        return Redirect::to('login')
            ->with('login_errors', true);
    }
});

Route::get('renta', array('before' => 'auth', 'do' => function() {
	$user = Auth::user();
	return View::make('pages.newitem')->with('user', $user);
}));
Route::post('renta', array('before' => 'auth', 'do' => function() {

	// let's get the new post from the POST data
	// this is much safer than using mass assignment
	$user = Auth::user();

	$new_item = array(
	    'title'     => Input::get('title'),
	    'description' => Input::get('description'),
	    'user_id' => $user->id
	);
	// let's setup some rules for our new data
	// I'm sure you can come up with better ones
	$rules = array(
	    'title'     => 'required|min:3|max:128',
	    'description'      => 'required'
	);
	// make the validator
	$v = Validator::make($new_item, $rules);
	if ( $v->fails() )
	{
	    // redirect back to the form with
	    // errors, input and our currently
	    // logged in user
	    return Redirect::to('publica')
	            ->with_errors($v)
	            ->with_input();
	}
	// create the new post
	$item = new Item($new_item);
	$item->save();
	// redirect to viewing our new item
	return Redirect::to('articulos/'.$item->id);

}));

Route::get('/catalogo', function() {
    // lets get our posts and eager load the
    // author
    $items = Item::with('id')->all();
    return View::make('pages.listing')
        ->with('items', $items);
});

Route::get('articulos/(:num)', function($itemId) {
    $item = Item::find($itemId);
    return View::make('pages.show-item')
        ->with('item', $item);
});

Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});
/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});