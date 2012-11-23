<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example13.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('3dsumcolumn', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('3D Sum Column Graph', '#000000', 7);
    $new->legend( 'right', array('green' => 'green', 'blue' => 'blue', 'red' => 'red', 'yellow' => 'yellow'), 'white', '#fff8dc');
    $new->set_values( array( 4, -1, -2, -1), 2, 'blue' );
    $new->set_values( array( 1, 2, -1, -1), 1, 'gold' );
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'green' );
    $new->set_values( array( 1, 1, 1, 1, 1, 1, 1, 1, 1 ), 0, 'red' );
    $new->plot();
    //end PHP code
    
endif;
?>
