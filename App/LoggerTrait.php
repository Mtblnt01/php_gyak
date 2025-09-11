<?php
namespace App\Traits;

trait LoggerTrait {
    public function log($message) {
        echo "[LOG]: " . $message . "\n";
    }
}




?>