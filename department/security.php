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
$result = $conn->query("SELECT * FROM security_images ORDER BY position ASC");
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
    <style>
        .logo-section {
            padding: 20px 0;
            background: #fff;
        }

        .logo-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 60px; /* Increased gap from 40px to 60px for more space between images */
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .org-identity {
            display: flex;
            align-items: center;
            gap: 20px;
            flex: 1;
        }

        .org-logo {
            width: 80px;
            height: auto;
        }

        .org-text {
            flex: 1;
        }

        .anniversary-logo {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .anniversary-img {
            max-width: 100%;
            height: auto;
        }

        .govt-emblem {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .emblem-img {
            max-width: 100%;
            height: auto;
        }

        @media (max-width: 768px) {
            .logo-content {
                flex-direction: column;
                gap: 20px;
            }
            
            .org-identity, .anniversary-logo, .govt-emblem {
                width: 100%;
                justify-content: center;
            }
        }

        .main-container {
            display: flex; /* Use flexbox to arrange children side-by-side */
            gap: 100px; /* Increased space between the carousel and the card */
            max-width: 1200px;
            margin: 20px auto; /* Center the container and add vertical space */
            padding: 0 20px;
            flex-wrap: wrap; /* Allow items to wrap on smaller screens */
            align-items: flex-start; /* Align items to the top */
        }

        .image-slider-wrapper {
            flex: 2; /* Allow the carousel to take up more space */
            min-width: 300px; /* Ensure carousel doesn't get too small */
        }

        .rpf-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            width: 280px; /* Further reduced width for the card */
            flex: 1; /* Allow the card to take up remaining space */
            min-width: 240px; /* Ensure card doesn't get too small */
            margin: 0; /* Remove auto margin, handled by main-container gap */
            font-family: 'Poppins', sans-serif;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            background-color: #fff;
            display: flex;
            flex-direction: column;
        }

        .card-header {
            background-color: #1a528e; /* Dark blue background */
            color: white;
            padding: 8px 10px; /* Reduced vertical padding */
            text-align: center;
            font-size: 1em;
            font-weight: 600;
        }

        .card-image {
            text-align: center;
            padding: 10px; /* Reduced padding */
        }

        .card-image img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd; /* Optional: Add border around image */
            padding: 3px; /* Reduced padding around image */
            background-color: #f8f8f8;
        }

        .card-content {
            padding: 10px 15px; /* Reduced vertical padding */
            text-align: center;
            flex-grow: 1;
        }

        .card-title {
            font-size: 1.1em;
            font-weight: 700;
            color: #1a528e; /* Dark blue color for title */
            margin-bottom: 8px; /* Reduced bottom margin */
        }

        .card-description {
            font-size: 0.9em;
            color: #555;
            line-height: 1.4;
            margin-bottom: 10px; /* Reduced bottom margin */
        }

        .card-footer {
            padding: 8px 10px; /* Reduced vertical padding */
            text-align: center;
            border-top: 1px solid #eee;
            background-color: #f9f9f9;
        }

        .more-link {
            color: #d9534f; /* Reddish color for the link */
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9em;
        }

        .more-link:hover {
            text-decoration: underline;
        }

        .arrow {
            margin-left: 5px;
        }

        @media (max-width: 768px) {
            .main-container {
                flex-direction: column; /* Stack items vertically on small screens */
                align-items: center;
            }
            
            .image-slider-wrapper, .rpf-card {
                width: 100%; /* Make items take full width */
                margin-bottom: 20px; /* Add space between stacked items */
            }
            
            .logo-content {
                flex-direction: column;
                gap: 20px;
            }
            
            .org-identity, .anniversary-logo, .govt-emblem {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
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
                    <img src="rpf2.png" alt="75 Years of Constitution" class="anniversary-img">
                </div>

                <!-- Right: Govt Emblem -->
                <div class="govt-emblem">
                    <img src="rpf.png" alt="Government of India Emblem" class="emblem-img">
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
                    <a href="http://10.53.4.11/newicf/SECURITY/PDF/aboutus.pdf" class="nav-link dropdown-toggle">About Us</a>
                   
                </li>
                <li class="nav-item dropdown">
                    <a href="https://icf.gov.in/vpms/output/login.php" class="nav-link dropdown-toggle">Visitors Pass Mgmt.System</a>
              </li>
                <li class="nav-item dropdown">
                   <a href="#" class="nav-link" >Laws With RPF</a>
                   <div class="dropdown-content">
 
               <a href="http://10.53.4.11/newicf/SECURITY/PDF/rpf%20rule.pdf" class="dropdown-item">RPF Rule</a>
                 <a href="http://10.53.4.11/newicf/SECURITY/PDF/railway%20act.pdf" class="dropdown-item">Railway Act</a>
                   <a href="http://10.53.4.11/newicf/SECURITY/PDF/rp%20up%20act.pdf" class="dropdown-item">RP (UP) Act</a>
                     <a href="http://10.53.4.11/newicf/SECURITY/PDF/Power.pdf" class="dropdown-item">Power of RPF</a>
                       <a href="http://10.53.4.11/newicf/SECURITY/PDF/ndps.pdf" class="dropdown-item">NDPS Act</a>
                   
                   </div>
                  
                   
                </li>

             <li class="nav-item dropdown">
  <a href="#" class="nav-link ">Other Laws</a>
  <div class="dropdown-content">
     <a href="http://10.53.4.11/newicf/SECURITY/PDF/ipc.pdf" class="dropdown-item">IPC</a>
                     <a href="http://10.53.4.11/newicf/SECURITY/PDF/railway%20act.pdf" class="dropdown-item">CRPC</a>
                       <a href="http://10.53.4.11/newicf/SECURITY/PDF/Indian%20Evidence%20act.pdf" class="dropdown-item">IEA</a>
                         <a href="http://10.53.4.11/newicf/SECURITY/PDF/arms.pdf" class="dropdown-item">Arms Act</a>
                           <a href="" class="dropdown-item">Industrial Act</a>
                           <a href="" class="dropdown-item">Labour Law</a>
  </div>
    
</li>
<li class="nav-item dropdown">
  <a href="#" class="nav-link">Sports Awards</a>
  <div class="dropdown-content">
    <a href="http://10.53.4.11/newicf/SECURITY/PDF/sports%20policy.pdf" class="dropdown-item">Sports Membership</a>
    <a href="#" class="dropdown-item">Sports Award</a>
    <a href="#" class="dropdown-item">PPM</a>
    <a href="#" class="dropdown-item">IPM</a>
    <a href="#" class="dropdown-item">DG Insignia</a>
    <a href="#" class="dropdown-item">Railway Week Award</a>
    <a href="#" class="dropdown-item">Man of the Month</a>
  </div>
</li>


                <li class="nav-item dropdown">
  <a href="http://10.53.4.11/newicf/SECURITY/PDF/crimemanual.pdf" class="nav-link ">Crime Manual</a>
  
</li>
 <li class="nav-item dropdown">
    <a href="http://10.53.4.11/newicf/SECURITY/PDF/establishmentmanual.pdf" class="nav-link " target="_blank">Establishment Manual</a>
   
</li>
 <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Staff Welfare<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown" style="min-width: -400px;">
       
         
                              <div class="column">
                   
                            <a href="https://hrms.indianrail.gov.in/HRMS/login" class="dropdown-item">HRMS Staff Matter</a>
                            <a href="http://10.53.4.11/newicf/SECURITY/PDF/grievance.pdf" class="dropdown-item">Grievance Redressal</a>
                            <a href="" class="dropdown-item">RSKN</a>
                            <a href="" class="dropdown-item">Staff Benefit Fund</a>
                           
                     </div>
                     <div class="column">
                    <a href="" class="dropdown-item">Prime Minister Scholarship</a>
                            <a href="https://rbms.railnet.gov.in/" class="dropdown-item">Barrack</a>
                            <a href="" class="dropdown-item">Canteen</a>
                      
                     
         
                     </div>
                   
       

    </div>
</li>


 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">RPF Sites<i class="fas fa-caret-down"></i></a>
               <div class="dropdown-content two-column-dropdown">
             <div class="column">
                <a href="https://rpf.indianrailways.gov.in/RPF/" class="dropdown-item">RSMS</a>
                             <a href="http://10.53.4.89/eoffice/index.html" class="dropdown-item">ICF eOffice</a>
                              <a href="https://email.gov.in/" class="dropdown-item">NIC Mail</a>
                               <a href="https://web.whatsapp.com/" class="dropdown-item">Whats App

</a>
                                <a href="https://rbms.railnet.gov.in/login?returnUrl=%2F/" class="dropdown-item">RBMS</a>
                                 <a href="https://rpfes.railnet.gov.in/" class="dropdown-item">E-Suvidha</a>
                                  <a href="https://vpn.nic.in/" class="dropdown-item">CCTNS</a>
                                   <a href="https://vpn.nic.in/" class="dropdown-item">ICJS</a>
                                   <a href="../login.php?redirect=department/security_main.php" class="dropdown-item" target="_blank">Image Upload</a>
             </div>
                             
                    </div></li>

                   
<li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Contacts </a>
  <div class="dropdown-content">
    <a href="http://10.53.4.11/newicf/SECURITY/PDF/Telephone.pdf" class="dropdown-item">All zonal Security Control room</a>
     <a href="http://10.53.4.89/gaz/" class="dropdown-item">ICF Directory</a>
      <a href="#" class="dropdown-item">Latest Rly. Nos.</a>
       <a href="http://10.53.4.11/newicf/SECURITY/PDF/email.pdf" class="dropdown-item">Email ID</a>

  </div>
 
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
                        <img src="image copy 37.png" alt="ICF Factory" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">New Year 2021 Wishes</div>
                            <div class="slide-subtitle">Integral Coach Factory</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 38.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICF Main Building</div>
                            <div class="slide-subtitle">Integral Coach Factory</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 39.png" alt="Factory Interior" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICF Furnishing Admin Building</div>
                            <div class="slide-subtitle">Integral Coach Factory</div>
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
    <div class="rpf-card">
            <div class="card-header">
                DG RPF NDLS
            </div>
            <div class="card-image">
                <img src="dg.png" alt="Shri MANOJ YADAV, IPS">
            </div>
            <div class="card-content">
                <div class="card-title">Shri MANOJ YADAV,IPS</div>
                <div class="card-description">Shri Manoj Yadav has taken over charge as Director General of Railway Protection Force.</div>
            </div>
            <div class="card-footer">
                <a href="#" class="more-link">MORE <span class="arrow">&rarr;</span></a>
            </div>
        </div>
        </div>
    </div>
     <div class="dual-panel-wrapper">
        <div class="info-panel-box">
            <div class="panel-title-section">
                <h2>About us</h2>
            </div>
            <div class="panel-body-area">
                <p><strong>Mission Statement</strong></p>
                <p>Protect and safeguard railway passengers, passenger area and railway property.
Ensure the safety, security and boost the confidence of the traveling public in the Indian Railways</p>
               <p><strong>Objectives</strong></p>
                <p>Carry on an unrelenting fight against criminals in protecting railway passengers, passenger area and railway property.
                
                Facilitate passenger-travel and security by removing all anti-social elements from trains, railway premises and passenger area.</p>
     <button class="action-btn-more" onclick="#">More..</button>

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
    