<?php if (is_single() or is_page('utvarp') or is_page('lemurskort') or is_page('timalina')) { ?>

    <?php
        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'myndin' );
        $src = $src[0];
        if ( is_page('utvarp') ) {
            $desc = 'Útvarp Lemúr geymir útvarpsþætti Lemúrsins. Þættirnir eru á dagskrá Rásar 1 alla þriðjudaga kl. 16:05.';
        } else if ( is_page('lemurskort')  ) {
            $desc = 'Á Lemúrskortinu geta menn flakkað heimshornanna á milli.';
        } else if ( is_page('timalina') ) {
            $desc = 'Með Tímalínu Lemúrsins getur þú flakkað í gegnum tímann.';
        }
    ?>
        <meta property="og:title" content="<?php single_post_title(''); ?>">
        <meta property="og:site_name" content="Lemúrinn">  
        <meta property="og:type" content="article"> 
        <meta property="fb:app_id" content="186476388086986">
        <meta property="og:image" content="<?php echo $src ?>">
        <meta property="og:description" content="<?php echo $desc ?>">  
        <meta property="og:url" content="<?php the_permalink() ?>">
        <meta property="article:published_time" content="<?php the_time('c'); ?>">
        <link rel="image_src" href="<?php echo $src ?>">
 
<?php } else if (is_archive() or is_page('greinasafn')) { ?>
    
    <?php
        $src = '';
        $desc = 'Greinasafn Lemúrsins er fullt af skemmtilegu efni. ';
        if ( is_archive() and is_tag() ) {
            $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'myndin' );
            $src = $src[0];
            $desc .= sprintf('Hérna eru greinar í flokknum &bdquo;%s&ldquo;.', single_tag_title('', false) );
        }
    ?>
        <meta property="og:title" content="<?php echo wp_title(); ?>">
        <meta property="og:site_name" content="Greinasafn Lemúrsins"> 
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="186476388086986">
        
        <!--<meta property="og:image" content="<?php echo $src ?>">-->
        <meta property="og:description" content="<?php echo $desc; ?>">
        <meta property="og:url" content="<?php echo home_url(add_query_arg(array(),$wp->request)); ?>">  
        <!--<link rel="image_src" href="<?php echo $src ?>">-->
    
<?php } else { ?>

        <meta property="og:title" content="<?php echo wp_title(); ?>">
        <meta property="og:site_name" content="Lemúrinn"> 
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="186476388086986">
        <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/images/lemur-fb-icon-highres.jpg"> 
        <meta property="og:description" content="Lemúrinn er veftímarit um allt. Furður, fjarlægir staðir, menning, saga, tónlist, blogg, morð, ofbeldi og fleira.">
        <meta property="og:url" content="<?php echo home_url(add_query_arg(array(),$wp->request)); ?>">  
        <link rel="image_src" href="<?php echo get_template_directory_uri() ?>/assets/images/lemur-fb-icon-highres.jpg">

<?php } ?>
        <meta property="og:locale" content="is_IS">
