<?php
class Validation
{
    public function SI_SSLEncrypt($string): bool|string {
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length(CHIPER);
        $options = 0;

        // Use openssl_encrypt() function to encrypt the data
        $encryption = openssl_encrypt($string, CHIPER,
            SECONDKEY, $options, FIRSTKEY);
        return $encryption;
    }

##############################################################
    public function SI_SSLDecrypt($string): bool|string {
        $options = 0;

        $encryption = openssl_encrypt($string, CHIPER,
            SECONDKEY, $options, FIRSTKEY);

        // Use openssl_decrypt() function to decrypt the data
        $decryption = openssl_decrypt($encryption, CHIPER, SECONDKEY, $options, FIRSTKEY);
        return $decryption;
    }
}