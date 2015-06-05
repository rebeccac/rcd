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
		<h2 class="info-text"><?php echo $info; ?></h2>
	</section>
</div><!-- content -->
@endsection
