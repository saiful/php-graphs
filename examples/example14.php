<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example14.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('pie', 300, 400, '#fffeff', '8x13iso.gdf');
    $new->title('PIE Graph', '#000000', 7);
    $new->set_values( 1, 1, 'red');
    $new->set_values( 3, 1, 'green');
    $new->set_values( 3, 1, 'blue');
    $new->set_values( 3, 1, 'gold');
    $new->legend( 'topleft', array('red' => 'red color', 'blue' => 'blue color', 'green' => 'red color', 'gold' => 'gold color'), 'white', '#fff8dc');
    $new->plot();
    //end PHP code
    
endif;
?>
