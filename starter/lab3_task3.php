<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 3: switch-case and match Expression [6 marks]
 *
 * @author     Robin Wanyonyi
 * @student    ENE212-0208/2023
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       02/04/2026
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Day of Week Classifier
// ══════════════════════════════════════════════════════════════

$day = 1; // change this to test all cases
$day = 2;
$day = 3;
$day = 4; 
$day = 5;
$day = 6; 
$day = 7;

// TODO: switch-case for day classifier
for ($day = 1; $day <= 7; $day++) {
    switch ($day) {
        case 1:
            echo "Monday — Lecture day\n" . "<br>";
            break;
        case 2:
            echo "Tuesday — Lecture day\n" . "<br>";
            break;
        case 3:
            echo "Wednesday — Lecture day\n" . "<br>";
            break;
        case 4:
            echo "Thursday — Lecture day\n" . "<br>";
            break;
        case 5:
            echo "Friday — Lecture day\n" . "<br>";
            break;
        case 6:
            echo "Saturday — Weekend\n" . "<br>";
            break;
        case 7:
            echo "Sunday — Weekend\n" . "<br>";
            break;
        default:
            echo "Invalid day. Please enter a number between 1 and 7.\n";
    }
}

echo "<hr>";    

// ══════════════════════════════════════════════════════════════
// EXERCISE B — HTTP Status Code Explainer
// ══════════════════════════════════════════════════════════════

$status_code = 404;

// TODO: switch-case for HTTP status
switch ($status_code) {
    case 200:
        echo "OK — request succeeded\n";
        break;
    case 301:
        echo "Moved Permanently — resource relocated\n";
        break;
    case 400:
        echo "Bad Request — client error\n";
        break;
    case 401:
        echo "Unauthorized — authentication required\n";
        break;
    case 403:
        echo "Forbidden — access denied\n";
        break;
    case 404:
        echo "Not Found — resource missing\n";
        break;
    case 500:
        echo "Internal Server Error — server fault\n";
        break;
    default:
        echo "Unknown status code\n";
}

echo "<hr>";

// ══════════════════════════════════════════════════════════════
// EXERCISE C — PHP 8 match Expression
// ══════════════════════════════════════════════════════════════

// TODO: match expression for HTTP status — same logic as Exercise B
$status_code = 404;

$message = match($status_code) {
    200 => "OK — request succeeded",
    301 => "Moved Permanently — resource relocated",
    400 => "Bad Request — client error",
    401 => "Unauthorized — authentication required",
    403 => "Forbidden — access denied",
    404 => "Not Found — resource missing",
    500 => "Internal Server Error — server fault",
    default => "Unknown status code"
};

echo $message . "\n";
echo "<<hr>";

// ══════════════════════════════════════════════════════════════
// EXERCISE D — Rewrite comparison
// ══════════════════════════════════════════════════════════════
// In your PDF report, answer:
// 1. What is the key difference between switch (==) and match (===)?
// 2. Give one example where this difference changes the output.
// 3. When would you prefer switch over match, and why?