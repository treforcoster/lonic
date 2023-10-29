<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="grid-filters">
            <?php
              if( $terms = get_terms( array( 'taxonomy' => 'location', 'orderby' => 'name' ) ) ) : 
            
                echo '<select id="location_filter" name="categoryfilter" class="filter-dropdown small-caps"><option value="">Select Location</option>';
                foreach ( $terms as $term ) :
                  echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
                endforeach;
                echo '</select>';
              endif;
            ?>
            <select id="status_filter" name='statusFilter' class='filter-dropdown small-caps'>
              <option value="">Select Status</option>
              <option value="For Sale">For Sale</option>
              <option value="Under Offer">Under Offer</option>
              <option value="Sold">Sold</option>
            </select>

            

            <select id="price_min" name='price_min' class='filter-dropdown small-caps'>
              <option value="">Min Price</option>
              <option value="500000">£500,000</option>
              <option value="1000000">£1,000,000</option>
              <option value="2000000">£2,000,000</option>
              <option value="3000000">£3,000,000</option>
              <option value="4000000">£4,000,000</option>
              <option value="5000000">£5,000,000</option>
              <option value="6000000">£6,000,000</option>
              <option value="7000000">£7,000,000</option>
              <option value="8000000">£8,000,000</option>
              <option value="9000000">£9,000,000</option>
            </select>

            <select id="price_max" name='price_max' class='filter-dropdown small-caps'>
              <option value="">Max Price</option>
              <option value="1000000">£1,000,000</option>
              <option value="2000000">£2,000,000</option>
              <option value="3000000">£3,000,000</option>
              <option value="4000000">£4,000,000</option>
              <option value="5000000">£5,000,000</option>
              <option value="6000000">£6,000,000</option>
              <option value="7000000">£7,000,000</option>
              <option value="8000000">£8,000,000</option>
              <option value="9000000">£9,000,000</option>
            </select>

            
            <!-- <button>Apply filter</button> -->
            <input type="hidden" name="action" value="myfilter">
          </form>