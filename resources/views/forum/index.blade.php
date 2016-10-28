@extends('layouts.forum')

@section('content-forum')

	<div class="bg-head-forum">
		<h3 class="center-align"><b>Foro</b></h3>
	</div>

	<div class="container">
		<nav class="page-footer">
			<div class="nav-wrapper mg-top-xs">
				<div class="col s12">
					<a href="#!" class="breadcrumb">Foro General</a>
					<a href="#!" class="breadcrumb">Categoria</a>
					<a href="#!" class="breadcrumb">SubCategoria</a>
				</div>
			</div>
		</nav>

		<div class="col s12">
			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>

					<div class="collapsible-body">
						<ul class="collection">
							<li class="collection-item avatar">
								<img src="https://robohash.org/steven" alt="" class="circle">
								<span class="title">Title</span>
								<p>First Line <br>
								Second Line
								</p>
								<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
							<li class="collection-item avatar">
								<i class="material-icons circle">folder</i>
								<span class="title">Title</span>
								<p>First Line <br>
								Second Line
								</p>
								<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">place</i>Second</div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
				<li>
					<div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
					<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
				</li>
			</ul>
		</div>
	</div>
@stop