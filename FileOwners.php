<?php
class FileOwners
{
 public static function groupByOwners($files)
 {
     $new_array = [];

     foreach ($files as $key => $name) {
        $new_array[$name][] = $key; 
     }
     var_dump($new_array);
 }
}
$files = array
(
 "Input.txt" => "Randy",
 "Code.py" => "Stan",
 "Output.txt" => "Randy"
);
FileOwners::groupByOwners($files); 