<?php if (have_rows('call_to_action')) : ?>
  <?php while (have_rows('call_to_action')) : the_row();  ?>

    <section id="<?php //echo $section['section_id'];
                  ?>" class="section section-line section-property-single-cta marker-title-h2-no-lead-in  ">

      <?php $global_cta = get_sub_field('use_global_cta'); ?>
      <div class="content ">
        <div class="container-fluid">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-4 medium text-dark p-t-mobile-intro p-b-mobile-intro p-t-desktop-intro p-b-desktop-intro">



              <?php if ($global_cta == 'yes') { ?>

                <?php $text = get_field('contacts_text', 'options'); ?>

                <?php $tel = get_field('telephone_number', 'options'); ?>
                <?php $tel_text = get_field('telephone_text', 'options'); ?>

                <?php $whatapp = get_field('whatsapp_number', 'options'); ?>
                <?php $whatapp_text = get_field('whatsapp_text', 'options'); ?>

                <?php $main_email = get_field('email', 'options'); ?>
                <?php $email_text = get_field('email_text', 'options'); ?>

                <?php echo $text; ?>

                <div class="links d-flex gap-3">




                  <?php if ($tel) { ?>

                    <?php $linkNumber = str_replace(' ', '', $tel); ?>

                    <div class="button-cta outline">
                      <a class="" href="tel:<?php echo $linkNumber; ?>"><?php echo $tel_text; ?></a>
                    </div>

                  <?php } ?>

                  <?php if ($whatapp) { ?>

                    <?php $linkNumber = str_replace(' ', '', $whatapp); ?>

                    <div class="button-cta outline">
                      <a class="" target="_blank" href="https://wa.me/<?php echo $linkNumber; ?>"><?php echo $whatapp_text; ?></a>
                    </div>

                  <?php } ?>

                  <?php if ($main_email) { ?>

                    <div class="button-cta outline">
                      <a class="" href="mailto:<?php echo $main_email; ?>"><?php echo $email_text; ?></a>
                    </div>

                  <?php } ?>


                </div>



              <?php } else { ?>

                <?php the_sub_field('title'); ?>

                <?php $member = get_sub_field('team_member'); ?>

                <?php if ($member) : ?>

                  <?php foreach ($member as $featured_post) : ?>

                    <?php $tel = get_field('telephone', $featured_post->ID); ?>
                    <?php $tel_text = get_field('telephone_text', 'options'); ?>

                    <?php $whatapp = get_field('whatsapp', $featured_post->ID); ?>
                    <?php $whatapp_text = get_field('whatsapp_text', 'options'); ?>

                    <?php $email = get_field('email', $featured_post->ID); ?>
                    <?php $main_email = get_field('email', 'options'); ?>
                    <?php $email_text = get_field('email_text', 'options'); ?>

                    <div class="links d-flex gap-3">

                      <?php if ($tel) { ?>

                        <?php $linkNumber = str_replace(' ', '', $tel); ?>

                        <div class="button-cta outline">
                          <a class="" href="callto:<?php echo $linkNumber; ?>"><?php echo $tel_text; ?></a>
                        </div>

                      <?php } ?>

                      <?php if ($whatapp) { ?>

                        <?php $linkNumber = str_replace(' ', '', $whatapp); ?>

                        <div class="button-cta outline">
                          <a class="" target="_blank" href="https://wa.me/<?php echo $linkNumber; ?>"><?php echo $whatapp_text; ?></a>
                        </div>

                      <?php } ?>

                      <?php if ($email) { ?>

                        <div class="button-cta outline">
                          <a class="" href="mailto:<?php echo $email; ?>,<?php echo $main_email; ?>"><?php echo $email_text; ?></a>
                        </div>

                      <?php } ?>


                    </div>

                  <?php endforeach; ?>

                <?php endif; ?>

              <?php } ?>
            </div>
            <div class="col-lg-7 medium member-column">
              <div class="row">


                <?php if ($global_cta == 'yes') { ?>

                <?php } else { ?>

                  <?php $member = get_sub_field('team_member'); ?>

                  <?php if ($member) : ?>

                    <div class='col-12 '>
                      <div class='member-column text-dark'>
                        <div class='inner p-b-mobile-intro'>


                          <?php foreach ($member as $featured_post) :
                            $permalink = get_permalink($featured_post->ID);
                            $title = get_the_title($featured_post->ID);

                            $custom_field = get_field('field_name', $featured_post->ID);
                          ?>

                            <div class="row align-items-center">
                              <div class="col-md-5">

                                <div class="p-b-mobile-element p-l-desktop-element featured-image">
                                  <?php echo get_the_post_thumbnail($featured_post->ID, 'featured-image'); ?>
                                </div>
                              </div>

                              <div class="col-md-7">
                                <div class="p-l-desktop-element p-r-desktop-element p-t-desktop-intro p-b-desktop-intro">
                                  <div class="intro p-b-desktop-element-half">
                                    <h3><?php echo esc_html($title); ?></h3>
                                    <h4 class="lead-in-heading"><?php the_terms($featured_post->ID, 'location', '', ", ", "."); ?></h4>
                                  </div>

                                  <?php echo get_field('bio', $featured_post->ID); ?>
                                </div>
                              </div>
                            </div>

                          <?php endforeach; ?>
                        <?php endif; ?>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php endif; ?>