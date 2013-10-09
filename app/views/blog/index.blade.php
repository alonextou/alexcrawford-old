@extends('layouts/default')

@section('page')
<div class="medium-4 columns">
	<div id="tags">
		<h5><i class="icon-tags"></i>Tags</h5>
		<p>
			<label>HTML5, CSS3, Javascript,</label>
			<label>Mobile applications, Responsive design, </label>
			<label>Server management, architecture, dev-ops, </label>
			<label>PHP5, Laravel, Joomla, Drupal, Symfony, </label>
			<label>jQuery, Node, Grunt, Angular, Ember, </label>
			<label>SQL, MSSQL, MySQL, PostgreSQL, </label>
			<label>NoSQL, MongoDB, RethinkDB, </label>
			<label>Redis, Memcached, SOLR, ElasticSearch, </label>
			<label>Git, Vagrant, Chef/Puppet, NGINX, Apache, </label>
			<label>Linux, C#, Java, Ruby, Python</label>
		</p>
	</div>
	<div id="archive">
		<h5><i class="icon-time"></i>Archive</h5>
		<p>
			<a href="#">September 2013</a>
		</p>
	</div>
</div>
<div class="medium-8 pull-right columns">
	<h5><i class="icon-pencil"></i>Recent Blog Posts</h5>

	<div class="blogs">
		<?php $counter = 0; ?>
		@foreach($blogs as $blog)
			<?php $counter++; ?>
			<div class="blog {{ $counter % 2 == 0 ? 'even' : 'odd' }}">
				<h3><a href="{{ URL::route('blog_post', $blog->alias) }}">
					{{ $blog->title }}
				</a></h3>
				<div class="content">
					<img src="{{ $blog->image }}">
					<p class="intro">{{ $blog->intro }}</p>
					<a href="{{ URL::route('blog_post', $blog->alias) }}" class="button readmore radius success">
						<i class="icon-plus"></i> Read More
					</a>
					<div class="clear"></div>
				</div>
			</div>
		@endforeach
	</div>

</div>
@stop