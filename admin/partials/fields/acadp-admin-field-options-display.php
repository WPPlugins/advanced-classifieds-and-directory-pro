<?php

/**
 * Display the "Field Options" meta box.
 */
?>

<table class="acadp-input widefat" id="acadp-field-options">
  <tbody>
    <tr>
      <td class="label">
        <label><?php _e( 'Order No.', 'advanced-classifieds-and-directory-pro' ); ?></label>
        <p class="description"><?php _e( 'Fields are created in order from lowest to highest', 'advanced-classifieds-and-directory-pro' ); ?></p>
      </td>
      <td>
        <div class="acadp-input-wrap">
          <input type="text" class="text" name="order" placeholder="0" value="<?php if( isset( $post_meta['order'] ) ) echo esc_attr( $post_meta['order'][0] ); ?>" />
        </div>
      </td>
    </tr>
    <tr>
      <td class="label">
        <label><?php _e( 'Include this field in the search form?', 'advanced-classifieds-and-directory-pro' ); ?></label>
      </td>
      <td>
        <?php $searchable = isset( $post_meta['searchable'] ) ? $post_meta['searchable'][0] : 0; ?>
        <ul class="acadp-radio-list radio horizontal">
          <li>
            <label>
              <input type="radio" name="searchable" value="1" <?php echo checked( $searchable, 1, false ); ?>><?php _e( 'Yes', 'advanced-classifieds-and-directory-pro' ); ?>
            </label>
          </li>
          <li>
            <label>
              <input type="radio" name="searchable" value="0" <?php echo checked( $searchable, 0, false ); ?>><?php _e( 'No', 'advanced-classifieds-and-directory-pro' ); ?>
            </label>
          </li>
        </ul>
      </td>
    </tr>
 </tbody>
</table>