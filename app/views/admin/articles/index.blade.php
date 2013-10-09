@extends('admin/layouts/default')

@section('page')
	<div class="medium-2 columns">
		<a href="{{ URL::route('create_article') }}" class="button small-12 success">
			<i class="icon-plus"></i> Create
		</a>
	</div>
	<div class="medium-10 columns">
		<h5><i class="icon-edit"></i>Articles</h5>

		<table class="small-12">
			<tbody>
				@foreach($articles as $article)
				<tr>
					<td>
						<a href="{{ URL::route('edit_article', $article->id) }}">
							{{ $article->id }}
						</a>
					</td>
					<td>
						<a href="{{ URL::route('edit_article', $article->id) }}">
							{{ $article->title }}
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
@stop