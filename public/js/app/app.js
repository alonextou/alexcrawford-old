require('libs/jquery');
require('libs/jquery.validate');
require('libs/redactor');
require('foundation/index');

$(document).ready(function(){
	$(document).foundation();

	$('#login-form, #create-article-form').validate({
		errorElement: 'small'
	});

	$('textarea.article').redactor();
	
});