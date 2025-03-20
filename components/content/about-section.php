<!-- About Me Section -->
<section class="py-12 border-t border-gray-800">
    <h2 class="text-2xl md:text-3xl font-bold mb-8">About Me</h2>
    
    <div class="flex flex-col md:flex-row gap-8 mb-10">
        <!-- Profile Image -->
        <div class="md:w-1/4 flex justify-center">
            <div class="w-56 h-80 rounded-xl overflow-hidden border-4 border-accent-green shadow-lg shadow-accent-green/20">
            <img 
                src="<?php echo (strpos($_SERVER['SCRIPT_NAME'], '/pages/') !== false) ? '../assets/img/dp01.heic' : 'assets\img\maindp.jpg'; ?>" 
                alt="Profile Picture" 
                class="w-full h-full object-cover"
                onerror="this.src='https://via.placeholder.com/200'; this.onerror='';"
             />
        </div>
    </div>

        
        <!-- About Content -->
        <div class="md:w-3/4">
            <h3 class="text-accent-green text-xl font-semibold mb-4">ITS_OMPRAKASH48</h3>
            <p class="text-gray-300 mb-6 text-lg">
            Hello, I’m Om Prakash, a passionate B.Tech student at IES College of Technology, 
            specializing in programming and technical innovation. With a strong foundation in Java, Python,
            Data Structures & Algorithms, Cyber Security, and Computer Networking, I am dedicated to building
            responsive and efficient solutions.
            </p>
            
            <p class="text-gray-300 mb-6">
            I thrive on challenging projects that allow me to experiment with AI/ML concepts, such as hands-on labs with
             platforms like Google Gemini 2.0 Flash. My dedication to learning and adapting to new technologies drives me
              to discover innovative solutions and contribute to this exciting field.
            </p>
            
            <div class="flex gap-6 flex-wrap">
                <div class="flex items-center">
                    <span class="text-accent-green mr-2"><i class="fas fa-envelope"></i></span>
                    <span class="text-gray-300">omprakash908987@gmail.com</span>
                </div>
                <div class="flex items-center">
                    <span class="text-accent-green mr-2"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="text-gray-300">India ,Bhopal</span>
                </div>
                <div class="flex items-center">
                    <span class="text-accent-green mr-2"><i class="fas fa-calendar-alt"></i></span>
                    <span class="text-gray-300">B.tech Student</span>
                </div>
            </div>
        </div>
    </div>
</section>
