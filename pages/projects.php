<?php
// Projects page
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once '../components/header.php'; ?>
<body class="bg-black text-white font-poppins">
    <!-- Mobile Navigation -->
    <?php include_once '../components/navigation.php'; ?>
    
    <!-- Main Layout Wrapper -->
    <div class="min-h-screen flex flex-col">
        <div class="flex-1 flex flex-col md:flex-row">
            <!-- Sidebar (desktop) -->
            <?php include_once '../components/sidebar.php'; ?>
            
            <!-- Main Content -->
            <div class="flex-1 px-4 md:px-8 pb-8 pt-20 md:pt-8 md:ml-64">
                <section class="py-16">
                    <h1 class="text-4xl font-bold mb-8">My Projects</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Project Card 1 -->
                        <div class="bg-gray-800 rounded-lg overflow-hidden">
                            <div class="h-48 bg-gray-700" style="background-image: url('../assets/img/proj-furniture.jpg'); background-size: cover; background-position: center;" onerror="this.style.backgroundImage='url(https://via.placeholder.com/800x600?text=E-commerce+Project)'"></div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Furniture Website</h3>
                                <p class="text-gray-300 mb-4">A full-featured e-commerce furniture platform with secure processing and inventory management.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">HTML</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">CSS</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">JavaScript</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">PHP</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Card 2 -->
                        <div class="bg-gray-800 rounded-lg overflow-hidden">
                            <div class="h-48 bg-gray-700" style="background-image: url('../assets/img/proj-infini.png'); background-size: cover; background-position: center;" onerror="this.style.backgroundImage='url(https://via.placeholder.com/800x600?text=Software+Company)'"></div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Software Company Website</h3>
                                <p class="text-gray-300 mb-4">A software agency website for Raunak Raj, showcasing the innovative work of "Infinicode," a forward-thinking tech company.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">HTML</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">CSS</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">JavaScript</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">PHP</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Card 3 -->
                        <div class="bg-gray-800 rounded-lg overflow-hidden">
                            <div class="h-48 bg-gray-700" style="background-image: url('../assets/img/proj3-iot.jpg'); background-size: cover; background-position: center;" onerror="this.style.backgroundImage='url(https://via.placeholder.com/800x600?text=IoT+Project)'"></div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">IoT Project</h3>
                                <p class="text-gray-300 mb-4">A smart firefighting robot with auto-rotate, fire detection, and automatic water pump activation to suppress fires.</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">Arduino</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">C++</span>
                                    <span class="px-2 py-1 bg-gray-700 text-xs rounded-full">Sensors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
        <!-- Footer positioned at the bottom -->
        <div class="md:ml-64">
            <?php include_once '../components/footer.php'; ?>
        </div>
    </div>
</body>
</html>
