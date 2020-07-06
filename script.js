$(document).ready(function(){
	var carousels = bulmaCarousel.attach();
	
	$(".navbar-burger").click(function() {
		$(".modal").addClass("is-active");
	});
	$(".modal-close").click(function() {
		$(".modal").removeClass("is-active");
	});
		
})
$(window).scroll(function(){
  if ($(this).scrollTop() > 85) {
      $('.header-navbar').addClass('navbar-change');
      $('.navbar-burger').removeClass('has-text-white').addClass('has-text-black');

      
  } else {
      $('.header-navbar').removeClass('navbar-change');
      $('.navbar-burger').removeClass('has-text-black').addClass('has-text-white');
  }
  if ($(this).scrollTop() > 500) {
      $('#backtotop').addClass('visible');    
  } else {
      $('#backtotop').removeClass('visible');
  }
});
