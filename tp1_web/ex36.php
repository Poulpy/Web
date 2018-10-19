<?php
//les donnÃ©es
$tableau=array('421',
				'erreur',
				'3.14',
				NULL,
				'03/10/2015',
				'03/10/15');
$test=0;
//tests
$test+=1;
echo "<h3>test $test </h3>";
foreach ($tableau as $val)
{
echo "\$val : $val <br />";
}


$test+=1;
echo "<h3>test $test </h3>";
foreach ($tableau as $val)
{
echo "$val : ";
var_export(filter_var($val,FILTER_VALIDATE_INT));
echo "<br />";
}

$test+=1;
echo "<h3>test $test </h3>";
foreach ($tableau as $val)
{
echo "$val : ";
var_export(filter_var($val,FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE));
echo "<br />";
}


$test+=1;
echo "<h3>test $test </h3>";
$options='FILTER_NULL_ON_FAILURE';
foreach ($tableau as $val)
{
echo "$val : ";
var_export(filter_var($val,FILTER_VALIDATE_INT,$options));
echo "<br />";
}

$test+=1;
echo "<h3>test $test </h3>";
$options=array('options' => array('min_range'=>0,'max_range'=>100));
foreach ($tableau as $val)
{
echo "$val : ";
var_export(filter_var($val,FILTER_VALIDATE_INT,$options));
echo "<br />";
}

$test+=1;
echo "<h3>test $test </h3>";
$options=array('options' => array('min_range'=>0,'max_range'=>100),'flags'=>FILTER_NULL_ON_FAILURE);
foreach ($tableau as $val)
{
echo "$val : ";
var_export(filter_var($val,FILTER_VALIDATE_INT,$options));
echo "<br />";
}

$test+=1;
echo "<h3>test $test </h3>";
$expression='<^[0-9]{2}/[0-9]{2}/[0-9]{4}$>';
$options=array('options' => array('regexp'=>$expression));

foreach ($tableau as $val)
{
echo "$val : ";
var_export(filter_var($val,FILTER_VALIDATE_REGEXP,$options));
echo "<br />";
}

?>