

jQuery(document).ready(function($){

 $('.fancybox').fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic'

    }),

 $('.showcase-img').click(

  function(){
    
      $(this).find('.showcase-content').slideToggle(1000 , 'easeInOutExpo' );
 
  });
 
 
});





