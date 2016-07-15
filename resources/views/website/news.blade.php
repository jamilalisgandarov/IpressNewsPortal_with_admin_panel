@extends('layouts.homepage')

@section('content')

<div class="col-md-12 col-xs-12 news">
	<div class="row">
		<div class="card col-md-12 col-xs-12">
			<div class="card-block">
				<h4 class="card-title">{{$news->title_az}}</h4>
				<hr>
				<div class="col-md-12">
					<div class="row">
						<p class="pull-right">Yazar : {{$news->user->first_name." ".$news->user->last_name }}</p>
						<p class="pull-left">Tarix : {{$news->updated_at}}</p>
					
					</div>
					<hr class="row">
				</div>
				<h6 class="card-subtitle text-muted">{{$news->short_desc_az}}</h6>
			</div>
			<img src="<?php echo "/images/news_img/".$news->main_img ?>">
			<div class="card-block">
				<p class="card-text">{!! $news->desc_az !!}</p>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12 gallery">
			<div class="row">
			@if(count($news->gallery)>0)
				<div class="carousel_posts col-md-12">
					<div class="col-md-12 regtangle">
						<p>Gallery</p>
						<div class="controller">
							
						</div>
					</div>
					<div class="col-md-12 carousel_main">
						<div class="over">
							<div class="carousel_move" id="carousel_move" draggable="true">
								@foreach($news->gallery->all() as $gallery)
								<div class="carousel_item popup-gallery">
									<a href="#">
										<img src="<?php echo "/images/gallery_img/lg_img/".$gallery->path_large ?>">
									</a>
								</div>
								@endforeach
							</div>
							<div class="right"><i class="fa fa-3x fa-chevron-right" aria-hidden="true"></i></div>
							<div class="left"><i class="fa fa-3x fa-chevron-left" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
	<hr>
</div>

<a class="fancybox-thumb" rel="fancybox-thumb" href="http://farm6.staticflickr.com/5612/15344856989_449794889d_b.jpg" title="Morning Twilight (Jose Hamra Images)">
	<img src="http://farm6.staticflickr.com/5612/15344856989_449794889d_m.jpg" alt="" />
</a>
<a class="fancybox-thumb" rel="fancybox-thumb" href="http://farm8.staticflickr.com/7289/16207238089_0124105172_b.jpg" title="(Eric Goncalves (cathing up again!))">
	<img src="http://farm8.staticflickr.com/7289/16207238089_0124105172_m.jpg" alt="" />
</a>
<a class="fancybox-thumb" rel="fancybox-thumb" href="http://farm9.staticflickr.com/8568/16388772452_f4d77a92c7_b.jpg" title="Arctic Paradise (Tom Draxler)">
	<img src="http://farm9.staticflickr.com/8568/16388772452_f4d77a92c7_m.jpg" alt="" />
</a>
<a class="fancybox-thumb" rel="fancybox-thumb" href="http://farm8.staticflickr.com/7308/15783866983_27160395b9_b.jpg" title="Rodeo Dusk (_JonathanMitchellPhotography_)">
	<img src="http://farm8.staticflickr.com/7308/15783866983_27160395b9_m.jpg" alt="" />
</a>


@endsection
$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});