<?php
function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>alert( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>alert( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
?>
