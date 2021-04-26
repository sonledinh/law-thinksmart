<?php /* Template Name: about */ ?>
<?php get_header() ?>
<main>
	<section class="breadcrumbs" style="background: url('<?php echo get_field('img_banner')['url'] ?>') no-repeat center;">
		<div class="container">
			<div class="content-bread">
				<h2><?php echo get_field('title') ?></h2>
			</div>
		</div>
	</section>
	<section class="box-category">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="list-news">

						<?php 
	                        $args=array(
	                        	'category_name' => 'Giới thiệu',
	                            'post_type' => 'post',
	                            'orderby'   => 'publish_date',
	                            'order'     => 'DESC',
	                            'paged'     => get_query_var('paged') ? get_query_var('paged') : 1,
	                            'posts_per_page' => 10,
	                        ); 
	                        $my_query = new wp_query($args);
	                        $max_num_pages = $my_query->max_num_pages;
	                    ?>
	                    <?php $i = 0; ?>
	                    <?php if ( $my_query->have_posts() ): ?>
	                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
	                            <?php $i++ ?>

	                            <div class="item-news">
									<div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										 <div class="cate-top">
										 	<ul>
										 		<li><a href="javascript:void(0)"><?php echo get_the_category()[0]->name ; ?></a></li>
										 		<li><div class="date"><?php echo get_the_date('d/m/Y') ?></div></li>
										 	</ul>
										 </div>
										 <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
										 <div class="desc">
										 	<?php echo get_the_excerpt(); ?>
										 </div>
										 <div class="info-bott">
										 	<ul>
										 		<li>
										 			<div class="username">
										 				<div class="i-user"><img src="<?php echo __BASE_URL__ ?>/images/user.png" class="img-fluid" alt=""></div>
										 				<div class="name"><h6><?php the_author(); ?></h6></div>
										 			</div>
										 		</li>
										 		<li><a href="<?php echo get_the_permalink() ?>">Xem thêm <span>🡢</span></a></li>
										 	</ul>
										 </div>
									</div>
								</div>
 
	                        <?php endwhile ?>
	                    <?php endif;wp_reset_query(); ?>


					</div>

					<div class="pagination w-100">
						<ul class="list-inline w-100 text-center">
							<li class="list-inline-item"><a href="" class="active">1</a></li>
							<li class="list-inline-item"><a href="">2</a></li>
							<li class="list-inline-item"><a href="">3</a></li>
							<li class="list-inline-item"><a href="">...</a></li>
							<li class="list-inline-item"><a href="">34</a></li>
							<li class="list-inline-item"><a href="">Next</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="side-bar">
						<div class="box-search">
							<input type="text" placeholder="Tìm kiếm ...">
							<button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
						</div>
						<div class="box-bar">
							<div class="title-bar text-center">Tin tức ThinkSmart</div>
							<div class="new-bar">
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="box-bar">
							<div class="title-bar text-center">Tin tức ThinkSmart</div>
							<div class="new-bar">
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="box-bar">
							<div class="title-bar text-center">Tin tức ThinkSmart</div>
							<div class="new-bar">
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
								<div class="item-bar">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/bar-1.png" class="img-fluid w-100" alt=""></a></div>
									<div class="info">
										<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
									</div>
									<div class="cate-bott">
										<ul>
											<li><a href="">Doanh nghiệp - Đầu tư</a></li>
											<li>31/03/2021</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
<?php get_footer() ?>   