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
                                    <img src="<?php echo nextgen_esc_url($image->imageURL); ?>"/>
                                </div>
                            </div>
                            <div class="slider-description">
                                <div class="container h-100">
                                    <div class="slide-text">
                                        <div class="center-block">
                                            <h2><?php echo $image->alttext; ?></h2>
                                            <p><?php echo htmlspecialchars_decode($image->description, ENT_QUOTES); ?></p>
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
                            <div class="work-item">
                                <div class="work-img">
                                    <img src="<?php echo $content_block_a['image_c_block_a_main_page']['url']; ?>" alt="<?php echo $content_block_a['image_c_block_a_main_page']['alt']; ?>">
                                </div>
                                <div class="work-text">
                                    <?php echo $content_block_a['text_c_block_a_main_page']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $content_block_b = get_field('block_b_main_page'); ?>
        <div class="section-action">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pre-title">
                            <?php echo $content_block_b['main_title_block_b_main_page']; ?>
                            <div class="yellow-sq"><?php echo $content_block_b['main_subtitle_block_b_main_page']; ?></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="title"><?php echo $content_block_b['subtitle_block_b_main_page']; ?></div>
                    </div>
                    
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-img-top"><img src="<?php echo $content_block_b['image_a_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_a_block_b_main_page']['alt']; ?>"></div>
                            <div class="card-title"><?php echo $content_block_b['text_a_block_b_main_page']; ?></div>
                            <div class="card-text"><?php echo $content_block_b['textarea_a_block_b_main_page']; ?></div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-img-top"><img src="<?php echo $content_block_b['image_b_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_b_block_b_main_page']['alt']; ?>"></div>
                            <div class="card-title"><?php echo $content_block_b['text_b_block_b_main_page']; ?></div>
                            <div class="card-text"><?php echo $content_block_b['textarea_b_block_b_main_page']; ?></div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-img-top"><img src="<?php echo $content_block_b['image_c_block_b_main_page']['url']; ?>" alt="<?php echo $content_block_b['image_c_block_b_main_page']['alt']; ?>"></div>
                            <div class="card-title"><?php echo $content_block_b['text_c_block_b_main_page']; ?></div>
                            <div class="card-text"><?php echo $content_block_b['textarea_c_block_b_main_page']; ?></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="section-recall right-recall">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="form-recall h-100">
                            <?php
                                $master_callback = get_field('master_callback_content_main_page', get_the_ID());
                               
                                if($master_callback){
                                    echo do_shortcode('[contact-form-7 id=" ' . $master_callback . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $content_block_c = get_field('block_c_main_page'); ?>
        <div class="section-mounting">
            <div class="mounting-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-9">
                            <div class="title"><?php echo $content_block_c['main_title_block_c_main_page']; ?></div>
                            <div class="row">
                                <a href="#" class="col-12 col-md-6 col-lg-4" data-toggle="modal" data-target="#type-a">
                                    <div class="mounting-item">
                                        <div class="mounting-img">
                                            <img src="<?php echo $content_block_c['image_a_block_c_main_page']['url']; ?>" alt="<?php echo $content_block_c['image_a_block_c_main_page']['alt']; ?>">
                                        </div>
                                        <div class="mounting-title"><?php echo $content_block_c['type_a_block_c_main_page']; ?></div>
                                    </div>
                                </a>
                                <a href="#" class="col-12 col-md-6 col-lg-4" data-toggle="modal" data-target="#type-b">
                                    <div class="mounting-item">
                                        <div class="mounting-img">
                                            <img src="<?php echo $content_block_c['image_b_block_c_main_page']['url']; ?>" alt="<?php echo $content_block_c['image_b_block_c_main_page']['alt']; ?>">
                                        </div>
                                        <div class="mounting-title"><?php echo $content_block_c['type_b_block_c_main_page']; ?></div>
                                    </div>
                                </a>
                                <a href="#" class="col-12 col-md-6 col-lg-4" data-toggle="modal" data-target="#type-c">
                                    <div class="mounting-item">
                                        <div class="mounting-img">
                                            <img src="<?php echo $content_block_c['image_c_block_c_main_page']['url']; ?>" alt="<?php echo $content_block_c['image_c_block_c_main_page']['alt']; ?>">
                                        </div>
                                        <div class="mounting-title"><?php echo $content_block_c['type_c_block_c_main_page']; ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mounting-middle">
                <img src="<?php echo $content_block_c['main_image_block_c_main_page']['url']; ?>" alt="<?php echo $content_block_c['main_image_block_c_main_page']['alt']; ?>">
            </div>
            
            <?php $content_block_d = get_field('block_d_main_page'); ?>
            <div class="mounting-bottom">
                <div class="container">
                    <div class="row">
                        <div class="title col-12"><?php echo $content_block_d['main_title_block_d_main_page']; ?></div>
                        <div class="col-12">
                            <div class="max__att">
                                <?php echo $content_block_d['text_a_block_d_main_page']; ?>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 card-block">
                            <div class="card">
                                <div class="card-img-top"><img src="<?php echo $content_block_d['image_a_subblock_d_main_page']['url']; ?>" alt="<?php echo $content_block_d['image_a_subblock_d_main_page']['alt']; ?>"></div>
                                <div class="card-title"><?php echo $content_block_d['title_a_subblock_d_main_page']; ?></div>
                                <div class="card-text">
                                    <?php echo $content_block_d['text_a_subblock_d_main_page']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 card-block">
                            <div class="card">
                                <div class="card-img-top"><img src="<?php echo $content_block_d['image_b_subblock_d_main_page']['url']; ?>" alt="<?php echo $content_block_d['image_b_subblock_d_main_page']['alt']; ?>"></div>
                                <div class="card-title"><?php echo $content_block_d['title_b_subblock_d_main_page']; ?></div>
                                <div class="card-text">
                                    <?php echo $content_block_d['text_b_subblock_d_main_page']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $content_block_e = get_field('block_e_main_page'); ?>
        <div class="section-order" style="background-image: url('<?php echo $content_block_e['image_a_block_e_main_page']['url']; ?>')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title"><?php echo $content_block_e['main_title_block_e_main_page']; ?></div>
                    </div>
                    <div class="col-12">
                        <div class="order-grid">
                            <div class="order-item">
                                <div>
                                    <div class="order-img"><img src="<?php echo $content_block_e['image_a_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_a_block_e_main_page']['alt']; ?>"></div>
                                    <p><?php echo $content_block_e['title_a_block_e_main_page']; ?></p></div>
                            </div>
                            <div class="order-item">
                                <div class="order-arr">→</div>
                                <div>
                                    <div class="order-img"><img src="<?php echo $content_block_e['image_b_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_b_block_e_main_page']['alt']; ?>"/></div>
                                    <p><?php echo $content_block_e['title_b_block_e_main_page']; ?></p></div>
                            </div>
                            <div class="order-item">
                                <div class="order-arr">→</div>
                                <div>
                                    <div class="order-img"><img src="<?php echo $content_block_e['image_c_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_c_block_e_main_page']['alt']; ?>"/></div>
                                    <p><?php echo $content_block_e['title_c_block_e_main_page']; ?></p></div>
                            </div>
                            <div class="order-item">
                                <div class="order-arr">→</div>
                                <div>
                                    <div class="order-img"><img src="<?php echo $content_block_e['image_d_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_d_block_e_main_page']['alt']; ?>"/></div>
                                    <p><?php echo $content_block_e['title_d_block_e_main_page']; ?></p></div>
                            </div>
                            <div class="order-item">
                                <div class="order-arr">→</div>
                                <div>
                                    <div class="order-img"><img src="<?php echo $content_block_e['image_e_block_e_main_page']['url']; ?>" alt="<?php echo $content_block_e['image_e_block_e_main_page']['alt']; ?>"/></div>
                                    <p><?php echo $content_block_e['title_e_block_e_main_page']; ?></p></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="#" title="ЗАКАЗАТЬ" class="btn-order" data-toggle="modal" data-target="#installation-delivery">ЗАКАЗАТЬ</a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $content_block_f = get_field('block_f_main_page'); ?>
        <div class="section-services">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <?php echo $content_block_f['text_a_block_f_main_page']; ?>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="know-block">
                            <?php echo $content_block_f['text_b_block_f_main_page']; ?>
                            
                            <a href="#" class="btn-details" data-toggle="modal" data-target="#hotels-install">ПОДРОБНЕЕ</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-services" style="background-image: url('<?php echo $content_block_f['image_block_f_main_page']['url']; ?>')"></div>
        </div>
        
        <div class="section-recall">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-xl-9 h-100">
                        <div class="form-recall h-100">
                            <?php
                                $ten = get_field('ten_callback_content_main_page', get_the_ID());
                               
                                if($ten){
                                    echo do_shortcode('[contact-form-7 id=" ' . $ten . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php $content_block_g = get_field('block_g_main_page'); ?>
        <div class="section-podgotovka">
            <div class="container">
                <div class="row">
                    <div class="col-12"><h2><?php echo $content_block_g['main_title_block_g_main_page']; ?></h2></div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-img-top" style="background-image: url('<?php echo $content_block_g['image_a_subblock_g_main_page']['url']; ?>')"></div>
                            <div class="card-text">
                                <?php echo $content_block_g['text_a_subblock_g_main_page']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-img-top" style="background-image: url('<?php echo $content_block_g['image_b_block_g_main_page']['url']; ?>')"></div>
                            <div class="card-text">
                                <?php echo $content_block_g['text_b_subblock_g_main_page']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-img-top" style="background-image: url('<?php echo $content_block_g['image_c_subblock_g_main_page']['url']; ?>')"></div>
                            <div class="card-text">
                                <?php echo $content_block_g['text_c_subblock_g_main_page']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="garranty"><img src="<?php echo $content_block_g['image_d_subblock_g_main_page']['url']; ?>"><i><?php echo $content_block_g['text_d_subblock_g_main_page']; ?></i></div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if( have_rows('faq_content_main_page')){ ?>
        <div class="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3>Часто задаваемые вопросы</h3>
                    </div>
                    <div class="col-12">
                        <div class="accordion" id="accordion">
                            <?php $i = 1; ?>
                            <?php
                                while ( have_rows('faq_content_main_page') ) { the_row();
                                $i++;
                            ?>
                            <div class="card">
                                <div class="card-header" id="heading<?php echo $i; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                            <?php the_sub_field('question_content_main_page'); ?>
                                            <div class="pl_m"><img src="/wp-content/themes/diadema/images/plus.svg" class="plus"/>
                                                <img src="/wp-content/themes/diadema/images/minus.svg" class="minus"/></div>
                                        </button>
                                    </h2>
                                </div>
    
                                <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php the_sub_field('answer_content_main_page'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <div class="section-map">
            <?php echo get_field('maps_content_main_page'); ?>
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
        <!-- HEADER FORM -->
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
                                $callback_header_main_page = get_field('callback_header_main_page', get_the_ID());
                               
                                if($callback_header_main_page){
                                    echo do_shortcode('[contact-form-7 id=" ' . $callback_header_main_page . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Монтаж тип 1 -->
        <div class="modal" id="type-a">
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
                                $type_a = $content_block_c['callback_a_block_c_main_page'];
                               
                                if($type_a){
                                    echo do_shortcode('[contact-form-7 id=" ' . $type_a . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Монтаж тип 2 -->
        <div class="modal" id="type-b">
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
                                $type_b =  $content_block_c['callback_b_block_c_main_page'];
                               
                                if($type_b){
                                    echo do_shortcode('[contact-form-7 id=" ' . $type_b . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Монтаж тип 3 -->
        <div class="modal" id="type-c">
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
                                $type_c = $content_block_c['callback_c_block_c_main_page'];
                               
                                if($type_c){
                                    echo do_shortcode('[contact-form-7 id=" ' . $type_c . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Монтаж и доставка -->
        <div class="modal" id="installation-delivery">
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
                                $installation = $content_block_e['сallback_d_block_e_main_page'];
                               
                                if($installation){
                                    echo do_shortcode('[contact-form-7 id=" ' . $installation . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Монтаж и доставка в отель -->
        <div class="modal" id="hotels-install">
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
                                $hotels = $content_block_f['callback_block_f_main_page'];
                               
                                if($hotels){
                                    echo do_shortcode('[contact-form-7 id=" ' . $hotels . ' "]'); 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>