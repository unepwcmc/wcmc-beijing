<?php
/**
 * Vacancies Listing Block
 * Created by UNEP-WCMC
 * With Genesis Custom Blocks for Gutenberg - https://wpengine.co.uk/genesis-custom-blocks/
 */

 $get_items_query = array(
  'post_type' => 'vacancy',
  'posts_per_page' => 3
);

$get_items = new WP_Query($get_items_query);
?>

<div class="listing-vacancies">

  <?php if ( $get_items->have_posts() ) : ?>

    <div class="listing-list__items">

      <?php while ( $get_items->have_posts() ) : $get_items->the_post(); ?>
        <?php $postID = $post->ID; ?>

        <div class="listing-list__item">

          <div class="card-vacancy">
            <div class="card-vacancy__content">
              <?php if (get_field('department', $postID)): ?>
                <h4 class="card-vacancy__label">
                  <?php the_field('department', $postID); ?>
                </h4>
              <?php endif; ?>

              <h3 class="card-vacancy__title">
                <?php the_title(); ?>
              </h3>

              <?php if (get_field('closing_date', $postID)): ?>
                <h5 class="card-vacancy__subtitle">
                  <?php echo __( 'Closing Date', 'wcmc' ) . ': ' . get_field('closing_date', $postID); ?>
                </h5>
              <?php endif; ?>

              <?php if (get_field('excerpt', $postID)): ?>
                <div class="card-vacancy__text">
                  <?php the_field('excerpt', $postID); ?>
                </div>
              <?php endif; ?>

              <a class="card-vacancy__button">
                <?php _e( 'Read More', 'wcmc' ); ?>
                <?php get_template_part( '/template-parts/icons/icon', 'arrow-right' ); ?>
              </a>
            </div>
          </div>

        </div>

      <?php endwhile; ?>

    </div>

  <?php endif; wp_reset_query(); ?>

</div>
