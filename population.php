<?php
 
$city = $_GET['city'];
 
?>
 
<h2> Welcome to population data online. </h2>
 
<p>
    <ul>
        <li>Click <a href="/population.php?city=New York">here</a> to see the population
        of New York.</li>
        <li>Click <a href="/population.php?city=Los Angeles">here</a> to see the
        population of Los Angeles.</li>
        <li>Click <a href="/population.php?city=Chicago">here</a> to see the
        population of Chicago.</li>
        <li>Click <a href="/population.php?city=Houston">here</a> to see the
        population of Houston.</li>
        <li>Click <a href="/population.php?city=Philadelphia">here</a> to see
        the population of Philadelphia.</li>
    </ul>
 
</P>
 
<?php
 
$cities = array (
  'New York' => 8175133,
  'Los Angeles' => 3792621,
  'Chicago' => 2695598,
  'Houston' => 2099451,
  'Philadelphia' => 1526006,
);
 
if (!$city) {
  print 'Please click any of the above cities to view their populations, or
 add one to your URL.';
}
 
else {
  print 'The population of ' . $city . ' is ' .
  $cities[$city];
}
?>
