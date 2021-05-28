<?php
/**
 * Grab available locales in WPML
 *
 */
function get_all_available_locales() {

  $languages = apply_filters( 'wpml_active_languages', NULL, 'orderby=id&order=desc' );
  $locales_array = array();

  $index = 0;
  if ( !empty( $languages ) ) {
    foreach( $languages as $language ) {
      $language_code = $language['language_code'] == 'zh-hans' ? 'zh' : $language['language_code'];

      $locales_array[$index] = array(
        'default_locale' => $language['default_locale'],
        'hreflang' => $language['language_code'],
        'language_code' => $language_code,
        'native_name' => $language['native_name'],
        'translated_name' => $language['translated_name']
      );
      $index++;
    }
  }

  if( !empty($locales_array) ) {
    return $locales_array;
  } else {
    return new WP_Error( 'No results', 'Nothing found' );
  }
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'wcmc/v1', '/locales', array(
    'methods' => 'GET',
    'callback' => 'get_all_available_locales',
  ) );
} );
