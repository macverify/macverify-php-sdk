# 🐘 MACVerify PHP SDK

![PHP Version](https://img.shields.io/badge/php-%3E%3D7.4-777bb4)
![License](https://img.shields.io/badge/license-MIT-green)
![API Status](https://img.shields.io/badge/API-Online-success)

A lightweight PHP wrapper for the **[MACVerify.com](https://macverify.com)** API. Perfect for server-side network management and hardware auditing.

### 🌟 Why Use MACVerify?
* **Instant Access:** Start querying without creating an account.
* **IEEE Data:** Real-time synchronization with official OUI records.
* **Lightweight:** Pure cURL implementation with no heavy dependencies.

### 🚀 Usage
```php
<?php
require_once 'vendor/autoload.php'; // If using composer

function lookup($mac) {
    $url = "[https://macverify.com/api/v1/lookup?mac=](https://macverify.com/api/v1/lookup?mac=)" . $mac;
    $response = file_get_contents($url);
    return json_decode($response, true);
}

print_r(lookup('00:1A:2B:3C:4D:5E'));
