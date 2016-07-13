@extends('layouts.app')
@section('content')
<ul>
	{{Session::get('message')}}
</ul>
<div class="container">
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Row</th>
				<th>Author</th>
				<th>Title</th>
				<th>Short description</th>
				<th>Catecory</th>
				<th>updated time</th>
				<th>Edit</th>
				<th>Delete</th>
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
					<td>{{$news->subcategory->title_az}}</td>
					<td>{{$news->updated_at}}</td>
					<td>
						@if(\Auth::user()->status==0||\Auth::user()->id==$news->user_id)
						<a href="/news/{{$news->id}}/edit">
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
							<button type="button" class="btn btn-default" data-toggle="modal" aria-label="Left Align" data-target="#gridSystemModal">
								<span class="" aria-hidden="true">Delete</span>
							</button>
						@else
							<button type="button" class="btn btn-default" aria-label="Left Align" disabled>
								<span class="" aria-hidden="true">Delete</span>
							</button>
						@endif
					</td>
				
				</tr>

				<!--modal-->

				<div class="modal fade" tabindex="-1" role="dialog" id="gridSystemModal" aria-labelledby="	gridSystemModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="gridSystemModalLabel">Warning</h4>
							</div>
							<div class="modal-body">
								<span>Do you want to delete: <b>{{$news->title_az}}</b> </span>
							</div>
							<div class="modal-footer">
									@if(\Auth::user()->status==0||\Auth::user()->id==$news->user_id)
										<a href="/news/{{$news->id}}/delete">
											<button type="button" class="btn btn-danger">Delete</button>
										</a>
									@endif
								<button type="button" class="btn btn-primary"  data-dismiss="modal">Back</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			@endforeach
				
			</tbody>
			
		</table>
	</div>

	
	
@endsection