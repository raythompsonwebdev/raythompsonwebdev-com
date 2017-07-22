 jQuery(document).ready(function($){

 $('.fancybox').fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic'

    });
 
 
});
 
 jQuery(document).ready(function($){


 $('.showcase-img').click(

  function(){
    
      $(this).find('.showcase-content').slideToggle(1000 , 'easeInOutExpo' );
 
  });
 
 
});


 //Hero Slider
jQuery(document).ready(function($){

  $('.hero-slider ul a').click(function() {

   //reset all the items

    $('.customBlock ul a').removeClass('active');

    //set current item as active

    $(this).addClass('active');

     //scroll it to the right position

    $('.hero-slider .mask').scrollTo($(this).attr('rel'), 300);

     //disable click event

      return false;

  });

});
 
 //REsponsive chart
jQuery(document).ready(function($){

   $("#chart #bars li .bar").each( function( key, bar ) {

     var percentage = $(this).data('percentage');

     $(this).animate({

     'height' : percentage + '%'

     }, 1000);

   });

 });



 
//Menu Switch
jQuery(document).ready(function($){

   $(function(){
          var default_view = 'grid';
          if($.cookie('view') !== 'undefined'){
              $.cookie('view', default_view, { expires: 7, path: '/' });
          }

          function get_grid(){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox-list');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          function get_list(){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0},function(){
                  $('.prod-cnt').removeClass('dbox');
                  $('.prod-cnt').addClass('dbox-list');
                  $('.prod-cnt').stop().animate({opacity:1});
              });
          }
          if($.cookie('view') == 'list'){
              $('.grid').removeClass('grid-active');
              $('.list').addClass('list-active');
              $('.prod-cnt').animate({opacity:0});
              $('.prod-cnt').removeClass('dbox');
              $('.prod-cnt').addClass('dbox-list');
              $('.prod-cnt').stop().animate({opacity:1});
          }

          if($.cookie('view') == 'grid'){
              $('.list').removeClass('list-active');
              $('.grid').addClass('grid-active');
              $('.prod-cnt').animate({opacity:0});
                  $('.prod-cnt').removeClass('dboxlist');
                  $('.prod-cnt').addClass('dbox');
                  $('.prod-cnt').stop().animate({opacity:1});
          }

          $('#list').click(function(){
              $.cookie('view', 'list');
              get_list()
          });

          $('#grid').click(function(){
              $.cookie('view', 'grid');
              get_grid();
          });

          /* filter */
          $('.menuSwitch ul li').click(function(){
              var CategoryID = $(this).attr('category');
              $('.menuSwitch ul li').removeClass('cat-active');
              $(this).addClass('cat-active');

              $('.content .prod-cnt').each(function(){
                  if(($(this).hasClass(CategoryID)) == false){
                     $(this).css({'display':'none'});
                  };
              });

              $('.'+CategoryID).fadeIn();

          });
      });

 });


 //search field togle
 jQuery(document).ready(function($){

   $("#wrapper_container #main-content #blogrightside .blogbox .social-1 form.searchform div label").click(function(){
       $("#wrapper_container #main-content #blogrightside .blogbox .social-1 form.searchform div input").toggle();

   });


 });

 // Hide/show toggle button on scroll
 jQuery(document).ready(function($){
 	var position, direction, previous;

 	$(window).scroll(function(){
 		if( $(this).scrollTop() >= position ){
 			direction = 'down';
 			if(direction !== previous){
<<<<<<< HEAD
 				$('a.nav-toggle, nav#mobile-nav ul#menu-mobile ').addClass('hide');
=======
 				$('a.nav-toggle, ul#menu-mobile').addClass('hide');
                                
>>>>>>> origin/master

 				previous = direction;
 			}
 		} else {
 			direction = 'up';
 			if(direction !== previous){
<<<<<<< HEAD
 				$('a.nav-toggle, nav#mobile-nav ul#menu-mobile').removeClass('hide');

=======
 				$('a.nav-toggle, ul#menu-mobile').removeClass('hide');
                                
>>>>>>> origin/master
 				previous = direction;
 			}
 		}
 		position = $(this).scrollTop();
 	});

     });