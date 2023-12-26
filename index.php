<?php get_header(); ?>

<!-- section hero -->
<section id="home" class="pt-40 bg-blue-50 dark:bg-red-700 bg-opacity-70 relative -z-10">
	<div class="container mx-auto md:px-10 ">
		<div class="flex flex-wrap center">
			<!-- description hero -->
			<div class="w-full px-2 lg:w-2/3 flex flex-col justify-center lg:pr-10 xl:pr-40 2xl:pr-60 ">
				<p class="font-semibold text-xl text-blue-900 poppins inline-block">Hi, Im</p>
				<h1 class="font-bold text-4xl lg:text-6xl text-blue-500 mb-4 font-poppins">Irfannudin Ihsan</h1>

				<p class="font-semibold text-xl text-blue-900 mb-4 font-poppins px-2 p-1 w-fit rounded-md bg-blue-100 inline-block ">Web Developer</p>


				<p class="text-slate-400 font-poppins text-sm font-normal lg:me-10 ">You call me Irfan. I am interested in Web Developer and UI/UX Designer. I usually create designs using Figma and then implement them in HTML, CSS, Javascript, React JS, or Wordpress.

					<br> <br> Thank you for your support and if you would like to collaborate.
				</p>

				<div class="mt-6 ">
					<a href="" class="inline-block bg-blue-500 py-3 px-8 mx-1  rounded-full text-white mb-3 font-semibold text-sm font-poppins">Download CV</a>
					<a href="" class="inline-block bg-white py-3 px-8 mx-1 rounded-full text-blue-500  border-2 border-blue-500 text-sm font-semibold font-poppins">Contact</a>
				</div>


			</div>

			<!-- image hero -->
			<div class="w-full lg:w-1/3">
				<div class="relative mt-10 -z-1 ">

					<img src="<?php bloginfo('template_url') ?>/images/photo.png" alt="irfannudin ihsan" class="w-full mx-auto">

					<span class="absolute  w-[240px] xs:w-[360px] bottom-0 -z-10 w-xl left-1/2 -translate-x-1/2">
						<img class="w-full" src="<?php bloginfo('template_url') ?>/images/blob_blue.svg">
					</span>
				</div>

			</div>

		</div>
</section>


<!-- sosial media -->
<section id="sosial media">

	<div class="container font-poppins">

		<div class="mx-auto w-full md:flex flew-wrap lg:w-[1200px] bg-white p-4 lg:p-8 rounded-none lg:rounded-full lg:-mt-6 xl:-mt-12 - z-10 absolute left-1/2 transform -translate-x-1/2 shadow-lg shadow-slate-200   ">

			<div class="flex w-full justify-center my-4 snap-center">
				<div class="p-3 bg-blue-900 rounded-full mx-1 ">

					<img width="28" height="28" src="<?php bloginfo('template_url') ?>/images/github.svg" alt="">


				</div>

				<div class="mx-1">
					<h1 class="text-lg font-bold text-blue-900 font-blue-900">Github </h1>
					<p class="text-sm font-normal text-slate-500">irfannudinihsan</p>

				</div>

			</div>
			<div class="flex w-full justify-center my-4 snap-center">
				<div class="p-3 bg-blue-900 rounded-full mx-1 ">

					<img width="28" height="28" src="<?php bloginfo('template_url') ?>/images/dribble.svg" alt="">


				</div>

				<div class="mx-1">
					<h1 class="text-lg font-bold text-blue-900 font-blue-900">Dribbble </h1>
					<p class="text-sm font-normal text-slate-500">irfannudinihsan</p>

				</div>

			</div>
			<div class="flex w-full justify-center my-4 snap-center">
				<div class="p-3 bg-blue-900 rounded-full mx-1 ">

					<img width="28" height="28" src="<?php bloginfo('template_url') ?>/images/linkedin.svg" alt="">




				</div>

				<div class="mx-1">
					<h1 class="text-lg font-bold text-blue-900 font-blue-900">Linkedin </h1>
					<p class="text-sm font-normal text-slate-500">irfannudinihsan</p>

				</div>

			</div>
			<div class="flex w-full justify-center my-4 snap-center">
				<div class="p-3 bg-blue-900 rounded-full mx-1 ">

					<img width="28" height="28" src="<?php bloginfo('template_url') ?>/images/instagram.svg" alt="ig">



				</div>

				<div class="mx-1">
					<h1 class="text-lg font-bold text-blue-900 font-blue-900">Instagram </h1>
					<p class="text-sm font-normal text-slate-500">irfannudinihsan</p>


				</div>

			</div>

		</div>


	</div>


</section>

<!-- section service -->
<section id="service" class="pt-96 sm:pt-60 sm:pb-20 ">

	<div class="container font-poppins mx-auto md:px-10">

		<div class="grid grid-cols-1 xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-4 gap-3">

			<!-- item grid -->
			<div class="">
				<p class="font-semibold text-xl text-blue-900 poppins inline-block">Service</p>
				<h2 class="font-bold text-3xl md:text-4xl lg:text-4xl text-blue-500 mb-4 font-poppins">services for collaboration</h2>

			</div>


			<!-- item grid -->
			<div class="flex flex-col items-center  rounded-xl shadow-2xl p-10  shadow-slate-200">
				<div class="p-3 bg-blue-100 rounded-full  inline-block mb-3">
					<img width="56" height="56" src="<?php bloginfo('template_url') ?>/images/web.svg" alt="">
				</div>

				<div class="mb-3 px-2 ">
					<h1 class="text-lg  font-semibold  ">Web Developer</h1>
				</div>

				<div class="mb-3">

					<p class="text-slate-400 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime et nostrum ab.</p>

				</div>

				<div class=" w-full flex justify-center flex-wrap">



					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/html.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/css.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/js.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/bt.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/tw.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/rj.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/lrv.svg" alt="">
					<img class="mx-2 my-2" width="32" height="28" src="<?php bloginfo('template_url') ?>/images/wp.svg" alt="">

				</div>

			</div>
			<div class="flex flex-col items-center  rounded-xl shadow-2xl p-10  shadow-slate-200">
				<div class="p-3 bg-blue-100 rounded-full  inline-block mb-3">
					<img width="56" height="56" src="<?php bloginfo('template_url') ?>/images/webdesign.svg" alt="">
				</div>

				<div class="mb-3 px-2 ">
					<h1 class="text-lg  font-semibold ">Web Design</h1>
				</div>

				<div class="mb-3">

					<p class="text-slate-400 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime et nostrum ab.</p>

				</div>

				<div class=" w-full flex justify-center flex-wrap">



					<img class="mx-2 my-2 " width="32" height="32" src="<?php bloginfo('template_url') ?>/images/html.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/css.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/bt.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/tw.svg" alt="">
					<img class="mx-2 my-2" width="32" height="28" src="<?php bloginfo('template_url') ?>/images/wp.svg" alt="">
					<img class="mx-2 my-2" width="32" height="28" src="<?php bloginfo('template_url') ?>/images/wf.svg" alt="">

				</div>

			</div>
			<div class="flex flex-col items-center  rounded-xl shadow-2xl p-10  shadow-slate-200">
				<div class="p-3 bg-blue-100 rounded-full  inline-block mb-3">
					<img width="56" height="56" src="<?php bloginfo('template_url') ?>/images/ui.svg" alt="">
				</div>

				<div class="mb-3 px-2 ">
					<h1 class="text-lg  font-semibold ">UI/UX Design</h1>
				</div>

				<div class="mb-3">

					<p class="text-slate-400 text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime et nostrum ab.</p>

				</div>

				<div class=" w-full flex justify-center flex-wrap">



					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/fg.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/cv.svg" alt="">
					<img class="mx-2 my-2" width="32" height="32" src="<?php bloginfo('template_url') ?>/images/ai.svg" alt="">


				</div>


			</div>




		</div>


	</div>

</section>

<section id="article" class="font-poppins pt-20 pb-20">

	<div class="container mx-auto md:px-10">
		<!-- title section -->
		<div class="mb-4">
			<p class="font-bold text-xl text-blue-900 poppins inline-block">New article</p>
			<h1 class="font-bold text-3xl md:text-4xl lg:text-4xl text-blue-500 mb-4 font-poppins">Article</h1>
		</div>



		<div class=" grid grid-cols-1 xs:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-4 gap-3 ">

			<!-- test index copy -->
			<?php if (have_posts()) : ?>
				<?php
				while (have_posts()) :
					the_post();
				?>

					<?php get_template_part('template-parts/content', get_post_format()); ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div>


		<!--  start remove -->


</section>







<!-- section Achivement -->

<section id="contact" class="pt-40 pb-40 font-poppins bg-[#FBFBFB] ">

	<div class="container mx-auto md:px-10">

		<!-- title section -->
		<div class="flex flex-wrap center">

			<!-- description section -->
			<div class="w-full lg:w-1/3  ">
				<h2 class="font-bold text-3xl md:text-4xl lg:text-4xl text-blue-500 mb-4 font-poppins">

					If you need Webdev, contact me
				</h2>

				<p class="mb-4 text-slate-400 text-left">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, ipsam a! Doloremque.
				</p>


			</div>





			<!-- content contact -->
			<div class="w-full lg:w-2/3 ">

				<!-- grid grid-cols-1 xs:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-4 gap-3 -->


				<div class="grid grid-cols-1 xs:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-x-16 gap-y-16 ">

					<!-- item grid -->
					<div class="flex flex-col items-center justify-center rounded-xl  aspect-video bg-blue-100 bg-opacity-50 relative ">
						<div class="absolute -top-8">
							<div class="p-6 bg-blue-900 rounded-full mx-auto inline-block mb-2">
								<img class="w-16 xl:w-20" src="<?php bloginfo('template_url') ?>/images/email-white.svg" alt="">
							</div>

						</div>

						<div class="text-center mt-10  ">

							<h2 class="text-lg  font-semibold lg:text-xl  ">Email</h2>
							<p class="text-slate-400 text-sm text-center lg:text-lg">irfannudinihsan@gmail.com</p>

						</div>

					</div>
					<!-- end item grid -->
					<!-- item grid -->
					<div class="flex flex-col items-center justify-center rounded-xl aspect-video bg-blue-100 bg-opacity-50 relative ">
						<div class="absolute -top-8">
							<div class="p-6 bg-blue-900 rounded-full mx-auto inline-block mb-2">
								<img class="w-16 xl:w-20" src="<?php bloginfo('template_url') ?>/images/wa-white.svg" alt="">
							</div>

						</div>

						<div class="text-center mt-10  ">

							<h2 class="text-lg  font-semibold lg:text-xl  ">Whatsapp</h2>
							<p class="text-slate-400 text-sm text-center lg:text-lg">+628-5831-0084-76</p>

						</div>

					</div>
					<!-- end item grid -->
					<!-- item grid -->
					<div class="flex flex-col items-center justify-center rounded-xl aspect-video bg-blue-100 bg-opacity-50 relative ">
						<div class="absolute -top-8">
							<div class="p-6 bg-blue-900 rounded-full mx-auto inline-block mb-2">
								<img class="w-16 xl:w-20" src="<?php bloginfo('template_url') ?>/images/linkedin-white.svg" alt="">
							</div>

						</div>

						<div class="text-center mt-10  ">

							<h2 class="text-lg  font-semibold lg:text-xl   ">Linkedin</h2>
							<p class="text-slate-400 text-sm text-center lg:text-lg">irfanudinihsan</p>

						</div>

					</div>
					<!-- end item grid -->
					<!-- item grid -->
					<div class="flex flex-col items-center justify-center rounded-xl  aspect-video bg-blue-100 bg-opacity-50 relative ">
						<div class="absolute -top-8">
							<div class="p-6 bg-blue-900 rounded-full mx-auto inline-block mb-2">
								<img class="w-16 xl:w-20" src="<?php bloginfo('template_url') ?>/images/instagram.svg" alt="">
							</div>

						</div>

						<div class="text-center mt-10  ">

							<h2 class="text-lg  font-semibold lg:text-xl  ">Instagram</h2>
							<p class="text-slate-400 text-sm text-center lg:text-lg">irfannudinihsan</p>

						</div>

					</div>
					<!-- end item grid -->






				</div>



			</div>




		</div>

	</div>

</section>




<section id="customer" class="pt-40 font-poppins">

	<div class="container mx-auto md:px-10">

		<!-- title section -->
		<div class="mb-10">



			<p class="font-bold text-xl text-blue-900 poppins inline-block">Customers Review</p>
			<h1 class="font-bold text-3xl md:text-4xl lg:text-4xl text-blue-500 mb-4 font-poppins">What Client</h1>
		</div>

		<div class="flex flex-wrap center justify-between">

			<!-- card customer -->
			<div class="w-full lg:w-1/2 mx-auto px-2  ">

				<div class="p-6 rounded-xl     mb-6 shadow-2xl shadow-blue-100">

					<div class="flex mb-4">

						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">
						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">
						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">
						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">


					</div>

					<p class=" mb-4 text-slate-500">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, quisquam qui! Placeat voluptas consequuntur explicabo?
					</p>

					<div class=" mb-4">

						<!-- for email -->
						<div class="flex">
							<img width="60px" class="rounded-full" src="<?php bloginfo('template_url') ?>/images/photo.png" alt="irfannudin ihsan">


							<div class="mx-1">
								<h1 class="text-lg font-bold ">Jonn Canedy </h1>
								<p class="text-slate-400 text-sm text-cente">Web Developer</p>


							</div>

						</div>


					</div>


				</div>


			</div>

			<!-- card customer -->
			<div class="w-full lg:w-1/2 mx-auto px-2  ">

				<div class="p-6 rounded-xl     mb-6 shadow-2xl shadow-blue-100">

					<div class="flex mb-4">

						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">
						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">
						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">
						<img class="mx-1" width="24px" height="24px" src="<?php bloginfo('template_url') ?>/images/star.png" alt="">


					</div>

					<p class=" mb-4 text-slate-500">
						Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, quisquam qui! Placeat voluptas consequuntur explicabo?
					</p>

					<div class=" mb-4">

						<div class="flex">
							<img width="60px" class="rounded-full" src="<?php bloginfo('template_url') ?>/images/photo.png" alt="irfannudin ihsan">




							<div class="mx-1">
								<h1 class="text-lg font-bold ">Jonn Canedy </h1>
								<p class="text-slate-400 text-sm text-cente">Web Developer</p>

							</div>

						</div>


					</div>


				</div>


			</div>

		</div>

	</div>

</section>


<section id="" class="pt-40">

	<div class="container mx-auto md:px-10">

		<!-- title section -->
		<div class="">



			<p class="font-semibold text-xl text-blue-900 poppins inline-block">Subcribe</p>
			<h1 class="font-bold text-3xl md:text-4xl lg:text-4xl text-blue-500 mb-4 font-poppins">Contact Us </h1>
		</div>

		<div class="flex flex-wrap center justify-between">


			<!-- card customer -->
			<div class="w-full lg:w-1/2    ">

				<!-- for email -->

				<div class="relative mt-10 -z-1 ">
					<img src="<?php bloginfo('template_url') ?>/images/email.png" alt="irfannudin ihsan" class="max-w-full mx-auto pr-20 pl-2  ">
				</div>



			</div>

			<!-- card customer -->
			<div class="w-full lg:w-1/2 mx-auto  ">

				<form action="">

					<div class="mb-4">

						<label for="" form="email" class="block font-poppins font-normal mb-1  dark:text-slate-100">Your Name</label>
						<input type="email" id="email" class="border bg-gray-50 border-gray-300 w-full px-2 py-3 block text-gray-900 text-sm  rounded-lg placeholder:text-slate-500 " />



					</div>
					<div class="mb-4">

						<label for="" form="email" class="block font-poppins font-normal mb-1  dark:text-slate-100">Your Email</label>
						<input type="email" id="email" class="border bg-gray-50 border-gray-300 w-full px-2 py-3 block text-gray-900 text-sm  rounded-lg placeholder:text-slate-500 " />



					</div>
					<div class="mb-4">

						<label for="" form="email" class="block font-poppins font-normal mb-1  dark:text-slate-100">Your Subject</label>
						<input type="email" id="email" class="border bg-gray-50 border-gray-300 w-full px-2 py-3 block text-gray-900 text-sm  rounded-lg placeholder:text-slate-500 " />



					</div>
					<div class="mb-4">

						<label for="" form="email" class="block font-poppins font-normal mb-1  dark:text-slate-100">Your Message</label>

						<textarea type="email" id="email" name="" id="" cols="20" rows="6" class="border bg-gray-50 border-gray-300 w-full px-2 py-10 block text-gray-900 text-sm  rounded-lg placeholder:text-slate-500 ">


		</textarea>

					</div>






					<div class="mb-4">
						<a href="" class="inline-block bg-blue-500 py-3 px-8 rounded-full text-white mb-3 font-semibold text-sm font-poppins">Submit</a>
					</div>

				</form>


			</div>








		</div>

	</div>

</section>




<?php
get_footer();
