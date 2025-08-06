document.addEventListener("DOMContentLoaded", function () {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');
    const SCROLL_OFFSET = 50; // Adjust based on your nav height

    // Toggle Hamburger Menu
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            navToggle.innerHTML = navMenu.classList.contains('active')
                ? '<i class="fas fa-times text-2xl"></i>'
                : '<i class="fas fa-bars text-2xl"></i>';
        });
    } else {
        console.error('Navigation elements not found: nav-toggle or nav-menu missing');
    }

    // Smooth Scroll + PushState for Pretty URL
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const href = this.getAttribute('href');
            const sectionId = href.startsWith('/') ? href.slice(1) : href.replace('#', '');
            const target = document.getElementById(sectionId);

            if (target) {
                const scrollPos = target.offsetTop - SCROLL_OFFSET;
                window.scrollTo({ top: scrollPos, behavior: 'smooth' });

                // Update URL path without reloading
                history.pushState(null, '', '/' + sectionId);

                // Update active link
                navLinks.forEach(l => l.classList.remove('active', 'text-[#03FF0E]'));
                this.classList.add('active', 'text-[#03FF0E]');

                // Close mobile nav
                if (navMenu.classList.contains('active')) {
                    navMenu.classList.remove('active');
                    navToggle.innerHTML = '<i class="fas fa-bars text-2xl"></i>';
                }
            }
        });
    });

    // Highlight Active Nav Link on Scroll
    if (navLinks.length && sections.length) {
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - SCROLL_OFFSET;
                if (window.scrollY >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active', 'text-[#03FF0E]');
                const href = link.getAttribute('href').replace('/', '').replace('#', '');
                if (href === current) {
                    link.classList.add('active', 'text-[#03FF0E]');
                }
            });
        });
    } else {
        console.error('Navigation links or sections not found');
    }

    // On Page Load: Scroll to section based on URL path
    const currentPath = window.location.pathname.slice(1);
    if (currentPath) {
        const targetSection = document.getElementById(currentPath);
        if (targetSection) {
            const scrollPos = targetSection.offsetTop - SCROLL_OFFSET;
            window.scrollTo({ top: scrollPos, behavior: 'smooth' });
        }
    }

    // Contact Form AJAX Submission
    const form = document.getElementById("contact-form");
    const formMessage = document.getElementById("form-message");

    if (form && formMessage) {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            const submitButton = form.querySelector("button[type='submit']");
            submitButton.disabled = true;

            const formData = new FormData(form);

            try {
                const response = await fetch(form.action, {
                    method: "POST",
                    body: formData
                });

                const result = await response.text();

                formMessage.textContent = "Message sent successfully!";
                formMessage.classList.remove("hidden", "bg-red-500");
                formMessage.classList.add("bg-green-500", "text-white");

                form.reset();
            } catch (error) {
                formMessage.textContent = "Something went wrong. Please try again.";
                formMessage.classList.remove("hidden", "bg-green-500");
                formMessage.classList.add("bg-red-500", "text-white");
            } finally {
                submitButton.disabled = false;
                setTimeout(() => {
                    formMessage.classList.add("hidden");
                }, 5000);
            }
        });
    }
});
