@extends('layout')

@section('content')
<div role="main" class="main">

	<!-- 				
				<section class="section section-default section-no-border mt-none" style="margin-bottom: -30px;">
					<div class="container">
						<div class="row mb-xl">
							<div class="col-md-7">
								<h2 class="mt-xl mb-none">Join our talent network</h2>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="mt-lg">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

								<a class="mt-md" href="#">Learn More <i class="fa fa-long-arrow-right"></i></a>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<h4 class="mt-xl mb-none">Our Commitment</h4>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<p class="mt-lg">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>
							</div>
						</div>
					</div>
				</section>
				 -->


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 p-none">
				<section class="section match-height mt-xl" style="background-image: url({{ asset('template/img/patterns/fancy.jpg') }});">
					<div class="row">
						<div class="col-half-section col-half-section-right">
							<h2 class="mb-none">We Invest In <strong>Our People</strong></h2>
							<div class="divider divider-light divider-small mb-xl">
								<hr>
							</div>

							<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10, "loop": false, "nav": false, "dots": true}'>
								<div>
									<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
										<blockquote>
											<p class="text-dark">Pralon provides periodic training to improve the competency of employees. Besides internal training programs, the Company also sent its employees to attend seminars or external training programs including offshore training sessions in order to develop a broader perspective and to gain the latest knowledge about technology and the pipes industry. the Company regularly holds an annual sports competition to celebrate Indonesia's Independence Day to increase excitement and sportsmanship among its employees.</p>
										</blockquote>
										<div class="testimonial-author">
											<div class="testimonial-author-thumbnail">
												<img src="img/clients/client-1.jpg" class="img-responsive img-circle" alt="Career Pralon">
											</div>
											<!-- <p><strong>John Smith</strong><span class="text-light">CEO & Founder - Okler</span></p> -->
										</div>
									</div>
								</div>
								<div>
									<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
										<blockquote>
											<p class="text-dark">Pralon has exciting career opportunities for professionals, graduates, and interns. Here, you can uncover the work you're most passionate about. Our people also have access to our learning platform, where you can learn new skills and complete training to further your professional development. Shape your own career path in our diverse and leading-edge business!</p>
										</blockquote>
										<div class="testimonial-author">
											<div class="testimonial-author-thumbnail">
												<img src="img/clients/client-2.jpg" class="img-responsive img-circle" alt="Career Pralon">
											</div>
											<!-- <p><strong>Jessica Smith</strong><span class="text-light">Marketing - Okler</span></p> -->
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
			</div>
			<div class="col-md-6 p-none">
				<section class="parallax section section-parallax match-height mt-xl" data-stellar-background-ratio="0.3" style="background-image: url({{ asset('template/img/patterns/parallax-law.png') }});">
				</section>
			</div>
		</div>


	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 center">
				<h2 class="mt-xl mb-none">Employee Testimony</h2>
				<div class="divider divider-primary divider-small divider-small-center mb-xl">
					<hr>
				</div>
			</div>
		</div>
		<div class="row mt-xl">
			<div class="col-md-6">
				<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl" style="height: 335px;">
					<span class="thumb-info-side-image-wrapper p-none hidden-xs">
						<img src="{{  asset('template/img/patterns/TESTIMONI 1.png') }}" class="img-responsive" alt="Career Pralon" style="width: 195px;">
					</span>
					<span class="thumb-info-caption">
						<span class="thumb-info-caption-text">
							<h2 class="text-semibold mb-md mt-xs">Alfi Faozi</h2>
							<span class="post-meta">
								<span>HR Manager</a></span>
							</span>
							<p class="font-size-md">I joined Pralon with high expectation, and today, as I reflect upon my journey, I can confidently say that this organization has exceeded every expectation. One of the most inspiring aspects of working here is witnessing how diversity and inclusivity are not just a words, but deeply ingrained in the company's culture.

								Pralon embraces individuals from all level, creating a perspectives that fuels creativity and innovation. We are encouraged to think outside the box, challenge conventions, and contribute to the inovation. We are constantly challenging the limitation, seeking new ideas, and solution.</p>
						</span>
					</span>
				</span>
			</div>
			<div class="col-md-6">
				<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl" style="height: 335px;">
					<span class="thumb-info-side-image-wrapper p-none hidden-xs">
						<img src="{{  asset('template/img/patterns/TESTIMONI 2.png') }}" class="img-responsive" alt="Career Pralon" style="width: 195px;">
					</span>
					<span class="thumb-info-caption">
						<span class="thumb-info-caption-text">
							<h2 class="text-semibold mb-md mt-xs">Catherine Indrayana</h2>
							<span class="post-meta">
								<span>Finance & Accounting</a></span>
							</span>
							<p class="font-size-md">it doesn't feel like it's been 10 years since I was part of the big family of PT Pralon,
								Many valuable stories and experiences that I have gained here.
								The positive culture and environment here make work feel more comfortable and enjoyable.
								coupled with good teamwork makes me more eager to learn more and continue to want to give the best for PT Pralon</p>
						</span>
					</span>
				</span>
			</div>
		</div>


		<div class="row mt-xl">
			<div class="col-md-6">
				<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl" style="height: 335px;">
					<span class="thumb-info-side-image-wrapper p-none hidden-xs">
						<img src="{{  asset('template/img/patterns/TESTIMONI 3.png') }}" class="img-responsive" alt="Career Pralon" style="width: 195px;">
					</span>
					<span class="thumb-info-caption">
						<span class="thumb-info-caption-text">
							<h2 class="text-semibold mb-md mt-xs">Kevin Hazel Tanuwijaya</h2>
							<span class="post-meta">
								<span>Strategic Management Specialist</a></span>
							</span>
							<p class="font-size-md">Thank you pralon for the trust that has been given to me to be able to be involved in the design of company management so that I can develop a lot both in terms of skills, knowledge, and communication.</p>
						</span>
					</span>
				</span>
			</div>
			<div class="col-md-6">
				<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl" style="height: 335px;">
					<span class="thumb-info-side-image-wrapper p-none hidden-xs">
						<img src="{{  asset('template/img/patterns/TESTIMONI 4.png') }}" class="img-responsive" alt="Career Pralon" style="width: 195px;">
					</span>
					<span class="thumb-info-caption">
						<span class="thumb-info-caption-text">
							<h2 class="text-semibold mb-md mt-xs">Steven Daniel Gunawan</h2>
							<span class="post-meta">
								<span>Graphic Design & Multimedia</a></span>
							</span>
							<p class="font-size-md">A great trust and experience can be able to work at PT. Pralon.
								Making us more creative at work makes me continue to innovate and challenge myself to continue to be able to give the best.
								A cool and comfortable work environment certainly makes us live our work more enthusiastically</p>
						</span>
					</span>
				</span>
			</div>
		</div>


		<div class="row mt-xl">
			<div class="col-md-6">
				<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
					<span class="thumb-info-side-image-wrapper p-none hidden-xs">
						<img src="{{  asset('template/img/patterns/TESTIMONI 5.png') }}" class="img-responsive" alt="Career Pralon" style="width: 195px;">
					</span>
					<span class="thumb-info-caption">
						<span class="thumb-info-caption-text">
							<h2 class="text-semibold mb-md mt-xs">Lia Marliani</h2>
							<span class="post-meta">
								<span>Purhcasing Team Leader</a></span>
							</span>
							<p class="font-size-md">A collaborative work environment and a solid team make work more enjoyable.
								I was also amazed by the company's focus on innovation and product quality.
								PT. Pralon also gave me the opportunity to attend various trainings and workshops to improve my skills.
								I feel connected to the company's vision and proud to be part of a team dedicated to producing the best quality products.</p>
						</span>
					</span>
				</span>
			</div>
			<!-- <div class="col-md-6">
					<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
						<span class="thumb-info-side-image-wrapper p-none hidden-xs">
							<img src="{{  asset('template/img/patterns/TESTIMONI 6.png') }}" class="img-responsive" alt="Career Pralon" style="width: 195px;">
						</span>
						<span class="thumb-info-caption">
							<span class="thumb-info-caption-text">
								<h2 class="text-semibold mb-md mt-xs">Lia Marliani</h2>
								<span class="post-meta">
									<span>Graphic Design & Multimedia</a></span>
								</span>
								<p class="font-size-md">A collaborative work environment and a solid team make work more enjoyable. 
														I was also amazed by the company's focus on innovation and product quality.
														PT. Pralon also gave me the opportunity to attend various trainings and workshops to improve my skills in work. 
														I feel connected to the company's vision and proud to be part of a team dedicated to producing the best quality products.</p>
							</span>
						</span>
					</span>
				</div> -->
		</div>
	</div>

</div>

@endsection