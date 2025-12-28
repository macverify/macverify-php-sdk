<?php
/**
 * MACVerify.com API - PHP cURL Example
 * Daily Updated OUI Database
 */

function getMacVendor($mac) {
    $url = "https://macverify.com/api/v1/lookup?mac=" . urlencode($mac);
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $response = curl_exec($ch);
    
    if(curl_errno($ch)) {
        return 'Error: ' . curl_error($ch);
    }
    
    curl_close($ch);
    return json_decode($response, true);
}

// Test with a sample MAC
$result = getMacVendor('00:1A:2B:3C:4D:5E');
print_r($result);
?>
