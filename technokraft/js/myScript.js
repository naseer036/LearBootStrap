/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    var showObjectNHide = function (container, target) {
        var objectToShow = $(container)[0].attributes[1].value;
        var currentActiveObject = $(target)[0].attributes[1].value;
        $(currentActiveObject).css({ 'animation-name' : '', 'visibility' : '' });
        $(currentActiveObject).removeClass('fadeInUp  delay-02s animated');
        $(currentActiveObject).fadeOut("slow",function(){
            $(currentActiveObject).addClass('hidden-xs-up');
        });
        $(objectToShow).removeClass('hidden-xs-up');
        $(objectToShow).css({'display':''});
        $(objectToShow).addClass("fadeInUp delay-02s animated");
//        $(objectToShow).css({'visibility':'true'});
        $(target)[0].attributes[1].value = objectToShow;
    }
    $('.serviceList1 .service-list-col2').on('click', function(){
        showObjectNHide(this,'#serviceInfo1');
    });
    $('.serviceList2 .service-list-col2').on('click', function(){
        showObjectNHide(this,'#serviceInfo2');
    });
    $('.submitMail').on('click',function(){
        var email = $('.email').val();
        var name = $('.name').val();
        var number = $('.number').val();
        var city = $('.city').val();
        $('.email').val='';
        $('.name').val='';
        $('.number').val='';
        $('.city').val='';
        //shit way of doing stuff
       $.post( "mailer.php", { name: name, email: email,number:number,city:city } ); 
    });
    
    
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
    $('#pricing > div.container > div > ul > li:nth-child(1) > a').trigger('click');
  
});