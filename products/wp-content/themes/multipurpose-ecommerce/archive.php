<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="container">

	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</header>
	<?php endif; ?>
	<div class="row">
		<?php
		    $layout_setting = get_theme_mod( 'multipurpose_ecommerce_layout_settings','Right Sidebar');
		    if($layout_setting == 'Left Sidebar'){ ?>
		    <div id="sidebox" class="col-md-4 col-sm-4">
				<?php dynamic_sidebar('sidebox-1'); ?>
			</div>
			<div class="col-md-8 col-sm-8">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'multipurpose-ecommerce' ),
	                        'next_text'          => __( 'Next page', 'multipurpose-ecommerce' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-ecommerce' ) . ' </span>',
	                    ) );
	                ?>
       	 		</div>
			</div>
		<?php }else if($layout_setting == 'Right Sidebar'){ ?>
			<div class="col-md-8 col-sm-8">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'multipurpose-ecommerce' ),
	                        'next_text'          => __( 'Next page', 'multipurpose-ecommerce' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-ecommerce' ) . ' </span>',
	                    ) );
	                ?>
       	 		</div>
			</div>
			<div id="sidebox" class="col-md-4 col-sm-4">
				<?php dynamic_sidebar('sidebox-1'); ?>
			</div>
		<?php }else if($layout_setting == 'One Column'){ ?>
			<div class="col-md-12 col-sm-12">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'multipurpose-ecommerce' ),
	                        'next_text'          => __( 'Next page', 'multipurpose-ecommerce' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-ecommerce' ) . ' </span>',
	                    ) );
	                ?>
       	 		</div>
			</div>
		<?php }else if($layout_setting == 'Three Columns'){ ?>
			<div id="sidebox" class="col-md-3 col-sm-3">
				<?php dynamic_sidebar('sidebox-1'); ?>
			</div>
			<div class="col-md-6 col-sm-6">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'multipurpose-ecommerce' ),
	                        'next_text'          => __( 'Next page', 'multipurpose-ecommerce' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-ecommerce' ) . ' </span>',
	                    ) );
	                ?>
       	 		</div>
			</div>
			<div id="sidebox" class="col-md-3 col-sm-3">
				<?php dynamic_sidebar('sidebox-2'); ?>
			</div>
		<?php }else if($layout_setting == 'Four Columns'){ ?>
			<div id="sidebox" class="col-md-3 col-sm-3">
				<?php dynamic_sidebar('sidebox-1'); ?>
			</div>
			<div class="col-md-3 col-sm-3">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						
						get_template_part( 'template-parts/post/content' );

					endwhile;

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
				?>
				<div class="navigation">
	                <?php
	                    
	                    the_posts_pagination( array(
	                        'prev_text'          => __( 'Previous page', 'multipurpose-ecommerce' ),
	                        'next_text'          => __( 'Next page', 'multipurpose-ecommerce' ),
	                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-ecommerce' ) . ' </span>',
	                    ) );
	                ?>
       	 		</div>
			</div>
			<div id="sidebox" class="col-md-3 col-sm-3">
				<?php dynamic_sidebar('sidebox-2'); ?>
			</div>
			<div id="sidebox" class="col-md-3 col-sm-3">
				<?php dynamic_sidebar('sidebox-3'); ?>
			</div>
		<?php }else if($layout_setting == 'Grid Layout'){ ?>
			<div class="col-md-8 col-sm-8">
				<div class="row">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/post/gridlayout' );

						endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php
		                    
		                    the_posts_pagination( array(
		                        'prev_text'          => __( 'Previous page', 'multipurpose-ecommerce' ),
		                        'next_text'          => __( 'Next page', 'multipurpose-ecommerce' ),
		                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'multipurpose-ecommerce' ) . ' </span>',
		                    ) );
		                ?>
	       	 		</div>
	       	 	</div>
			</div>
			<div id="sidebox" class="col-md-4 col-sm-4">
				<?php dynamic_sidebar('sidebox-2'); ?>
			</div>
		<?php } ?>
	</div>
</div>

<?php get_footer();