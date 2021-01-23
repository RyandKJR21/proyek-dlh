<div class="content_area">
	<div class="main_content floatleft">
		<div class="single_left_coloum_wrapper">
			<h2 class="title">Galeri</h2>

			<div class="row text-center text-lg-left">
				<?php foreach ($gal as $g) : ?>
					<div class="col-lg-3 col-md-4 col-6">
						<a href="" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="<?=base_url('assets/img/img_galeri/') . $g['image']; ?>" alt="">
						</a>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>