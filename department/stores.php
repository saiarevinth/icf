<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Add password if you set one
$db = 'crud'; // change to your DB name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Fetch images from database ordered by position
$result = $conn->query("SELECT * FROM stores_images ORDER BY position ASC");
$images = [];
while ($row = $result->fetch_assoc()) {
    $images[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of Integral Coach Factory, Ministry of Railways, Government of India">
    <title>Integral Coach Factory - Government of India</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Top Header -->
    <header class="top-header">
        <div class="container">
            <div class="header-content">
                <div class="govt-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Emblem_of_India.svg" alt="Emblem of India" class="emblem">
                    <span class="govt-text">Government of India</span>
                    <span class="govt-text-mobile">GoI</span>
                </div>
                <div class="header-actions">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search...">
                        <button class="search-button" aria-label="Search">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="datetime-display" id="currentDatetime" style="margin-left: 20px;"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Logo Section -->
    <div class="logo-section">
        <div class="container">
            <div class="logo-content">
                <!-- Left: ICF Logo and Text -->
                <div class="org-identity">
                    <img src="logo.png" alt="Integral Coach Factory Logo" class="org-logo">
                    <div class="org-text">
                        <h1 class="org-title">Integral Coach Factory</h1>
                        <p class="org-subtitle">Ministry of Railways</p>
                        <p class="org-subtitle">Govt. of India</p>
                    </div>
                </div>

                <!-- Center: 75 Years Image -->
                <div class="anniversary-logo">
                    <img src="stores.png" alt="Stores" class="anniversary-img">
                </div>

                <!-- Right: Govt Emblem -->
                <div class="govt-emblem">
                    <img src="image.png" alt="Government of India Emblem" class="emblem-img">
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar - Desktop -->
    <nav class="main-nav" aria-label="Main Navigation">
        <div class="container">
            <ul class="nav-list" style="margin-right: 37rem;">
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                 <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Important Links <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="https://www.ireps.gov.in/" class="dropdown-item">IREPS</a>
    <a href="https://www.ireps.gov.in/fcgi/webfrm" class="dropdown-item">IMMS</a>
    <a href="https://vp.icf.gov.in/indexNew.php" class="dropdown-item">Vendor Portal</a>
    <a href="http://10.53.4.100/stores/mm/" class="dropdown-item">Purchase Module / ICF - IMMS Reports</a>
    <a href="http://10.53.4.100/min/minMeetGn.php" class="dropdown-item">Stores Meeting</a>
    <a href="http://10.53.4.86/pco/" class="dropdown-item">Consumable Drawal</a>
    <a href="http://10.53.4.100/mminv/inv/login.php" class="dropdown-item">Material Gate Entry Login</a>
    <a href="http://10.53.4.100/DRR/output/login.php" class="dropdown-item">DRR Entry Login</a>
    <a href="http://10.53.4.100/jit/output/menu.php" class="dropdown-item">JIT</a>
    <a href="../login.php?redirect=department/stores_main.php" class="dropdown-item" target="_blank">Image Upload</a>
  </div>
</li>
 <li class="nav-item"><a href="http://10.53.4.105/PB/sop/" class="nav-link">SOP</a></li>
  <li class="nav-item"><a href="http://10.53.4.11/gallery/" class="nav-link">Gallery</a></li>

<li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Contacts <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                             <a href="http://10.53.4.89/gaz/" class="dropdown-item">ICF Directory</a>
<a href="http://10.53.4.89/pp/cug_list/" class="dropdown-item">ICF CUG Directory</a>
                    </div>
                </li>
    

            </ul>
        </div>
    </nav>
<div class="hi">
 <div class="main-container">
    <!-- Image Carousel Section -->
        <div class="image-slider-wrapper">
            <div class="image-slider-box">
                <?php if (empty($images)): ?>
                    <!-- Default slides if no images in database -->
                    <div class="image-slide-frame slide-visible">
                        <img src="image copy.png" alt="ICF Factory" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICF Admin Building </div>
                            <div class="slide-subtitle">ICF Admin Building </div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 8.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Shell Depot</div>
                            <div class="slide-subtitle">16-07-2021</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 9.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ASRS at LHB Depot</div>
                            <div class="slide-subtitle">16-07-2021</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 11.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Furnishing Depot</div>
                            <div class="slide-subtitle">16-07-2021</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 12.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ASRS at Furnishing Depot</div>
                            <div class="slide-subtitle">27-07-2021</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 13.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Materials Stacked at LHB Depot</div>
                            <div class="slide-subtitle">27-07-2021</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 14.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Inaugration of Ward 40 at GSD/Perambur</div>
                            <div class="slide-subtitle">12-04-2022</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 15.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">PCMM Award Function</div>
                            <div class="slide-subtitle">27-05-2022</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 16.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">PCMM Award Function</div>
                            <div class="slide-subtitle">27-05-2022</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 17.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">PCMM Award Function</div>
                            <div class="slide-subtitle">27-05-2022</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 18.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">PCMM Award Function</div>
                            <div class="slide-subtitle">27-05-2022</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 19.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">PCMM Award Function</div>
                            <div class="slide-subtitle">27-05-2022</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 20.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">PCMM Award Function</div>
                            <div class="slide-subtitle">27-05-2022</div>
                        </div>
                    </div>
                <?php else: ?>
                    <?php foreach ($images as $index => $image): ?>
                        <div class="image-slide-frame <?php echo $index === 0 ? 'slide-visible' : ''; ?>">
                            <img src="<?php echo $image['image_path']; ?>" alt="<?php echo htmlspecialchars($image['title']); ?>" class="slide-picture">
                            <div class="slide-text-overlay">
                                <div class="slide-main-title"><?php echo htmlspecialchars($image['title']); ?></div>
                                <div class="slide-subtitle"><?php echo htmlspecialchars($image['description']); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                
                <button class="slide-nav-button slide-nav-left" onclick="moveSlideBack()">‹</button>
                <button class="slide-nav-button slide-nav-right" onclick="moveSlideForward()">›</button>
            </div>
            
            <div class="slide-dot-container">
                <?php 
                $totalSlides = !empty($images) ? count($images) : 13; // Use 13 for default slides
                for ($i = 1; $i <= $totalSlides; $i++): 
                ?>
                    <div class="slide-dot <?php echo $i === 1 ? 'dot-active' : ''; ?>" onclick="goToSlide(<?php echo $i; ?>)"></div>
                <?php endfor; ?>
            </div>
        </div> 
    <div class="cal-img">
        <img src="cal.png"></img>
          </div>
        </div>
    </div>
    <div class="dual-panel-wrapper">
    <div class="info-panel-box">
        <div class="panel-title-section">
            <h2>About us</h2>
        </div>
        <div class="panel-body-area">
            <p>
               ICF is an ISO 9001 certified organization, manufacturing different types of coaching stock for the Indian Railways, and other customers. The raw materials and components required for the manufacture of coaches is procured by the Materials Management Department, through tenders. The Department is headed by the PCMM (Principal Chief Materials Manager).
            </p>
            <p>
               •  The PROCUREMENT CALENDAR is available in this web site.
            </p>
             <p>
               • Tender notices are published in the English, Hindi, and Regional language News papers and IREPS        icf.indianrailways.gov.in:
            </p>
            <button class="action-btn-more" onclick="#">More..</button>
        </div>
    </div>

     <div class="sliding-news-panel-wrapper">
        <div class="sliding-news-header-section">
            <h2>What's New...</h2>
        </div>
        <div class="sliding-news-content-area">
            <div class="auto-scroll-news-container" id="newsScrollContainer">
                
                <div class="individual-news-item">
                    <div class="news-headline-text">Monitoring of Pending Bills by all concerned Departments</div>
                    <div class="news-summary-description">Status updates and timely tracking of pending bills across departments.</div>
                    <a href="http://10.53.4.105/circulars_new/pdf/20250516a.pdf" class="news-action-link">View details</a>
                    <div class="news-publish-date">May 25, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Ordering on source assessed/developed/approved by vendor approving agencies</div>
                    <div class="news-summary-description">Guidelines for procurement from vendor-approved sources to ensure compliance.</div>
                    <a href="http://10.53.4.105/circulars_new/pdf/20250516.pdf" class="news-action-link">See guidelines</a>
                    <div class="news-publish-date">May 24, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Super check module in IREPS for RDSO</div>
                    <div class="news-summary-description">Introduction of the Super Check module enhancing reliability checks in IREPS.</div>
                    <a href="http://10.53.4.105/circulars_new/pdf/20250520.pdf" class="news-action-link">Learn more</a>
                    <div class="news-publish-date">May 23, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">List of Must-change Items by Mechanical Directorate</div>
                    <div class="news-summary-description">Comprehensive list of critical mechanical components requiring replacement.</div>
                    <a href="http://10.53.4.105/circulars_new/pdf/20250507.pdf" class="news-action-link">Download list</a>
                    <div class="news-publish-date">May 22, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">List of Must-change Items by Electrical Directorate</div>
                    <div class="news-summary-description">Electrical components mandated for replacement as per latest directives.</div>
                    <a href="http://10.53.4.105/circulars_new/pdf/20250506.pdf" class="news-action-link">Read list</a>
                    <div class="news-publish-date">May 21, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Delivery of non-ferrous scrap in Road weigh bridge</div>
                    <div class="news-summary-description">Procedures and schedules for non-ferrous scrap delivery at the weighbridge.</div>
                    <a href="#" class="news-action-link">View schedule</a>
                    <div class="news-publish-date">May 20, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Inclusion of IGBT based 3-phase drive propulsion equipment for 3-phase electric locomotive in to it list of items (appearing on UVAM) and restricted to be procured from approved sources..</div>
                    <div class="news-summary-description">New addition of IGBT drive equipment with procurement restricted to approved vendors.</div>
                    <a href="#" class="news-action-link">Read circular</a>
                    <div class="news-publish-date">May 19, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Looking after arrangement of officers.</div>
                    <div class="news-summary-description">Details on officer allocation and arrangements for smooth operations.</div>
                    <a href="#" class="news-action-link">View arrangement</a>
                    <div class="news-publish-date">May 18, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Railways Board Circulars.</div>
                    <div class="news-summary-description">Latest official circulars issued by the Railways Board for general information.</div>
                    <a href="http://10.53.4.105/circulars_new/asp/search2.asp?sort=desc&by=LETTER_DT&LETTER_NO=&LETTER_DT=&SUBJECT=&Search=Search" class="news-action-link">Read circulars</a>
                    <div class="news-publish-date">May 18, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Stores Circulars.</div>
                    <div class="news-summary-description">Important circulars concerning stores management and related procedures.</div>
                    <a href="http://10.53.4.105/icfstorescirculars/asp/search2.asp?sort=desc&by=LETTER_DT&LETTER_NO=&LETTER_DT=&SUBJECT=&Search=Search" class="news-action-link">Read circulars</a>
                    <div class="news-publish-date">May 18, 2025</div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- Close .dual-panel-wrapper -->

    <script>

        let activeSlideIndex = 0;
        const slideFrames = document.querySelectorAll('.image-slide-frame');
        const slideDots = document.querySelectorAll('.slide-dot');
        const totalSlideCount = slideFrames.length;

        function displaySlide(index) {
            // Hide all slide frames
            slideFrames.forEach(frame => frame.classList.remove('slide-visible'));
            slideDots.forEach(dot => dot.classList.remove('dot-active'));
            
            // Show current slide frame
            slideFrames[index].classList.add('slide-visible');
            slideDots[index].classList.add('dot-active');
        }

        function moveSlideForward() {
            activeSlideIndex = (activeSlideIndex + 1) % totalSlideCount;
            displaySlide(activeSlideIndex);
        }

        function moveSlideBack() {
            activeSlideIndex = (activeSlideIndex - 1 + totalSlideCount) % totalSlideCount;
            displaySlide(activeSlideIndex);
        }

        function goToSlide(slideNumber) {
            activeSlideIndex = slideNumber - 1;
            displaySlide(activeSlideIndex);
        }
         function startNewsScroll() {
            const container = document.getElementById('newsScrollContainer');
            
            function runAnimation() {
                // Reset position
                container.style.transform = 'translateY(100%)';
                container.classList.remove('scrolling');
                
                // Force reflow to ensure the reset takes effect
                container.offsetHeight;
                
                // Start animation
                container.classList.add('scrolling');
            }
            
            // Start first animation
            runAnimation();
            
            // Listen for animation end and restart
            container.addEventListener('animationend', function() {
                // Small delay before restarting to prevent visual glitch
                setTimeout(runAnimation, 100);
            });
            
            // Also handle mouse events for pause/resume
            let isPaused = false;
            
            container.addEventListener('mouseenter', function() {
                isPaused = true;
                this.style.animationPlayState = 'paused';
            });
            
            container.addEventListener('mouseleave', function() {
                isPaused = false;
                this.style.animationPlayState = 'running';
            });
        }
        
        // Start the scroll when page loads
        document.addEventListener('DOMContentLoaded', startNewsScroll);

        // Auto-advance slides
        setInterval(moveSlideForward, 5000);

        // Initialize first slide
        displaySlide(0);

        
    </script>
<footer class="footer2">
    <p class="footer2-text">© Integral Coach Factory | Updated 2025</p>
  </footer>
    
<script src="../script.js"></script>
</body>
</html>
    