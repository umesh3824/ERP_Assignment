<?php 
class MyEncryption{
    public function getMyEncryption($newString){
  
          // Store a string into the variable which 
          // need to be Encrypted 
          $simple_string =$newString; 
  
          // Store the cipher method 
          $ciphering = "AES-128-CTR"; 
  
          // Use OpenSSl Encryption method 
          $iv_length = openssl_cipher_iv_length($ciphering); 
          $options = 0; 
  
          // Non-NULL Initialization Vector for encryption 
          $encryption_iv = '1234567891011121'; 
  
          // Store the encryption key 
          $encryption_key = "abxczHBjJhd"; 
  
          // Use openssl_encrypt() function to encrypt the data 
          $encryption = openssl_encrypt($simple_string, $ciphering, 
                $encryption_key, $options, $encryption_iv); 
  
          return $encryption;
    }
    public function getMyDecryption($newString){
  
      // Store a string into the variable which 
      // need to be Encrypted 
      $simple_string = $newString; 
  
      // Store the cipher method 
      $ciphering = "AES-128-CTR"; 
  
      // Use OpenSSl Encryption method 
      $iv_length = openssl_cipher_iv_length($ciphering); 
      $options = 0; 
  
  
      // Non-NULL Initialization Vector for decryption 
      $decryption_iv = '1234567891011121'; 
  
      // Store the decryption key 
      $decryption_key = "abxczHBjJhd"; 
  
      // Use openssl_decrypt() function to decrypt the data 
      $decryption=openssl_decrypt ($simple_string, $ciphering,$decryption_key, $options, $decryption_iv); 
  
      // Display the decrypted string 
     return $decryption; 
  }
  }
?>