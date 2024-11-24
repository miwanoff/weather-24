<?php
$weathers_json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Kharkiv,ua&lang=ua&APPID=89ea4480f451ffd24b79617df1ba2bb0");
$weathers = json_decode($weathers_json);
print_r($weathers);

print_r($weathers->weather[0]->description);