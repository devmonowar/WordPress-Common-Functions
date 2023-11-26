<?php

do_action( ); add_action( );

// function file
// -------------------------

add_action( 'test_post', 'test_add_post');

function test_add_post() {
   echo "success add action";
}


// another file (je khane show korabo)
// -------------------------------

do_action( 'test_post');

// =======================================

apply_filters(); add_filters();

// function.php file---
// -------------------------------

add_filter( 'ehitahobe', 'function_name' );

function function_name($def){
    echo "ehi ta add korlam" . $def ;
}

// --
// another file (jekhane change kora hobe)
// --------------------------

$value = "<h3> ekhane aro kicu add korbo </h3>";

echo apply_filters( "ehitahobe", $value );


add_action( string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1 ): true;

add_filter( string $hook_name, callable $callback, int $priority = 10, int $accepted_args = 1 ): true;