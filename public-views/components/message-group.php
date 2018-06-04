<?php

/**
 * Template for rendering a group of messages
 *
 * @var string[] $messages A list of rendered messages for the group.
 * @var string   $type     The type of message, probably one of: notice, error, warning, success
 */

?>
<div class="bc-alert-group bc-alert-group--<?php echo sanitize_html_class( $type ); ?>">
	<?php foreach ( $messages as $message ) {
		echo $message;
	} ?>
</div>
