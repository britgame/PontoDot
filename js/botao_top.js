/*............. BOTÃO IR AO TOPO ..............*/
$(function () {
	$(window).scroll(function() {

    	if ($(this).scrollTop() > 500)
    	 {
        $('.bt-top').fadeIn();
    	 }
   		 else
     	{
      	$('.bt-top').fadeOut();
     	}
 	});
});