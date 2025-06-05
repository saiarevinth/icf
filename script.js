// Calendar and Carousel functionality
document.addEventListener('DOMContentLoaded', function() {
    // Calendar functionality
    const monthYear = document.getElementById("monthYear");
    const calendarBody = document.getElementById("calendarBody");
    
    if (monthYear && calendarBody) {
        let currentDate = new Date(2025, 4); // Start at May 2025
        
        function renderCalendar() {
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();
            
            const monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            
            monthYear.textContent = `${monthNames[month]} ${year}`;
            
            calendarBody.innerHTML = "";
            
            const firstDay = new Date(year, month, 1).getDay();
            const lastDate = new Date(year, month + 1, 0).getDate();
            
            // Get today's date for comparison
            const today = new Date();
            const todayDate = today.getDate();
            const todayMonth = today.getMonth();
            const todayYear = today.getFullYear();
            
            let date = 1;
            for (let i = 0; i < 6; i++) {
                let row = document.createElement("tr");
                
                for (let j = 0; j < 7; j++) {
                    let cell = document.createElement("td");
                    
                    if (i === 0 && j < firstDay) {
                        cell.innerHTML = "";
                    } else if (date > lastDate) {
                        cell.innerHTML = "";
                    } else {
                        // Check if this date is today
                        const isToday = date === todayDate && 
                                      month === todayMonth && 
                                      year === todayYear;
                        
                        if (isToday) {
                            // Create a div for today's date with special styling
                            const todayElement = document.createElement('div');
                            todayElement.className = 'today-date';
                            todayElement.textContent = date;
                            cell.appendChild(todayElement);
                        } else {
                            cell.textContent = date;
                        }
                        
                        date++;
                    }
                    
                    row.appendChild(cell);
                }
                
                calendarBody.appendChild(row);
                
                if (date > lastDate) break;
            }
        }
        
        // Expose changeMonth to global scope for the onclick handlers
        window.changeMonth = function(offset) {
            currentDate.setMonth(currentDate.getMonth() + offset);
            renderCalendar();
        };
        
        renderCalendar();
    }
    
    // Carousel functionality - COMPLETELY REVISED
    initCarousel();
    
    function initCarousel() {
        const carousel = document.querySelector('.carousel');
        
        if (!carousel) return; // Exit if carousel doesn't exist
        
        const items = carousel.querySelectorAll('.carousel-item');
        const prevBtn = document.getElementById('carouselPrev');
        const nextBtn = document.getElementById('carouselNext');
        const indicators = document.querySelectorAll('.indicator');
        
        if (items.length === 0) return; // Exit if no items
        
        let currentIndex = 0;
        let intervalId = null;
        
        // Find active item index
        items.forEach((item, index) => {
            if (item.classList.contains('active')) {
                currentIndex = index;
            }
        });
        
        // Function to show slide at specific index
        function showSlide(index) {
            // Handle index boundaries
            if (index >= items.length) index = 0;
            if (index < 0) index = items.length - 1;
            
            // Update currentIndex
            currentIndex = index;
            
            // Hide all slides
            items.forEach(item => {
                item.classList.remove('active');
            });
            
            // Show the current slide
            items[currentIndex].classList.add('active');
            
            // Update indicators
            indicators.forEach((indicator, idx) => {
                indicator.classList.remove('active-indicator');
                if (idx === currentIndex) {
                    indicator.classList.add('active-indicator');
                }
            });
        }
        
        // Button click handlers
        if (prevBtn) {
            prevBtn.addEventListener('click', function() {
                showSlide(currentIndex - 1);
                resetTimer();
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', function() {
                showSlide(currentIndex + 1);
                resetTimer();
            });
        }
        
        // Indicator click handlers
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', function() {
                showSlide(index);
                resetTimer();
            });
        });
        
        // Auto-rotation
        function startTimer() {
            intervalId = setInterval(function() {
                showSlide(currentIndex + 1);
            }, 5000);
        }
        
        function resetTimer() {
            if (intervalId) {
                clearInterval(intervalId);
            }
            startTimer();
        }
        
        // Pause on hover
        carousel.addEventListener('mouseenter', function() {
            if (intervalId) {
                clearInterval(intervalId);
                intervalId = null;
            }
        });
        
        carousel.addEventListener('mouseleave', function() {
            if (!intervalId) {
                startTimer();
            }
        });
        
        // Start the carousel
        showSlide(currentIndex);
        startTimer();
    }
    
    // Mobile menu functionality
    initMobileMenu();
    
    function initMobileMenu() {
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
        const body = document.body;

        // Toggle mobile menu
        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.add('active');
                body.style.overflow = 'hidden';
            });
        }

        // Close mobile menu
        if (mobileMenuClose && mobileMenu) {
            mobileMenuClose.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                body.style.overflow = '';
            });
        }

        // Close mobile menu when clicking outside
        if (mobileMenu) {
            mobileMenu.addEventListener('click', function(e) {
                if (e.target === mobileMenu) {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                }
            });
        }

        // Handle dropdown toggles
        mobileDropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const submenuId = this.getAttribute('data-submenu');
                const submenu = document.getElementById(submenuId);
                
                if (submenu) {
                    // Close other open submenus
                    const allSubmenus = document.querySelectorAll('.mobile-submenu.active');
                    const allToggles = document.querySelectorAll('.mobile-dropdown-toggle.active');
                    
                    allSubmenus.forEach(menu => {
                        if (menu.id !== submenuId) {
                            menu.classList.remove('active');
                        }
                    });
                    
                    allToggles.forEach(tog => {
                        if (tog !== this) {
                            tog.classList.remove('active');
                            const icon = tog.querySelector('i');
                            if (icon) {
                                icon.classList.remove('fa-chevron-up');
                                icon.classList.add('fa-chevron-down');
                            }
                        }
                    });

                    // Toggle current submenu
                    if (submenu.classList.contains('active')) {
                        submenu.classList.remove('active');
                        this.classList.remove('active');
                        const icon = this.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-chevron-up');
                            icon.classList.add('fa-chevron-down');
                        }
                    } else {
                        submenu.classList.add('active');
                        this.classList.add('active');
                        const icon = this.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-chevron-down');
                            icon.classList.add('fa-chevron-up');
                        }
                    }
                }
            });
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 768) {
                    mobileMenu.classList.remove('active');
                    body.style.overflow = '';
                }
            }, 250);
        });

        // Handle escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                mobileMenu.classList.remove('active');
                body.style.overflow = '';
            }
        });
    }
    
    // Language toggle for mobile
    const langToggle = document.getElementById('langToggle');
    if (langToggle) {
        langToggle.addEventListener('click', function() {
            if (this.textContent === 'EN') {
                this.textContent = 'HI';
            } else {
                this.textContent = 'EN';
            }
        });
    }
    
    // Add hover effect to table rows
    const tableRows = document.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.classList.add('hover-bg');
        });
        row.addEventListener('mouseleave', function() {
            this.classList.remove('hover-bg');
        });
    });

    // Search functionality for navigation bar
    const searchInput = document.querySelector('.search-input');
    const navItems = document.querySelectorAll('.main-nav .nav-item');

    if (searchInput && navItems.length > 0) {
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase();

            navItems.forEach(item => {
                const linkText = item.textContent.toLowerCase();
                if (linkText.includes(query)) {
                    item.style.display = ''; // Show the list item
                } else {
                    item.style.display = 'none'; // Hide the list item
                }
            });
        });
    }
});

// Function to update date and time
function updateDateTime() {
    const now = new Date();
    // Options for date (Month Day, Year)
    const dateOptions = { month: 'long', day: 'numeric', year: 'numeric' };
    // Options for time (HH:MM:SS)
    const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit' };

    const formattedDate = now.toLocaleDateString(undefined, dateOptions);
    const formattedTime = now.toLocaleTimeString(undefined, timeOptions);

    const datetimeElement = document.getElementById('currentDatetime');
    if (datetimeElement) {
        datetimeElement.textContent = formattedDate + ' ' + formattedTime;
    }
}

// Update date and time initially
updateDateTime();

// Update date and time every second
setInterval(updateDateTime, 1000);