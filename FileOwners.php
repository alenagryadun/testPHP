<?php
class FileOwners
{
 public static function groupByOwners($files)
 {
     if(empty($files)) return 'Array is empty';
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