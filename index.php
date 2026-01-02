<?php
require_once 'functions.php';

// Lấy action từ URL
$action = $_GET['action'] ?? '';

echo "<h2>Mini Utility - Lab 03</h2>";
echo "<hr>";

switch ($action) {

    case 'prime':
        if (!isset($_GET['n'])) {
            echo "Thiếu tham số n <br>";
            echo "Ví dụ: ?action=prime&n=17";
            break;
        }

        $n = (int)$_GET['n'];
        if (isPrime($n)) {
            echo "$n là số nguyên tố";
        } else {
            echo "$n không phải số nguyên tố";
        }
        break;

    case 'fact':
        if (!isset($_GET['n'])) {
            echo "Thiếu tham số n <br>";
            echo "Ví dụ: ?action=fact&n=6";
            break;
        }

        $n = (int)$_GET['n'];
        $kq = factorial($n);
        echo "Giai thừa của $n = $kq";
        break;

    case 'gcd':
        if (!isset($_GET['a']) || !isset($_GET['b'])) {
            echo "Thiếu tham số a hoặc b <br>";
            echo "Ví dụ: ?action=gcd&a=12&b=18";
            break;
        }

        $a = (int)$_GET['a'];
        $b = (int)$_GET['b'];
        echo "UCLN($a, $b) = " . gcd($a, $b);
        break;

    default:
        echo "<b>MENU</b><br>";
        echo "?action=prime&n=17 <br>";
        echo "?action=fact&n=6 <br>";
        echo "?action=gcd&a=12&b=18 <br>";
}
