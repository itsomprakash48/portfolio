<!-- Desktop Sidebar -->
<div id="desktop-sidebar" class="hidden md:block fixed h-full w-64 bg-gray-900 text-white p-6 shadow-xl z-30">
    <?php
    // Check if we're in the main directory or a subdirectory
    $basePath = '';
    if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
        $basePath = '../';
    }
    ?>
    
    <!-- Profile Info -->
<div class="flex items-center mb-10">
    <!-- Left side - Profile Image -->
    <div class="w-24 h-24 rounded-lg overflow-hidden border-2 border-accent-green shadow-lg mr-4">
        <img src="<?php echo $basePath; ?>assets/img/05.webp" alt="Profile"
            class="w-full h-full object-cover"
            onerror="this.src='https://via.placeholder.com/96'; this.onerror='';" />
    </div>
    
    <!-- Right side - Profile Text -->
    <div>
        <h1 class="text-lg font-bold">Om Prakash</h1>
        <p class="text-accent-green text-sm">AI/ML enthusiast</p>
    </div>
</div>
    
    <!-- Personal Details Tiles -->
    <div class="grid grid-cols-2 gap-2 mb-6">
        <!-- Residence Tile -->
        <div class="bg-gray-800 rounded-lg p-2 hover:bg-gray-800/80 transition-colors">
            <p class="text-gray-400 text-xs mb-1">Residence</p>
            <div class="flex items-center">
                <i class="fas fa-map-marker-alt text-accent-green mr-2"></i>
                <p class="text-white text-sm">India</p>
            </div>
        </div>
        
        <!-- City Tile -->
        <div class="bg-gray-800 rounded-lg p-2 hover:bg-gray-800/80 transition-colors">
            <p class="text-gray-400 text-xs mb-1">City</p>
            <div class="flex items-center">
                <i class="fas fa-city text-accent-green mr-2"></i>
                <p class="text-white text-sm">Bhopal</p>
            </div>
        </div>
        
        <!-- Age Tile -->
        <div class="bg-gray-800 rounded-lg p-2 hover:bg-gray-800/80 transition-colors">
            <p class="text-gray-400 text-xs mb-1">Age</p>
            <div class="flex items-center">
                <i class="fas fa-birthday-cake text-accent-green mr-2"></i>
                <p class="text-white text-sm">19</p>
            </div>
        </div>
        
        <!-- Experience Tile -->
        <div class="bg-gray-800 rounded-lg p-2 hover:bg-gray-800/80 transition-colors">
            <p class="text-gray-400 text-xs mb-1">B.tech</p>
            <div class="flex items-center">
                <i class="fas fa-briefcase text-accent-green mr-2"></i>
                <p class="text-white text-sm">CSE</p>
            </div>
        </div>
    </div>
    
    <!-- Navigation -->
    <nav>
        <ul class="space-y-1">
            <li>
                <a href="<?php echo $basePath; ?>index.php" class="flex items-center space-x-3 py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-home text-accent-green"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $basePath; ?>pages/projects.php" class="flex items-center space-x-3 py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-project-diagram text-accent-green"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $basePath; ?>pages/contact.php" class="flex items-center space-x-3 py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-envelope text-accent-green"></i>
                    <span>Contact</span>
                </a>
            </li>
            <li>
                <a href="<?php echo $basePath; ?>pages/resume.php" class="flex items-center space-x-3 py-2 px-3 rounded-lg hover:bg-gray-800 transition-colors">
                    <i class="fas fa-file-alt text-accent-green"></i>
                    <span>Resume</span>
                </a>
            </li>
        </ul>
    </nav>
<!-- Social Links -->
<div class="flex justify-center space-x-3 mt-4 pt-3 border-t border-gray-800">
    <a href="https://github.com/itsomprakash48/" target="_blank" class="bg-gray-800 w-8 h-8 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
        <i class="fab fa-github text-sm"></i>
    </a>
    <a href="https://www.linkedin.com/in/omprakash48/" target="_blank" class="bg-gray-800 w-8 h-8 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
        <i class="fab fa-linkedin-in text-sm"></i>
    </a>
    <a href="https://x.com/its_omprakash48" target="_blank" class="bg-gray-800 w-8 h-8 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
        <i class="fab fa-twitter text-sm"></i>
    </a>
    <a href="https://www.instagram.com/its_omprakash48/" target="_blank" class="bg-gray-800 w-8 h-8 rounded-full flex items-center justify-center hover:bg-accent-green transition-colors">
        <i class="fab fa-instagram text-sm"></i>
    </a>
</div>
</div>