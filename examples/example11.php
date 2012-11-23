<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example11.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('sumcolumn', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->column_padding = 1;
    $new->title('Sum Column Graph', '#000000', 7);
    $new->set_values( array( 1, 1, 1.5, 1, 1, 1.1, 1, 1, 1, 1), 0, 'blue' );
    $new->set_values( array( 1, 1, 4, 1), 4, 'gold' );
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black', '', '', false );
    $new->points_on_axes('black', array() );
    $new->legend( 'bottomright', array('blue' => 'blue color', 'gold' => 'gold color'), 'white', '#fff8dc');            
    $new->plot();
    //end PHP code
    
endif;
?>
