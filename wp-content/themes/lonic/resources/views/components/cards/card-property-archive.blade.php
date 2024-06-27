<div class="card-propery-archive">
    <div class="inner text-dark">
        <div class="featured-image ">
            <?php $img_id = get_post_thumbnail_id(get_the_ID());
      $image = wp_get_attachment_image_src($img_id, "property-image");
      $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true); ?>

            <img class="rounded-image" src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>">

            <?php $status = get_field('status', get_the_ID()); ?>
            <?php if ($status == "Sold") { ?>
            <span class='sold bg-orange text-white'>SOLD</span>
            <?php } ?>
        </div>

        <div class='info'>


            <h3><?php the_title(); ?></h3>

            <span class="address"><?php the_field('address', get_the_ID()); ?></span>
            <span class="area"><?php the_field('area_ft', get_the_ID()); ?> sq ft / <?php the_field('area_m', get_the_ID()); ?> m</span>

            <?php $brochure = get_field('brochure', get_the_ID()); ?>
            <?php $virtual = get_field('virtual_tour', get_the_ID()); ?>

            <?php if ($brochure || $virtual || $contact ) {?>

            <div class="property-links d-flex gap-3">

                <?php if ($brochure) {?>

                <a class="arrow-link" href="<?php echo $brochure; ?>" target="_blank">Brochure <svg xmlns="http://www.w3.org/2000/svg" width="24.978" height="17.843" viewBox="0 0 24.978 17.843">
                        <defs>
                            <style>
                                .arrow-colour {
                                    fill: none;
                                    stroke-width: 2px;
                                }

                            </style>
                        </defs>
                        <g id="Group_6" data-name="Group 6" transform="translate(-514.5 -1549.798)">
                            <line id="Line_3" data-name="Line 3" class="arrow-colour" x2="23.029" transform="translate(514.5 1558.725)" />
                            <path id="Path_2" data-name="Path 2" class="arrow-colour" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
                        </g>
                    </svg>

                </a>

                <?php } ?>

                <?php if ($virtual) {?>

                <a class="arrow-link" href="<?php echo $virtual; ?>" target="_blank">Virtual Tour <svg xmlns="http://www.w3.org/2000/svg" width="24.978" height="17.843" viewBox="0 0 24.978 17.843">
                        <defs>
                            <style>
                                .arrow-colour {
                                    fill: none;
                                    stroke-width: 2px;
                                }

                            </style>
                        </defs>
                        <g id="Group_6" data-name="Group 6" transform="translate(-514.5 -1549.798)">
                            <line id="Line_3" data-name="Line 3" class="arrow-colour" x2="23.029" transform="translate(514.5 1558.725)" />
                            <path id="Path_2" data-name="Path 2" class="arrow-colour" d="M533.163,1550.505l8.215,8.215-8.215,8.214" transform="translate(-3.314)" />
                        </g>
                    </svg>

                </a>

                <?php } ?>

                <?php $contact = get_field('contact', get_the_ID());?>

                <?php if ($contact){?>

                <div class="contact-wrapper">
                <?php $email = get_field('email', $contact);?>
                <?php $whatsapp = get_field('whatsapp', $contact);?>
                <?php if ($email){?>
                <a class="contact email" href="mailto:<?php echo $email;?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.014" height="22.014" viewBox="0 0 22.014 22.014">
                        <defs>
                            <style>
                                .cls-email {
                                    fill: none;
                                    stroke: #032c33;
                                    stroke-miterlimit: 10;
                                }

                            </style>
                        </defs>
                        <path id="Path_1471" data-name="Path 1471" class="cls-email" d="M18.974,17.515H7.04a1.028,1.028,0,0,1-1.028-1.028V9.527A1.028,1.028,0,0,1,7.04,8.5H18.974A1.028,1.028,0,0,1,20,9.527v6.96A1.028,1.028,0,0,1,18.974,17.515ZM6.313,8.8l5.985,5.69a1.028,1.028,0,0,0,1.419,0L19.7,8.8M14.36,13.879l5.273,3.4m-13.251,0,5.273-3.4M13.007,2.5A10.507,10.507,0,1,0,23.514,13.007,10.507,10.507,0,0,0,13.007,2.5Z" transform="translate(-2 -2)" />
                    </svg>
                </a>

                <?php }?>
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
                </div>
                <?php }?>

            </div>

            <?php } ?>

        </div>
    </div>
</div>
