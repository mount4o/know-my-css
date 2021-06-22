<?php 
/**
 * Template Name: Homepage
 *
 * Custom homepage template for the theme
 * 
 * @since  v1.0.0
 * @package DevriX_Starter
 */


get_header();

$query_images_args = array(
    'post_type'      => 'attachment',
    'post_mime_type' => 'image',
    'post_status'    => 'inherit',
    'posts_per_page' => - 1,
    'orderby' => 'post__in',
);

$query_images = new WP_Query( $query_images_args );

$images = array();
foreach ( $query_images->posts as $image ) {
    $images[] = wp_get_attachment_image_src( $image->ID )[0];
}

?>
<section class="home-section initial-section">
    <div class="home-first-section">
        <div class="home-first-post">
            <div class="first-post-image">
                <p class="image-notice first-section-image-notice"><i class="fas fa-star home-icon"></i> BREAKING</p>
                <img class="first-post-image" src="<?php echo esc_attr( $images[0] );?>">
            </div>
            <h1 class="first-post-title">Malaria vaccine to be tested on 4,800  children — UK scientist</h1>
            <p>Accusamus dolores quia dolorem quidem a suscipit molestias expedita et. Est cum molestiae. Eligendi dolores sint quia velit velit qui odio ab.</p>
            
            <div class="first-post-read-more"><a class="anchor-button" href="#">Read more</a></div>
        </div>
        <div class="home-post-list">
            <h3 class="post-list-title">Latest News</h3>
            <a class="nav-anchor listed-post-container bordered-post-container" href="#">
                <p class="listed-post-title">Doloremque ullam sed doloribus ut asperiores et sed in ut.</p>
                <p class="listed-post-excerpt">Adebayo Folorunsho-Francis - Dec 7, 2020</p>
            </a>
            <a class="nav-anchor listed-post-container bordered-post-container" href="#">
                <p class="listed-post-title">Doloremque ullam sed doloribus ut asperiores et sed in ut.</p>
                <p class="listed-post-excerpt">Adebayo Folorunsho-Francis - Dec 7, 2020</p>
            </a>
            <a class="nav-anchor listed-post-container bordered-post-container" href="#">
                <p class="listed-post-title">Doloremque ullam sed doloribus ut asperiores et sed in ut.</p>
                <p class="listed-post-excerpt">Adebayo Folorunsho-Francis - Dec 7, 2020</p>
            </a>
            <a class="nav-anchor listed-post-container bordered-post-container" href="#">
                <p class="listed-post-title">Doloremque ullam sed doloribus ut asperiores et sed in ut.</p>
                <p class="listed-post-excerpt">Adebayo Folorunsho-Francis - Dec 7, 2020</p>
            </a>
            <a class="nav-anchor listed-post-container" href="#">
                <p class="listed-post-title">Doloremque ullam sed doloribus ut asperiores et sed in ut.</p>
                <p class="listed-post-excerpt">Adebayo Folorunsho-Francis - Dec 7, 2020</p>
            </a>
            <a class="latest-news-link nav-anchor" href="#">See all latest news</a>
        </div>
    </div>
</section>
<section class="home-section home-second-section-outer">
    <div class="home-second-section">
        <a class="nav-anchor" href="#">
            <div class="second-section-post">
                <div class="second-section-post-inner">
                    <h5 class="second-section-post-title">WHO launches ‘infodemic alliance’ to fight COVID-19 misinformation in Africa</h5>
                    <p class="second-section-post-p">Yusuff Moshood - Dec 3, 2020</p>
                </div>
            </div>
        </a>
        <a class="nav-anchor" href="#">
            <div class="second-section-post">
                <div class="second-section-post-inner">
                    <h5 class="second-section-post-title">WHO launches ‘infodemic alliance’ to fight COVID-19 misinformation in Africa</h5>
                    <p class="second-section-post-p">Yusuff Moshood - Dec 3, 2020</p>
                </div>
            </div>
        </a>
        <a class="nav-anchor" href="#">
            <div class="second-section-post">
                <div class="second-section-post-inner">
                    <h5 class="second-section-post-title">WHO launches ‘infodemic alliance’ to fight COVID-19 misinformation in Africa</h5>
                    <p class="second-section-post-p">Yusuff Moshood - Dec 3, 2020</p>
                </div>
            </div>
        </a>
        <a class="nav-anchor" href="#">
            <div class="second-section-post">
                <div class="second-section-post-inner">
                    <h5 class="second-section-post-title">WHO launches ‘infodemic alliance’ to fight COVID-19 misinformation in Africa</h5>
                    <p class="second-section-post-p">Yusuff Moshood - Dec 3, 2020</p>
                </div>
            </div>
        </a>
    </div>
    <div class="second-section-image">
        <p class="image-notice second-section-image-notice"><i class="fas fa-arrow-left home-icon"></i>BREAKING</p>
        <img class="second-section-image" src="<?php echo esc_attr( $images[1] ); ?>">
    </div>
</section>
<section class="home-section">
    <div class="section-inner top-border-divider home-third-section">
        <h4 class="section-title">NEWS</h4>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[2] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[3] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[5] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[6] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>        
        </a>
        <div href="#" class="post-container large-post large-last-post">
            <img class="large-post-thumbnail" src="<?php echo esc_attr( $images[4] );?>">
            <h4 class="post-title">At doloremque id voluptatum dignissimos unde est voluptatem.</h4>
            <p class="post-date">Adebayo Folorunsho-Francis - Dec 3, 2020</p>
            <p class="post-excerpt">Sit voluptatum suscipit sunt sed ut ratione alias. Dolorem culpa alias quos. Aliquid iusto laboriosam alias. Optio ullam molestiae et non repellendus sit iste.</p>
            <a href="#" class="latest-news-link nav-anchor">Continue reading this article</a>
        </div>
    </div>
</section>
<section class="home-section">
    <div class="section-inner top-border-divider home-fourth-section">
        <h4 class="section-title">NEWS</h4>
        <a href="#" class="nav-anchor post-container">
            <img class="medimum-post-thumbnail" src="<?php echo esc_attr( $images[7] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="medimum-post-thumbnail" src="<?php echo esc_attr( $images[8] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="medimum-post-thumbnail" src="<?php echo esc_attr( $images[9] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
    </div>
</section>
<section class="home-section home-fifth-section">
    <div class="section-inner top-border-divider">
        <h4 class="section-title">NEWS</h4>
        <div class="post-container large-post large-first-post">
            <img class="large-post-thumbnail" src="<?php echo esc_attr( $images[10] );?>">
            <h4 class="post-title">At doloremque id voluptatum dignissimos unde est voluptatem.</h4>
            <p class="post-date">Adebayo Folorunsho-Francis - Dec 3, 2020</p>
            <p class="post-excerpt">Sit voluptatum suscipit sunt sed ut ratione alias. Dolorem culpa alias quos. Aliquid iusto laboriosam alias. Optio ullam molestiae et non repellendus sit iste.</p>
            <a href="#" class="latest-news-link nav-anchor">Continue reading this article</a>
        </div>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[11] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[12] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[13] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[14] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>        
        </a>
    </div>
</section>
<section class="home-section home-sixth-section">
    <div class="section-inner">
        <h4 class="section-title">SPORT</h4>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[15] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[16] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[17] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="post-thumbnail" src="<?php echo esc_attr( $images[18] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
    </div>
</section>
<section class="home-section home-seventh-section">
    <div class="section-inner">
        <h4 class="section-title">SPECIAL FEATURES</h4>
        <a href="#" class="nav-anchor post-container">
            <img class="medimum-post-thumbnail" src="<?php echo esc_attr( $images[19] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="medimum-post-thumbnail" src="<?php echo esc_attr( $images[20] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
        <a href="#" class="nav-anchor post-container">
            <img class="medimum-post-thumbnail" src="<?php echo esc_attr( $images[21] );?>">
            <h4 class="post-title">Et ipsam deleniti mollitia iure et incidunt assumenda expedita.</h4>
            <p class="post-date">Dec 2, 2020</p>
        </a>
    </div>
</section>

<?php get_footer(); ?>
