<?php
/*
Theme Name: Diadema
Theme URI: https://mkvadrat.com/
Author: mkvadrat
Author URI: https://mkvadrat.com/
Description: Тема Psychologue
Version: 1.0
*/

get_header();
?>

    <div class="section-404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-md-push-3 col-sm-6 col-sm-push-3">
                    <div class="page-404">
                        <h1>Ошибка 404</h1>
                        <h3>Данная страница не найдена</h3>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="light-button">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>