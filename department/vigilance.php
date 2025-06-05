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
$result = $conn->query("SELECT * FROM vigilance_images ORDER BY position ASC");
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
                        <input type="text" class="search-input" placeholder="Search navigation...">
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
                    <img src="vigilance.png" alt="75 Years of Constitution" class="anniversary-img">
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
            <ul class="nav-list">
                <li class="nav-item"><a href="http://localhost:8000" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,549" class="nav-link dropdown-toggle">Organisation</a>
                   
                </li>
                 <li class="nav-item dropdown">
                    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,548" class="nav-link dropdown-toggle">Functions</a>
                   
                </li>
                   <li class="nav-item dropdown">
                    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,551" class="nav-link dropdown-toggle">Complaints Handling Policy</a>
                   
                </li>
            
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Important Definition<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,550,861" class="dropdown-item">Vigilance Angle</a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,550,862" class="dropdown-item">Types of Complaints</a>
                    </div>
                </li>
 

             <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">DO's and DONT's<i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content ">
        <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,864" class="dropdown-item">PERSONNEL </a>
         <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,865" class="dropdown-item">MECHANICAL </a>
          <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,866" class="dropdown-item">ELECTRICAL </a>
           <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,867" class="dropdown-item">ENGINEERING </a>
            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,868" class="dropdown-item">STORES  </a>
             <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,869" class="dropdown-item">ACCOUNTS  </a>
              <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,870" class="dropdown-item">MEDICAL </a>
               <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,863,871" class="dropdown-item">SECURITY</a>
  </div>
</li>
   <li class="nav-item dropdown">
    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,841" class="nav-link dropdown-toggle">Whistle Blower Complaints(PIDPI)</a>
    
</li>

                <li class="nav-item dropdown">
  <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,552" class="nav-link dropdown-toggle">Vigilance Bulletin</a>
  

</li>

                 
 <ul class="nav-list second-row">
 <li class="nav-item dropdown">
    <a href="http://10.53.4.89/vigilance/events_list.php" class="nav-link dropdown-toggle">Event Nominations</a>
   
</li>
 <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">System Improvements <i class="fas fa-caret-down"></i></a>
 <div class="dropdown-content">
        
            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,553" class="dropdown-item">Sites</a>
             <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,553" class="dropdown-item">Manuals</a>
    </div>
</li>
   <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Reports<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        
            <a href="http://10.53.4.89/vigsen/output/login.php" class="dropdown-item">Sensitive Post Staff Data  </a>
            <a href="http://10.53.4.89/vigqpr/output/login.php" class="dropdown-item">Quarterly Progress Report </a>
            <a href="http://10.53.4.89/vigclear/output/login.php" class="dropdown-item">DAR & Vigilance Clearance</a>
    </div>
</li>
</li>
   <li class="nav-item dropdown">
    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,553" class="nav-link dropdown-toggle">Related Links</a>
    
</li>
</li>
   <li class="nav-item dropdown">
    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,547,554" class="nav-link dropdown-toggle">Contact Us</a>
    <li class="nav-item"><a href="../login.php?redirect=department/vigilance_main.php" class="nav-link" target="_blank">Image Upload</a></li> 

</li>

</ul>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
    <!-- Hero Section with Three Columns -->
    <div class="hi">
 <div class="main-container">
    <!-- Image Carousel Section -->
        <div class="image-slider-wrapper">
            <div class="image-slider-box">
                <?php if (empty($images)): ?>
                    <!-- Default slides if no images in database -->
                    <div class="image-slide-frame slide-visible">
                        <img src="image copy 45.png" alt="ICF Factory" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICF Vigilance Pledge Certificate</div>
                            <div class="slide-subtitle">23-10-2021</div>
                        </div>
                    </div>
                    <div class="image-slide-frame slide-visible">
                        <img src="image copy.png" alt="ICF Factory" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICF Admin Building </div>
                            <div class="slide-subtitle">ICF Admin Building </div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 7.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Furnishing Admin Building</div>
                            <div class="slide-subtitle">Furnishing Admin Building</div>
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
                $totalSlides = !empty($images) ? count($images) : 3; // Use 3 for default slides
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

        // Auto-advance slides
        setInterval(moveSlideForward, 5000);

        // Initialize first slide
        displaySlide(0);
    </script>
                </div>

<style>
.nav-container {
  display: flex;
  flex-direction: column;
  align-items: flex-start; 
  padding: 0;
  margin: 0;
}


.nav-list {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  margin-bottom: 2px; /* Reduced from 5px to 2px */
}
.second-row {
  display: flex;
  justify-content: flex-start; 
  list-style: none;
  padding: 0;
  margin: 0;
  margin-top: 0px; /* Reduced from 2px to 0px */
  gap: 6px; 
  padding-left: 0; 
    width: 98%; 
  
}

    .sliding-news-panel-wrapper {
            flex: 1;
            border: 2px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 500px;
            height: 300px;
        }
</style>

            </div>
        </div>
   
    <div class="dual-panel-wrapper">
    <div class="info-panel-box">
        <div class="panel-title-section">
            <h2>About us</h2>
        </div>
        <div class="panel-body-area">
           <p> Vigilance is a management function. It is the responsibility of all the officials in the organization to ensure that the work under their jurisdiction is performed in accordance with the Rules and Procedures established in the system and Vigilance organization assists in the endeavour.</p>
           <p>  Preventive Vigilance, Surveillance & detection and Punitive Vigilance are the major functions of Vigilance Organization.</p>
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
                    <div class="news-headline-text">New Feature Release: Dark Mode</div>
                    <div class="news-summary-description">Experience our platform with a sleek new dark theme that's easier on your eyes.</div>
                    <a href="#" class="news-action-link">Read more</a>
                    <div class="news-publish-date">May 25, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Security Update Available</div>
                    <div class="news-summary-description">Important security improvements and bug fixes are now available for all users.</div>
                    <a href="#" class="news-action-link">Update now</a>
                    <div class="news-publish-date">May 24, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">API Version 2.0 Released</div>
                    <div class="news-summary-description">Faster performance and new endpoints available in our latest API version.</div>
                    <a href="#" class="news-action-link">View documentation</a>
                    <div class="news-publish-date">May 23, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Mobile App Update</div>
                    <div class="news-summary-description">Enhanced user interface and improved performance on mobile devices.</div>
                    <a href="#" class="news-action-link">Download update</a>
                    <div class="news-publish-date">May 22, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Community Guidelines Updated</div>
                    <div class="news-summary-description">New community standards to ensure a better experience for everyone.</div>
                    <a href="#" class="news-action-link">Read guidelines</a>
                    <div class="news-publish-date">May 21, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Server Maintenance Scheduled</div>
                    <div class="news-summary-description">Brief downtime expected this weekend for infrastructure improvements.</div>
                    <a href="#" class="news-action-link">View schedule</a>
                    <div class="news-publish-date">May 20, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">New Integration Partners</div>
                    <div class="news-summary-description">Connect with more tools and services through our expanded partner network.</div>
                    <a href="#" class="news-action-link">Explore integrations</a>
                    <div class="news-publish-date">May 19, 2025</div>
                </div>

                <div class="individual-news-item">
                    <div class="news-headline-text">Premium Features Launch</div>
                    <div class="news-summary-description">Advanced analytics and priority support now available for premium users.</div>
                    <a href="#" class="news-action-link">Upgrade now</a>
                    <div class="news-publish-date">May 18, 2025</div>
                </div>

            </div>
        </div>
    </div>
</div> 

      
<footer class="footer2">
    <p class="footer2-text">© Integral Coach Factory | Updated 2025</p>
  </footer>
</main>     
                    
    </body></html>

<script src="../script.js"></script>