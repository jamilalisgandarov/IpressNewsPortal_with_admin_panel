@extends('layouts.app')

@section('content')

   <div class="container">
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Row</th>
				<th>Author</th>
				<th>Title</th>
				<th>Short description</th>
				<th>Add Photo</th>
			</tr>
		</thead>
		<tbody>
			<?php $count=1 ?>
			@foreach($newsAll as $news)
				<tr>
					<td><?php echo $count;$count=$count+1 ?></td>
					<td>{{$news->user->first_name}}</td>
					<td>{{$news->title_az}}</td>
					<td>{{$news->short_desc_az}}</td>
					<td>
						@if(\Auth::user()->status==0||\Auth::user()->id==$news->user_id)
						<a href="/{{$news->id}}/add/photo">
							<button type="button" class="btn btn-default" aria-label="Left Align">
								<span class="" aria-hidden="true">Add Photo</span>
							</button>
						</a>
						@else
							<button type="button" class="btn btn-default" aria-label="Left Align" disabled>
								<span class="" aria-hidden="true">Add Photo</span>
							</button>
						@endif
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>


@endsection