<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example10.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('transparentcolumn', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('Transparent Column Graph');
    $new->set_values( array( 3, 4, 5, 4, 4, 5, 5, 5, 5, 5, 5), 0, 'blue');
    $new->set_values( array( 1, 2, 3, 4, 5, 6, 7, 6, 5, 4, 3), 0, 'red');
    $new->set_values( array( 0.1, 0.2, 0.1, -0.1, -0.5, 0.2, 0.4), 3, 'green');     
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->column_padding = 1;
    $new->paint_axes( 'black', '', '', false );
    $new->plot();
    //end PHP code
    
endif;
?>
