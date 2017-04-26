$(document).ready(function(){


	// MOBILE MENU
	$('a.menu-toggle').click(function(){
		$('header').toggleClass('open-menu');
	});




	// MODALS: PROFILE & NOTIFICATIONS

	$('header a.profile').click(function(e){
		e.preventDefault();

		var p = $( this );
		var position = p.offset();

		var link = 'modals.php';
		$('.overlay').load(link+' #my-profile');
		$(document).ajaxComplete(function(){
			$('#my-profile').css({top: 20, left: (position.left - $('#my-profile').width() + 10), position:'fixed'});

			$('a.close').click(function(e){
				e.preventDefault();
				$( '.modal' ).remove();
			});
		});
	});


	$('header a.notifications').click(function(e){
		e.preventDefault();

		var p = $( this );
		var position = p.offset();

		var link = 'modals.php';
		$('.overlay').load(link+' #notifications');
		$(document).ajaxComplete(function(){
			$('#notifications').css({top: 20, left: (position.left - $('#notifications').width() + 10), position:'fixed'});

			$('a.close').click(function(e){
				e.preventDefault();
				$( '.modal' ).remove();
			});
		});
	});




	// MODALS: CENTERED MODALS

	$('a#newmeeting_launch').click(function(e){
		e.preventDefault();

		$('body').addClass('active-modal');
		$('.overlay').fadeIn();
		// $('html').css({overflow: 'hidden'});

		var link = 'modals.php';
		$('.modal_placeholder').load(link+' #new-meeting');
		$(document).ajaxComplete(function(){

			$('a.close, .overlay').click(function(e){
				e.preventDefault();
				$( '.modal' ).remove();
				$('.overlay').fadeOut();
				// $('html').css({overflow: 'auto'});
			});
			$( document ).ready(function() {
				$('#timepicker').timepicker();
				$('#datepicker').datepicker(); // Couldn't figure it out, pero ya tiene estilo :(
			});
		});
	});

	$('a#newtask_launch, a#edittask_launch').click(function(e){
		e.preventDefault();

		$('body').addClass('active-modal');
		$('.overlay').fadeIn();

		var link = 'modals.php';
		$('.modal_placeholder').load(link+' #new-task');
		$(document).ajaxComplete(function(){

			$('a.close, .overlay').click(function(e){
				e.preventDefault();
				$( '.modal' ).remove();
				$('.overlay').fadeOut();
			});
			$( document ).ready(function() {
				// $('#timepicker').timepicker();
				$('#datepicker').datepicker(); // Couldn't figure it out, pero ya tiene estilo :(
			});

			$('.nice.dropdown .previewlabel').click(function(){
				if($('.heightlimit').is(':visible')) {
					$('.heightlimit').fadeOut('fast');
				}
				event.stopPropagation();
				$(this).parent().find('.heightlimit').fadeIn('fast');
			});
			$(window).click(function() {
				$('.nice.dropdown .heightlimit').fadeOut('fast');
			});

			$('.nice.dropdown input[type="checkbox"], .nice.dropdown input[type="radio"]').click(function() {
				checkchecked(this);
			});

		});
	});




	// Nice DROPDOWNS
	// – Missing: get initial previewlabel and restore when pName is empty.

	$('.nice.dropdown .previewlabel').click(function(){
		if($('.heightlimit').is(':visible')) {
			$('.heightlimit').fadeOut('fast');
		}
		event.stopPropagation();
		$(this).parent().find('.heightlimit').fadeIn('fast');
	});
	$(window).click(function() {
		$('.nice.dropdown .heightlimit').fadeOut('fast');
	});

	function checkchecked(currentIs) {
		var pNames = new Array();
		var ddID;
		if(currentIs) {
			ddID = $(currentIs).closest('.nice.dropdown').attr('id');
		} else {
			ddID = $('.nice.dropdown').attr('id');
		}

		// Collect Checked options
		$('#'+ddID+'.nice.dropdown li').each(function() {
			var thisCheckbox = $(this).find(' input[type="checkbox"], input[type="radio"]');
			if ((thisCheckbox).is(':checked')) {
				pNames.push(thisCheckbox.attr('title'));
			}
		});

		var stringPNames = '\<strong\>'+pNames.join('\<\/strong\>, \<strong\>')+'\<\/strong\>';

		if(pNames.length > 0 && pNames !== 'undefined') {
			$('#'+ddID+'.nice.dropdown .previewlabel').html(stringPNames);
		} else {
			$('#'+ddID+'.nice.dropdown .previewlabel').html('Todos');
		}
	}

	checkchecked();

	$('.nice.dropdown input[type="checkbox"], .nice.dropdown input[type="radio"]').click(function() {
		checkchecked(this);
	});




	// DATE & TIME Pickers

	$('#datepicker').datepicker();
	// $('.datepicker').datepicker('option', 'dateFormat', 'yy-mm-dd');
	$('#timepicker').timepicker();

});
