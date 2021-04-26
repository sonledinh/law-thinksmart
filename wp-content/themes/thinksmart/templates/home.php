<?php /* Template Name: Home */ ?>
<?php get_header() ?>
<main style="background: #fff">
	<section class="banner">  
		<div class="slide-banner">
			<?php while ( has_sub_field('banner' ) ) : ?>
				<div class="item-slide">
					<div class="avarta"><img src="<?php echo get_sub_field( 'banner_img' )['url']; ?>" class="img-fluid w-100" alt=""></div>
					<div class="caption"> 
						<div class="container">  
							<div class="row">
								<div class="col-md-8">
									<h3><?php the_sub_field( 'title_top' ); ?></h3>
									<h2><?php the_sub_field( 'title_bott' ); ?></h2>
									<div class="desc">
										<?php the_sub_field( 'sort_desc' ); ?>
									</div>
									<div class="btn-hotline">
										<a href="tel:<?php the_sub_field( 'hotline' ); ?>">Hotline tư vấn: <?php the_sub_field( 'hotline' ); ?></a>
									</div>
								</div>
							</div>
						</div>  
					</div> 
				</div> 
			<?php endwhile; ?>
		</div>
	</section>
	<section class="box-about">
		<div class="container">
			<div class="title-about">
				<h2><span><?php the_field('titlte-about') ?></span></h2> 
			</div>
			<div class="description-ab">
				<div class="row">
					<div class="col-md-5">
						<div class="txt-about">
							<div class="desc">
								<?php the_field('desc_about') ?>
							</div>
							<div class="btn-page"><a href="<?php the_field('link_about') ?>">Xem thêm</a></div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="videoabout">
							<div class="avarta"><img src="<?php echo get_field('img_about')['url']?>" class="img-fluid w-100" alt=""></div>
							<div class="icon-play"><a href="javascript:void(0)" data-toggle="modal" data-target="#modal-video"><img src="<?php echo __BASE_URL__ ?>/images/play-video.png" class="img-fluid" alt=""></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade modal-popup" id="modal-video">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-body">
		      	<div class="content-popup">
		      		<!-- <button type="button" class="close" data-dismiss="modal">&times;</button>  -->
		      		<?php the_field('iframe_video') ?>
		      	</div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
	<section class="box-tab-news">
		<div class="container">
			<ul class="tabs">
				<li class="tab-link active" data-tab="tab-1"><a href="javascript:void(0)">Tin tức nổi bật</a></li>
				<li class="tab-link" data-tab="tab-2"><a href="javascript:void(0)">Tin tức mới nhất</a></li>
			</ul> 
			<div class="box-content-tab">
				<div class="tab-content active" id="tab-1">
					<div class="list-news-home">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>ĐỌC</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>ĐỌC</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>ĐỌC</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>ĐỌC</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-content" id="tab-2">
					<div class="list-news-home">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>hot</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>hot</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>hot</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="item-new-home">
									<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/new-home.png" class="img-fluid w-100" alt=""><span>hot</span></a></div>
									<div class="info">
										<div class="auther-date">
											<ul>
												<li>Đăng bởi: Lê Hải Nam</li>
												<li><span>31/03/2021</span></li>
											</ul>
										</div>
										<h3><a href="detail.php">ThinkSmart cam kết bảo vệ tốt nhất quyền và lợi ích hợp pháp của</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="box-service" style="background: url('<?php echo __BASE_URL__ ?>/images/bn-service.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="left">
						<div class="title-srv">Dịch vụ của <br>chúng tôi</div>
						<div class="side-srv">
							<ul>
								<li><a href="category.php" class="active">Doanh nghiệp - Đầu tư</a></li>
								<li><a href="category.php">Hình sự</a></li>
								<li><a href="category.php">Hôn nhân - Gia đình</a></li>
								<li><a href="category.php">Sỡ hữu trí tuệ</a></li>
								<li><a href="category.php">Dân sự - Thừa kế - Hợp đồng</a></li>
								<li><a href="category.php">Lao động - Bảo hiểm</a></li>
								<li><a href="category.php">Đất đai - Xây dựng - Nhà ở</a></li>
								<li><a href="category.php">Hành chính</a></li>
								<li><a href="category.php">Các lĩnh vực pháp luật khác</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="right">
						<div class="title-srv">Doanh nghiệp - Đầu tư</div>
						<div class="desc">
							Bằng việc cung cấp ý kiến pháp lý, Trung tâm có nhiệm vụ giúp khách hàng làm rõ, xác định chính xác vấn đề pháp lý mà khách hàng đang gặp phải và tư vấn định hướng các phương án giải quyết vấn đề đó. Ngoài ra, Trung tâm có trách nhiệm tư vấn, giới thiệu đến khách hàng những sản phẩm, dịch vụ pháp luật khác của ThinkSmart để giải quyết vấn đề, vướng mắc nhằm bảo đảm tốt nhất quyền và lợi ích hợp pháp của khách hàng.
						</div> 
						<div class="box-new-hot">
							<div class="list-new-hot hot-other">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="item-hot">
											<div class="avarta"><a href="detail.php"><img src="<?php echo __BASE_URL__ ?>/images/hot.png" class="img-fluid w-100" alt=""></a></div>
											<div class="info">
												<h4><a href="detail.php">Quy định mới nhất về thi hành án tử hình bằng hình thức tiêm thuốc...</a></h4>
												<p>Ngày đăng: 31/03/2021</p>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="btn-readmore-hot text-center"><a href="category.php">Xem toàn bộ</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 
	<section class="box-qc">
		<div class="container">
			<div class="row">
				<?php while ( has_sub_field('bn_qc' ) ) : ?>
					<div class="col-md-6">
						<div class="item-qc"><a href="<?php echo the_sub_field('link_ads') ?>" target="_blank"><img src="<?php echo get_sub_field('img_ads')['url'] ?>" class="img-fluid" alt=""></a></div>
					</div> 
				<?php endwhile; ?>
				<!-- <div class="col-md-6">
					<div class="item-qc"><a href="" target="_blank"><img src="<?php echo __BASE_URL__ ?>/images/qc.png" class="img-fluid" alt=""></a></div>
				</div> 
				<div class="col-md-6">
					<div class="item-qc"><a href="" target="_blank"><img src="<?php echo __BASE_URL__ ?>/images/qc.png" class="img-fluid" alt=""></a></div>
				</div>  -->
			</div>
		</div>
	</section>
	<section class="box-rule">
		<div class="slide-rule">
			<?php while ( has_sub_field('rule_box' ) ) : ?>
				<div class="item-slide">
					<div class="avarta"><img src="<?php echo get_sub_field('img_rule')['url'] ?>" class="img-fluid w-100" alt=""></div>
					<div class="caption-rule">
						<div class="container">
							<div class="row"> 
								<div class="col-md-8">
									<div class="item-rule">
										<h3><?php echo the_sub_field('title_rule'); ?></h3>
										<div class="desc">
											<?php echo the_sub_field('desc_rule'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
</main>  
<?php get_footer() ?>   