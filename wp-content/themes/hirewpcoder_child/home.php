<?php
/**
 * Template Name: Homepage Template
 *
 *
 */

get_header(); ?>

<main>
        <section id="sectionHeroArea" class="hero-area">
            <div class="bg__span_content" style="background:url(<?php echo the_field('hero_area_image_background'); ?>)"></div>
            <div class="container">
                <div class="display-flex content">
                    <div class="txtContent">
                        <h1><?php the_field('hero_area_heading_1'); ?></h1>
                        <h2><?php the_field('hero_area_heading_2'); ?></h2>
                        <div class="btnContent">
                        <?php 
                            $link = get_field('hero_area_button_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                    <div class="blankContent"></div>
                </div>
            </div>
        </section>
        <section id="what_wpdev_do" class="scroll-snapContainer contentContainer-scroller">
            <section class="subhero-area contentContainer-scroller">
                <div class="container">
                    <div class="content">
                        <div class="txtContent">
                            <h2><?php the_field('what_wordpress_developer_do_section_heading'); ?></h2>
                            <button>See Steps</button>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                $rows = get_field('what_wordpress_developer_do_section_repeater');
                $loopNum = 1;
                if( have_rows('what_wordpress_developer_do_section_repeater') ){
                    while( have_rows('what_wordpress_developer_do_section_repeater') ){ the_row(); 
                    echo'<section id="step'.$loopNum.'" class="contentContainer contentContainer-scroller">';
                        echo '<div class="container">';
                            echo '<div class="display-flex content">';
                                echo '<div class="txtContent">';
                                    echo '<div class="titleContant">';
                                        echo '<p><span>'.$loopNum.'</span></p>';
                                        echo '<h2>'.get_sub_field('what_wordpress_developer_do_section_repeater_heading').'</h2>';
                                    echo '</div>';
                                    echo get_sub_field('what_wordpress_developer_do_section_repeater_paragraph');
                                    echo ' <button>Close Steps</button>';
                                echo '</div>';
                                echo '<div class="titleContant">';
                                    echo '<img src="'.get_sub_field('what_wordpress_developer_do_section_repeater_image')['url'].'" alt="'.get_sub_field('what_wordpress_developer_do_section_repeater_image')['alt'].'">';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo'</section>';
                    $loopNum++;
                    }
                }
                ?>
        </section>
        <section id="services" class="servicesSection">
            <div class="container">
                <div class="content">
                    <div class="titleContent">
                        <h2><?php the_field('our_services_section_heading'); ?></h2>
                    </div>
                    <div class="boxContent">
                    <?php
                        $rows = get_field('our_services_section_repeater');
                        if( have_rows('our_services_section_repeater') ){
                            while( have_rows('our_services_section_repeater') ){ the_row(); 
                            echo '<div class="boxContainer">';
                                echo get_sub_field('our_services_section_icon');
                                echo '<h2>'.get_sub_field('our_services_section_heading_2').'</h2>';
                                echo get_sub_field('our_services_section_paragraph');
                            echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="aboutUs" class="about-usSection">
            <div class="img__bg__span" style="background:url(<?php echo the_field('about_us_section_image'); ?>)"></div>
            <div class="container">
                <div class="display-flex content">
                    <div class="txtContent">
                        <h2><?php the_field('about_us_section_heading'); ?></h2>
                        <div class="paragraphContent">
                            <?php the_field('about_us_section_paragraph'); ?>
                        </div>
                    </div>
                    <div class="blankContent"></div>
                </div>
            </div>
        </section>
        <section id="testimonial" class="testimonial-section">
            <div class="bg__span_content"></div>
            <div class="container">
                <div class="testimonial-Container">
                    <div class="heading-descContent">
                        <h2><?php the_field('testimonial_section_heading'); ?></h2>
                        <?php the_field('testimonial_section_paragraph'); ?>
                    </div>
                    <div class="display-flex content">
                    <?php
                        $rows = get_field('testimonial_section_repeater');
                        if( have_rows('testimonial_section_repeater') ){
                            while( have_rows('testimonial_section_repeater') ){ the_row(); 
                            echo '<div class="testimonialContent">';
                                echo '<img src="'.get_sub_field('testimonial_section_repeater_image')['url'].'" alt="'.get_sub_field('testimonial_section_repeater_image')['alt'].'">';
                                echo '<cite>'.get_sub_field('testimonial_section_repeater_heading').'</cite>';
                                echo get_sub_field('testimonial_section_repeater_paragraph');
                            echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="why_us" class="why-us-Section">
            <div class="container">
                <div class="headingContent">
                    <h2><?php the_field('why_choose_us_section_heading'); ?></h2>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                        $rows = get_field('why_choose_us_section_repeater');
                        if( have_rows('why_choose_us_section_repeater') ){
                            while( have_rows('why_choose_us_section_repeater') ){ the_row(); 
                            echo '<div class="swiper-slide">';
                                echo '<div class="txtcontent">';
                                    echo get_sub_field('why_choose_us_section_repeater_icon');
                                    echo '<h3>'.get_sub_field('why_choose_us_section_repeater_heading').'</h3>';
                                    echo get_sub_field('why_choose_us_section_repeater_paragraph');
                                echo '</div>';
                            echo '</div>';
                            }
                        }
                        ?>
                    </div>                
                    <div class="swiper-scrollbar js-swiper-scrollbar"></div>
                </div>
            </div>
        </section>
        <section id="contactUS" class="cta-section" style="background:url(<?php echo the_field('cta_section_bg'); ?>)">
            <div class="container">
                <div class="content">
                    <h2><?php the_field('cta_section_heading'); ?></h2>
                    <?php the_field('cta_section_paragraph'); ?>
                    <?php 
                        $link = get_field('cta_section_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
