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
$result = $conn->query("SELECT * FROM electrical_images ORDER BY position ASC");
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
                    <img src="electrical.png" alt="75 Years of Constitution" class="anniversary-img">
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
                <li class="nav-item"><a href="http://10.53.4.11/newicf/ELECTRICAL/pdf/Org%20Chart%20as%20on%2003.10.24.pdf" class="nav-link">Gaz.Orgn.Chart</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Important Links <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                             <a href="http://10.53.4.30/complaints/#/complaints" class="dropdown-item">Electrical Complaints - Furnishing & LHB</a>
                    <a href="http://10.53.4.89/econsumption/output/login.php" class="dropdown-item">Monitoring of Daily Energy Consumption</a>
                    <a href="http://10.53.4.89/dc_elec/output/login.php" class="dropdown-item">Design Changes/Trial Items Fitted infmn.</a>
                    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,330,729" class="dropdown-item">Approved Sources</a>
                    <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,474" class="dropdown-item">Electrical Tenders</a>
                    <a href="http://10.53.4.105:81/windmill/" class="dropdown-item">ICF Windmill Generation Details</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/elecdespath/bds.htm" class="dropdown-item">Electrical Inspection Position</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/ELECTRICAL/HOG_rate_contract.html  " class="dropdown-item">HOG Rate Contract</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/ELECTRICAL/electrical_menu_cont/161%20PROFORMA%20%20ASSESS%20FIRM/Firm20assessment20proforma-elec.pdf" class="dropdown-item">Proforma Assmnt. Firms</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/ELECTRICAL/PDF/departmental_goals.pdf" class="dropdown-item">Organization Goals</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/electrical/electrical_menu_cont/041%20%20Awarn%20on%20Elec.%20Safety/Electrical%20Safety.pdf" class="dropdown-item">Awareness Elect_Safety</a>
                        </div>
                        <div class="column">
                            <a href="../login.php?redirect=department/electrical_main.php" class="dropdown-item" target="_blank">Image Upload</a>
                           <a href="http://10.53.4.105:8080/wmtest/elec_upload/" class="dropdown-item">View Files</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/ELECTRICAL/PCEE/photopage.html" class="dropdown-item">PCEE Award Function Photos</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/electrical/electrical_menu_cont/06082015ECD/ECD.htm" class="dropdown-item">Energy Consumption Data</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/ELECTRICAL/electrical_menu_cont/081%20Technical%20Bulletin/dec%202009%20latest%20bulletin.pdf" class="dropdown-item">Technical Bulletin</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/ELECTRICAL/electrical_menu_cont/111%20ICF_Goes_Green/ICF_GOES_GREEN_NEW.pdf" class="dropdown-item">ICF Goes Green</a>
                    <a href="http://10.53.4.11/newicf/ELECTRICAL/electrical/electrical_menu_cont/201%20LIST%20OF%20CEE%20(O)BOOKS/LIST%20OF%20CEE%20(O)BOOKS.pdf" class="dropdown-item">Departmental Library Books</a>
                        </div>
                    </div>
                </li>
 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Designs <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                             <a href="http://10.53.4.11/newicf/ELECTRICAL/design_development/TL-AC%20LHB%20ICF%20ELEC%20SPEC.htm" class="dropdown-item">TL-AC & LHB ICF ELEC SPEC</a>
<a href="http://10.53.4.11/newicf/ELECTRICAL/design_development/LHB%20ICF%20EDML%20SPEC%20.htm" class="dropdown-item">LHB ICF EDML SPEC</a>
<a href="http://10.53.4.11/newicf/ELECTRICAL/design_development/DETC%20OHE%20ICF%20ELEC%20SPEC.htm" class="dropdown-item">DETC OHE ICF ELEC SPEC</a>
<a href="http://10.53.4.11/newicf/ELECTRICAL/design_development/SELF%20PROPELLED%20COACHES%20ICF%20ELEC.htm" class="dropdown-item">SELF PROPELLED COACHES ICF ELEC</a>
    
                    </div>
                </li>
    <li class="nav-item"><a href="http://10.53.4.11/newicf/vbportal/index.html" class="nav-link">Vande Bharath Training Module</a></li>
    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Contacts <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                             <a href="http://10.53.4.89/gaz/" class="dropdown-item">ICF Directory</a>
<a href="http://10.53.4.89/pp/cug_list/" class="dropdown-item">ICF CUG Directory</a>
                    </div>
                </li>
    
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
                            <div class="slide-main-title">ICF</div>
                            <div class="slide-subtitle">Integral Coach Factory</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 2.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Modern Railway Technology</div>
                            <div class="slide-subtitle">Advanced train manufacturing</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 3.png" alt="Factory Interior" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Manufacturing Excellence</div>
                            <div class="slide-subtitle">State-of-the-art production facility</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 4.png" alt="Railway Station" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Railway Infrastructure</div>
                            <div class="slide-subtitle">Connecting India through rails</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 6.png" alt="Engineering" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Engineering Innovation</div>
                            <div class="slide-subtitle">Precision engineering solutions</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 5.png" alt="Railway Workshop" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Railway Workshop</div>
                            <div class="slide-subtitle">Expert maintenance and repair</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 10.png" alt="Railway Landscape" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Railway Network</div>
                            <div class="slide-subtitle">Connecting communities nationwide</div>
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
                $totalSlides = !empty($images) ? count($images) : 7; // Use 7 for default slides
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
                <p>The Electrical Department at ICF works under the overall control of the Chief Electrical Engineer. The Electrical Design Wing is headed by Chief Design Engineer/Electrical. The Maintenance and Construction Organisation is headed by Chief Electrical General Engineer. Chief Electrical Engineer/Quality Control and Commissioning is responsible for Inspection and Quality Assurance of the components and coaches. The functional Wings of Electrical Branch of ICF are as follows:</p>
     <button class="action-btn-more" onclick="window.open('http://10.53.4.11/newicf/ELECTRICAL/pdf/overview.pdf', '_blank')">More..</button>

            </div>
        </div>
        
        <div class="info-panel-box">
            <div class="panel-title-section">
                <h2>What's New...</h2>
            </div>
            <div class="panel-body-area">
                <!-- Content for What's New section can be added here -->
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
<footer class="footer2">
    <p class="footer2-text">© Integral Coach Factory | Updated 2025</p>
  </footer>
    
<script src="../script.js"></script>
</body>
</html>
    