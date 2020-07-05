<?php
	define('METHOD','AES-256-CBC'); // METODO DE ENCRIPTACION AES
	define('SECRET_KEY','0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'); // SE DEFINE EL TIPO DE LLAVE PRIVADA
	define('SECRET_IV','0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'); // SE DEFINE EL CAMBIO DEL INICIO DEL VECTOR
	class SED {
		public static function encryption($string){ // SE CREA LA FUNCION
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY); // CIFRADO DE ENTRADA
			$iv=substr(hash('sha256', SECRET_IV), 0, 16); // el método de cifrado AES-256-CBC espera 16 bytes.
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv); // salida DE LA ENCRIPTACION
			$output=base64_encode($output); // CODIFICACION BASE 64bit
			return $output;
		}
		public static function decryption($string){ // PROCESO INVERSO
			$key=hash('sha256', SECRET_KEY); 
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}
	}