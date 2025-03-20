<?php
// Component: Hero Slideshow
// Define your slideshow images - add more as needed
$slideImages = [
    'assets\img\certificate4.jpg',
    'assets\img\certificate3.jpg', 
    'assets\img\certificate2.jpg',
    'assets\img\certificate1.jpg',
    // 'assets\img\certificate4.jpg'
];

// Check if we're in a subdirectory
$basePath = '';
if (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) {
    $basePath = '../';
}
?>

<!-- Hero Section - Image Slideshow -->
<section class="py-8 md:py-12 relative overflow-hidden">
    <div class="slideshow-container w-full md:w-[calc(100%-1rem)] mx-auto rounded-xl shadow-2xl">
        <!-- Slides -->
        <div class="slides-wrapper relative">
            <?php
            // Generate slides
            foreach ($slideImages as $index => $image) {
                $activeClass = ($index === 0) ? 'active' : '';
                echo '<div class="slide fade '.$activeClass.'">';
                echo '    <img src="'.$basePath.$image.'" alt="Slideshow Image '.($index+1).'" 
                             class="w-full h-64 md:h-[500px] object-cover rounded-t-xl" 
                             onerror="this.src=\'https://via.placeholder.com/1200x500?text=Slide+'.($index+1).'\'; this.onerror=\'\';">';
                
                // Caption overlay with gradient background
                echo '    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6">';
                echo '        <div class="slide-caption transform transition-transform duration-700 translate-y-0">';
                // echo '            <h2 class="text-2xl md:text-4xl font-bold text-white mb-2">My Certificates</h2>';
                echo '            <p class="text-lg text-gray-200 max-w-xl">Showcasing My Certificates</p>';
                echo '        </div>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
            
            <!-- Navigation arrows -->
            <a class="prev-btn absolute top-1/2 left-4 -translate-y-1/2 bg-black/40 hover:bg-accent-green text-white rounded-full w-12 h-12 flex items-center justify-center z-10 transition-all duration-300 backdrop-blur-sm" onclick="changeSlide(-1)">
                <i class="fas fa-chevron-left"></i>
            </a>
            <a class="next-btn absolute top-1/2 right-4 -translate-y-1/2 bg-black/40 hover:bg-accent-green text-white rounded-full w-12 h-12 flex items-center justify-center z-10 transition-all duration-300 backdrop-blur-sm" onclick="changeSlide(1)">
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        
        <!-- Progress bar -->
        <div class="progress-container w-full h-1 bg-gray-700">
            <div class="progress-bar h-1 bg-accent-green" style="width: 0%"></div>
        </div>
        
        <!-- Dots/indicators -->
        <div class="dots-container flex justify-center py-4 px-6 bg-gray-900 rounded-b-xl">
            <?php
            foreach ($slideImages as $index => $image) {
                echo '<span class="dot'.($index === 0 ? ' active' : '').'" onclick="setSlide('.$index.')"></span>';
            }
            ?>
        </div>
    </div>

    <!-- Slideshow Styles -->
    <style>
        .slideshow-container {
            position: relative;
            background: #0f172a;
            overflow: hidden;
        }
        
        .slides-wrapper {
            overflow: hidden;
        }
        
        .slide {
            display: none;
            width: 100%;
        }
        
        .slide.active {
            display: block;
            animation: fadeIn 0.8s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }
        
        .dot {
            height: 10px;
            width: 10px;
            margin: 0 6px;
            background-color: #4a5568;
            border-radius: 50%;
            display: inline-block;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .dot.active {
            background-color: #10B981; /* accent-green */
            transform: scale(1.3);
        }
        
        .slide.active .slide-caption {
            animation: slideUp 0.8s ease forwards;
        }
        
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        /* Progress animation for current slide */
        @keyframes progress {
            from { width: 0%; }
            to { width: 100%; }
        }
        
        /* Hover effects for navigation */
        .prev-btn:hover, .next-btn:hover {
            transform: translateY(-50%) scale(1.1);
        }
    </style>

    <!-- Slideshow Script -->
    <script>
        // Wait for DOM to be fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Start slideshow autoplay
            startSlideshow();
        });
        
        let slideIndex = 0;
        let slideshowInterval;
        let progressBar;
        
        // Start automatic slideshow
        function startSlideshow() {
            // Reset any existing interval
            if (slideshowInterval) {
                clearInterval(slideshowInterval);
            }
            
            // Start progress bar animation
            progressBar = document.querySelector('.progress-bar');
            progressBar.style.width = '0%';
            progressBar.style.transition = 'none';
            setTimeout(() => {
                progressBar.style.transition = 'width 5s linear';
                progressBar.style.width = '100%';
            }, 50);
            
            // Set interval for changing slides
            slideshowInterval = setInterval(function() {
                changeSlide(1);
            }, 5000); // Change slide every 5 seconds
        }
        
        // Navigate to a specific slide
        function setSlide(n) {
            showSlides(slideIndex = n);
            
            // Reset the interval when manually changing slides
            clearInterval(slideshowInterval);
            startSlideshow();
        }
        
        // Change slide by moving forward/backward
        function changeSlide(n) {
            showSlides(slideIndex += n);
        }
        
        // Control slide display
        function showSlides(n) {
            let slides = document.querySelectorAll('.slide');
            let dots = document.querySelectorAll('.dot');
            
            // Handle index boundaries
            if (n >= slides.length) {slideIndex = 0}
            if (n < 0) {slideIndex = slides.length - 1}
            
            // Hide all slides
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove('active');
            }
            
            // Remove active class from all dots
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove('active');
            }
            
            // Show the current slide and activate corresponding dot
            slides[slideIndex].classList.add('active');
            dots[slideIndex].classList.add('active');
            
            // Reset progress bar
            let progressBar = document.querySelector('.progress-bar');
            progressBar.style.width = '0%';
            progressBar.style.transition = 'none';
            setTimeout(() => {
                progressBar.style.transition = 'width 5s linear';
                progressBar.style.width = '100%';
            }, 50);
        }
    </script>
</section>
