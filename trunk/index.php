<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP class for Google Chart Tools</title>

<?php
include('Chart.php');

// demonstration of a line chart and formatted array
$chart = new Chart('LineChart');

$data = array(
	'cols' => array(
		array('id' => '', 'label' => 'Year', 'type' => 'string'),
		array('id' => '', 'label' => 'Net income', 'type' => 'number'),
		array('id' => '', 'label' => 'Revenue', 'type' => 'number')
	),
	'rows' => array(
		array('c' => array(array('v' => '1990'), array('v' => 150), array('v' => 100))),
		array('c' => array(array('v' => '1995'), array('v' => 300), array('v' => 50))),
		array('c' => array(array('v' => '2000'), array('v' => 180), array('v' => 200))),
		array('c' => array(array('v' => '2005'), array('v' => 400), array('v' => 100))),
		array('c' => array(array('v' => '2010'), array('v' => 300), array('v' => 600))),
		array('c' => array(array('v' => '2015'), array('v' => 350), array('v' => 400)))
	)
);
$chart->load(json_encode($data));

$options = array('title' => 'revenue', 'theme' => 'maximized', 'width' => 500, 'height' => 200);
echo $chart->draw('revenue', $options);


// demonstration of pie chart and simple array
$chart = new Chart('PieChart');

$data = array(
	array('mushrooms', 'slices'),
	array('onions', 2),
	array('olives', 1),
	array('cheese', 4)
);
$chart->load($data, 'array');

$options = array('title' => 'pizza', 'is3D' => true, 'width' => 500, 'height' => 400);
echo $chart->draw('pizza', $options);
?>

</head>
<body>

<div id="revenue"></div>

<div id="pizza"></div>

</body>
</html>