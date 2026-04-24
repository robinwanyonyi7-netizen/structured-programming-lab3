<?php
/**
 * ICS 2371 — Lab 3: Control Structures I
 * Task 1: Simple if and if-else — Warm-Up Exercises [5 marks]
 *
 * @author     Robin Wanyonyi
 * @student    ENE212-0208/2023
 * @lab        Lab 3 of 14
 * @unit       ICS 2371
 * @date       02/04/2026
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Temperature Alert System
// ══════════════════════════════════════════════════════════════
// Declare $temperature = 39.2
// Use separate if statements (not if-else) to print:
//   "Normal"            if temp is between 36.1 and 37.5 inclusive
//   "Fever"             if temp > 37.5
//   "Hypothermia Warning" if temp < 36.1
// Test with: 36.8, 39.2, 34.5 — screenshot each

// TODO: Exercise A — your code here


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Even or Odd
// ══════════════════════════════════════════════════════════════
// Declare $number = 47
// Use if-else to print "$number is EVEN" or "$number is ODD"
// Also check divisibility by 3, by 5, and by both 3 and 5 — one line each

// TODO: Exercise B — your code here


// ══════════════════════════════════════════════════════════════
// EXERCISE C — Comparison Chain
// ══════════════════════════════════════════════════════════════
// Run this code EXACTLY as written.
// Record all six outputs in your report and explain each result.

$x = 10; $y = "10"; $z = 10.0;

var_dump($x == $y);   // A: ?
var_dump($x === $y);  // B: ?
var_dump($x == $z);   // C: ?
var_dump($x === $z);  // D: ?
var_dump($y === $z);  // E: ?
var_dump($x <=> $y);  // F: spaceship — what type? what value?

// Your explanation of each result goes in your PDF report (not here).


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Null & Default Values
// ══════════════════════════════════════════════════════════════
// Run this code as written, then extend it as instructed below.
$temperature = 39.2;
echo $temperature . "<br>";

if ($temperature >= 36.1 && $temperature <= 37.5) {
  echo "Temperature: Normal" . "<br>";}
if ($temperature > 37.5) {
  echo "Temperature: Fever" . "<br>";} 
if ($temperature < 36.1) {
  echo "Temperature: Hypothermia Warning" . "<br>";}

echo "<hr>";

$temperature = 36.8;
echo $temperature . "<br>";

if ($temperature >= 36.1 && $temperature <= 37.5) {
  echo "Temperature: Normal" . "<br>";}
if ($temperature > 37.5) {
  echo "Temperature: Fever" . "<br>";}
if ($temperature < 36.1) {
  echo "Temperature: Hypothermia Warning" . "<br>";}

echo "<hr>";

$temperature = 34.5;
echo $temperature . "<br>";

if ($temperature >= 36.1 && $temperature <= 37.5) {
  echo "Temperature: Normal" . "<br>";}
if ($temperature > 37.5) {
  echo "Temperature: Fever" . "<br>";}
if ($temperature < 36.1) {
  echo "Temperature: Hypothermia Warning" . "<br>";}

  echo "<hr>";
  
$x = 10; $y = "10"; $z = 10.0;

var_dump($x == $y);   // A: boolean true
echo "<br>";
var_dump($x === $y);  // B: boolean false
echo "<br>";
var_dump($x == $z);   // C: boolean true
echo "<br>";
var_dump($x === $z);  // D: boolean false
echo "<br>";
var_dump($y === $z);  // E: boolean false
echo "<br>";
var_dump($x <=> $y);  // F: spaceship — what type? Integer — what value? 0

echo "<hr>";

$username = null;
$intro  = "Welcome to the site!";
$display  = $username ?? "Guest";
echo "Welcome, $display<br>" . $intro . "<br>";

// Chained null coalescing
$config_val = null;
$env_val    = null;
$default    = "system_default";
$result     = $config_val ?? $env_val ?? $default;
echo "Config: $result<br>";

// Another chained example
$user_pref = null;
$site_pref = null;
$global_pref = "dark_mode";
$theme = $user_pref ?? $site_pref ?? $global_pref;
echo "Theme: $theme<br>";

// TODO: Add one more chained ?? example of your own and explain it in your report.
