<?php
session_start();

// Set default language if not set
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

// Function to get current language
function getCurrentLang() {
    return $_SESSION['lang'];
}

// Function to set language
function setLang($lang) {
    $_SESSION['lang'] = $lang;
}

// Function to get translation
function __($key) {
    global $translations;
    $lang = getCurrentLang();
    return isset($translations[$lang][$key]) ? $translations[$lang][$key] : $key;
}

// Handle language switch
if (isset($_GET['lang'])) {
    setLang($_GET['lang']);
    // Redirect to remove the lang parameter from URL
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit();
}
?> 