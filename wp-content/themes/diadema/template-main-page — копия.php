<?php
/*
Template name: Main page
Theme Name: Diadema
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта Diadema
Version: 1.0
*/

get_header(); 
?>

<div class="main">
    <div class="slider">
        <div class="owl-carousel">
			<?php
				global $nggdb;
				$gallery_id = getNextGallery(get_the_ID(), 'banner_content_main_page');
				$gallery_image = $nggdb->get_gallery($gallery_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
				if($gallery_image){
					foreach($gallery_image as $image) {    
				?>
					<div class="carousel-slide carousel-slide-1">
						<div class="mask-slider">
							<div class="img-circle">
								<img src="<?php echo nextgen_esc_url($image->imageURL); ?>" alt="" />
							</div>
						</div>
						<div class="slider-description">
							<div class="container h-100">
								<div class="slide-text">
									<div class="center-block">
										<?php echo htmlspecialchars_decode($image->description, ENT_QUOTES); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php 
					}
				}
			?>
        </div>
    </div>
	
	<?php $content_block_a = get_field('block_a_main_page'); ?>
    <div class="section-work">
        <div class="container">
            <div class="row">
                <div class="col-12 title"><?php echo $content_block_a['main_title_block_a_main_page']; ?></div>
                <div class="col-12">
                    <div class="work-grid">
                        <div class="work-item">
                            <div class="work-img">
								<img src="<?php echo $content_block_a['image_a_block_a_main_page']['url']; ?>" alt="<?php echo $content_block_a['image_a_block_a_main_page']['alt']; ?>">
                            </div>
                            <div class="work-text">
								<?php echo $content_block_a['text_a_block_a_main_page']; ?>
                            </div>
                        </div>
                        <div class="work-item">
                            <div class="work-img">
                                <img src="<?php echo $content_block_a['image_b_block_a_main_page']['url']; ?>" alt="<?php echo $content_block_a['image_b_block_a_main_page']['alt']; ?>">
                            </div>
                            <div class="work-text">
								<?php echo $content_block_a['text_b_block_a_main_page']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<?php $content_block_b = get_field('block_b_main_page'); ?>
    <div class="section-mounting">
        <div class="mounting-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10">
                        <div class="title"><?php echo $content_block_b['main_title_block_b_main_page']; ?></div>
                        <div class="row">
                            <a href="#" class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target="#block-b-1-form">
                                <div class="mounting-item">
                                    <div class="mounting-img">
                                        <img src="<?php echo $content_block_b['image_a_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_a_block_b_main_page']['alt']; ?>">
                                    </div>
                                    <div class="mounting-title"><?php echo $content_block_b['text_a_block_b_main_page']; ?></div>
                                </div>
                            </a>
                            <a href="#" class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target="#block-b-2-form">
                                <div class="mounting-item">
                                    <div class="mounting-img">
                                        <img src="<?php echo $content_block_b['image_b_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_b_block_b_main_page']['alt']; ?>">
                                    </div>
                                    <div class="mounting-title"><?php echo $content_block_b['text_b_block_b_main_page']; ?></div>
                                </div>
                            </a>
                            <a href="#" class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target="#block-b-3-form">
                                <div class="mounting-item">
                                    <div class="mounting-img">
                                        <img src="<?php echo $content_block_b['image_c_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_c_block_b_main_page']['alt']; ?>">
                                    </div>
                                    <div class="mounting-title"><?php echo $content_block_b['text_c_block_b_main_page']; ?></div>
                                </div>
                            </a>
                            <a href="#" class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target="#block-b-4-form">
                                <div class="mounting-item">
                                    <div class="mounting-img">
                                        <img src="<?php echo $content_block_b['image_d_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_d_block_b_main_page']['alt']; ?>">
                                    </div>
                                    <div class="mounting-title"><?php echo $content_block_b['text_d_block_b_main_page']; ?></div>
                                </div>
                            </a>
                            <a href="#" class="col-12 col-sm-6 col-md-4" data-toggle="modal" data-target="#block-b-5-form">
                                <div class="mounting-item">
                                    <div class="mounting-img">
                                        <img src="<?php echo $content_block_b['image_e_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_e_block_b_main_page']['alt']; ?>">
                                    </div>
                                    <div class="mounting-title"><?php echo $content_block_b['text_e_block_b_main_page']; ?></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<?php $content_block_c = get_field('block_c_main_page'); ?>
        <div class="mounting-middle">
            <img src="<?php echo $content_block_c['image_a_block_c_main_page']['url']; ?>" alt="<?php echo $content_block_c['image_a_block_c_main_page']['alt']; ?>">
        </div>
        <div class="mounting-bottom">
            <div class="container">
                <div class="row">
                    <div class="title col-12"><?php echo $content_block_c['main_title_block_c_main_page']; ?></div>
                    <div class="col-12 col-md-6">
                        <?php echo $content_block_c['mark_text_a_main_title_block_c_main_page']; ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <?php echo $content_block_c['mark_text_b_main_title_block_c_main_page']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-recall">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 col-xl-9 h-100">
                    <div class="form-recall h-100">
                        <?php
                            $callback_block_c_main_page = $content_block_c['callback_block_c_main_page'];
                           
                            if($callback_block_c_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $callback_block_c_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php $content_block_d = get_field('block_d_main_page'); ?>
    <div class="section-services">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <?php echo $content_block_d['text_a_block_d_main_page']; ?>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="know-block-dog">
                        <?php echo $content_block_d['text_b_block_d_main_page']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $content_block_e = get_field('block_e_main_page'); ?>
    <div class="section-price">
        <div class="container">
            <div class="row">
                <div class="col-12"><h2><?php echo $content_block_e['main_title_block_e_main_page']; ?></h2></div>
                <div class="col-12"><h3><?php echo $content_block_e['main_sub_title_block_e_main_page']; ?></h3></div>
                <div class="row price-grid">
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="<?php echo $content_block_e['image_a_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_a_block_e_main_page']['alt']; ?>">
                            </div>
                            <div class="price-title"><?php echo $content_block_e['title_a_block_e_main_page']; ?></div>
                            <div class="price"><?php echo $content_block_e['price_a_block_e_main_page']; ?></div>
                            <a href="#" class="btn-price" data-toggle="modal" data-target="#block-e-1-form">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="<?php echo $content_block_e['image_b_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_b_block_e_main_page']['alt']; ?>">
                            </div>
                            <div class="price-title"><?php echo $content_block_e['title_b_block_e_main_page']; ?></div>
                            <div class="price"><?php echo $content_block_e['price_b_block_e_main_page']; ?></div>
                            <a href="#" class="btn-price" data-toggle="modal" data-target="#block-e-2-form">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="<?php echo $content_block_e['image_c_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_c_block_e_main_page']['alt']; ?>">
                            </div>
                            <div class="price-title"><?php echo $content_block_e['title_c_block_e_main_page']; ?></div>
                            <div class="price"><?php echo $content_block_e['price_c_block_e_main_page']; ?></div>
                            <a href="#" class="btn-price" data-toggle="modal" data-target="#block-e-3-form">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="price-item">
                            <div class="price-img">
                                <img src="<?php echo $content_block_e['image_d_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_d_block_e_main_page']['alt']; ?>">
                            </div>
                            <div class="price-title"><?php echo $content_block_e['title_d_block_e_main_page']; ?></div>
                            <div class="price"><?php echo $content_block_e['price_d_block_e_main_page']; ?></div>
                            <a href="#" class="btn-price" data-toggle="modal" data-target="#block-e-4-form">ЗАКАЗАТЬ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $content_block_f = get_field('block_f_main_page'); ?>
    <div class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3><?php echo $content_block_f['main_title_block_f_main_page']; ?></h3>
                </div>
                <div class="col-12 col-xl-6">
                    <?php echo $content_block_f['text_a_block_f_main_page']; ?>
                    <div class="sertificat-block">
                        <?php echo $content_block_f['text_b_block_f_main_page']; ?>
                    </div>
                    <?php echo $content_block_f['text_c_block_f_main_page']; ?>
                </div>
                <div class="col-12 col-xl-6">
                    <?php echo $content_block_f['text_d_block_f_main_page']; ?>
                    <div class="know-block">
                        <?php echo $content_block_f['text_e_block_f_main_page']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $content_block_g = get_field('block_g_main_page'); ?>
    <div class="section-object">
        <div class="container">
            <div class="row">
                <div class="col-12"><h2><?php echo $content_block_g['main_title_block_g_main_page']; ?></h2></div>
                <div class="col-12">
                    <?php echo $content_block_g['text_a_block_g_main_page']; ?>
                </div>
                <a href="#" class="col-12 col-md-6 col-xl-4" data-toggle="modal" data-target="#object-1">
                    <div class="object-grid">
                        <div class="object-img" style="background-image: url('<?php echo $content_block_g['image_a_block_g_main_page']['url']; ?>')"></div>
                        <div class="object-title"><?php echo $content_block_g['title_a_block_g_main_page']; ?></div>
                    </div>
                </a>
                <a href="#" class="col-12 col-md-6 col-xl-4" data-toggle="modal" data-target="#object-2">
                    <div class="object-grid">
                        <div class="object-img" style="background-image: url('<?php echo $content_block_g['image_b_block_g_main_page']['url']; ?>')"></div>
                        <div class="object-title"><?php echo $content_block_g['title_b_block_g_main_page']; ?></div>
                    </div>
                </a>
                <a href="#" class="col-12 col-md-6 col-xl-4" data-toggle="modal" data-target="#object-3">
                    <div class="object-grid">
                        <div class="object-img" style="background-image: url('<?php echo $content_block_g['image_c_block_g_main_page']['url']; ?>')"></div>
                        <div class="object-title"><?php echo $content_block_g['title_c_block_g_main_page']; ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php $content_block_h = get_field('block_h_main_page'); ?>
    <div class="section-contacts">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="contacts">
                        <div class="title"><?php echo $content_block_h['main_title_block_h_main_page']; ?></div>
                        <div class="contacts-item">
                            <div class="contacts-name"><?php echo $content_block_h['title_a_block_h_main_page']; ?></div>
                            <div class="contacts-description"><?php echo $content_block_h['text_a_block_h_main_page']; ?></div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-name"><?php echo $content_block_h['title_b_block_h_main_page']; ?></div>
                            <div class="contacts-description">
                                <?php echo $content_block_h['text_b_block_h_main_page']; ?>
                            </div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-name"><?php echo $content_block_h['title_c_block_h_main_page']; ?></div>
                            <div class="contacts-description">
                                <?php echo $content_block_h['text_c_block_h_main_page']; ?>
                            </div>
                        </div>
                        <div class="contacts-item">
                            <div class="contacts-name"><?php echo $content_block_h['title_d_block_h_main_page']; ?></div>
                            <div class="contacts-description">
                                <?php echo $content_block_h['text_d_block_h_main_page']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="form form-static">
                        <?php
                            $сallback_a_block_h_main_page = $content_block_h['сallback_a_block_h_main_page'];
                           
                            if($сallback_a_block_h_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_a_block_h_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="overlay">
    
    <!--Header form-->
    <div class="modal" id="header-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $callback_header_main_page = get_field('callback_header_main_page', 10);
                           
                            if($callback_header_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $callback_header_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Banner form-->
    <div class="modal" id="urgent-repairs">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $banner_cf_a_content_main_page = get_field('banner_cf_a_content_main_page', 10);
                           
                            if($banner_cf_a_content_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $banner_cf_a_content_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="emergency-exit">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $banner_cf_b_content_main_page = get_field('banner_cf_b_content_main_page', 10);
                           
                            if($banner_cf_b_content_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $banner_cf_b_content_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--block 2 form -->
    <div class="modal" id="block-b-1-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_a_block_b_main_page = $content_block_b['сallback_a_block_b_main_page'];
                           
                            if($сallback_a_block_b_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_a_block_b_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-b-2-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_b_block_b_main_page = $content_block_b['сallback_b_block_b_main_page'];
                           
                            if($сallback_b_block_b_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_b_block_b_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-b-3-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_c_block_b_main_page = $content_block_b['сallback_c_block_b_main_page'];
                           
                            if($сallback_c_block_b_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_c_block_b_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-b-4-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_d_block_b_main_page = $content_block_b['сallback_d_block_b_main_page'];
                           
                            if($сallback_d_block_b_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_d_block_b_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-b-5-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_e_block_b_main_page = $content_block_b['сallback_e_block_b_main_page'];
                           
                            if($сallback_e_block_b_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_e_block_b_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Services d block-->
    <div class="modal" id="services-mod">
        <div class="modal-dialog modal-xl">
            <div class="modal-content info-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body info-modal">
                    <?php echo $content_block_d['text_c_block_d_main_page']; ?>
                    <div class="btn-mod">
                        <button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#services-form">ЗАКАЗАТЬ ТО</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="services-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $callback_block_d_main_page = $content_block_d['callback_block_d_main_page'];
                           
                            if($callback_block_d_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $callback_block_d_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--block 5 form -->
    <div class="modal" id="block-e-1-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_a_block_e_main_page = $content_block_e['сallback_a_block_e_main_page'];
                           
                            if($сallback_a_block_e_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_a_block_e_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-e-2-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_b_block_e_main_page = $content_block_e['сallback_b_block_e_main_page'];
                           
                            if($сallback_b_block_e_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_b_block_e_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-e-3-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_c_block_e_main_page = $content_block_e['сallback_c_block_e_main_page'];
                           
                            if($сallback_b_block_e_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_b_block_e_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="block-e-4-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_d_block_e_main_page = $content_block_e['сallback_d_block_e_main_page'];
                           
                            if($сallback_d_block_e_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_d_block_e_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--certificates f block-->
    <div class="modal" id="sertificat-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $content_block_f['image_a_block_f_main_page']['url']; ?>" alt="<?php echo $content_block_f['image_a_block_f_main_page']['alt']; ?>" width="100%">
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="sertificat-2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $content_block_f['image_b_block_f_main_page']['url']; ?>" alt="<?php echo $content_block_f['image_b_block_f_main_page']['alt']; ?>" width="100%">
                </div>
            </div>
        </div>
    </div>
    
    <!--Text f block-->
    <div class="modal" id="details-mod">
        <div class="modal-dialog modal-xl">
            <div class="modal-content info-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body info-modal">
                    <?php echo $content_block_f['text_f_block_f_main_page']; ?>
                    <div class="btn-mod">
                        <button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#details-form">ЗАКАЗАТЬ ТО</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="details-form">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_b_block_f_main_page = $content_block_f['сallback_b_block_f_main_page'];
                            
                            if($сallback_b_block_f_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_b_block_f_main_page . ' "]'); 
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--block 6 form -->
    <div class="modal" id="orderZapchast">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <div class="modal-header form-modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form form-static">
                        <?php
                            $сallback_a_block_f_main_page = $content_block_e['сallback_a_block_f_main_page'];
                           
                            if($сallback_a_block_f_main_page){
                                echo do_shortcode('[contact-form-7 id=" ' . $сallback_a_block_f_main_page . ' "]'); 
                            }
                        ?>
                       <?php echo do_shortcode('[contact-form-7 id="153"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Text g block-->
    <div class="modal" id="object-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $content_block_g['image_a_block_g_main_page']['url']; ?>" alt="<?php echo $content_block_g['image_a_block_g_main_page']['alt']; ?>" width="100%">
                    <div class="object-title"><?php echo $content_block_g['title_a_block_g_main_page']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="object-2">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $content_block_g['image_b_block_g_main_page']['url']; ?>" alt="<?php echo $content_block_g['image_b_block_g_main_page']['alt']; ?>" width="100%">
                    <div class="object-title"><?php echo $content_block_g['title_b_block_g_main_page']; ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="object-3">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="/wp-content/themes/diadema/images/close-button.svg">
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo $content_block_g['image_c_block_g_main_page']['url']; ?>" alt="<?php echo $content_block_g['image_c_block_g_main_page']['alt']; ?>" width="100%">
                    <div class="object-title"><?php echo $content_block_g['title_c_block_g_main_page']; ?></div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php get_footer(); ?>