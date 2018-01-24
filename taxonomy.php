<?php 
    if ( have_posts() ){
        while ( have_posts() ){ the_post();
            the_title();
            echo '<br />';
        }
    }else{
        echo 'Aun no hay nada aqui!';
    }