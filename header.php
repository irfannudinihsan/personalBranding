<!DOCTYPE html>
<html class="scroll-smooth" <?php language_attributes(); ?> class="dark">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header class=" absolute left-0 w-full z-50 py-6 font-poppins bg-white ">

			<div class="mx-auto container  ">
				<div class="lg:flex mx-auto lg:justify-between lg:items-center  ">
					<div id="logo" class="flex justify-between items-center">
						<div class="lg:w-[160px]  lg:block">

							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden font-normal text-blue-900 mt-4  text-lg  lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex  lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>


					<div id="toggle" class="flex mt-4 lg:mt-0">

						<span class="mr-2 text-sm text-slate-500">light</span>
						<input type="checkbox" class="hidden" id="dark-toggle">
						<label for="dark-toggle">

							<div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">

								<div class="toggle-circle h-4 w-4 bg-white rounded-full transition duration-300 ease-in-out">


								</div>
							</div>
						</label>
						<span class="mr-2 text-sm text-slate-500">dark</span>


					</div>

				</div>

			</div>

		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>