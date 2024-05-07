<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Receitas
 */

get_header();
?>
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Página de error</h1>
                            <ul>
                                <li>
                                    <a href="<?php echo home_url('/'); ?>">Home</a>
                                </li>
                                <li>404 Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Error Page Area Start Here -->
        <section class="error-page-wrap padding-top-80 padding-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-content-box">
                            <div class="error-figure-wrap">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/figure/404.png" alt="404" class="img-fluid">
                                <div class="error-center-figure">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/figure/404-middle.png" alt="404" class="img-fluid">
                                </div>
                            </div>
                            <h2 class="item-title">Desculpe! Nada foi encontrado!</h2>
                            <p class="item-details">Tente ir para a página inicial usando o botão abaixo.</p>
                            <a href="<?php echo home_url('/'); ?>" class="item-btn">VOLTAR PARA HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Error Page Area End Here -->
<?php get_footer();