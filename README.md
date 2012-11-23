PHP Graphs
===========

Class to generate PHP graphs with GD library



![Alt text](http://grafy.zaachi.com/images/g95.png "Optional title")
![Alt text](http://grafy.zaachi.com/images/g112.png "Optional title")
![Alt text](http://grafy.zaachi.com/images/g103.png "Optional title")
![Alt text](http://grafy.zaachi.com/images/g138.png "Optional title")

Supported chart types
---------------------

- Line Graph
- XY Graph
- Spline Graph
- Transition Graph
- Impulse Graph
- Area Graph
- Transparent Area Graph SumArea Graph
- Column Graph
- Transparent Column Graph
- Sum Column Graph
- 3D Column Graph
- 3D Sum Column Graph
- Pie Graph
- Hole Pie Graph
- 3D Pie Graph

About 
------

Class can generate several different types of charts that are independent of each other, starting with basic types such as XY coordinate to complex 3D charts.
Class generates graphs using the GD library support. The resulting graphs are generated in PNG or JPG, according to the call settings.
Class allows you to create charts, including the title or description of the graph that is generated directly on the image graph allows you to set the color for the background, border, drop shadow or individual parts of the graph.
Depending on the type of graph you can enter directly into the graph legend, axes or guide lines. Of course, the class can't rival with libraries as JpGraph, but it can be used as a simpler alternative.

Anti-Aliasing in Graphs
-----------------------

You can enable antialiasing in graphs: 

![Alt text](http://grafy.zaachi.com/images/g146.png "Optional title")

	$new = new graph('spline', 400, 400, '#fffeff', '8x13iso.gdf');
	$new->enable_aliasing();
	$new->title('Spline Graph: Anti-aliasing: OFF', '#000000', 7);
	$new->set_values( array(1, 2, 3, 4, 5, 6, 7),  array(1, 2, 3, 4, 3, 4, 4), 'red' );
	$new->plot('g146.png');

![Alt text](http://grafy.zaachi.com/images/g147.png "Optional title")

Error messages
--------------

![Alt text](http://grafy.zaachi.com/images/g122.png "Optional title")


How to make
----------

Clone a repository and open a samples in folder __html__

