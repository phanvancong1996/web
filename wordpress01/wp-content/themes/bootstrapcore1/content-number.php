<?php 
	//code  cho phan number

	wp_reset_query();
	$tenso1 = get_field('tên_của_trường_số_1');
	$conso1 = get_field('con_số_của_trường_số_1');

	$tenso2 = get_field('tên_của_trường_số_2');
	$conso2 = get_field('con_số_của_trường_số_2');

	$tenso3 = get_field('tên_của_trường_số_3');
	$conso3 = get_field('con_số_của_trường_số_3');

	$tenso4 = get_field('tên_của_trường_số_4');
	$conso4 = get_field('con_số_của_trường_số_4');

 ?>


<!-- begin number -->
				<div class="numbers">
				<div class="container">
				<div class="row">
				<div class="col-sm-3 wow bounceInUp" data-wow-delay="0s">
					<div class="conso">
						<div class="so"><?php echo $conso1; ?></div>
						<div class="chuso"><?php echo $tenso1; ?></div>
					</div>
				</div>
				<div class="col-sm-3 wow bounceInUp" data-wow-delay="0.3s">
					<div class="conso">
						<div class="so"><?php echo $conso2; ?></div>
						<div class="chuso"><?php echo $tenso2; ?></div>
					</div>
				</div>
				<div class="col-sm-3 wow bounceInUp" data-wow-delay="0.6s">
					<div class="conso">
						<div class="so"><?php echo $conso3; ?></div>
						<div class="chuso"><?php echo $tenso3; ?></div>
					</div>
				</div>
				<div class="col-sm-3 wow bounceInUp" data-wow-delay="0.9s">
					<div class="conso">
						<div class="so"><?php echo $conso4; ?></div>
						<div class="chuso"><?php echo $tenso4 ?></div>
					</div>
				</div>
				</div> <!-- end row -->
				</div>
				</div>
				<!-- end number -->