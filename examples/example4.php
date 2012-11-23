<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example4.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('transition', 400, 400, '#fffeff', '8x13iso.gdf');
    $new->title('Transition Graph', '#000000', 7);
    $new->legend( 'top', array('red' => 'left transition', 'green' => 'right transition'), 'white', '#fff8dc');
    for( $i = 0; $i < 40; $i++ ){
        $x[] = $i;
        $y3[] = ( $i%2 ? 20 : 10);
        $y4[] = ( $i%2 ? 40 : 30);
    }
    $new->transition_type = 'left';
    $new->set_values( $x, $y3, 'red' );
    $new->transition_type = 'right';
    $new->set_values( $x, $y4, 'green' );
    $new->paint_axes( '#a9a9a9', '', '', false );
    $new->plot();

        
    //end PHP code
    
endif;
?>
