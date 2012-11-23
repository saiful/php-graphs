<?php 
if( !is_numeric( $_GET['graph'] ) ):
?>
    <!-- start HTML code -->
    
    <img src="example2.php?graph=1" alt="graph" />
    
    <!-- end HTML code -->
<?
else: 
    //start PHP code
    
    include './lib/graph.php';
    $new = new graph('xy', 400, 400, '#fffeff', '8x13iso.gdf');
    
    $new->title('XY Graph', '#000000', 7);
    
    $new->legend( 'bottom', array('green' => 'Green color is function: f(y) = sin(x)*5+5', 'red' => 'Red color is function: f(y) = cos(x)*10'), 'white', 'blue');
    
    $xdata = $ydata = $ydata_2 = array();
    for( $i = -5; $i < 5; $i+=0.15 ){
        $xdata[] = $i;
        $ydata[] = sin($i)*5+5;
        $ydata_2[] = cos( $i)*10; 
    }
    
    $new->set_values( $xdata, $ydata_2, 'red', 'wheel' );
    $new->set_values( $xdata, $ydata, 'green', 'box' );
    
    $new->paint_lines('#f5f5f5', 'lines', 'lines');
    $new->paint_axes( 'black');
    $new->points_on_axes('blue');
    $new->plot();
    
    //end PHP code
    
endif;
?>
