<footer>
<div class="fluid-container footer-container p-5">
<div class="row" style="min-height:210px">
        <div class="col">
		<img src="<?php echo get_stylesheet_directory_uri()?>/images/footer-logo.png"/>
		</div>
        <div class="col">
Tel: 0800 304 7399<br>
Email: info@payego.co.uk
		</div>
        <div class="col">
		Paye & Go<br>
33 St James Square<br>
London<br>
England<br>
SW1Y 4JS


		</div>
		<div class="col">
			<?php 
			wp_nav_menu( array(
				'theme_location' => 'footer')); ?>
		</div>
        <div class="col">
		<?php 
			wp_nav_menu( array(
				'theme_location' => 'social')); ?>
		</div>
	</div>
	<div style="width:100%">
		<span style="float:left">© 2019 Sub-Go Ltd.</span>
		<span style="float:right">Company registration No. 10899271</span>
	</div>

	
<div>


		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script>
$('#multi-item-example').carousel({
	pause: true,
        interval: false
})
</script>
</footer>

	</body>
</html>
