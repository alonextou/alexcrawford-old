@extends('layouts/default')

@section('page')
	<div class="medium-5 columns">
		<div id="skills">
			<h5><i class="icon-tags"></i>Skills</h5>
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
	</div>
	<div class="medium-7 columns">
		<div id="overview">
			<h5><i class="icon-align-center"></i>What I Do</h5>
			<div class="row text-center">
				<img src="http://cdn1.iconfinder.com/data/icons/iconset-addictive-flavour/png/chrome.png" alt="chrome">
				<img src="http://cdn1.iconfinder.com/data/icons/iconset-addictive-flavour/png/firefox.png" alt="firefox">
				<img src="http://cdn1.iconfinder.com/data/icons/miniiconset/48/Safari_Agua.png" alt="safari">
				<img src="http://cdn1.iconfinder.com/data/icons/iconset-addictive-flavour/png/internet_explorer.png" alt="ie">
				<label>Elegant, web-standard, dynamic sites.</label>
				<hr>
				<img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock/128/OS_Android.png" alt="android">
				<img src="https://cdn2.iconfinder.com/data/icons/metro-ui-dock/128/OS_Linux.png" alt="iphone">
				<img src="https://cdn1.iconfinder.com/data/icons/metro-ui-dock-icon-set--icons-by-dakirby/128/Apple.png" alt="apple">
				<img src="https://cdn2.iconfinder.com/data/icons/metro-ui-dock/128/OS_Windows_8.png" alt="windows">
				<label>Cross-platform desktop & mobile apps.</label>
			</div>
		</div>

		<div id="projects">
			<h5><i class="icon-play-circle"></i>Projects</h5>
			<div class="row">
				@foreach($project_articles as $project)
					<div class="small-4 columns">
						<a href="{{ URL::route('blog_post', $project->alias) }}">
							<div class="overlay">
								<img src="{{ $project->image }}">
							</div>
							<label>{{ $project->title }}</label>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@stop