<div class="card-team-member medium pb-3">
    <div class="inner">
        <div class="featured-image ">
            <?php echo get_the_post_thumbnail($post->ID, 'featured-image'); ?>
            <div class='bio text-white'>
                <div class="inner">
                    <?php echo get_field('bio', $post->ID); ?>
                </div>
                <div class='close-button'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="29.452" height="15.433" viewBox="0 0 29.452 15.433">

                        <path id="Path_19" data-name="Path 19" class="close" d="M12445,1391.5l14.372,14.372,14.373-14.372" transform="translate(-12444.646 -1391.146)" />
                    </svg>

                </div>
                <div class="more-button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27.421" height="27.421" viewBox="0 0 27.421 27.421">

                        <g id="Group_13474" data-name="Group 13474" transform="translate(14006.21 16135.421)">
                            <line id="Line_92" data-name="Line 92" class="more" x2="27.42" transform="translate(-14006.21 -16121.711)" />
                            <line id="Line_93" data-name="Line 93" class="more" x2="27.42" transform="translate(-13992.5 -16135.421) rotate(90)" />
                        </g>
                    </svg>
                </div>
            </div>


        </div>
        <div class="meta text-dark p-4">
            <?php $vCard = get_field('v_card', $post->ID); ?>
            <?php if ($vCard) { ?>
            <a href="<?php  echo get_field('v_card', $post->ID); ?>" class="v-card">vCard</a>
            <?php } ?>

            <h3><?php echo get_the_title($post->ID); ?></h3>
            <p class="position"><?php echo get_field('position', $post->ID); ?></p>
            <p class="contacts">
                <a href="tel:<?php echo get_field('telephone', $post->ID); ?>"><?php echo get_field('telephone', $post->ID); ?></a>
                <a href="mailto:<?php echo get_field('email', $post->ID); ?>"><?php echo get_field('email', $post->ID); ?></a>
            </p>
            <div class="socials">
                <?php $linkedin = get_field('linkedin', $post->ID);?>
                <?php $whatsapp = get_field('whatsapp', $post->ID);?>
                <?php if ($whatsapp){?>
                <a class="contact whatsapp" href="https://wa.me/<?php echo preg_replace('/\s+/', '', $whatsapp);?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.227" height="22.227" viewBox="0 0 22.227 22.227">
                        <defs>
                            <style>
                                .cls-what {
                                    fill: #032c33;
                                }

                            </style>
                        </defs>
                        <path id="Path_21" data-name="Path 21" class="cls-what" d="M11.113,0A11.067,11.067,0,0,0,1.442,16.53L.018,21.613a.483.483,0,0,0,.335.6.49.49,0,0,0,.246,0L5.9,20.9A11.1,11.1,0,1,0,11.113,0m0,.966A10.147,10.147,0,1,1,6.167,19.972a.483.483,0,0,0-.352-.047l-4.643,1.15,1.245-4.441a.483.483,0,0,0-.048-.377A10.144,10.144,0,0,1,11.113.966M7.075,5.315a1.536,1.536,0,0,0-1.116.507A3.766,3.766,0,0,0,4.832,8.5,5.7,5.7,0,0,0,6.1,11.707h0c-.013-.017.173.252.421.575a15.188,15.188,0,0,0,1.031,1.205,11.192,11.192,0,0,0,3.617,2.627,17.231,17.231,0,0,0,1.671.609,4.454,4.454,0,0,0,2.013.129,3.4,3.4,0,0,0,1.266-.523A2.347,2.347,0,0,0,17.158,15.2a3.987,3.987,0,0,0,.227-.995,2.3,2.3,0,0,0,0-.38.663.663,0,0,0-.107-.379c-.225-.369-.48-.379-.746-.51-.148-.073-.568-.279-.99-.48s-.786-.378-1.011-.459a1.134,1.134,0,0,0-.565-.1.963.963,0,0,0-.641.422c-.136.2-.685.849-.852,1.04l-.054-.027c-.207-.1-.46-.189-.834-.387a6.909,6.909,0,0,1-1.355-.941h0a7.978,7.978,0,0,1-1.466-1.8c.011-.014,0,0,.023-.021h0c.172-.17.325-.372.454-.521a2.4,2.4,0,0,0,.351-.57,1.069,1.069,0,0,0-.024-.927h0c.007.014-.055-.122-.121-.278s-.151-.36-.242-.577c-.181-.434-.383-.921-.5-1.206h0a1.259,1.259,0,0,0-.583-.695.939.939,0,0,0-.48-.084h0c-.179-.008-.375-.01-.569-.01m0,.966c.187,0,.37,0,.524.01s.148.008.118-.006.011-.019.1.194c.118.279.321.768.5,1.2.091.218.176.422.244.582s.1.25.147.335h0c.042.082.038.029.024.058a1.4,1.4,0,0,1-.219.371c-.157.181-.317.383-.4.466a1.043,1.043,0,0,0-.291.409.934.934,0,0,0,.089.756A8.843,8.843,0,0,0,9.6,12.731,7.882,7.882,0,0,0,11.139,13.8c.429.227.779.359.857.4a1.085,1.085,0,0,0,.625.135.942.942,0,0,0,.569-.318h0c.173-.2.685-.78.931-1.141a.91.91,0,0,1,.089.03h0c.037.013.5.222.921.421s.839.4.977.473c.2.1.292.162.316.162a1.222,1.222,0,0,1,0,.158,3.076,3.076,0,0,1-.173.75,1.817,1.817,0,0,1-.65.643,2.991,2.991,0,0,1-.892.383,3.458,3.458,0,0,1-1.582-.094,16.154,16.154,0,0,1-1.581-.576,10.321,10.321,0,0,1-3.3-2.4,14.254,14.254,0,0,1-.965-1.13c-.232-.3-.333-.458-.417-.569h0A5.225,5.225,0,0,1,5.8,8.5a2.548,2.548,0,0,1,.87-2.022.572.572,0,0,1,.407-.2" />
                    </svg>
                </a>
                <?php }?>

                <?php if ($linkedin){?>
              
                <a class="contact whatsapp" target="_blank" href="<?php echo  $linkedin;?>">

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #032c33;
                                }

                            </style>

                        </defs>
                        <g id="Group_37" data-name="Group 37" transform="translate(-1 -2)">
                            <g id="Group_36" data-name="Group 36" class="cls-1" transform="translate(1 2)">
                                <path id="Path_18" data-name="Path 18" d="M19,0H5A5,5,0,0,0,0,5V19a5,5,0,0,0,5,5H19a5,5,0,0,0,5-5V5a5,5,0,0,0-5-5M8,19H5V8H8ZM6.5,6.732A1.764,1.764,0,1,1,8.25,4.968,1.758,1.758,0,0,1,6.5,6.732M20,19H17V13.4c0-3.368-4-3.113-4,0V19H10V8h3V9.765c1.4-2.586,7-2.777,7,2.476Z" />
                            </g>
                        </g>
                    </svg>

                </a>
                <?php }?>

            </div>

        </div>
    </div>
</div>
