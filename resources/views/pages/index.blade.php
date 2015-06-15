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
	<!-- <section class="info" -->
		<div class="about">
			<h2 class="about-text hidden-xs"><?php echo $info_330; ?></h2>
			<h2 class="about-text visible-xs-block"><?php echo $info_120; ?></h2>
		</div>
		<div class="etsy-widget">
			@include('includes/widget')
		</div>
	<!-- </section> -->
</div><!-- content -->
@endsection
