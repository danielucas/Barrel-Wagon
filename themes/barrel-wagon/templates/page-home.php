<?php $home = get_post(2); ?>
<?php $homeImg = get_the_post_thumbnail_url( 2, 'full'); ?>

<div id="home" class="col-12 page page-home">
  <div class="home-logo" style="background-image: url(<?= $homeImg; ?>);"><?= print_svg('logo'); ?></div>
</div>