<?php $background = $block['block_options']['background_image'];

if (!empty($background)) {
// vars
$url = $background['url'];
$cropped = $background['sizes'][ 'acf-split-header-image' ];

?>

<div class="block-square-background" style="background-image:url('<?php echo $cropped; ?>');"></div>

<?php } ?>