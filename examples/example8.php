<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example8.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('sumarea', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('Sum Area Graph', '#000000', 7);
    $new->set_values( array( 1, 0, 1, 10, 1, 5, 1, 2, 0 ), 0, 'blue');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'green');
    $new->set_values( array( 1, 0, 1, 0, 1, 0, 1, 0, 1 ), 0, 'red');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'black');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'red');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'black');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'red');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'black');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'red');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'black');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'red');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'black');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'red');
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'black');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black', '', 'Impuls', false );
    $new->points_on_axes('black', 'auto', 'auto');
    $new->plot();
    //end PHP code
    
endif;
?>
