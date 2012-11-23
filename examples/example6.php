<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example6.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('area', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->set_shadow('#8fbc8b', 5);
    $new->border('#6b8e23', 1);
    $new->title('Area Graph', '#000000', 7);
    $new->set_values( array( 5, 6, 5, 6, 5, 6, 5), 0, 'blue');
    $new->set_values( array( 3, 4, 3, 4, 5, 3, 4), 0, 'red');
    $new->set_values( array( -3, 0, 1, 2, 3, 2, 3), 0, 'green');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black', '', 'Impuls', false );
    $new->points_on_axes('black', 'auto', 'auto');
    $new->plot();
    //end PHP code
    
endif;
?>
