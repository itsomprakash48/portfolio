<?php
// Contact page
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
                    <h1 class="text-4xl font-bold mb-8">Get In Touch</h1>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Contact Form -->
                        <div class="bg-gray-800 p-6 rounded-lg">
                            <form id="submit-form" method="POST" action="https://api.web3forms.com/submit">
                                <!-- Hidden Access Key for Web3Forms -->
                                <input type="hidden" name="access_key" value="b5e77f8f-6e3b-490e-bfd9-76dd2c3294a4">
                                
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-300 mb-2">Name</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-700 border-gray-600 rounded-md px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green" required>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="email" class="block text-gray-300 mb-2">Email</label>
                                    <input type="email" id="email" name="email" class="w-full bg-gray-700 border-gray-600 rounded-md px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green" required>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="message" class="block text-gray-300 mb-2">Message</label>
                                    <textarea id="message" name="message" rows="5" class="w-full bg-gray-700 border-gray-600 rounded-md px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green" required></textarea>
                                </div>
                                
                                <button type="submit" id="submit-btn" class="w-full bg-accent-green hover:bg-emerald-600 text-white px-6 py-3 rounded-md font-medium transition-colors">
                                    Send Message
                                </button>
                                <p id="form-status" class="mt-3 text-center hidden"></p>
                            </form>
                        </div>
                        
                        <!-- Contact Information -->
                        <div>
                            <div class="bg-gray-800 p-6 rounded-lg mb-6">
                                <h3 class="text-xl font-medium mb-4">Contact Information</h3>
                                <div class="space-y-3">
                                    <p class="flex items-center"><i class="fas fa-envelope w-6 text-accent-green"></i> omprakash908987@gmail.com</p>
                                    <p class="flex items-center"><i class="fas fa-phone w-6 text-accent-green"></i> 7739998377</p>
                                    <p class="flex items-center"><i class="fas fa-map-marker-alt w-6 text-accent-green"></i> Bhopal, Madhya Pradesh, India</p>
                                </div>
                            </div>
                            
                            <div class="bg-gray-800 p-6 rounded-lg">
                                <h3 class="text-xl font-medium mb-4">Connect With Me</h3>
                                <div class="flex space-x-4">
                                    <a href="https://github.com/itsomprakash48/" class="text-2xl hover:text-accent-green"><i class="fab fa-github"></i></a>
                                    <a href="https://www.linkedin.com/in/omprakash48/" class="text-2xl hover:text-accent-green"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://x.com/its_omprakash48" class="text-2xl hover:text-accent-green"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/its_omprakash48/" class="text-2xl hover:text-accent-green"><i class="fab fa-instagram"></i></a>
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

    <!-- Script to handle form submission using Web3Forms API -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('submit-form');
            const formStatus = document.getElementById('form-status');
            const submitBtn = document.getElementById('submit-btn');

            form.addEventListener('submit', (e) => {
                e.preventDefault();
                
                // Disable the submit button and update its appearance
                submitBtn.disabled = true;
                submitBtn.classList.add('bg-gray-500');
                submitBtn.classList.remove('bg-accent-green', 'hover:bg-emerald-600');
                submitBtn.textContent = 'Sending...';
                
                // Show a status message
                formStatus.classList.remove('hidden', 'text-red-500', 'text-accent-green');
                formStatus.classList.add('text-yellow-400');
                formStatus.textContent = 'Sending your message...';
                
                const formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    if(data.success){
                        formStatus.classList.remove('text-yellow-400');
                        formStatus.classList.add('text-accent-green');
                        formStatus.textContent = 'Message sent successfully! I\'ll get back to you soon.';
                        form.reset();
                    } else {
                        throw new Error(data.message || 'Something went wrong');
                    }
                })
                .catch(error => {
                    formStatus.classList.remove('text-yellow-400');
                    formStatus.classList.add('text-red-500');
                    formStatus.textContent = 'There was an error sending your message. Please try again.';
                    console.error('Error:', error);
                })
                .finally(() => {
                    setTimeout(() => {
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('bg-gray-500');
                        submitBtn.classList.add('bg-accent-green', 'hover:bg-emerald-600');
                        submitBtn.textContent = 'Send Message';
                    }, 2000);
                });
            });
        });
    </script>
</body>
</html>
