<?php $about = get_post(5); ?>

<div id="about" class="col-12 col-md-6 offset-3 text-center page page-about">
  <?= wpautop( $about->post_content ); ?>
  <a href="#contact" class="btn btn-sm btn-outline text-uppercase mt-4">Get a Quote</a>
</div>

<?php if($aboutImages = get_field('images', 5)): ?>

	<?php foreach($aboutImages as $aboutImage): ?>
		<?php $class = 'col-12'; if(image_orientation($aboutImage['width'], $aboutImage['height'])) { $class = 'col-12 col-md-6'; }  ?>
		<figure class="<?= $class; ?> mb-2 page-image">
			<img src="<?= $aboutImage['sizes']['medium']; ?>" alt="" class="img-fluid">
		</figure>

	<?php endforeach; ?>

<?php endif; ?>