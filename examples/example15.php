<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example15.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('piehole', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('HOLE PIE Graph', '#000000', 7);
    $new->set_values( 1, 0, 'red'  , ' 10%');
    $new->set_values( 3, 0, 'green', '30%');
    $new->set_values( 3, 0, 'blue' , '30%');
    $new->set_values( 3, 1, 'gold' , '30%');
    $new->legend( 'left', array('red' => 'red', 'blue' => 'blue', 'green' => 'green', 'gold'=>'gold'), '#fff8dc');
    $new->plot();
    //end PHP code
    
endif;
?>
