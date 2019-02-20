<?php global $product;?>
<?php $post_thumbnail_id = get_post_thumbnail_id();
$url = wp_get_attachment_url( $post_thumbnail_id);

?>


<section class="container" style="margin-top:200px">
	<div class="row ">
		<div class="col-md-6">
			<div class="show-product">
				
				<!-- img principal -->
				<div class="slider-for">

					<div class="item">
						<?php if ( get_field( 'image') ) { ?>
							<img src="<?php the_field( 'image' ); ?>" alt="image" draggable="false"/>
						<?php } ?>
					</div>
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156748-1000-1000/STANDE-1510G-Z32_PRINCIPAL.png?v=636486878368200000"
						alt="image" draggable="false" />
					</div>
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156751-1000-1000/STANDE-1510G-Z32_C.png?v=636486878433070000"
						alt="image" draggable="false" />
					</div>
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156752-1000-1000/STANDE-1510G-Z32_D.png?v=636486878448700000"
						alt="image" draggable="false" />
					</div>

				</div>
				<!-- img pequeñas -->
				<div class="slider-nav">
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156750-1000-1000/STANDE-1510G-Z32_B.png?v=636486878412370000"
						alt="image" draggable="false" />
					</div>
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156748-1000-1000/STANDE-1510G-Z32_PRINCIPAL.png?v=636486878368200000"
						alt="image" draggable="false" />
					</div>
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156751-1000-1000/STANDE-1510G-Z32_C.png?v=636486878433070000"
						alt="image" draggable="false" />
					</div>
					<div class="item">
						<img src="https://tottobo.vteximg.com.br/arquivos/ids/156752-1000-1000/STANDE-1510G-Z32_D.png?v=636486878448700000"
						alt="image" draggable="false" />
					</div>

				</div>

			</div>
		</div>
		<div class="col-md-6">
			<div class="content-details">
				<div>
					<h2><?php the_title(); ?></h2>
					<ul class="ul-list">
						<li>
							<p><?php the_content(); ?></p>
						</li>

					</ul>
					<ul>
						<li>Diseño escarchado
						</li>
						<li> <span>Referencia: BJR40</span></li>
						<li> <span>Estado: Producto nuevo</span></li>
						<li>
						Mide 23cmx11cm</li>
					</ul>
					<div class="price-details">
						<a href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>" class="slide button" tabindex="0"> Add list</a>
                            <!-- 
                            	<p>$ 27,13 IVA inc.</p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- mas relacionados -->
            <section id="product" class="product container">
            	<div class="wrapper">
            		<h2>Popular products</h2>
            		<div class="product-popular">
            			<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 6 ); ?>
            			<?php $loop = new WP_Query( $args ); ?>

            			<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?> 
            				<div class="card-product animated wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
            					<a href="<?php the_permalink() ?>">
            						<div class="
            						img-product">
            						<?php if ( get_field( 'image') ) { ?>
            							<img src="<?php the_field( 'image' ); ?>" />
            						<?php } ?>
            					</div>
            					<div class="text-product">
            						<span><?php the_title(); ?></span>
            						<p><?php echo excerpt('5'); ?></p>
            						<div class="wrapper-buy">
            						</a>
            						<div class="container">
            							<div class="top"></div>
            							<div class="bottom">
            								<div class="left">
            									<div class="details">
            										<p> <?php echo $product->get_price_html(); ?></p>
            										<a href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>"> <div class="buy">
            											<img class="icono-add" src="<?php echo get_template_directory_uri();?>/assets/img/add.png" alt="">
            										</div></a>
            									</div>

            								</div>
            								<div class="right">
            									<div class="done">
            										<img src="https://img.icons8.com/color/48/000000/checkmark.png" width="25px">
            									</div>
            									<div class="details-done">
            										<p>added to your list
            										</p>
            									</div>
            									<!-- <div class="remove"><img src="https://img.icons8.com/color/48/000000/delete-sign.png" width="25px"></div> -->
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		<?php endwhile; ?>

            	</div>
            </div>
        </section>

    </section>