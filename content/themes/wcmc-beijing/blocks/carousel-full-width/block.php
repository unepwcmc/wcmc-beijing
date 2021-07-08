<?php

/**
 * Carousel Full Width Block
 * Created by UNEP-WCMC
 * With Genesis Custom Blocks for Gutenberg - https://wpengine.co.uk/genesis-custom-blocks/
 */

  // TODO: Build Gutenberg version

  $index = 0;
?>

<div class="carousel carousel--full-width">

  <?php if ( block_rows( 'cells' ) ) : ?>

    <div class="carousel__cells">

      <?php while ( block_rows( 'cells' ) && ( $index < 1 )) : block_row( 'cells' );?>

        <div class="carousel__cell">
          <div class="carousel-cell__content">
            <?php if ( block_sub_value( 'label' ) ) : ?>
              <h5 class="carousel-cell__label">
                <?php echo block_sub_value( 'label' ); ?>
              </h5>
            <?php endif;?>

            <?php if ( block_sub_value( 'title' ) ) : ?>
              <h4 class="carousel-cell__title">
                <?php echo block_sub_value( 'title' ); ?>
              </h4>
            <?php endif;?>

            <?php if ( block_sub_value( 'text' ) ) : ?>
              <p class="carousel-cell__text">
                <?php echo block_sub_value( 'text' ); ?>
              </p>
            <?php endif;?>

            <?php if ( block_sub_value( 'linkUrl' ) ) : ?>
              <p class="carousel-cell__link">
                <?php echo block_sub_value( 'linkText' ); ?>
                <?php get_template_part( '/template-parts/icons/icon', 'arrow-right' ); ?>
              </p>
            <?php endif;?>
          </div>

          <?php
            $attachment_id = block_sub_value( 'imageId' );
            $img_url = wp_get_attachment_image_url( $attachment_id, 'full-size' );
          ?>
          <img
            src="<?php echo $img_url; ?>"
            alt="<?php echo block_sub_value( 'title' ); ?>"
            class="carousel-cell__background-image"
          >
        </div>

      <?php $index++; endwhile; ?>

    </div>

  <?php endif; reset_block_rows( 'cells' ); ?>

</div>
