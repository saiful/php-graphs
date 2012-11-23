<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example1.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    
    include './lib/graph.php';
    $new = new graph('line', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->set_shadow('#8fbc8b', 5);
    $new->border('#6b8e23', 1);
    $new->title('Line Graph', '#000000', 7);
    $new->set_values( array( -3, -2, 0, 1, 2, 5), array( -2, 2, 3, 4, 5, 6 ), 'green', 'box' );
    $new->set_values( array(-5, 1, 3 ), array( -5, 3, 3 ), 'red', 'fullcross' );
    $new->set_values( array( 5, 2, 1, 1, 1, 2, 3, 4, 5, 6, 7, 8, 9, 5, 5 ), array( 1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 7, 8, 9, 11 ), 'black', 'wheel');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black');
    $new->points_on_axes('blue');
    $new->legend( 'right', array('red' => 'red', 'blue' => 'blue', 'black'=>'black'), 'white', 'blue');
    $new->plot();
    
    //end PHP code
    
endif;
?>
