<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: linear-gradient(#c0c0c0, #f2f2f2);
}
.u-header .u-sheet-1 {
  min-height: 115px;
}
.u-header .u-image-1 {
  width: 332px;
  height: 47px;
  margin: 33px auto 0 -38px;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -42px -14px 39px auto;
}
.u-header .u-nav-1 {
  font-weight: 500;
  font-size: 1.125rem;
  text-transform: uppercase;
  letter-spacing: normal;
}
.u-block-f623-31 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
  letter-spacing: 0px;
}
.u-block-f623-33 {
  font-size: 1rem;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    margin-left: -38px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -42px;
    margin-right: -14px;
  }
}</style>
