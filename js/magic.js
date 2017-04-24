$(document).ready(function(){
	$('a.menu-toggle').click(function(){
		$('header').toggleClass('open-menu');
	});


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


	$('a#newmeeting_launch').click(function(e){
		e.preventDefault();

		var p = $( this );
		var position = p.offset();

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
		});
	});


});
