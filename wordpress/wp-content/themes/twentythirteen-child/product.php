<?php
/*
* Template Name: Product
*/

get_header();
?>

<ul class="product-list">
	<li class="col-md-4">
		<a href="#" class="pic" title="product-image">
			<img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/pic1.png" alt="pic" class="img-responsive"  />
		</a>
	</li>
	<li class="col-md-4">
		<a href="#" class="pic" title="product-image">
			<img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/pic1.png" alt="pic" class="img-responsive" />
		</a>
	</li>
	<li class="col-md-4">
		<a href="#" class="pic" title="product-image">
			<img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/pic1.png" alt="pic" class="img-responsive" />
		</a>
	</li>
</ul>
<!-- end productlist -->

<div class="clearfix"></div>
<?php
get_footer();

?>