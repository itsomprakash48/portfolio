<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Main entry point for the portfolio website
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once './components/header.php'; ?>
<body class="bg-black text-white font-poppins">
    <!-- Mobile Navigation -->
    <?php include_once './components/navigation.php'; ?>
    
    <!-- Main Layout Wrapper -->
    <div class="min-h-screen flex flex-col">
        <div class="flex-1 flex flex-col md:flex-row">
            <!-- Sidebar (desktop) -->
            <?php include_once './components/sidebar.php'; ?>
            
            <!-- Main Content -->
            <div class="flex-1 px-4 md:px-8 pb-8 pt-20 md:pt-8 md:ml-64">
                <?php include_once './components/main-content.php'; ?>
            </div>
        </div>
        
        <!-- Footer positioned at the bottom -->
        <div class="md:ml-64">
            <?php include_once './components/footer.php'; ?>
        </div>
    </div>
</body>
</html>
