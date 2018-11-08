<?php
$date = new DateTime();
$day = $date->format('d');
$month = $date->format('M');
$year = $date->format('Y');

echo "Today is: ${day} ${month} ${year}";
