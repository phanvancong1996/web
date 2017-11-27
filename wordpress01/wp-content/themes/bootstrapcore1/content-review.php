
<?php 
	$camnhankh = get_field('tiêu_đề_phần_cảm_nhận_khach_hàng');

	$soluong = wp_count_posts( 'cam_nha_khach_hang');
	$soluong = $soluong->publish;
	$sonut = round($soluong/2);
 ?>

<!-- BEGIN Review khach hang -->
				<?php if($sonut >0) {?>
				<div class="review">
					<div class="container">
						<div class="row tieudereview text-center wow bounceInUp">
							
							<h2 class="vienxanh chungan">
							<?php echo $camnhankh; ?>
							


							</h2>
							
						</div>
						<div class="row hieuungreview">
							<div id="slidereview" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">

									<?php 
									for($i= 1; $i <= $sonut ; $i++)
									{
									 ?>
									 <?php  if($i==1){ ?>
									
								 <li data-target="#slidereview" data-slide-to="<?php echo $i ?>" class="acvite"></li>
									<?php } 
									
									 else{ ?>
									
									 <li data-target="#slidereview" data-slide-to="<?php echo $i ?>" class=""></li>
								<?php } ?>
									
									<?php } ?>
								</ol>
								<div class="carousel-inner">
									<div class="item">
										<div class="row _2review">
													
													<?php 
													$review = new WP_Query(array('post_type'=>'cam_nha_khach_hang'));
													$dem = 1;
													while($review->have_posts())
													{
														$review->the_post();
														
													?>


											<div class="col-sm-6 _1review">
												<div class="row">
													<div class="col-sm-3 anhreview">
														<img src="<?php bloginfo('stylesheet_directory'); ?>/images/review.jpg" alt="" class="img-responsive">
													</div>
													<div class="col-sm-8">
													<h4 class="tenview">Arnol River</h4>
													<div class="chucdanh">Bảo vệ</div>
													<div class="noidungreview">
														Lectus ducimus justo fuga fuga error? Viverra aenean sint. Turpis accusamus in, cras, incididunt consequuntur 
													</div>
												</div>
												</div>

											</div>
											<?php

												if($dem%2==0){
														
													 ?>
													</div> <!-- end row _2review -->
												</div> <!-- end item -->
												<div class="item">
										<div class="row _2review">

													<?php } ?>
											<?php } ?>

											
									 
									
									
								</div>
								<a class="left carousel-control" href="#slidereview" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#slidereview" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- END Review khach hang -->