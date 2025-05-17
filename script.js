// Calendar functionality
document.addEventListener('DOMContentLoaded', function() {
    const monthYear = document.getElementById("monthYear");
    const calendarBody = document.getElementById("calendarBody");
    
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
    
    // Carousel functionality
    const carousel = document.querySelector('.carousel');
    const items = carousel.querySelectorAll('.carousel-item');
    const prevBtn = document.getElementById('carouselPrev');
    const nextBtn = document.getElementById('carouselNext');
    const indicators = document.querySelectorAll('.indicator');
    
    let currentIndex = 0;
    let interval;
    
    // Function to update carousel
    function updateCarousel(index) {
        // Hide all items
        items.forEach(item => {
            item.classList.remove('active');
        });
        
        // Show current item
        items[index].classList.add('active');
        
        // Update indicators
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.add('active-indicator');
            } else {
                indicator.classList.remove('active-indicator');
            }
        });
    }
    
    // Previous button click
    prevBtn.addEventListener('click', function() {
        currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
        updateCarousel(currentIndex);
        resetInterval();
    });
    
    // Next button click
    nextBtn.addEventListener('click', function() {
        currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
        updateCarousel(currentIndex);
        resetInterval();
    });
    
    // Indicator clicks
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            currentIndex = index;
            updateCarousel(currentIndex);
            resetInterval();
        });
    });
    
    // Reset interval
    function resetInterval() {
        clearInterval(interval);
        interval = setInterval(autoSlide, 5000);
    }
    
    // Auto slide function
    function autoSlide() {
        currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
        updateCarousel(currentIndex);
    }
    
    // Start auto slide
    interval = setInterval(autoSlide, 5000);
    
    // Mobile menu functionality
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileMenuClose = document.getElementById('mobileMenuClose');
    const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    
    mobileMenuToggle.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    mobileMenuClose.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const submenuId = this.getAttribute('data-submenu');
            const submenu = document.getElementById(submenuId);
            
            if (submenu.classList.contains('active')) {
                submenu.classList.remove('active');
                this.querySelector('i').classList.remove('fa-chevron-up');
                this.querySelector('i').classList.add('fa-chevron-down');
            } else {
                submenu.classList.add('active');
                this.querySelector('i').classList.remove('fa-chevron-down');
                this.querySelector('i').classList.add('fa-chevron-up');
            }
        });
    });
    
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
});