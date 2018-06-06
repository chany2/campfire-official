<?php

function encrypt_param($ext){
	$methods = openssl_get_cipher_methods();
	$method = $methods[95];
	$textToEncrypt = $ext;
	$secretKey = "salesmoto";
	// source: https://stackoverflow.com/questions/1788150/how-do-i-encrypt-a-string-in-php
	$encrypted = openssl_encrypt($textToEncrypt, $method, $secretKey);
	//$decrypted = openssl_decrypt($encrypted, $method, $secretKey);
	return $encrypted;
}

$encrypt_extension = $_POST['encrypt_extension'];
echo encrypt_param($encrypt_extension);


?>