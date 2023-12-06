<?php if( have_rows('contacts') ): ?>
  <?php while( have_rows('contacts') ): the_row(); 
  $background = get_sub_field('background');
  $map = get_sub_field('map_image');
  ?>
  <div class="contacts" data-fullscreen>
    <div class="contacts__wrapper">
      <div class="contacts__background"><?php echo wp_get_attachment_image( $background, 'full' ); ?></div>
      <h1 class="contacts__title section__title"><?php the_sub_field('title');?></h1>
      <h2 class="contacts__subtitle section__subtitle"><?php the_sub_field('subtitle');?></h2>
      <div class="contacts__block">
        <h3 class="contacts__block-title"><?php the_sub_field('form_title');?></h3>
        <p class="contacts__block-text"><?php the_sub_field('form_text');?></p>
        <form class="contacts__form ">
          <input type="hidden" name="_subject" value="New submission!">
          <input type="hidden" name="_captcha" value="false">
          <!-- <label for="phone" class="contacts__form-label">Phone</label> -->
          <?php if( have_rows('form_input') ): ?>
            <?php while( have_rows('form_input') ): the_row(); ?>
              <div class="contacts__form-box">
                <input type="text" class="contacts__form-input" id="<?php the_sub_field('name');?>" name="<?php the_sub_field('name');?>" placeholder="<?php the_sub_field('placeholder');?>" <?php if(get_sub_field('requared')){ echo 'requared';} ?>>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <button class="contacts__form-submit main__btn"><?php the_sub_field('button_text');?></button>
          <div class="spinner">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              style="margin: auto; background: rgba(0, 0, 0, 0); display: block; shape-rendering: auto;" width="200px"
              height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
              <g transform="rotate(0 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(30 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(60 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(90 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(120 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(150 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(180 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(210 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(240 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(270 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(300 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s"
                    repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(330 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s"
                    repeatCount="indefinite">
                  </animate>
                </rect>
              </g>
            </svg>
          </div>
        </form>
        <div class="success">
          <h3 class="contacts__block-title"><?php the_sub_field('thank_you_text');?></h3>
        </div>

      </div>
      <div class="contacts__footer">
        <div class="contacts__footer-block">
          <a href="tel:<?php the_field('phone', 'option');?>" class="contacts__footer-phone"><?php the_field('phone', 'option');?></a>
          <a href="mailto:<?php the_field('email', 'option');?>" class="contacts__footer-email"><?php the_field('email', 'option');?></a>
        </div>
        <address class="contacts__footer-address"><?php the_field('address', 'option');?></address>
      </div>
    </div>
    <div class="contacts__card">
      <?php echo wp_get_attachment_image( $map, 'full', '', ['class'=> 'contacts__card-image'] ); ?>
    </div>
  </div>
  <?php endwhile; ?>
<?php endif; ?>