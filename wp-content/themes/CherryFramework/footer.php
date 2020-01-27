<footer class="motopress-wrapper footer">
    <div class="container">
        <div class="row">
            <div class="<?php echo cherry_get_layout_class('full_width_content'); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
                <?php get_template_part('wrapper/wrapper-footer'); ?>
            </div>
        </div>
    </div>
</footer>
<!--End #motopress-main-->
</div>
<div id="back-top-wrapper" class="visible-desktop">
    <p id="back-top">
        <?php echo apply_filters('cherry_back_top_html', '<a href="#top"><span></span></a>'); ?>
    </p>
</div>
<?php if (of_get_option('ga_code')) { ?>
    <script type="text/javascript">
    <?php echo stripslashes(of_get_option('ga_code')); ?>
    </script>
    <!-- Show Google Analytics -->
<?php } ?>
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->

<div id="footer-text" class="footer-text">
    <?php $myfooter_text = apply_filters('cherry_text_translate', of_get_option('footer_text'), 'footer_text'); ?>

    <?php if ($myfooter_text) { ?>
        <?php echo $myfooter_text; ?>
    <?php } else { ?>

        <strong><a href="<?php echo home_url(); ?>/" title="<?php bloginfo('description'); ?>" class="site-name"><?php bloginfo('name'); ?></a></strong> &copy; <?php echo date('Y'); ?> <?php _e('All rights reserved', CURRENT_THEME); ?> <b><a href="<?php echo home_url(); ?>/privacy-policy/" title="<?php echo theme_locals('privacy_policy'); ?>"><?php echo theme_locals("privacy_policy"); ?></a></b>

    <?php } ?>
    <?php if (is_front_page()) { ?>
        <a rel="nofollow" href="http://www.templatemonster.com/wordpress-themes.php" target="_blank">TemplateMonster</a> Design. 
    <?php } ?>
</div>
</body>
</html>