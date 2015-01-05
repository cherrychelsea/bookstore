@extends('layouts.main')

@section('content')
	<div id="admin">
		<h1>Categories Admin Panel</h1><hr>
		<p>Here you can view, delete, create new categories.</p>
		<h2>Categories Admin Panel</h2><hr>
		<ul>
			@foreach ($categories as $category)
				<li>
					{{ $category->name }}
					{{ Form:: open(array('url'=>'admin/categories/destroy', 'class'=>'in-line')) }}
					{{ Form::hidden('id', $category->id) }}
					{{ Form:submit('delete') }}
					{{ Form::close() }}
				</li>
			@endforeach
		</ul>
	</div> <!-- End admin -->

	<h2>Create A New Category</h2><hr>
	@if($errors->has())
		<div id="form-errors">
			<p>The following error occured: </p>
			<ul>
				@foreach($errors->all() as $error)
					<li> {{ $error }}</li>
				@endforeach	
			</ul>
		</div>
	@endif

	{{ Form::open(array('url'=>'admin/categories/create')) }}
	<p>
		{{ Form::label('name') }}
		{{ Form::text('name') }}
	</p>
	{{ Form::submit('Create Category', array('class'=>'secondary-cart-btn')) }}
	{{ Form::close() }}

@stop