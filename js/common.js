/////////////// WOW - Loader ////////////////////////////////////////////

   new WOW().init();

////////////// NAV //////////////////////////////////////////////////////

   // Menu opens on HOVER
   $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });

  // Header to Ortodoncia on click
  $('.OrtodonciaLink').click(function(){
     window.location.href='ortodoncia.php';
  })

  // Set Active Style
  $('.clasedetodoslosmenues').each(function(){
  	if($(this).attr('src') ='index.php?view='+urlParam)
  	{
  		$(this).addClass('active');
  	}
  });
