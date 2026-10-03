<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function () {
    add_theme_support('title-tag'); add_theme_support('post-thumbnails');
    add_theme_support('woocommerce'); add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox'); add_theme_support('wc-product-gallery-slider');
    add_theme_support('html5', ['search-form','comment-form','gallery','caption','style','script']);
    register_nav_menus(['primary'=>'Main navigation']);
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('classs-design',get_template_directory_uri().'/design.css',[], '0.1.0');
    wp_enqueue_style('classs-wp',get_template_directory_uri().'/wordpress.css',['classs-design'],'0.1.0');
    wp_enqueue_script('classs-navigation',get_template_directory_uri().'/navigation.js',[], '0.1.0',true);
});
function classs_link($slug) { return home_url('/'.trim($slug,'/').'/'); }
function classs_picture($id, $class='') {
    if (has_post_thumbnail($id)) return get_the_post_thumbnail($id,'large',['class'=>$class,'loading'=>'lazy']);
    $url=get_post_meta($id,'classs_image_url',true);
    return $url ? '<img src="'.esc_url($url).'" alt="'.esc_attr(get_the_title($id)).'" class="'.esc_attr($class).'" loading="lazy">' : '';
}
function classs_project_card($id) { ?>
<article class="card"><a class="card-media" href="<?php echo esc_url(get_permalink($id)); ?>"><?php echo classs_picture($id); ?><span class="tag"><?php echo esc_html(get_post_meta($id,'classs_difficulty',true)); ?></span></a><div class="card-body"><div class="meta"><?php echo esc_html(get_post_meta($id,'classs_technology',true)); ?></div><h3><a href="<?php echo esc_url(get_permalink($id)); ?>"><?php echo esc_html(get_the_title($id)); ?></a></h3><p><?php echo esc_html(wp_trim_words(get_post_field('post_content',$id),24)); ?></p><div class="card-bottom"><span>Indicative ₹<?php echo esc_html(number_format_i18n((float)get_post_meta($id,'classs_budget',true))); ?></span><a class="text-link" href="<?php echo esc_url(get_permalink($id)); ?>">View project</a></div></div></article>
<?php }
function classs_product_card($id) {
    if (!function_exists('wc_get_product')) return; $p=wc_get_product($id); if (!$p) return; ?>
<article class="card product"><a class="card-media" href="<?php echo esc_url(get_permalink($id)); ?>"><?php echo classs_picture($id); ?></a><div class="card-body"><h3><a href="<?php echo esc_url(get_permalink($id)); ?>"><?php echo esc_html($p->get_name()); ?></a></h3><div class="stock"><?php echo $p->is_in_stock()?'In stock':'Out of stock'; ?></div><div class="card-bottom"><b><?php echo wp_kses_post($p->get_price_html()); ?></b><a class="btn small outline" href="<?php echo esc_url(get_permalink($id)); ?>">View product</a></div></div></article>
<?php }
