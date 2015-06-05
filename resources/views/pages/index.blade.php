@extends('layouts.layout')
<?php $page = 'index'; ?>
@section('content')
<div class="content">
	<div class="frontpage-gallery visible-xs-block">
		<div class="row images">
			<div class="col-xs-12">
				<div class="row row-no-padding">
					@for ($i = 0; $i < 4; $i++)
						<div class="col-xs-6">
							<img src="{{asset('images/'.$images[$i]->url)}}" alt="{{$images[$i]->alt}}" width="100%" class="frontpage-image">
						</div>
					@endfor
				</div>
			</div>
		</div>
	</div>

	<div class="frontpage-gallery hidden-xs">
		<div class="frontpage-hidden-xs-images">
			<div class="col-sm-12">
				<div class="row row-no-padding">

					@for($i = 0; $i < 3; $i++)
						<div class="col-sm-4">
							<img src="{{asset('images/'.$images[$i]->url)}}" alt="{{$images[$i]->alt}}" width="100%" class="frontpage-image">
						</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	<section class="info">
		<h2 class="info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
	</section>
</div><!-- content -->
@endsection
