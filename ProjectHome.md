A PHP class that's supposed to simplify the creation of charts with Google Chart Tools.

## Usage ##
All charts should be created in the head section of your html (or atleast you should make sure that the output from the Chart->draw() function will be in the head section of your html)

To use the Chart class you must first include it (unless you use an autoloader):
```
include('Chart.php');
```

Then you should create a new Chart instance:
```
$chart = new Chart('PieChart');
```

Create the data for the chart:
```
$data = array(
	array('toppings' => 'onions', 'slices' => 2),
	array('toppings' => 'olives', 'slices' => 1),
	array('toppings' => 'cheese', 'slices' => 4)
);
```

Load the data into the chart and specify the type of data being used:
```
$chart->load($data, 'array');
```

Create the options array:
```
$options = array('title' => 'pizza', 'is3D' => true, 'width' => 500, 'height' => 400);
```

And draw the chart (the first parameter of the draw function is the id of the div element where you want the chart to appear):
```
echo $chart->draw('my_div', $options);
```

All together:
```
<html>
<head>
<?php
include('Chart.php');
$chart = new Chart('PieChart');
$data = array(
	array('toppings' => 'onions', 'slices' => 2),
	array('toppings' => 'olives', 'slices' => 1),
	array('toppings' => 'cheese', 'slices' => 4)
);
$chart->load($data, 'array');
$options = array('title' => 'pizza', 'is3D' => true, 'width' => 500, 'height' => 400);
echo $chart->draw('my_div', $options);
?>
</head>
<body>
<div id="my_div"></div>
</body>
</html>
```

A complete example can be found in [index.php](http://code.google.com/p/php-class-for-google-chart-tools/source/browse/trunk/index.php) and live demo http://2006v.com/charttools/

## Todo ##
  1. add option to switch between chart packages
  1. add option to use SQL queries
  1. add "advanced" features of google chart tools api