<?php /* Wrapper Name: Footer */ ?>

<?php if( is_front_page() ) { ?>

	<div class="footer-widgets">
		<div class="row">
			<div class="span4" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
				<?php dynamic_sidebar("footer-sidebar-1"); ?>
			</div>
			<div class="span8" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
				<div class="info_box"><?php dynamic_sidebar("footer-sidebar-2"); ?></div>
			</div>
	
<?php } ?>

<div class="copyright">

	<div class="row">
		<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
			<?php get_template_part("static/static-footer-text"); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
			<?php get_template_part("static/static-footer-nav"); ?>
		</div>
	</div>
	
</div>