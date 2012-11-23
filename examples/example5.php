<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example5.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('impulse', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->set_shadow('#8fbc8b', 5);
    $new->border('#6b8e23', 1);
    $new->title('Impulse graph', '#000000', 7);
    $new->set_values( array( 0, 1, 2, 3, 4, 4, 3, 2, 1, 0, -1, -2, -3, -3, -2, -1, -0, 1, 2, 2, 1, 0, -1, -1, 0  ), 4, 'red', 'box');
    $new->set_values( array( 0, -1, -2, -3, -4, -4, -3, -2, -1, 0, 1, 2, 3, 3, 2, 1, 0, -1, -2, -2, -1, 0, 1, 1, 0  ), -4, 'black', 'fullcross');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'green', '', 'Impuls', false );
    $new->points_on_axes('red', array(), 'auto');
    $new->legend( 'topright', array('red' => 'Graph line 1', 'black' => 'Graph line 2'), '#fff8dc', 'white');
    $new->plot();       


        
    //end PHP code
    
endif;
?>
