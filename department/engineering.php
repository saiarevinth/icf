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
$result = $conn->query("SELECT * FROM engineering_images ORDER BY position ASC");
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
                    <img src="engineering.png" alt="Engineering" class="anniversary-img">
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
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                 <li class="nav-item"><a href="http://10.53.4.11/newicf/ENGINEERING/pdf/field%20staffs%20chart.pdf" class="nav-link">Organization/Field Staff Chart</a></li>
                <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">General<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content three-column-dropdown" style="min-width: 800px;">
        <div class="column">
            <h4>General Menu</h4>
           <a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%201%20-%20Overview.pdf" class="dropdown-item">Overview</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%202%20-%20General%20Conditions%20of%20Contract.pdf" class="dropdown-item">General Conditions of Contract</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%203%20-%20LAW%20Works%2023-24.pdf" class="dropdown-item">LAW - book</a>
<a href="http://10.53.4.89/PP/USSOR/ussorindex.php" class="dropdown-item">USSOR</a>
        </div>
        <div class="column">
            <h4>Manuals</h4>
            <a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%204%20-%20Indian%20Railways%20Works%20Manual%20IRWM.pdf" class="dropdown-item">Indian Rly. Works Manual IRWM</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%205%20-%20Indian%20Rlys.%20Maintenance%20Manual%20-%20Works.pdf" class="dropdown-item">Indian Rlys. Maintenance Manual - Works</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%206%20-%20Indian%20Railways%20Permanent%20Way%20Manual.pdf" class="dropdown-item">Indian Railways Permanent Way Manual</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Annexure%207%20-%20Indian%20Railways%20Construction%20Manual.pdf" class="dropdown-item">Indian Railways Construction Manual</a>
        </div>
        <div class="column">
            <h4>Engineering Code </h4>
            <a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/Indian%20Railways%20Code%20for%20the%20Engineering%20Department%20(2).pdf" class="dropdown-item">Indian Railways Code for the Engineering Department</a>
        </div>
        <div class="column">
            <h4>Schedule of Rates</h4>
            <a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/DSR-2021-Vol-1-2.pdf" class="dropdown-item">DSR-2021-Vol.I & Vol.II</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/DSR-AOR%20&%20Specification-Horticulture-Landscaping-2020.pdf" class="dropdown-item">DSR-AOR & Specification-Horticulture-Landscaping-2020</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/DSR-2021-AOR.pdf" class="dropdown-item">DSR-2021-AOR</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/DSR-2021-Specification.pdf" class="dropdown-item">DSR-2021-Specification</a>
<a href="http://10.53.4.11/newicf/ENGINEERING/PDF/161024/SR-USSOR-21%20-%20Formation,%20Bridge%20&%20Pway.pdf" class="dropdown-item">SR-USSOR-21 - Formation, Bridge & Pway</a>
<a href="http://10.53.4.11/newicf/MECHANICAL/SAFETYCELL/safety/Min_wages/index_min_wages.html" class="dropdown-item">Minimum Wages</a>
<a href="#" class="dropdown-item">P-way Materials Cost</a>
        </div>
    </div>
</li>
  <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Important Links <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="http://10.53.4.86/cms/cmshome.php" class="dropdown-item">Centralized Messaging System</a>
    <a href="http://10.53.4.86/ga/gahome.php" class="dropdown-item">Gate Attendance System</a>
    <a href="http://10.53.4.86/ds/" class="dropdown-item">Digital Signature Portal</a>
    <a href="http://10.53.4.89/eoffice/index.html" class="dropdown-item">ICF-eOffice Portal</a>
    <a href="http://10.53.4.60:8081/ESSDEMO/" class="dropdown-item">Employee Self Service</a>
    <a href="../login.php?redirect=department/engineering_main.php" class="dropdown-item" target="_blank">Image Upload</a>
  </div>
</li>

             <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">External Links <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="https://au.eoffice.railnet.gov.in/cas/login?service=https%3A%2F%2Fau.eoffice.railnet.gov.in%2Flogin.php" class="dropdown-item">eOffice</a>
    <a href="https://www.ireps.gov.in/" class="dropdown-item">IREPS</a>
    <a href="https://www.ireps.gov.in/fcgi/webfrm" class="dropdown-item">IMMS</a>
    <a href="https://aims.indianrailways.gov.in/IPAS/LoginForms/Login.jsp" class="dropdown-item">IPAS</a>
    <a href="https://hrms.indianrail.gov.in/HRMS/login" class="dropdown-item">HRMS</a>
    <a href="https://ircep.gov.in/IRPSM/" class="dropdown-item">IRPSM</a>
    <a href="https://pgportal.gov.in/" class="dropdown-item">Public Grievances</a>
    <a href="https://artsandculture.google.com/project/indian-railways" class="dropdown-item">Explore Rail Heritage online</a>
    <a href="https://icf.indianrailways.gov.in/" class="dropdown-item">ICF Internet Website</a>
    <a href="https://indianrailways.gov.in/GST/index.html" class="dropdown-item">GST Portal-Indian Railways</a>
    <a href="http://10.100.2.19/" class="dropdown-item">Suggestion/complaints-RDSO Portal</a>
  </div>
</li>


               <li class="nav-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,378" class="nav-link">Tenders</a></li>
               <li class="nav-item"><a href="http://10.53.4.11/newicf/ENGINEERING/CIVIL_VIDEO/slider_videos.html" class="nav-link">Aerial Videography</a></li>
           <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Layouts <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/ICF%20East%20Colony%20layout.pdf" class="dropdown-item">East Colony Layout</a>
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/ICF%20North%20Colony%20Layout.pdf" class="dropdown-item">ICF North Colony Layout</a>
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/ICF%20Perambur%20layout.pdf" class="dropdown-item">ICF Perambur layout</a>
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/ICF%20South%20Colony%20Layout.pdf" class="dropdown-item">ICF South Colony Layout</a>
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/ICF%20West%20Colony%20Layout.pdf" class="dropdown-item">ICF West Colony Layout</a>
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/Layout%20of%20ICF%20Furnishing%20Factory%20with%20LHB.pdf" class="dropdown-item">Layout of ICF Furnishing Factory with LHB</a>
    <a href="http://10.53.4.11/newicf/ENGINEERING/pdf/Layout%20of%20ICF%20Shell%20factory.pdf" class="dropdown-item">Layout of ICF Shell factory</a>
  </div>
</li>

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
                $totalSlides = !empty($images) ? count($images) : 2; // Use 2 for default slides
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
                The Civil Engineering Department is in charge of all Civil Engineering construction and maintenance of the factory sheds and structures, service and welfare buildings, colonies and is also responsible for providing day-to-day service like water supply, sanitation and sewage disposal, for upkeep of parks, gardens and for all other estate management works.
            </p>
            <p>
                ICF Estate owns an area of 209.797 Hectares (Shell division – 27.0955 Hectares, Furnishing division – 56.885 Hectares, Colonies (North, South, East, West and Perambur) – 64.868 Hectares, Villivakkam to Annanagar siding – 15.34 Hectares, Administrative buildings & other areas – 45.6085 Hectares). Chief Engineer – cum – Estate Officer has powers for acquiring and disposing off lands, controlled by Railway Board. He is also responsible for licensing, leasing, auctioning and to prevent encroachment, implementing the Public Premises Eviction Act 1971. He is also the coordinating and liasoning authority with State and Central Governments with regard to estate matters.
            </p>
            <button class="action-btn-more" onclick="window.open('http://10.53.4.11/newicf/ENGINEERING/PDF/civil_overview.pdf', '_blank')">More..</button>
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
    