<!-- Featured Projects Section -->
<section class="py-12 border-t border-gray-800">
    <h2 class="text-2xl md:text-3xl font-bold mb-8">Featured Projects</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Project Card 1 -->
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-accent-green/10 transition-all duration-300 group">
            <!-- Project Image with overlay -->
            <div class="relative overflow-hidden h-52">
                <img 
                    src="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? '..assets\img\proj-furniture.jpg' : 'assets\img\proj-furniture.jpg'; ?>" 
                    alt="E-Eommerce-Furniture Platform" 
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" 
                    onerror="this.src='https://via.placeholder.com/800x600?text=E-commerce+Project'; this.onerror='';"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>
                <div class="absolute bottom-0 left-0 w-full p-4">
                    <h3 class="text-xl font-bold text-white mb-1">Furniter Website</h3>
                    <div class="flex flex-wrap gap-1">
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">Html , Css</span>
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">Javascript</span>
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">PHP</span>
                    </div>
                </div>
            </div>
            
            <!-- Project Content -->
            <div class="p-6">
                <p class="text-gray-300 mb-4">A full-featured e-commerce-furnitire platform with secure processing and inventory management.</p>
                <div class="flex justify-between items-center">
                    <a href="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? 'projects.php' : 'pages/projects.php'; ?>" class="flex items-center text-accent-green group-hover:underline">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                    <div class="flex space-x-2">
                        <a href="https://github.com/itsomprakash48/furniture-webtemp" class="text-gray-400 hover:text-white"><i class="fab fa-github"></i></a>
                        <a href="https://itsomprakash48.github.io/furniture-webtemp/" class="text-gray-400 hover:text-white"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project Card 2 -->
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-accent-green/10 transition-all duration-300 group">
            <!-- Project Image with overlay -->
            <div class="relative overflow-hidden h-52">
                <img 
                    src="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? '..assets\img\proj-infini.png' : 'assets\img\proj-infini.png'; ?>" 
                    alt="AI Image Generator" 
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" 
                    onerror="this.src='https://via.placeholder.com/800x600?text=AI+Project'; this.onerror='';"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>
                <div class="absolute bottom-0 left-0 w-full p-4">
                    <h3 class="text-xl font-bold text-white mb-1">Software Company Website</h3>
                    <div class="flex flex-wrap gap-1">
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">Html ,Css</span>
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">Javascript</span>
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">PHP</span>
                    </div>
                </div>
            </div>
            
            <!-- Project Content -->
            <div class="p-6">
                <p class="text-gray-300 mb-4">An Software agency Website for my friend - Raunak Raj ,Infinicode is a forward-thinking technology company. </p>
                <div class="flex justify-between items-center">
                    <a href="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? 'projects.php' : 'pages/projects.php'; ?>" class="flex items-center text-accent-green group-hover:underline">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                    <div class="flex space-x-2">
                        <a href="https://github.com/itsomprakash48/infincode-webtemp" class="text-gray-400 hover:text-white"><i class="fab fa-github"></i></a>
                        <a href="https://itsomprakash48.github.io/infincode-webtemp/" class="text-gray-400 hover:text-white"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Project Card 3 -->
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow-lg hover:shadow-accent-green/10 transition-all duration-300 group">
            <!-- Project Image with overlay -->
            <div class="relative overflow-hidden h-52">
                <img 
                    src="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? '..assets\img\proj3-iot.jpg' : 'assets\img\proj3-iot.jpg'; ?>" 
                    alt="Portfolio Website" 
                    class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500" 
                    onerror="this.src='https://via.placeholder.com/800x600?text=Portfolio+Project'; this.onerror='';"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-70"></div>
                <div class="absolute bottom-0 left-0 w-full p-4">
                    <h3 class="text-xl font-bold text-white mb-1">IOT Project</h3>
                    <div class="flex flex-wrap gap-1">
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">Arduino</span>
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">C++</span>
                        <span class="px-2 py-1 bg-gray-700 text-xs rounded-full text-gray-300">Sensors</span>
                    </div>
                </div>
            </div>
            
            <!-- Project Content -->
            <div class="p-6">
                <p class="text-gray-300 mb-4">A smart firefighting robot with auto-rotate, fire detection, and automatic water pump activation to suppress fires.</p>
                <div class="flex justify-between items-center">
                    <a href="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? 'projects.php' : 'pages/projects.php'; ?>" class="flex items-center text-accent-green group-hover:underline">
                        <span>View Details</span>
                        <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                    </a>
                    <div class="flex space-x-2">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-github"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- View All Projects Button -->t
    <div class="mt-8 text-center">
        <a href="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? 'projects.php' : 'pages/projects.php'; ?>" class="inline-flex items-center bg-accent-green hover:bg-emerald-600 text-white px-6 py-3 rounded-md font-medium transition-colors">
            View All Projects
            <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>