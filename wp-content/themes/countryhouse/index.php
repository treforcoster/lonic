<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.typekit.net/fhu1pkz.css">
  <?php wp_head(); ?>
  <?php $options = get_fields("options"); ?>

  <?php if ($options["map_api"]) { ?>

    <!-- has map stuff  -->

    <script>
      var data = {};
      data.apiLoaded = false;
      data.map_styles = <?php echo $options["map_styles"]; ?>;
      data.contact_map_styles = <?php echo $options["contact_map_styles"]; ?>;
      data.marker = '<?php echo $options["marker"]; ?>';
      data.marker_w = <?php echo $options["marker_width"]; ?>;
      data.marker_h = <?php echo $options["marker_height"]; ?>;
      data.marker_x = <?php echo $options["marker_x_pos"]; ?>;
      data.marker_y = <?php echo $options["marker_y_pos"]; ?>;


      function mapAPILoaded() {
        data.apiLoaded = true;

        console.log("****************** api loaded");
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $options["map_api"]; ?>&callback=mapAPILoaded">
    </script>

  <?php } else { ?>

    <!-- no map stuff -->
  <?php } ?>


</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php do_action('get_header'); ?>


  <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>


  <?php do_action('get_footer'); ?>
  <?php wp_footer(); ?>
</body>

</html>