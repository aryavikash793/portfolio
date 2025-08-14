<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vikash Arya - Portfolio</title>
     <!-- Favicon -->
    <link rel="icon" href="./assets/img/icon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-white">
    <!-- Dangerous Background Effects -->
    <div class="danger-bg">
        <div class="glitch-bg"></div>
        <div class="neon-flicker"></div>
        
        <!-- Floating Particles -->
        <div class="particles" id="particles"></div>
        
        <!-- Moving Lines -->
        <div class="moving-lines" id="moving-lines"></div>
        
        <!-- Matrix Rain -->
        <div class="matrix-rain" id="matrix-rain"></div>
    </div>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Navigation -->
        <nav class="bg-gray-800 backdrop-blur-sm p-4 sticky top-0 z-50">
            <div class="container mx-auto flex justify-between items-center">
                <a href="#home" class="text-2xl font-bold">Portfolio</a>
                <!-- Hamburger Menu Button for Mobile -->
                <button id="nav-toggle" class="md:hidden text-white focus:outline-none" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
                <!-- Navigation Links -->
                <div id="nav-menu" class="flex-col md:flex-row md:flex space-y-4 md:space-y-0 md:space-x-6 absolute md:static top-16 left-0 w-full md:w-auto bg-gray-800/90 backdrop-blur-sm md:bg-transparent p-4 md:p-0">
                    <a href="#home" class="nav-link text-[#03FF0E] hover:text-green-400 transition active">Home</a>
                    <a href="#about" class="nav-link hover:text-green-400 transition">About</a>
                    <a href="#skills" class="nav-link hover:text-green-400 transition">Skills</a>
                    <a href="#projects" class="nav-link hover:text-green-400 transition">Projects</a>
                    <a href="#contact" class="nav-link hover:text-green-400 transition">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Home Section -->
        <section id="home" class="min-h-screen flex items-center justify-center py-8">
            <div class="container mx-auto px-4 flex flex-col items-center md:flex-row">
                <div class="md:w-1/2 text-center md:text-left mb-8 md:mb-0">
                    <h1 class="text-4xl sm:text-5xl font-bold mb-4">
                    Vikash Arya
                </h1>
                <p class="text-xl font-semibold mb-2">
                    I'm a <span id="typed-text" class="text-[#03FF0E]"></span>
                </p>
                <p class="text-base sm:text-lg text-gray-300 mb-6">
                    I'm passionate about building backend services and scalable applications using modern PHP frameworks.
                </p>
                    <a href="#contact" class="bg-[#03FF0E] text-gray-900 px-6 py-3 rounded-lg hover:bg-green-400 transition inline-block">Hire Me</a>
                    <div class="mt-6 flex justify-center md:justify-start space-x-4">
                        <a href="https://github.com/aryavikash793" class="text-2xl hover:text-[#03FF0E]"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/vikash-arya-2a09942b4" class="text-2xl hover:text-[#03FF0E]"><i class="fab fa-linkedin"></i></a>
                        <a href="https://x.com/aryavikash05" class="text-2xl hover:text-[#03FF0E]"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/@vikashdeveloper05" class="text-2xl hover:text-[#03FF0E]"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <!-- Profile Image with Effects -->
                <div class="md:w-1/2 mt-10 mb-10 md:mt-0 md:mb-0 relative flex justify-center items-center">
                  <!-- Animated Glowing Ring -->
                  <div class="absolute w-60 h-60 sm:w-72 sm:h-72 md:w-80 md:h-80 rounded-full border-4 border-[#03FF0E] animate-pulse-glow"></div>

                  <!-- Image with hover scale and glow -->
                  <div class="w-60 h-60 sm:w-72 sm:h-72 md:w-80 md:h-80 rounded-full overflow-hidden relative z-10 transition-transform duration-500 transform hover:scale-105 hover:shadow-[0_0_40px_#03FF0E] animate-fade-in">
                    <img src="./assets/img/profilephoto.png" alt="Vikash Arya" class="w-full h-full object-cover rounded-full">
                  </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-12 sm:py-16 bg-gray-900/50 backdrop-blur-sm">
            <div class="container mx-auto px-4">
                <h2 class="relative text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 text-[#03FF0E]">
                  About Me
                  <span class="block w-24 h-1 bg-[#03FF0E] mx-auto mt-2 rounded-full"></span>
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8">
                    <div>
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">Who I'm</h3>
                        <p class="text-base sm:text-lg"><b>I'm Vikash Arya</b>, a fresher PHP and Laravel backend developer with basic frontend skills. I'm passionate about building functional and scalable web applications and am always eager to learn new technologies and grow in the development field.</p>
                    </div>
                    <div>
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">Education</h3>
                        <p class="text-base sm:text-lg">Bachelor of Computer Applications (BCA), Ram Manohar Lohia Avadh University, Ayodhya, Currently pursuing – 3rd Year.</p>
                        <p class="text-base sm:text-lg">Relevant coursework: Web Development, Database Systems, Software Engineering.</p>
                    </div>
                    <div>
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">Experience</h3>
                        <p class="text-base sm:text-lg">PHP Developer at CodeZeera IT Solutions (Since August 14, 2024)</p>
                        <p class="text-base sm:text-lg">I have developed and maintained web applications using PHP, Laravel, and MySQL. Collaborated with designers and front-end developers to implement responsive, dynamic user interfaces.</p>
                    </div>
                    <div>
                        <h3 class="text-xl sm:text-2xl font-semibold mb-4">Other Interests</h3>
                        <p class="text-base sm:text-lg">When I'm not coding, I enjoy exploring new technologies, contributing to open-source projects, and learning about API integrations and modern web development frameworks. I also like solving coding challenges, attending tech meetups, and reading blogs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-12 sm:py-16 bg-gray-800/70 backdrop-blur-sm">
            <div class="container mx-auto px-4">
                <h2 class="relative text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 text-[#03FF0E]">
                  My Skills
                  <span class="block w-24 h-1 bg-[#03FF0E] mx-auto mt-2 rounded-full"></span>
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
                    <!-- Backend Skills -->
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">PHP</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Proficient in building server-side applications with PHP.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">MySQL</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Skilled in designing and managing relational databases with MySQL.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">Laravel</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Expertise in developing robust web applications using Laravel framework.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">CodeIgniter 4</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Experienced in developing web applications using the lightweight CodeIgniter 4 framework.</p>
                    </div>
                    <!-- Frontend Skills -->
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">HTML</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Strong foundation in creating semantic web structures.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">CSS</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Expert in styling web pages with modern CSS techniques.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">jQuery</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Experienced in simplifying JavaScript operations with jQuery.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">Bootstrap</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Skilled in creating responsive designs with Bootstrap.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">ReactJS</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Proficient in building interactive and component-based user interfaces using ReactJS.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">Tailwind CSS</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Proficient in building modern, utility-first UI designs using Tailwind CSS.</p>
                    </div>

                    <!-- Other Skills -->
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">Git</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Experienced in version control and collaboration using Git.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">Shopify</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Skilled in developing and customizing Shopify stores.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">API Development</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Expert in designing, developing, and integrating RESTful APIs for scalable backend services.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105     transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">Canva</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Skilled in designing visually appealing graphics and layouts using Canva.</p>
                    </div>
                    <div class="bg-gray-700/80 backdrop-blur-sm rounded-lg p-4 sm:p-6 transform hover:scale-105 transition duration-300">
                        <h3 class="text-lg sm:text-xl font-semibold mb-2">WordPress</h3>
                        <p class="text-gray-300 text-sm sm:text-base">Proficient in developing and customizing WordPress websites.</p>
                    </div>
                </div>
            </div>
        </section>

       <!-- Projects Section -->
        <section id="projects" class="py-12 sm:py-16 bg-gray-900/50 backdrop-blur-sm">
            <div class="container mx-auto px-4">
                <h2 class="relative text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 text-[#03FF0E]">
                  My Projects
                  <span class="block w-24 h-1 bg-[#03FF0E] mx-auto mt-2 rounded-full"></span>
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">

                    <!-- Project 1 -->
                    <div class="bg-gray-800/80 backdrop-blur-sm rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <a href="https://codezeera.com/" target="_blank">
                            <img src="./assets/projects/project1.png" alt="Codezeera Website" class="w-full h-40 sm:h-48 object-cover">
                        </a>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-lg sm:text-xl font-semibold mb-2">Codezeera IT Solutions</h3>
                            <p class="text-gray-300 text-sm sm:text-base mb-4">A web application built with Laravel and ReactJS, featuring user authentication and real-time updates.</p>
                            <a href="https://codezeera.com/" class="text-[#03FF0E] hover:underline text-sm sm:text-base">View Project</a>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="bg-gray-800/80 backdrop-blur-sm rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <a href="https://apps.shopify.com/easyorder-review?surface_intra_position=4&surface_type=partners&surface_version=redesign" target="_blank">
                            <img src="./assets/projects/project2.png" alt="EasyOrder Review App" class="w-full h-40 sm:h-48 object-cover">
                        </a>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-lg sm:text-xl font-semibold mb-2">EasyOrder Review Shopify App</h3>
                            <p class="text-gray-300 text-sm sm:text-base mb-4">An e-commerce plugin developed for Shopify to manage post-purchase order edits and reviews.</p>
                            <a href="https://apps.shopify.com/easyorder-review?surface_intra_position=4&surface_type=partners&surface_version=redesign" class="text-[#03FF0E] hover:underline text-sm sm:text-base">View Project</a>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="bg-gray-800/80 backdrop-blur-sm rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <a href="https://lovefood.abhimanev.xyz/" target="_blank">
                            <img src="./assets/projects/project3.png" alt="LoveFood Web App" class="w-full h-40 sm:h-48 object-cover">
                        </a>
                        <div class="p-4 sm:p-6">
                            <h3 class="text-lg sm:text-xl font-semibold mb-2">LoveFood e-commerce</h3>
                            <p class="text-gray-300 text-sm sm:text-base mb-4">Developed a food ordering and recipe web app using modern front-end tools, featuring dynamic UI and seamless navigation.</p>
                            <a href="https://lovefood.abhimanev.xyz/" class="text-[#03FF0E] hover:underline text-sm sm:text-base">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- Contact Section -->
        <section id="contact" class="py-12 sm:py-16 bg-gray-800/70 backdrop-blur-sm">
            <div class="container mx-auto px-4">
                <h2 class="relative text-3xl sm:text-4xl font-bold text-center mb-8 sm:mb-12 text-[#03FF0E]">
                  Contact Me
                  <span class="block w-24 h-1 bg-[#03FF0E] mx-auto mt-2 rounded-full"></span>
                </h2>
                <div class="max-w-lg mx-auto">
                    <div id="form-message" class="text-center text-sm sm:text-base font-medium mt-4 mb-4 p-3 rounded-lg hidden"></div>
                    <form id="contact-form" action="send_mail.php" method="POST" class="space-y-4">
                        <div>
                            <input type="text" name="name" placeholder="Your Name" class="w-full p-3 bg-gray-700/80 backdrop-blur-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-[#03FF0E] text-sm sm:text-base" required>
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Your Email" class="w-full p-3 bg-gray-700/80 backdrop-blur-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-[#03FF0E] text-sm sm:text-base" required>
                        </div>
                        <div>
                            <textarea name="message" placeholder="Your Message" rows="5" class="w-full p-3 bg-gray-700/80 backdrop-blur-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-[#03FF0E] text-sm sm:text-base" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="w-full bg-[#03FF0E] text-gray-900 p-3 rounded-lg hover:bg-green-400 transition text-sm sm:text-base disabled:opacity-50 disabled:cursor-not-allowed">Send</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900/80 backdrop-blur-sm py-6">
            <div class="container mx-auto px-8 flex flex-col sm:flex-row justify-between items-center">
                <!-- Left Side -->
                <p class="text-base sm:text-lg mb-4 sm:mb-0 text-white">© 2025 Vikash Arya. All Rights Reserved.</p>

                <!-- Right Side (Social Icons) -->
                <div class="flex space-x-4 text-white">
                    <a href="https://wa.me/919616295193" class="text-xl sm:text-2xl hover:text-[#03FF0E]">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                   <a href="mailto: aryavikash793@gmail.com" class="text-xl sm:text-2xl hover:text-[#03FF0E]">
                        <i class="fa-regular fa-envelope"></i>
                    </a>
                    <a href="https://t.me/@vikashdeveloper05" class="text-xl sm:text-2xl hover:text-[#03FF0E]">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                    <a href="https://www.instagram.com/vikashdeveloper05" class="text-xl sm:text-2xl hover:text-[#03FF0E]">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100053243690730" class="text-xl sm:text-2xl hover:text-[#03FF0E]">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="form-script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Typed("#typed-text", {
              strings: ["PHP - Laravel Developer", "Backend Developer"],
              typeSpeed: 60,
              backSpeed: 40,
              loop: true
            });

            // Create floating particles
            const particlesContainer = document.getElementById('particles');
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 3) + 's';
                particlesContainer.appendChild(particle);
            }

            // Create moving lines
            const linesContainer = document.getElementById('moving-lines');
            for (let i = 0; i < 10; i++) {
                const line = document.createElement('div');
                line.className = 'line';
                line.style.top = Math.random() * 100 + '%';
                line.style.width = (Math.random() * 200 + 100) + 'px';
                line.style.animationDelay = Math.random() * 4 + 's';
                line.style.animationDuration = (Math.random() * 2 + 2) + 's';
                linesContainer.appendChild(line);
            }

            // Create matrix rain
            const matrixContainer = document.getElementById('matrix-rain');
            const characters = '01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン';
            for (let i = 0; i < 20; i++) {
                const column = document.createElement('div');
                column.className = 'matrix-column';
                column.style.left = (i * 5) + '%';
                column.style.animationDelay = Math.random() * 3 + 's';
                column.style.animationDuration = (Math.random() * 2 + 2) + 's';
                
                let text = '';
                for (let j = 0; j < 20; j++) {
                    text += characters[Math.floor(Math.random() * characters.length)] + '<br>';
                }
                column.innerHTML = text;
                matrixContainer.appendChild(column);
            }
        });
    </script>
</body>
</html>