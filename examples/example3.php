<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example3.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    include './lib/graph.php';    
    $new = new graph('spline', 400, 400, '#fffeff' );
    $new->title('Spline Graph', '#000000', 7);
    $new->title('Sine and Cosine', '#000000', 3);
    for( $i = -5; $i <= 5; $i++ ){
        $x[] = $i; 
        $y[] = cos( $i ); 
    }
    $new->set_values( $x,  $y, 'blue' );
    $x = $y = array();
    for( $i = -5; $i <= 5; $i++ ){
        $x[] = $i; 
        $y[] = sin( $i )*4; 
    }
    $new->set_values( $x,  $y, 'green');
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( '#a9a9a9', '', '', false );
    $new->points_on_axes();
    $new->legend( 'topright', array('blue' => 'Sine function', 'green' => 'Cosine function'), 'white', '#fff8dc');
    $new->plot();    
        
    //end PHP code
    
endif;
?>
