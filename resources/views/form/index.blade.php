@extends('app')

@section('home')
<ul>
    <li><button>Search</button></li>
    <li><div class="col-md-2"><input type="text" class="form-control" name="search"></div></li>
    <li><a href="/">Home</a></li>
@if ($user->status == 1 or $user->status == 10)
    <li><a href="/form/create">Create</a></li>
@endif
    <li><a href="auth/logout">logout</a></li>
    <li><a href="/user/profile">Your Profile</a></li>
</ul> 
<hr>
<div>
	@foreach ($forms as $form)
		<article>
			<a href="{{ url('/form', $form->id) }}"><h4>{{ $form->title }}</h4></a>
		</article>
	@endforeach
</div>

@stop