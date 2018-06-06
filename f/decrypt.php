<?php


function decrypt_param($decrypt_ext){
	$methods = openssl_get_cipher_methods();
	$method = $methods[95];
	$secretKey = "salesmoto";
	// source: https://stackoverflow.com/questions/1788150/how-do-i-encrypt-a-string-in-php
	//$encrypted = openssl_encrypt($textToEncrypt, $method, $secretKey);
	$decrypted = openssl_decrypt($decrypt_ext, $method, $secretKey);
	return $decrypted;
}


?>