<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example9.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('column', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('Column Graph', '#000000', 7);
    $new->set_values( array( 10, 12, 13, 14, 16, 6, 3, 2), 0, 'blue');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black', '', '', false );
    $new->points_on_axes('black', array('sl 1', 'sl 2', 'sl 3', 'sl 4', 'sl 5', 'sl 6', 'sl 7', 'sl 8', 'sl 9'));
    $new->plot();
    //end PHP code
    
endif;
?>
