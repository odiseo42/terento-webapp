<div class="navbar navbar-inverse">
  <div class="navbar-inner">
	<div class="container">
 
		<!-- Be sure to leave the brand out there if you want it shown -->
		<a class="brand" href="/">Te Rento</a>

		<ul class="nav">
			<li class="active"><a href="/">Home</a></li>
			<li><a href="/renta">Renta</a></li>
			<li><a href="/catalogo">Catálogo</a></li>
		</ul>
 
		<ul class="nav pull-right">
			<li class="divider-vertical"></li>
			@if ( Auth::guest() )
				<li>{{ HTML::link('login', 'Login') }}</li>
			@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Mis artículos</a></li>
						<li><a href="#">Mis rentas</a></li>
						<li><a href="#">Settings</a></li>
						<li class="divider"></li>
						<li>{{ HTML::link('logout', 'Salir') }}</li>
					</ul>
				</li>
			@endif      
		</ul>
 
	</div>
  </div>
</div>
