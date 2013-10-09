@extends('admin/layouts/default')

@section('page')
	<div class="large-12 columns">
		<h5><i class="icon-plus"></i>Create New Article</h5>

		{{ Form::open(['route' => 'create_article', 'method' => 'post', 'id' => 'create-article-form', 'files' => true]) }}
			<input name="title" type="text" placeholder="Title" value="{{ Input::old('title') }}" required>
			<textarea name="intro" class="intro" placeholder="Intro"></textarea>
			
			@foreach($tags as $tag)
				<div class="tags">
					<label>
						<span>{{ $tag->title }}</span>
						<input name="tags[]" type="checkbox" value="{{ $tag->id }}">
					</label>
				</div>
			@endforeach
			
			<label>Intro Image</label><input name="image" type="file">
			<textarea name="content" class="article" required></textarea>
			<hr>
			<button type="submit" class="success">Save</button>
		{{ Form::close() }}

	</div>
@stop