<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/fonts/fonts.css" />
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
  <?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php do_action('get_header'); ?>


  <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>


  <?php do_action('get_footer'); ?>
  <?php wp_footer(); ?>
</body>

</html>