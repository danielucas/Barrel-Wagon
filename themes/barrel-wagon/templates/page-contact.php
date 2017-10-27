<?php $contact = get_post(7); ?>

<div id="contact" class="col-12 col-md-6 offset-3 text-center page page-contact">
  <?= wpautop( $contact->post_content ); ?>
  
  <div class="mt-5 contact-form">
  	<?= do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
  </div>

</div>