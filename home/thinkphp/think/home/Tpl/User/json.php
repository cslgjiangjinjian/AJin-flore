<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>json接口测试</title>
</head>
<body>
<?PHP
  $ar1 = array("key1"=>"value1",
  "key2"=>"value2",
  "key3"=>"PHP初学者，想学PHP借口");
  
  function JSON($array) { 
    arrayRecursive($array, 'urlencode', true); 
    $json = urldecode(json_encode($array)) ; 
    return $json; 
} 

function arrayRecursive(&$array, $function, $apply_to_keys_also = false){ 
    static $recursive_counter = 0; 
    if (++$recursive_counter > 1000) { 
        die('possible deep recursion attack'); 
    } 
    foreach ($array as $key => $value) { 
        if (is_array($value)) { 
            arrayRecursive($array[$key], $function, $apply_to_keys_also); 
        } else { 
            $array[$key] = $function($value); 
        }                                        
        if ($apply_to_keys_also && is_string($key)) { 
            $new_key = $function($key); 
            if ($new_key != $key) { 
                $array[$new_key] = $array[$key]; 
                unset($array[$key]); 
            } 
        } 
    } 
    $recursive_counter--; 
}                                                                                      
echo JSON($ar1);
?>
</body>
</html>