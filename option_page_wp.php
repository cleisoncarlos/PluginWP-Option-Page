<?php get_header(); ?>
<div class="bg_topo">
	<div class="container content_box">
		<div class="col-lg-3 col-md-6 box_azul" data-aos="fade-down">
			<div class="txt_box">
				<img class="center-block" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon1.png" alt="">
				<br>
				<p><strong><?php echo esc_attr( get_option( 'service_titulo_01' ) ); ?></strong></p>
				<hr>
				<p><?php echo esc_attr( get_option( 'service_texto_01' ) ); ?></p>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 box_azul2" data-aos="fade-down">
			<div class="txt_box">
				<img class="center-block" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon2.png" alt="">
				<br>
				<p><strong><?php echo esc_attr( get_option( 'service_titulo_02' ) ); ?></strong></p>
				<hr>
				<p><?php echo esc_attr( get_option( 'service_texto_02' ) ); ?></p>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 box_azul" data-aos="fade-down">
			<div class="txt_box">
				<img class="center-block" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon3.png" alt="">
				<br>
				<p><strong><?php echo esc_attr( get_option( 'service_titulo_03' ) ); ?></strong></p>
				<hr>
				<p><?php echo esc_attr( get_option( 'service_texto_03' ) ); ?></p>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 box_azul2" data-aos="fade-down">
			<div class="txt_box">
				<img class="center-block" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon4.png" alt="">
				<br>
				<p><strong><?php echo esc_attr( get_option( 'service_titulo_04' ) ); ?></strong></p>
				<hr>
				<p><?php echo esc_attr( get_option( 'service_texto_04' ) ); ?></p>
			</div>
		</div>
	</div>
</div>
<div class="sessao">
	<div class="container">
		<div class="col-lg-4 col-md-4 hidenn-sm hidden-xs" data-aos="fade-right">
			<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/dente.png" alt="dente">
		</div>
		<div class="col-lg-8 col-md-8" data-aos="fade-left">
			<p class="titulo"><?php echo esc_attr( get_option( 'map_option_1' ) ); ?></p>
			<hr>
			<p><?php echo esc_attr( get_option( 'map_option_2' ) ); ?></p>

			<button type="button" class="btn btn-info btn-sm pull-right">SAIBA MAIS</button>
		</div>
	</div>
</div>

<div class="sessao">
	<div class="container">
		<div class="col-lg-12" data-aos="fade-right">
			<p class="titulo">Principais serviços</p>
			<hr>
		</div>

		<div class="col-lg-6" data-aos="fade-right">
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon_1.png" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><?php echo esc_attr( get_option( 'service2_titulo_01' ) ); ?></h4>
					<small><?php echo esc_attr( get_option( 'service2_texto_01' ) ); ?></small>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-lg-6" data-aos="fade-right">
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon_2.png" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><?php echo esc_attr( get_option( 'service2_titulo_02' ) ); ?></h4>
					<small><?php echo esc_attr( get_option( 'service2_texto_03' ) ); ?></small>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-lg-6" data-aos="fade-right">
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon_3.png" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><?php echo esc_attr( get_option( 'service2_titulo_03' ) ); ?></h4>
					<small><?php echo esc_attr( get_option( 'service2_texto_03' ) ); ?></small>
				</div>
			</div>
			<hr>
		</div>
		<div class="col-lg-6" data-aos="fade-right">
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img class="media-object" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/icon_4.png" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading"><?php echo esc_attr( get_option( 'service2_titulo_04' ) ); ?></h4>
					<small><?php echo esc_attr( get_option( 'service2_texto_04' ) ); ?></small>
				</div>
			</div>
			<hr>
		</div>
	</div>
</div>

<div class="sessao_equipe">
	<div class="container">

		<div class="col-lg-12" data-aos="fade-right">
			<p class="titulo">Nossa equipe de Profissionais</p>
			<hr>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="fade-down">

			<div class="box_equipe">
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/dentista.jpg" alt="">
				<hr>
				<p><strong>Nome do dentista</strong></p>
				<small>Nisi cupidatat laborum irure aliqua et minim reprehenderit.</small>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="fade-down">

			<div class="box_equipe">
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/dentista.jpg" alt="">
				<hr>
				<p><strong>Nome do dentista</strong></p>
				<small>Nisi cupidatat laborum irure aliqua et minim reprehenderit.</small>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="fade-down">

			<div class="box_equipe">
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/dentista.jpg" alt="">
				<hr>
				<p><strong>Nome do dentista</strong></p>
				<small>Nisi cupidatat laborum irure aliqua et minim reprehenderit.</small>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6" data-aos="fade-down">

			<div class="box_equipe">
				<img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri()); ?>/images/dentista.jpg" alt="">
				<hr>
				<p><strong>Nome do dentista</strong></p>
				<small>Nisi cupidatat laborum irure aliqua et minim reprehenderit.</small>
			</div>
		</div>

	</div>
</div>
<div class="sessao">
	<div class="container">
		<div class="col-lg-12" data-aos="fade-right">
			<p class="titulo">Informativos</p>
			<hr>
		</div>

		<?php
		$the_query = new WP_Query(array(
			//'category_name' => 'editais',
			'posts_per_page' => 2
			));
			while ($the_query->have_posts()) : $the_query->the_post(); ?>

		<div class="col-lg-6 col-md-6" data-aos="fade-down">
			<div class="media">
				<div class="media-left">
					<a href="<?php the_permalink();?>">

						<?php
 if ( has_post_thumbnail() )
 	the_post_thumbnail('medium_large', array('class' => 'media-object'));
 else
 echo '<img src="'.get_template_directory_uri().'/images/news.jpg" alt="'.get_the_title().'" />';
 ?>

					</a>
				</div>
				<div class="media-body">
					<h4 class="media-heading">
						<?php the_title();?>
					</h4>
					<p><small>
							<? the_excerpt();?></small></p>

					<a href="<?php the_permalink();?>">
						<button type="button" class="btn btn-info btn-xs text-right pull-right">LEIA MAIS</button>
					</a>

				</div>
			</div>
			<hr>
		</div>
		<?php
			endwhile;
			wp_reset_postdata();
			?>
	</div>
</div>
<?php get_footer();?>
