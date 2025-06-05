<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Add password if you set one
$db = 'crud'; // change to your DB name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Create table if it doesn't exist
$createTable = "CREATE TABLE IF NOT EXISTS hospital_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    position INT DEFAULT 0,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$conn->query($createTable)) {
    die("Error creating table: " . $conn->error);
}

// Fetch images from database ordered by position
$result = $conn->query("SELECT * FROM hospital_images ORDER BY position ASC");
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
                    <img src="hospital.png" alt="75 Years of Constitution" class="anniversary-img">
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
                    <a href="DOCTORS_LIST_AT_ICF_HOSPITAL_ICF_V1.pdf" class="nav-link dropdown-toggle">Doctors</a>
                   
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Application<i class="fas fa-caret-down"></i></a>
               <div class="dropdown-content">
                        <a href="http://10.53.4.11/medical/Audiometry/login.php?return=true&" class="dropdown-item">Audiometry</a>
                            <a href="http://10.53.4.11/medical/medi/login.php?return=true&" class="dropdown-item">Medical Refund</a>
                            <a href="http://10.53.4.11/ihms/login1.asp" class="dropdown-item">Medical</a>
                             
                    </div></li>
                <li class="nav-item dropdown">
                   <a href="spl_clinics.pdf" class="nav-link" target="_blank">Spl.Clinic</a>
                   
                </li>

             <li class="nav-item dropdown">
  <a href="empanelment_hospitals.pdf" class="nav-link "target="_blank">Empanelled Hospital</a>
  
    
</li>

                <li class="nav-item dropdown">
  <a href="outside_doctors_speciality.pdf" class="nav-link "target="_blank">Outside Doctors</a>
  
</li>
 <li class="nav-item dropdown">
    <a href="honorary_consultants_speciality.pdf" class="nav-link " target="_blank">Hon.Consultant</a>
   
</li>
 <li class="nav-item dropdown">
  <a href="DIET_FOR_KIDNEY_PATIENTS.pdf" class="nav-link " target="_blank">Diet </a>
 
</li>      
                

 <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Important<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown" style="min-width: -400px;">
        <div class="column">
            <a href="http://10.53.4.89/eoffice/index.html" class="dropdown-item">ICF eOffice</a>
            <a href="http://10.53.4.11/sdownloads/index.html" class="dropdown-item">Download Seqrite Antivirus S/w</a>
            <a href="http://10.53.4.86/cms/cmshome.php" class="dropdown-item">Centralized Messaging System</a>
            <a href="http://10.53.4.86/ga/gahome.php" class="dropdown-item">Gate Attendance System</a>
            <a href="../login.php?redirect=department/hospital_main.php" class="dropdown-item" target="_blank">Image Upload</a>
        </div>
        <div class="column">
             <a href="http://10.53.4.60:8081/ESSDEMO/" class="dropdown-item">Employee Self Service (ESS)</a>
          <a href="http://10.53.4.60:8081/SSSDEMO1/" class="dropdown-item">Supervisor Self Service (SSS)</a>
          <a href="http://10.53.4.89/magazines/homenew.php" class="dropdown-item">ICF Magazine (Integral News)</a>
          <a href="http://10.53.4.11/ihms/dbr_acts_input_form.asp" class="dropdown-item">Accounts bills</a>
         
        </div>
        <div class="column">
             <a href="#" class="dropdown-item">co7 co6 details</a>
            <a href="http://10.53.4.88/sb/SBEXPHome.php" class="dropdown-item">New Vendor Reg</a>
<a href="http://10.53.4.11/pb/index.asp" class="dropdown-item">Personnel</a>
<a href="#" class="dropdown-item">IMS 5S</a>
<a href="#" class="dropdown-item">Aadhaar</a>
<a href="http://10.53.4.11/ihms/RTI_INDEX.ASP" class="dropdown-item">R T I</a>

        </div>

    </div>
</li>


 <li class="nav-item dropdown">
                    <a href="http://10.53.4.11/newicf/secretariat/index.php" class="nav-link dropdown-toggle">External<i class="fas fa-caret-down"></i></a>
               <div class="dropdown-content two-column-dropdown">
                <div class="column">
                   
                            <a href="http://10.53.4.89/gaz/" class="dropdown-item">ICF Directory</a>
                            <a href="http://10.53.4.11/ihms/ihms_office_phone_numbers.ASP" class="dropdown-item">Hospital Contacts</a>
                            <a href="https://www.confirmtkt.com/" class="dropdown-item">Confirm Tkt</a>
                            <a href="https://aims.indianrailways.gov.in/" class="dropdown-item">IPAS</a>
                             <a href="#" class="dropdown-item">Vehicle Pass</a>
                              <a href="https://www.ajkd.org/" class="dropdown-item">Ajkd.Org</a>
                     </div>
                     <div class="column">
                    <a href="#" class="dropdown-item">Cmc vellore.Ac.In</a>
                            <a href="https://www.radiologyinfo.org/" class="dropdown-item">Radiology info.Org</a>
                            <a href="https://www.aerb.gov.in/english/" class="dropdown-item">Aerb.Gov.In</a>
                            <a href="https://www.barc.gov.in/" class="dropdown-item">Barc.Gov.In</a>
                            <a href="https://india.gov.in/" class="dropdown-item">India.Gov.In</a>
                      
                     </div>
                        
                             
                    </div></li>

                    <li class="nav-item dropdown">
  <a href="emergency_contact.pdf" class="nav-link "target="_blank">Emergency</a>
   
</li>
<li class="nav-item dropdown">
  <a href="http://10.53.4.11/ihms/ihms_office_phone_numbers.ASP" class="nav-link dropdown-toggle">Contacts </a>
 
</li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
    <div class="hi">
 <div class="main-container">
    <!-- Image Carousel Section -->
        <div class="image-slider-wrapper">
            <div class="image-slider-box">
                <?php if (empty($images)): ?>
                    <!-- Default slides if no images in database -->
                    <div class="image-slide-frame slide-visible">
                        <img src="image copy 31.png" alt="ICF Factory" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICF Hospital Front View</div>
                            <div class="slide-subtitle">02-10-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 32.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Hospital Entrance</div>
                            <div class="slide-subtitle">02-10-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 33.png" alt="Factory Interior" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Swachchta Pakwada</div>
                            <div class="slide-subtitle">02-12-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 34.png" alt="Railway Station" class="slide-picture">
                        <div class="slide-text-overlay">
                             <div class="slide-main-title">Swachchta Pakwada</div>
                            <div class="slide-subtitle">02-12-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 35.png" alt="Engineering" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">Swachchta Pakwada</div>
                            <div class="slide-subtitle">02-12-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 36.png" alt="Railway Workshop" class="slide-picture">
                        <div class="slide-text-overlay">
                             <div class="slide-main-title">Swachchta Pakwada</div>
                            <div class="slide-subtitle">02-12-2024</div>
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
                $totalSlides = !empty($images) ? count($images) : 6; // Use 6 for default slides
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
                <p>ICF Hospital was inaugurated with 50 beds in 1984. Subsequently it has been upgraded to 75 beds in 1996 and further upgraded to 101 beds in 1997. A new Out Patient Department Block was commissioned on 27/03/2010.</p>
                <p>Besides the above, treatment is also been given to outsiders mainly close relatives of Railway employees on payment basis at the rates prescribed by the Railway Board time to time. Also treatment is extended to the married daughters of Railway Employees for 1st and 2nd confinement at 40% concession.</p>
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
    