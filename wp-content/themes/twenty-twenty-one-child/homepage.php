    <?php
    //Template Name: Homepage

    get_header();

    ?>
    <div class="gcl-homepage">

        <section class="home-banner d-none">
            <div class="container-flud p-0">
                <div class="get-tickets">
                    <div class="swiper home_banner_slider">
                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide">
                                <a href="#"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php

        $args = array(
            'post_type'      => 'banner_slider',
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' =>   -1,
        );
        $the_query = new WP_Query($args);
        ?>
        <!-- Listing -->
        <?php if ($the_query->have_posts()) : ?>

            <section class="home-banner pt-2 pt-md-3">
                <div class="container-fluid p-0">
                    <div class="gcl-matches swiper-container position-relative">

                        <div class="swiper gcl_banner_slider">
                            <div class="swiper-wrapper text-center">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>
                        <div class="q-swiper-button swiper-button-next"></div>
                        <div class="q-swiper-button swiper-button-prev"></div>
                    </div>
                </div>
            </section>
            <?php wp_reset_postdata(); endif; ?>

            <section class="home-banner pt-md-4" id="about">
                <div class="container pt-3 pt-md-5">
                    <div class="gcl-heading text-center pt-3 pt-md-5">
                        <h2 class="text-white"><?php the_field('about_title'); ?></h2>
                    </div>
                    <div class="gcl-about position-relative px-0 px-md-3 px-lg-5 pt-3 pt-md-5" style="background-image: url();">
                        <div class="row justify-content-center">
                            <div class="col-md-6 pe-md-5">
                                <div class="about-text text-white pb-3 pb-md-0 pt-md-0 pt-lg-5 pe-md-4">
                                    <?php the_field('about_description'); ?>
                                </div>
                                <a href="<?php 
                                if(get_field('about_know_more')){
                                    echo get_field('about_know_more')['url'];
                                    } else{
                                        echo '#';
                                    }
                                    ?>" class="gcl-button mb-3 mb-md-5 d-none">
                                    <?php echo get_field('about_know_more')['title']; ?></a>
                                </div>
                                <div class="col-md-6">
                                    <img src="<?php the_field('about_image'); ?>" class ="img-fluid horse_img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

    <!--formate	testing		-->

        <section class="home-banner desktop-format" id="formate" >
            <div class="container-flud p-5">
                <div class="get-tickets">
                    <div class="swiper home_banner_slider">
                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide">
                                <a href="#"><img src="<?php echo get_field('formate_image'); ?>" class="w-100 img-fluid"></a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--mobile format-->
        <section class="home-banner mobile-format" id="formate" >
            <div class="container-flud p-5">
                <div class="get-tickets">
                    <div class="swiper home_banner_slider">
                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide">
                             
                                <a href="#"> <img src="<?php echo get_field('formate_image_mobile'); ?>"class="w-100 img-fluid "></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--contect-slider			-->


    <section class="home-banner pt-4 pt-md-3 making_move_desktop" style="background-image: url('/wp-content/uploads/2023/02/Focus_Players_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;" id="contect">
                <div class="container">
                    <div class="gcl-heading text-center py-3 py-md-4">
                    <h2 class="text-white py-3">Making Moves</h2>
                </div>
                    <!--<div class="gcl-heading text-center py-3 py-md-5">-->
                    <!--	<h2 class="text-white"><?php //the_field('matches_title'); ?></h2>-->
                    <!--</div>-->
                    <div class="gcl-matches swiper-container position-relative content-btn">

                        <div class="swiper gcl_matches_slider mx-4 mx-md-5 ">
                            <div class="swiper-wrapper text-center">
                                <?php // while ($the_query->have_posts()):$the_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <img src="/wp-content/uploads/2023/03/Making-Moves-1-1.png" class="w-100 img-fluid">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/wp-content/uploads/2023/03/ark.png" class="w-100 img-fluid">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/wp-content/uploads/2023/03/Group-722.png" class="w-100 img-fluid">
                                    </div>

                                <?php //endwhile; ?>
                            </div>

                        </div>
                        <div class="a-swiper-button swiper-button-next "></div>
                        <div class="a-swiper-button swiper-button-prev "></div>
                    </div>
                </div>
            </section>
            
                <section class="home-banner pt-4 pt-md-3 making_move_mobile" style="background-image: url('/wp-content/uploads/2023/02/Focus_Players_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;" id="contect">
                <div class="container">
                    <div class="gcl-heading text-center py-3 py-md-4">
                    <h2 class="text-white py-3">Making Moves</h2>
                </div>
                    <!--<div class="gcl-heading text-center py-3 py-md-5">-->
                    <!--	<h2 class="text-white"><?php //the_field('matches_title'); ?></h2>-->
                    <!--</div>-->
                    <div class="gcl-matches swiper-container position-relative content-btn">

                        <div class="swiper gcl_matches_slider mx-4 mx-md-5 ">
                            <div class="swiper-wrapper text-center">
                                <?php // while ($the_query->have_posts()):$the_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <img src="/wp-content/uploads/2023/05/CP_mobile.png" class="w-100 img-fluid">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/wp-content/uploads/2023/05/arcady_mobile.png" class="w-100 img-fluid">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/wp-content/uploads/2023/05/wishwanathan_mobile.png" class="w-100 img-fluid">
                                    </div>

                                <?php //endwhile; ?>
                            </div>

                        </div>
                        <div class="a-swiper-button swiper-button-next "></div>
                        <div class="a-swiper-button swiper-button-prev "></div>
                    </div>
                </div>
            </section>
            

        <section class="home-banner px-5  d-none" >
            <div class="container-flud">
                <div class="gcl-heading text-center py-3 py-md-4">
                    <h2 class="text-white py-3">Making Moves</h2>
                </div>
                <div class="get-tickets">
                    <div class="swiper home_banner_slider">
                        <div class="swiper-wrapper text-center">
                            <div class="swiper-slide">
                                <a href="#"><img src="/wp-content/uploads/2023/03/Making-Moves-1-1.png" class="w-100 img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


                <!-- icons Player -->
                <?php

                $args = array(
                    'post_type'      => 'icon-player',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' =>   6,
                );
                $the_query = new WP_Query($args);
                ?>
                <!-- Listing -->
                <?php if ($the_query->have_posts()) : ?>

                    <section class="focus-players " style="background-image: url('/wp-content/uploads/2023/02/Focus_Players_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;" id="player">
                        <div class="container">
                            <div class="gcl-heading text-center py-3 py-md-5">
                                <h2 class="text-white"><?php the_field('focus_players_title'); ?></h2>
                            </div>
                             <div class="gcl-player swiper-container position-relative">

                        <div class="swiper focus_player_slider mx-4 mx-md-5">
                            
<!--
                            <div class="gcl-players position-relative gcl-player-desktop px-lg-5">

                                <div class="row px-lg-5">
                                    <?php //while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="col-md-6 col-lg-4 text-center">

                                            <div class="gcl-player p-4">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                            </div>

                                        </div>
                                    <?php //endwhile; ?>
                                </div>

                            </div>
-->
                           
                            <div class="swiper-wrapper text-center">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>
                        <div class="e-swiper-button swiper-button-next"></div>
                        <div class="e-swiper-button swiper-button-prev"></div>
                    </div>
                        </div>
                    </section>
                    <?php wp_reset_postdata(); endif; ?> 

            <!-- Super Star -->
                <?php

                $args = array(
                    'post_type'      => 'super-star',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' =>   -1,
                );
                $the_query = new WP_Query($args);
                ?>
                <!-- Listing -->
                <?php if ($the_query->have_posts()) : ?>

                    <section class="focus-players " style="background-image: url('/wp-content/uploads/2023/02/Focus_Players_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;" id="player">
                        <div class="container">
                            <div class="gcl-heading text-center py-3 py-md-5">
                                <h2 class="text-white"><?php the_field('super_start_title'); ?></h2>
                            </div>
                             <div class="gcl-player swiper-container position-relative">

                        <div class="swiper focus_player_slider_1 mx-4 mx-md-5">
                            
<!--
                            <div class="gcl-players position-relative gcl-player-desktop px-lg-5">

                                <div class="row px-lg-5">
                                    <?php //while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="col-md-6 col-lg-4 text-center">

                                            <div class="gcl-player p-4">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                            </div>

                                        </div>
                                    <?php //endwhile; ?>
                                </div>

                            </div>
-->
                           
                            <div class="swiper-wrapper text-center">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>
                        <div class="g-swiper-button swiper-button-next"></div>
                        <div class="g-swiper-button swiper-button-prev"></div>
                    </div>
                        </div>
                    </section>
                    <?php wp_reset_postdata(); endif; ?> 

 <!-- Prodigies Star -->
                <?php

                $args = array(
                    'post_type'      => 'prodigy',
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                    'posts_per_page' =>   -1,
                );
                $the_query = new WP_Query($args);
                ?>
                <!-- Listing -->
                <?php if ($the_query->have_posts()) : ?>

                    <section class="focus-players " style="background-image: url('/wp-content/uploads/2023/02/Focus_Players_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;" id="player">
                        <div class="container">
                            <div class="gcl-heading text-center py-3 py-md-5">
                                <h2 class="text-white"><?php the_field('prodigy_title'); ?></h2>
                            </div>
                             <div class="gcl-player swiper-container position-relative">

                        <div class="swiper focus_player_slider_2 mx-4 mx-md-5">
                            
<!--
                            <div class="gcl-players position-relative gcl-player-desktop px-lg-5">

                                <div class="row px-lg-5">
                                    <?php //while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <div class="col-md-6 col-lg-4 text-center">

                                            <div class="gcl-player p-4">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                            </div>

                                        </div>
                                    <?php //endwhile; ?>
                                </div>

                            </div>
-->
                           
                            <div class="swiper-wrapper text-center">
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100 img-fluid">
                                    </div>
                                <?php endwhile; ?>
                            </div>

                        </div>
                        <div class="h-swiper-button swiper-button-next"></div>
                        <div class="h-swiper-button swiper-button-prev"></div>
                    </div>
                        </div>
                    </section>
                    <?php wp_reset_postdata(); endif; ?> 

                    <!-- Teams -->
                    <?php

                    $taxonomy = 'team';
                    $get_all_teams = get_terms([
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                    ]);

                    ?>
                    <!-- Listing -->
                    <?php if (count($get_all_teams)) : ?>

                        <section class="teams pt-4" id="team">
                            <div class="container">
                                <div class="gcl-heading text-center py-3 py-md-5">
                                    <h2 class="text-white"><?php the_field('teams_title'); ?></h2>
                                </div>
                               
                                <div class="gcl-teams swiper-container position-relative">

                        <div class="swiper team_player_slider mx-4 mx-md-5">
                            <div class="swiper-wrapper text-center">
                                <?php foreach ($get_all_teams as $team): $team_id = $team->term_id;?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo get_field('team_image', $taxonomy.'_'.$team_id)['url']; ?>" class="w-100 img-fluid">
                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="f-swiper-button swiper-button-next"></div>
                        <div class="f-swiper-button swiper-button-prev"></div>
                    </div>
                            </div>
                        </section>
                        <?php wp_reset_postdata(); endif; ?>


                        <section class="sale-banner pt-0 pt-md-5 mt-4 mb-5 my-md-5 d-none">
                            <div class="container">

                                <div class="gcl-sale-tickets position-relative" style="background-image: url('/wp-content/uploads/2023/02/Tickets-On-Sale_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    <div class="row align-items-center px-3 px-md-5 py-5">
                                        <div class="col-lg-6">
                                            <div class="gcl-heading text-dark">
                                                <h2 class="text-dark"><?php the_field('ticket_on_sale_title'); ?></h2>
                                                <?php the_field('ticket_on_sale_description'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <a href="<?php 
                                            if(get_field('get_your_ticket')){
                                                echo get_field('get_your_ticket')['url'];
                                                } else{
                                                    echo '#';
                                                }
                                                ?>" class="gcl-button gcl-button2 me-auto me-lg-0 ms-0 ms-lg-auto mt-4 mt-lg-0">
                                                <?php echo get_field('get_your_ticket')['title']; ?></a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>

                            <?php

                            $args = array(
                                'post_type'      => 'highlights',
                                'post_status'    => 'publish',
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                                'posts_per_page' =>   -1,
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <!-- Listing -->
                            <?php if ($the_query->have_posts()) : ?>

                                <section class="highlights pb-5 d-none">
                                    <div class="container">
                                        <div class="gcl-heading text-center pb-3 pb-md-5 pt-0 pt-md-4">
                                            <h2 class="text-white"><?php the_field('highlights_title'); ?></h2>
                                        </div>
                                        <div class="gcl-highlights swiper-container position-relative">

                                            <div class="swiper highlight_slider mx-4 mx-md-5">
                                                <div class="swiper-wrapper">
                                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                        <div class="swiper-slide">
                                                            <a href="<?php echo get_field('video_links'); ?>" class="d-block text-decoration-none" data-lity>

                                                                <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" class="post_bg highlight_bg">
                                                                    <div class="post-inner">
                                                                        <img src="<?php //echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
                                                                        <p class="text-white post-title pb-2 mb-2" style="border-bottom: 2px solid red;"><?php echo get_the_excerpt(); ?></p>
                                                                        <div class="post-meta text-white d-flex align-items-center justify-content-between">
                                                                            <p>Match Name / Date</p>
                                                                            <p>01:21</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>

                                            </div>
                                            <div class="c-swiper-button swiper-button-next"></div>
                                            <div class="c-swiper-button swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </section>
                                <?php wp_reset_postdata(); endif; ?>

                                <section class="play-online py-5 d-none" style="background-image: url('/wp-content/uploads/2023/02/live_the_game_background.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                                    <div class="container">
                                        <div class="gcl-heading text-center pt-3">
                                            <h2 class="text-white"><?php the_field('live_the_game_title'); ?></h2>
                                        </div>
                                        <div class="gcl-playOnline position-relative">
                                            <div class="row align-items-center justify-content-center px-3 px-md-5">
                                                <div class="col-lg-5 p-3">
                                                    <img src="<?php echo get_field('live_the_game_image')['url']; ?>" class="w-100 img-fluid">
                                                </div>
                                                <div class="col-lg-5 text-center">
                                                    <p class="play-chase text-white">Play Chase <br> Online On The #1 Site!</p>
                                                    <a href="<?php 
                                                    if(get_field('play_online_button')){
                                                        echo get_field('play_online_button')['url'];
                                                        } else{
                                                            echo '#';
                                                        }
                                                        ?>" class="gcl-button mx-auto">
                                                        <?php echo get_field('play_online_button')['title']; ?></a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>

                        <?php

                            $args = array(
                                'post_type'      => 'post',
                                'post_status'    => 'publish',
                                'category_name'	 =>	'news',
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                                'posts_per_page' =>   -1,
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <!-- Listing -->
                            <?php if ($the_query->have_posts()) : ?>

                                <section class="highlights py-5" id="news">
                                    <div class="container">
                                        <div class="gcl-heading text-center pb-3 pb-md-5 pt-0 pt-md-4">
                                            <h2 class="text-white"><?php the_field('news_and_media_title'); ?></h2>
                                        </div>
                                        <div class="gcl-highlights swiper-container position-relative">

                                            <div class="swiper post_slider mx-4 mx-md-5">
                                                <div class="swiper-wrapper">
                                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                                        <div class="swiper-slide">
                                                        <div class="post-slides">

                                                            <div style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" class="post_bg">

                                                                </div>
                                                                <div class="post-inner px-4 pt-4" style="background-color: #fff;">

                                                                    <p class="text-dark post-title pb-2 mb-2"><a href="<?php the_field('news_link'); ?>" class="text-dark" target="_blank"><?php echo get_the_title(); ?></a></p>
                                                                    <p class="text-dark post-excerpt pb-2 mb-2" style="border-bottom: 2px solid red;"><?php echo get_the_excerpt(); ?></p>
                                                                    <div class="post-meta text-dark d-flex align-items-center justify-content-between">
                                                                        <p><?php foreach(get_the_category(get_the_ID()) as $cat){echo $cat->cat_name;} ?></p>
                                                                        <p><a href="<?php the_field('news_link'); ?>" class="text-dark" target="_blank">Read More <i class="fa fa-arrow-right ms-2"></i></a></p>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>

                                            </div>
                                            <div class="d-swiper-button swiper-button-next"></div>
                                            <div class="d-swiper-button swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </section>
                                <?php wp_reset_postdata(); endif; ?>

                        <section>
                            <div class="container">
                                <div class="row justify-content-center align-items-center pb-4 pb-md-5  pt-md-3">
                                    <div class="col-10 col-md-6">
                                        <img src="/wp-content/uploads/2023/02/footer_logos.png" class="w-100 img-fluid">
                                    </div>

                                </div>

                            </div>
                        </section>
                        <section class="gcl-partners pt-3 pt-md-0 d-none">
                            <div class="container">
                                <div class="gcl-heading text-center py-3 py-md-5">
                                    <h2 class="text-white"><?php the_field('sponsors'); ?></h2>
                                </div>
                                <div class="gcl-all-partners position-relative">
                                    <div class="row justify-content-center px-1 px-lg-5">

                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/staer.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/aramco.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/booking.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/bira.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/bharat.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/upstox.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/thumbsup.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/mrf.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/oppo.png" class=" img-fluid" style="border-radius:5px"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/nissan.png" class=" img-fluid" style="border-radius: 5px;"></a>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 col-lg-2 text-center">
                                            <div class="gcl-partner p-1 p-md-4 py-3">
                                                <a href="#" class="d-block"><img src="/wp-content/uploads/2023/03/byjus.png" class=" img-fluid" style="border-radius: 5px;"></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        
                        


                                </div>

                                <?php
                    // Footer 
                                get_footer();
