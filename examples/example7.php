<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example7.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('transparentarea', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->set_values( array( 3, 3, 3, 3, 3, 3, 3, 3, 3 ), 0, 'blue', 'fullcross');
    $new->set_values( array( 2, 2, 4, 4, 2, 2, 4, 4, 2 ), 0, 'red', 'box');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black', '', 'Impuls', false );
    $new->points_on_axes('black', 'auto', 'auto');
    $new->plot();
    //end PHP code
    
endif;
?>
