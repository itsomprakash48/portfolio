<footer class="bg-gray-900 text-gray-300 p-6 mt-16">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row justify-between">
            <div class="mb-4 md:mb-0">
                <h2 class="text-xl font-bold text-white mb-2">its_omprakash48</h2>
                <p class="text-sm">AI/ML enthusiast</p>
            </div>
            
            <div class="flex space-x-4">
                <a href="https://github.com/itsomprakash48/" class="hover:text-accent-green"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/omprakash48/" class="hover:text-accent-green"><i class="fab fa-linkedin"></i></a>
                <a href="https://x.com/its_omprakash48" class="hover:text-accent-green"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/its_omprakash48/" class="hover:text-accent-green"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="mt-6 text-sm text-center md:text-left">
            &copy; <?php echo date('Y'); ?> . All rights reserved.
        </div>
    </div>
</footer>

<!-- Custom JavaScript -->
<?php
// Check if we're in the main directory or a subdirectory
$basePath = '';
if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
    $basePath = '../';
}
?>
<script src="<?php echo $basePath; ?>assets/js/main.js"></script>
