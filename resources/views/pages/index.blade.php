@extends('layouts.layout')
<?php $page = 'index'; ?>
@section('content')
<div class="content">
	<div class="row images">
		<div class="col-md-10 col-md-offset-1">
			@foreach($images as $image)
				<div class="col-md-4">
						<img src="{{asset('images/'.$image->url)}}" alt="{{$image->alt}}" width="350" class="frontpage-image">
				</div>
			@endforeach
		</div>
	</div>
</div><!-- content -->
@endsection
