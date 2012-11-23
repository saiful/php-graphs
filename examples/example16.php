<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example16.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('3dpie', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('3D PIE Graph', '#000000', 7);
    $new->set_values( 1, 0, 'red'   );
    $new->set_values( 3, 0, 'green' );
    $new->set_values( 3, 0, 'blue' ) ;
    $new->set_values( 3, 1, 'gold' );
    $new->legend( 'left', array('red' => 'red', 'blue' => 'blue', 'green' => 'green', 'gold'=>'gold'), 'white', '#fff8dc');
    $new->plot();
    //end PHP code
    
endif;
?>
