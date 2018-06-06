<?php    
    $header = get_headers($_GET["url"], 1);
    //print_r($header);
    if(array_key_exists("X-Frame-Options", $header)){
        $frameOption = $header["X-Frame-Options"];
        if(strtolower($frameOption) == "deny" || strtolower($frameOption) == "sameorigin" || strtolower($frameOption == "allow-from") || strtolower($frameOption) == "sameorigin"){
            echo "false";
        } else {
            echo "true";
        }
    } elseif(array_key_exists("content-security-policy", $header)){
         $frameOption = $header["content-security-policy"];
        if(strpos(strtolower($frameOption), 'self') !== false){
            echo "false";
        } else {
            echo "true";
        }
    } else {
        echo "true";
    }
?>