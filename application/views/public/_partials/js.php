<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/public/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->	
	
	<!-- odometer-script -->
	<script src="<?php echo base_url();?>/assets/js/public/odometer.js"></script>
	<script>
		window.odometerOptions = {
			format: '(ddd).dd'
		};
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats1').html(25);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats2').html(330);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats3').html(542);
		}, 1500);
	</script>
	<script>
		setTimeout(function () {
			jQuery('#w3l_stats4').html(222);
		}, 1500);
	</script>
	<!-- //odometer-script -->

	<!-- start-smoth-scrolling -->
	<script src="<?php echo base_url();?>assets/js/public/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/public/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/public/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
	<!-- FlexSlider-JavaScript -->
	<script defer src="<?php echo base_url();?>assets/js/public/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
	<!-- //FlexSlider-JavaScript -->
<!-- //js-scripts -->