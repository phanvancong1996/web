<?php 
$tieudephanwelcome = get_field('tiêu_đề_welcome');
$motaphanwelcome = get_field('mô_tả_welcome');
 ?>

<!-- begin welcome -->
				<div class="tieudewelcome">
				<div class="container">
				<div class="row">
					<div class="col-sm-5 col-sm-push-4 text-center wow bounceInUp" data-wow-delay="0.3s">
						<h2 class="vienxanh">
							<?php echo $tieudephanwelcome; ?>
						</h2>
						<div class="motawelcome">
							<?php echo $motaphanwelcome; ?>
						</div>
					</div> 	
				</div> <!-- end row -->
				<div class="row _3cotwelcome">
					<?php 
						$thongtinkh = new WP_Query(array('post_type'=>'thong_tin_trang_web'));
						while($thongtinkh->have_posts()){
							$thongtinkh->the_post();
							
							$tieudelink = get_field('tiêu_đề_nut_link_thông_tin_trang_web');
							$linktttw = get_field('link_thông_tin_trang_web');
					 ?>

					<div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
						<h3 class="vienxanh"><?php the_title() ?></h3>
						<div class="noidung1cot">
							<?php the_content(); ?>
						</div>
						<a href="<?php echo $linktttw; ?>" class="nutwelcome btn btn-default">
							<?php echo $tieudelink; ?>
						</a>
					
					</div>
					<?php } wp_reset_query()?>

				</div> <!-- end rowwelcome3cot -->
				</div> <!-- end container -->
				</div> <!-- end tieu de welcome -->
				<!-- end welcome -->