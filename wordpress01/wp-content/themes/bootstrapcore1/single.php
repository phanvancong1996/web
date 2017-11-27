<?php 
get_header( 'mini' );

 ?>
	<div class="noidungtin">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 cottrai">
						<?php the_post_thumbnail( ); ?>
						<h3 class="tieudecttin">
						<?php the_title( ) ;?>
					</h3>
						<div class="thongtinbaiviet">
							Post by <span class="tacgia">
								Admin
							</span>
						</div>
						
					<div class="noidungcttin">
						<?php the_content(); ?>
					</div>
				
						<div class="comments">
							<h3 class="vienxanh">Comments (30)</h3>
						</div>
						<div class="ndcomments">
							<div class="ttcomments">
								<div class="row">
									<div class="col-sm-6 nguoidang">
										<div class="anhavatar"><img src="images/anhavatar1.jpg" alt="" class="img-responsive pull-left"></div>
										<div class="tennguoi">Jons Mart</div>
										<div class="thoigiandang">50 Minutes</div>
									</div>
									<div class="col-sm-6 nut text-right">
										<div class="btn btn-default nutreply">Reply</div>
									</div>
								</div>
							</div>
							<div class="textcomments">
								<p>Excepturi id minim habitasse vulputate volutpat sollicitudin. Eleifend nihil cupidatat odio, donec quam magni omnis ac sapiente tempor error ratione dignissim. Rhoncus ipsa? Blandit cubilia ratione porttitor corporis feugiat facere pede consequatur bibendum sapien porta metus! Scelerisque curae, fringilla ipsa, arcu sed nullam suspendisse libero semper cum tortor ligula. Adipiscing elit reiciendis, laborum voluptatem consequuntur, adipisicing, ea, ipsam! Fuga aenean distinctio cursus doloribus, cumque. A adipisicing sodales sint, aliquam cubilia, nulla architecto nunc at doloribus lectus, phasellus dignissim voluptatum itaque? Explicabo. Quaerat dictum aptent, tempore, architecto proin totam? Penatibus pharetra, mauris aliqua, quisquam malesuada hendrerit cupiditate, assumenda rutrum quis donec.</p>
							</div>
							<div class="ttcomments">
								<div class="row">
									<div class="col-sm-10 col-sm-push-2 nguoidang">
										<div class="anhavatar"><img src="images/anhavatar1.jpg" alt="" class="img-responsive pull-left"></div>
										<div class="tennguoi">Jons Mart</div>
										<div class="thoigiandang">50 Minutes</div>

										<div class="textcomments">
								<p>Excepturi id minim habitasse vulputate volutpat sollicitudin. Eleifend nihil cupidatat odio, donec quam magni omnis ac sapiente tempor error ratione dignissim. Rhoncus ipsa? Blandit cubilia ratione porttitor corporis feugiat facere pede consequatur bibendum sapien porta metus! Scelerisque curae, fringilla ipsa, arcu sed nullam suspendisse libero semper cum tortor ligula. Adipiscing elit reiciendis, laborum voluptatem consequuntur, adipisicing, ea, ipsam! Fuga aenean distinctio cursus doloribus, cumque. A adipisicing sodales sint, aliquam cubilia, nulla architecto nunc at doloribus lectus, phasellus dignissim voluptatum itaque? Explicabo. Quaerat dictum aptent, tempore, architecto proin totam? Penatibus pharetra, mauris aliqua, quisquam malesuada hendrerit cupiditate, assumenda rutrum quis donec.</p>
							</div>
									</div>
							
								</div>
							</div>
						</div>

					</div> <!-- end cot trai -->
					<div class="col-sm-4 cotphai">
						
						<?php get_sidebar(  ); ?>
					</div>
				</div>
			</div>
		</div>

 <?php get_footer();?>