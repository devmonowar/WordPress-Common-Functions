<?php

do_action( ), add_action( );

// function file
-------------------------

add_action( 'test_post', 'test_add_post');

function test_add_post() {
   echo "success add action";
}


// another file (je khane show korabo)
-------------------------------

do_action( 'test_post');