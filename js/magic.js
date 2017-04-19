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


});
