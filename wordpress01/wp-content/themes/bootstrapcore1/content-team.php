<?php 
//code danh cho phần team

	wp_reset_query();

	$tieudetoteam	= get_field('tiêu_đề_to_khối_team');

	$tieudeteamabout = get_field('tiêu_đề_team');

	$team = new WP_Query(array('post_type' => 'nhan_vien'));

 ?>
 <!-- begin the team -->
				<div class="theteam">
				<div class="container">
				<div class="row tieudework text-center wow swing">

					<h2 class="vienxanh chungan">
						<?php echo $tieudetoteam; ?>
						<?php echo $tieudeteamabout; ?>
					</h2>

				</div>
				<div class="row">
					<?php 
						while ($team->have_posts()) {
							$team->the_post();
						$vitrict = get_field('vị_tri_trong_công_ty');
						$duongdan = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ),'full');
					 ?>

					<div class="col-sm-3 wow bounceInUp" data-wow-delay="0s">
						<a href="<?php echo $duongdan[0]; ?>" data-fancybox="watermark" class="_1sanpham _1team">
						<?php the_post_thumbnail('medium'); ?>
						<span class="thongtinsanpham">
							<h4 class="tensanpham"><?php the_title(); ?> </h4>
							<span class="danhmucsanpham"><?php echo $vitrict; ?></span>
						</span>
					</a>
					</div>
					
					<?php } ?>
					
					
				</div>
			</div>
		</div>
				<!-- end the team -->