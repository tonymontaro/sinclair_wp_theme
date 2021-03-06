<footer>

	<section class="latest">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 latest-news">

					<div id="footer-news" class="owl-carousel">


						<?php
						$args = array(
							'post_type' => 'post'
						);

						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
							$post_counter = 0;
							while($post_query->have_posts() ) :
								$post_counter++;
								$post_query->the_post();
								if($post_counter <= 3):
								?>

								<div class="item">
									<div class="item-content row">
										<div class="header-news-img col-sm-6">
											<?php the_post_thumbnail() ?>
										</div>
										<div class="header-news-text col-sm-6">
											<h2>
												<span class="light-text">Latest</span> news:
											</h2>
											
											<?php the_excerpt(); ?>

											<p><a href="<?php the_permalink() ?>">Find out more</a></p>

										</div>
									</div>
								</div>
								
								<?php endif; endwhile; } ?>


					</div>


				</div>
				<div class="col-sm-6 latest-connect">
					<p class="text-heading">Stay <strong>Connected</strong></p>

					<p>
						Transformation succession
						best and brightest nbsp
						talent and brightest nbsp
					</p>

					<div class="input-group">
						<input type="text" class="form-control" placeholder="Sign Up">
                                <span class="input-group-btn">
                                    <button class="subscribe-btn btn btn-default">
	                                    <i class="fa fa-chevron-right"></i>
                                    </button>
                                </span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="footer-menu">
		<div class="container">
			<div class="row">

				<div class="col-md-6"><div class="row">
						<div class="col-xs-4">
							<h4>PRACTICES</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">IIoT</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Ai</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Robotics</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Agriculture</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Nanotechnology</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Cyber Security</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Life Sciences</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Aerospace</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Data</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Autonomous Vehicles</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">Energy</a></li>
								<li><a href="<?php bloginfo('url'); ?>/case-studies">3D Printing</a></li>
							</ul>
						</div>
						<div class="col-xs-4">
							<h4>ABOUT SINCLAIR FOX</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/about-us?page=core-values">Core Values</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about-us?page=what-we-do">What we Do</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about-us?page=management">Management Team</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about-us?page=team-strategy">Team Strategy</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about-us?page=thought-leadership">Thought Leadership</a></li>
								<li><a href="<?php bloginfo('url'); ?>/about-us?page=insights">Insights</a></li>
								<li>&nbsp;</li>
							</ul>

							<h4>TALENT MANAGEMENT</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/talent-management">Mentoring</a></li>
								<li><a href="<?php bloginfo('url'); ?>/talent-management">Thought Leadership</a></li>
								<li><a href="<?php bloginfo('url'); ?>/talent-management">Negotiation</a></li>
								<li><a href="<?php bloginfo('url'); ?>/talent-management">Placement</a></li>
							</ul>
						</div>
						<div class="col-xs-4">
							<h4>TRAINING</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/training">Title1</a></li>
								<li><a href="<?php bloginfo('url'); ?>/training">Title2</a></li>
								<li><a href="<?php bloginfo('url'); ?>/training">Title3</a></li>
								<li><a href="<?php bloginfo('url'); ?>/training">Title4</a></li>
								<li><a href="<?php bloginfo('url'); ?>/training">Title5</a></li>
								<li><a href="<?php bloginfo('url'); ?>/training">Title6</a></li>
								<li>&nbsp;</li>
							</ul>

							<h4>EXECUTIVE SEARCH</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/executive-search">Search</a></li>
							</ul>
						</div>
					</div></div>


				<div class="col-md-6"><div class="row">
						<div class="col-xs-4">
							<h4>LEGAL</h4>
							<ul>
								<li><a href="javascript:void(0)">Accessibility</a></li>
								<li><a href="javascript:void(0)">Cookies</a></li>
								<li><a href="javascript:void(0)">FAQs</a></li>
								<li><a href="javascript:void(0)">Local Language</a></li>
								<li><a href="javascript:void(0)">Privacy</a></li>
								<li><a href="javascript:void(0)">Site Map</a></li>
								<li><a href="javascript:void(0)">Terms of Use</a></li>
							</ul>

							<h4>VENTURE CAPITAL</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/venture">Advisory</a></li>
								<li><a href="<?php bloginfo('url'); ?>/venture">Network</a></li>
								<li><a href="<?php bloginfo('url'); ?>/venture">Relationships</a></li>
							</ul>
						</div>
						<div class="col-xs-4">
							<h4>CONTACT US</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/contact">Offices WorldWide</a></li>
							</ul>
							<h4>CASE STUDIES</h4>
							<ul>
								<li><a href="javascript:void(0)">PDF</a></li>
							</ul>
							<h4>NEWS</h4>
							<ul>
								<li><a href="<?php bloginfo('url'); ?>/news">Search</a></li>
							</ul>
						</div>
						<div class="col-xs-4 footer-socail">
							<div class="socail-icons">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>

							<div class="bronchure">
								<img src="<?php bloginfo('template_url'); ?>/images/bronchure.png" alt="bronchure">

								<a href="javascript:void(0)">DOWNLOAD <br>
									<strong>OUR BRONCHURE</strong></a>

							</div>
						</div>
					</div></div>

			</div>
		</div>
	</section>

	<section class="footer-copyright text-center">
		<div class="container">
			<div class="footer-logo">
				<img src="<?php bloginfo('template_url'); ?>/images/footer-logo.png" alt="footer logo">
				<div>GREAT MINDS <strong>THINK DIFFERENT</strong></div>
			</div>

			<p>
				&copy; 2011 - 2016 SINCLAIR FOX LLP, a UK limited partnership, and a member firm of the SINCLAIR FOX network of indepent member firms affliated <br>
				with SINCLAIR FOX International Cooperative, a UK entity. All rights reserved.
			</p>

			<p>
				SINCLAIR FOX is a limited liability partnership registered in England and Wales with registered number 0C380630 and registered office at Berkeley Square House, Berkeley Square, London, W1J 6BD.
			</p>
		</div>
	</section>

</footer>


<!-- MODAL -->
<section>


	<!-- Modal -->
	<div class="modal fade" id="registerPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content registerPopup">
				<div class="row">


					<div class="col-xs-6">
						<div class="register-desc">
							<button class="sinclair-btn"><i class="fa fa-chevron-left"></i></button>
							<br>
							<img src="<?php bloginfo('template_url'); ?>/images/popup-img.jpg" alt="register">
							<div class="h2">Title</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut qui sint, accusamus est odit, commodi praesentium soluta illo laboriosam nesciunt dolore, libero doloremque facilis rem, provident officiis ratione expedita non!
							</p>
							<div class="socail-icons text-center">
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>
						</div>

					</div>
					<div class="col-xs-6"><div class="register-form-div">
							<div class="register-form text-center">
								<h2>Register to <br>
									<strong class="pink-text">
										Download the PDF
									</strong>
								</h2>

								<form action="">

									<div class="form-group">
										<input type="text" placeholder="Name" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" placeholder="Company" class="form-control">
									</div>
									<div class="form-group">
										<input type="text" placeholder="Email" class="form-control">
									</div>

									<button class="btn btn-default">Submit &nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></button>

								</form>
								<div class="popup-form-img">
									<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
								</div>

							</div>

							<div class="registerPopup-tags">
								<p>
									<span>TAGS:</span> Education, pasta, mandarina, nonna Rina, Challenge, Water, Food, Nutella
								</p>
							</div>
						</div></div>


				</div>
			</div>
		</div>
	</div>


	<!-- ChatBox MODAL -->

	<!-- Modal -->
	<div class="modal fade" id="chatbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog chatbox-a" role="document">
			<div class="modal-content chatbox">


				<div class="chatbox-head">
					<h3>New Conversation</h3>
					<div class="chatbox-dismiss">
						<a class="link-rm-default" href="javascript:void(0)" data-dismiss="modal">&mdash;</a>
						<a class="link-rm-default" href="javascript:void(0)" data-dismiss="modal">X</a>
					</div>
				</div>

				<div class="contoner">
					<div class="chatbox-team">
						<h3 class="pink-text">Intercom Team</h3>
						<p>Active last 15 minutes</p>
						<div class="chatbox-team-imgs">
							<div class="row">
								<div class="col-xs-4 text-center">
									<img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/chatbox-img.jpg" alt="">
									<p>Dave</p>
								</div>
								<div class="col-xs-4 text-center">
									<img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/chatbox-img.jpg" alt="">
									<p>Dave</p>
								</div>
								<div class="col-xs-4 text-center">
									<img class="img-circle" src="<?php bloginfo('template_url'); ?>/images/chatbox-img.jpg" alt="">
									<p>Dave</p>
								</div>
							</div>
						</div>
						<p>
							<strong>Ask us anything.</strong> We'd love to hear what brought you to intercom
						</p>
					</div>

					<div class="chatbox-online">
						<h3 class="pink-text">
							Nobody Online?
						</h3>
						<p>Send us an E-mail at:</p>
						<div class="chatbox-email">
							fakeemail@challenge.com
						</div>
					</div>

					<div class="chatbox-start-conv">
						<input type="text" placeholder="Start a conversation" class="form-control">
					</div>
				</div>



			</div>
		</div>
	</div>

</section>
<?php wp_footer(); ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/SmoothScroll.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<!--        circle animation and appear.js -->
<script src="<?php bloginfo('template_url'); ?>/js/circle/jquery.appear.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/circle/circle-progress.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script>
	$.loadManagementPerson = function(id){
		$('#management-team').load("<?php bloginfo('template_url'); ?>/management-person.php?id="+id, function(){
			$('#management-team').addClass('management-person-active');
		});
	}
	var currentPostId = $('#about-us-page').data('current-post-id');

	$('a[href="#management"]').click(function(){
		if($('#management-team').hasClass('management-person-active')){
			$('#management-team').load("<?php bloginfo('template_url'); ?>/management-team.php?id="+currentPostId, function(){
				$('#management-team').removeClass('management-person-active');
			});
		}
	});


</script>
</body>
</html>
