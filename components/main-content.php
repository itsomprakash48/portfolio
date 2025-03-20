<?php
// Determine the correct path for components
$baseComponentPath = '';
if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
    $baseComponentPath = '../components/';
} else {
    $baseComponentPath = './components/';
}

// Include all content section components
include_once $baseComponentPath . 'content/about-section.php';
include_once $baseComponentPath . 'content/education-section.php';
include_once $baseComponentPath . 'content/hero-slideshow.php';
include_once $baseComponentPath . 'content/skills-section.php';
// include_once $baseComponentPath . 'content/stats-section.php';
include_once $baseComponentPath . 'content/project-section.php';
include_once $baseComponentPath . 'content/expertise-section.php';
?>
