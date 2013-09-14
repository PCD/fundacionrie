(function ($) {
  Drupal.behaviors.homeCarrucel = {
    attach: function(context, settings){
      $(document).ready(function(){
        $('#block-views-nota-principal-block .item-list ul').attr('id', 'fundacion-slider');
        $('#fundacion-slider').jcarousel({
          wrap: 'circular',
          scroll: 1,
      		auto: 5,
      		animation:1500, 
      		initCallback: mycarousel_initCallback
        });
      });
      
      function mycarousel_initCallback(carousel) {
        // Pause autoscrolling if the user moves with the cursor over the clip.
        carousel.clip.hover(function() {
          carousel.stopAuto();
        }, function() {
          carousel.startAuto();
        });
      };
    }
  }
})(jQuery);