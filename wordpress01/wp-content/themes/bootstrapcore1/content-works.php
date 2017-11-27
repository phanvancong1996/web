<?php 
//phan cod cho recent works
	wp_reset_query();
	$tieudetokhoisanpham = get_field('tiêu_đề_to');
	$sanpham = new WP_Query(array('post_type' => 'san_pham'));

 ?>

				<!-- begin work -->
				<div class="work">
				<div class="container">
				<div class="row tieudework text-center wow swing">

					<h2 class="vienxanh chungan"><?php echo $tieudetokhoisanpham; ?></h2>


				</div>
				<div class="row works">
					<?php 
						while ($sanpham->have_posts()) {
							$sanpham->the_post();
							
							$duongdan = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ),'full');
					 ?>


				<div class="col-sm-3  wow bounceInUp" data-wow-delay="0s">
					<a href="<?php echo $duongdan[0]; ?>" data-fancybox="watermark" class="_1sanpham">
						<?php the_post_thumbnail(); ?>
						<span class="thongtinsanpham">
							<h4 class="tensanpham"> <?php the_title(); ?></h4>
							<div class="danhmucsanpham"><?php 
								$danhmuc = get_the_terms( $post->ID, 'danh_muc_san_pham');
								if(!empty($danhmuc)){
									foreach ($danhmuc as $phantu) {
										echo $phantu->name;
									}
								}
							 ?>
							 	
							 </div>
						</span>
					</a>
				</div>
				
				
				<?php } ?>


				</div>
				</div>
				</div>
				<!-- end work -->