<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-clearfix u-footer u-grey-80" id="sec-1b68">
  <div class="u-clearfix u-sheet u-sheet-1">
    <img class="u-image u-image-contain u-image-default u-image-1" src="<?php echo get_template_directory_uri(); ?>/images/froma-32.png" alt="" data-image-width="821" data-image-height="119">
    <p class="u-align-center u-text u-text-1">©bwssTemplate2021  Groupe <span style="font-weight: 700;"> F<span style="font-weight: 400;"></span>
      </span>
    </p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/wordpress-themes" target="_blank">
        <span>WordPress Theme</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
