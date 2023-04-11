<?php

/**
 * Contact Form Block
 * Created by UNEP-WCMC
 * With Genesis Custom Blocks for Gutenberg - https://wpengine.co.uk/genesis-custom-blocks/
 */

?>

<?php
$contactDetailsTitle = get_field( 'contact_details_title', 'option' );
$contactAddressTitle = __( 'Address', 'wcmc' );
$contactAddress = get_field( 'address', 'option' );
$contactNumberTitle = __( 'Contact Number', 'wcmc' );
$contactNumberDescription = get_field( 'contact_number_instructions', 'option' );
$contactNumberValue = get_field( 'contact_number', 'option' );
$contactEmailTitle = __( 'Email Address', 'wcmc' );
$contactEmailDescription = get_field( 'email_address_instructions', 'option' );
$contactEmailAddress = get_field( 'email_address', 'option' );

$formTitle = __( 'Contact Form', 'wcmc' );
?>

<div class="contact">
  <div class="contact__columns">
    <div class="contact__column">
      <?php if ($contactDetailsTitle): ?>
        <h3 class="contact__title">
          <?php echo $contactDetailsTitle; ?>
        </h3>
      <?php endif; ?>
      <ul class="contact__items">
        <li
          v-if="contactDetails.address"
          class="contact__item"
        >
          <?php if ($contactAddressTitle): ?>
            <h4 class="contact__subtitle">
              <?php echo $contactAddressTitle; ?>
            </h4>
          <?php endif; ?>
          <?php if ($contactAddress): ?>
            <p class="contact__text" >
              <?php echo $contactAddress; ?>
            </p>
          <?php endif; ?>
        </li>
        <?php if ($contactNumberDescription || $contactNumberValue): ?>
          <li class="contact__item">
            <?php if ($contactNumberTitle): ?>
              <h4 class="contact__subtitle">
                <?php echo $contactNumberTitle; ?>
              </h4>
            <?php endif; ?>
            <?php if ($contactNumberDescription): ?>
              <p class="contact__text">
                <?php echo $contactNumberDescription; ?>
              </p>
            <?php endif; ?>
            <?php if ($contactNumberValue): ?>
              <a class="contact__link" href="<?php echo $contactNumberValue; ?>">
                <?php echo $contactNumberValue; ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endif; ?>
        <?php if ($contactEmailDescription || $contactEmailAddress): ?>
          <li class="contact__item">
            <?php if ($contactEmailTitle): ?>
              <h4 class="contact__subtitle">
                <?php echo $contactEmailTitle; ?>
              </h4>
            <?php endif; ?>
            <?php if ($contactEmailDescription): ?>
              <p class="contact__text">
                <?php echo $contactEmailDescription; ?>
              </p>
            <?php endif; ?>
            <?php if ($contactEmailAddress): ?>
              <a class="contact__link" :href="mailto:<?php echo $contactEmailAddress; ?>">
                <?php echo $contactEmailAddress; ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endif; ?>
      </ul>
    </div>
    <div class="contact__column">
      <div class="form-contact">
        <div class="form-contact__content">
          <h3 class="form-contact__title">
            <?php echo $formTitle; ?>
          </h3>
          <form class="app-form" disabled>
            <label for="your-name" class="app-form__label">
              <?php _e( 'Full Name', 'wcmc' ); ?>
              <input name="your-name" type="text" class="app-form__input">
            </label>
            <label for="your-email" class="app-form__label">
              <?php _e( 'Email Address', 'wcmc' ); ?>
              <input name="your-email" type="email" class="app-form__input">
            </label>
            <label for="your-message" class="app-form__label">
              <?php _e( 'Message', 'wcmc' ); ?>
              <textarea rows="4" cols="40" name="your-message" type="textarea" class="app-form__textarea"></textarea>
            </label>
            <input type="submit" value="<?php _e( 'Send', 'wcmc' ); ?>" class="app-form__submit">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
