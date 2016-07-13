@extends('layouts.app')

@section('content')


<div class="container">
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Row</th>
				<th>News</th>
				<th>Image</th>
				<th>Image</th>
				<td>Edit</td>
				<th>Delete</th>	
			</tr>
		</thead>
		<tbody>
			<?php $count=1 ?>
			@foreach($newsAll as $news)
			<tr>
				@foreach($news->gallery->all() as $gallery)
						
					<td><?php echo $count;$count=$count+1 ?></td>
					<td><a href="/{{$gallery->news_id}}/add/photo">{{$news->title_az}}</a></td>
					<td>{{$gallery->path_large}}</td>
					<td><?php echo "<img style='height:34px;width:40px;' src=/images/gallery_img/lg_img/$gallery->path_large>" ?></td>
					<td>
						@if(\Auth::user()->status==0||\Auth::user()->id==$news->user_id)
						<a href="/gallery/{{$gallery->id}}/edit">
							<button type="button" class="btn btn-default" aria-label="Left Align">
								<span class="" aria-hidden="true">Edit</span>
							</button>
						</a>
						@else
							<button type="button" class="btn btn-default" aria-label="Left Align" disabled>
								<span class="" aria-hidden="true">Edit</span>
							</button>
						@endif
					</td>
					<td>
						@if(\Auth::user()->status==0||\Auth::user()->id==$news->user_id)
							<a href="/gallery/{{$gallery->id}}/delete">
								<button type="button" class="btn btn-default" data-toggle="modal" aria-label="Left Align" data-target="#gridSystemModal">
									<span class="" aria-hidden="true">Delete</span>
								</button>
							</a>
						@else
							<button type="button" class="btn btn-default" aria-label="Left Align" disabled>
								<span class="" aria-hidden="true">Delete</span>
							</button>
						@endif
					</td>
			</tr>
		@endforeach
 	@endforeach
 @endsection


				
