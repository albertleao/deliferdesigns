<div class="container_12" id="maincontent">
	<div class="grid_12" id="main_banner">
		<span>Custom Woodwork For Your Home</span>

		<div class="clear"></div>

		<a class="btn btn-large btn-primary" id="gallery" href="#">
			<i class="icon-photo"></i> 
			View Gallery
		</a>

		<a class="btn btn-large btn-success" id="order" href="#">
			<i class="icon-photo"></i> 
			Order Custom Product
		</a>		

	</div>

	<div class="clear"></div>

	<div class="grid_7">
		<h1>
			Have your own custom woodwork done.
		</h1>

		<ul>
			<li>Custom Furniture</li>
			<li>Bars</li>
			<li>Shelves</li>
			<li>Nightstands</li>
			<li>Entertainment Centers</li>
		</ul>

	</div>

</div>


<script type="text/javascript">
	$("#header").addClass('animated bounceInDown');
	$("#main_banner").addClass('animated fadeIn');
	$("#gallery").addClass('animated rotateIn');
	$("#order").addClass('animated rotateIn');

	$("#gallery").click(function(){
		$(this).removeClass("animated rotateIn").addClass('animated bounceOutUp').delay(500).fadeOut("slow", function() {
			$("#main_banner").fadeOut("slow")
		})
	})
</script>