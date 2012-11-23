<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example12.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('3dcolumn', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('3D Column Graph', '#000000', 7);
    $new->title('A capital is the area of a country regarded as enjoying primary status; it is almost always the city which physically encompasses the offices and meeting places of the seat of government and fixed by law, but there are a number of exceptions.', '#000000', 2);
    $new->set_values( array( 5, 4), 0, 'blue' );
    $new->set_values( array( 7, 6), 0, 'red' );
    $new->column_padding = 10;
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( '#a9a9a9', '', '', false );
    $new->points_on_axes('black', array('capital increase', 'security capital'));
    $new->legend( 'left', array('blue' => 'Today', 'red' => 'Yesterday'), 'white', 'black');            
    $new->plot();
    //end PHP code
    
endif;
?>
