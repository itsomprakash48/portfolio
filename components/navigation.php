<!-- Mobile Navigation with Sidebar -->
<div class="fixed top-0 left-0 right-0 z-40 md:hidden">
    <div class="bg-gray-900 px-4 py-4 flex justify-between items-center shadow-lg">
        <?php
        // Check if we're in the main directory or a subdirectory
        $basePath = '';
        if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
            $basePath = '../';
        }
        ?>
        <div class="text-white font-semibold text-xl">
            <a href="<?php echo $basePath; ?>index.php" class="flex items-center">
                <span class="text-accent-green mr-2"><i class="fas fa-code"></i></span>
                Portfolio
            </a>
        </div>
        <button id="mobile-menu-toggle" class="text-white focus:outline-none bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center shadow-md border border-gray-700">
            <i class="fas fa-bars text-accent-green"></i>
        </button>
    </div>
</div>

<!-- Mobile Sidebar Overlay -->
<div id="mobile-sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden md:hidden"></div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar" class="fixed right-0 top-0 bottom-0 w-72 bg-gray-900 text-white p-6 shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden overflow-y-auto">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold">Menu</h2>
        <button id="close-mobile-menu" class="text-gray-400 hover:text-white w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-800">
            <i class="fas fa-times text-xl"></i>
        </button>
    </div>
    
    <!-- Profile Info (Mobile) -->
    <div class="flex items-center space-x-3 mb-6">
        <div class="w-14 h-14 rounded-lg overflow-hidden border-2 border-accent-green">
            <img src="<?php echo $basePath; ?>assets/img/05.webp" alt="Profile"
                class="w-full h-full object-cover"
                onerror="this.src='https://via.placeholder.com/56'; this.onerror='';" />
        </div>
        <div>
            <h1 class="text-lg font-semibold">Om Prakash</h1>
            <p class="text-accent-green text-sm">AI/ML enthusiast</p>
        </div>
    </div>
    
    <!-- Navigation (Mobile) -->
    <nav class="mb-8">
        <ul class="space-y-1">
            <li>
                <a href="<?php echo $basePath; ?>index.php" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-home text-accent-green"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $basePath; ?>pages/projects.php" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-project-diagram text-accent-green"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $basePath; ?>pages/contact.php" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-envelope text-accent-green"></i>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $basePath; ?>pages/resume.php" class="flex items-center space-x-3 py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-file-alt text-accent-green"></i>
                    <span>Resume</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <!-- Personal Details (Mobile) -->
    <div class="grid grid-cols-2 gap-2 mb-6">
        <div class="bg-gray-800 rounded-lg p-2 text-center">
            <p class="text-gray-400 text-xs">Residence</p>
            <p class="text-white">India</p>
        </div>
        <div class="bg-gray-800 rounded-lg p-2 text-center">
            <p class="text-gray-400 text-xs">City</p>
            <p class="text-white">Bhopal</p>
        </div>
        <div class="bg-gray-800 rounded-lg p-2 text-center">
            <p class="text-gray-400 text-xs">Age</p>
            <p class="text-white">19</p>
        </div>
        <div class="bg-gray-800 rounded-lg p-2 text-center">
            <p class="text-gray-400 text-xs">Experience</p>
            <p class="text-white">3+ Years</p>
        </div>
    </div>
    
    <!-- Social Links (Mobile) -->
    <div class="flex justify-center space-x-3 mt-6 pt-4 border-t border-gray-800">
        <a href="https://github.com/itsomprakash48/" target="_blank" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
            <i class="fab fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/omprakash48/" target="_blank" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://x.com/its_omprakash48" target="_blank" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/its_omprakash48/" target="_blank" class="bg-gray-800 w-10 h-10 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>

<!-- JavaScript for mobile menu -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const mobileSidebar = document.getElementById('mobile-sidebar');
    const overlay = document.getElementById('mobile-sidebar-overlay');
    
    // Open mobile menu
    mobileMenuToggle.addEventListener('click', function() {
        mobileSidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    });
    
    // Close mobile menu
    function closeSidebar() {
        mobileSidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
    
    closeMobileMenu.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
});
</script>