<nav class="navbar navbar-default" role="navigation">
	
	<?php if($debug == 1) { ?>
		<button id="btn-debug" class="btn btn-success"><i class="fa fa-bug" aria-hidden="true"></i></button>
	<?php } ?>
	
	<div class="container">

		<ul class="nav navbar-nav">
		
			<?php nav_main($dbc,$pageid); ?>
		
			<li><a href="#">FAQ</a></li>
			<li><a href="#">Contact</a></li>
		</ui>

	</div>


</nav> <!-- END Nav (Main Navbar)-->