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
$result = $conn->query("SELECT * FROM sports_images ORDER BY position ASC");
$images = [];
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $images[] = $row;
    }
} else {
    // Table might not exist, initialize empty images array
    $images = [];
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
                    <img src="sports.png" alt="" class="anniversary-img">
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
    <a href="orgchart.pdf" class="nav-link "target="_blank">Organization Chart</a>
   
</li>
    <li class="nav-item dropdown">
    <a href="sports_coaches.pdf" class="nav-link "target="_blank">Coaches</a>
   
</li>
                <li class="nav-item dropdown">
                    <a href="http://10.53.4.11/newicf/secretariat/index.php" class="nav-link">Activity<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="activity_25.pdf" class="dropdown-item"target="_blank">2024-2025</a>          
                         <a href="activity_24.pdf" class="dropdown-item"target="_blank">2023-2024</a>   
                    </div></li>
                <li class="nav-item dropdown">
    <a href="sports_facility.pdf" class="nav-link "target="_blank">Facility</a>
   
</li>   
   <li class="nav-item dropdown">
    <a href="#" class="nav-link "target="_blank">Award Winner</a>
   
</li>   
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Important Links<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                            <a href="../login.php?redirect=department/sports_main.php" class="dropdown-item" target="_blank">Image Upload</a>
                            <a href="http://10.53.4.86/cms/cmshome.php" class="dropdown-item">Centralized Messaging System</a>
                            <a href="http://10.53.4.89/eoffice/index.html" class="dropdown-item">ICF eOffice</a>
                            <a href="http://10.53.4.86/ga/gahome.php" class="dropdown-item">Gate Attendance System</a>
                            <a href="http://10.53.4.60:8081/ESSDEMO/" class="dropdown-item">Employee Self Services(ESS)</a>
                            <a href="http://10.53.4.60:8081/SSSDEMO1/" class="dropdown-item">Supervisor Self Services(SSS)</a>
                            <a href="http://10.53.4.89/magazines/homenew.php" class="dropdown-item">ICF Magazine (Integral News)</a>
                        </div>
                         <div class="column">
                             <a href="http://10.53.4.11/ihms/dbr_acts_input_form.asp" class="dropdown-item">Accounts bills</a>
                               <a href="http://10.53.4.201/rr/phprr/medi/cmsfile120.1.2021" class="dropdown-item">Co7 Co6 details</a>
                                 <a href="http://10.53.4.11/pb/index.asp" class="dropdown-item">New Vendor Reg</a>
                                   <a href="http://10.53.4.11/pb/index.asp" class="dropdown-item">Personnel</a>
                                     <a href="http://10.53.4.11/ims%20web%20page/homenew.html" class="dropdown-item">IMS 5S</a>
                                       <a href="http://10.53.4.88/ga/" class="dropdown-item">Aadhaar</a>
                                       <a href="http://10.53.4.11/ihms/RTI_INDEX.ASP" class="dropdown-item">RTI</a>
                                     
                        </div>
                                        
                    </div>
                </li>
 
   <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">External Links<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown">
        <div class="column">
             <a href="https://parichay.nic.in/pnv1/assets/login?sid=eOfficeRailAU" class="dropdown-item">eOffice</a>
                <a href="https://www.indianrail.gov.in/enquiry/PNR/PnrEnquiry.jsp" class="dropdown-item">P N R</a>
                   <a href="https://www.confirmtkt.com/" class="dropdown-item">Cnfirm Tkt</a>
                      <a href="https://aims.indianrailways.gov.in/" class="dropdown-item">IPAS</a>
                         <a href="https://covid19.chennaipolicecitizenservices.com/" class="dropdown-item">Vehicle Pass</a>
                            <a href="https://www.ajkd.org/" class="dropdown-item">Ajkd.Org</a>
              
        </div>
            <div class="column">
             <a href="https://home.cmcvellore.ac.in/clinqc/" class="dropdown-item">Cmc vellore.Ac.In</a>
                <a href="https://www.radiologyinfo.org/" class="dropdown-item">Radiology info.Org.</a>
                   <a href="https://www.aerb.gov.in/english/" class="dropdown-item">Aerb.Gov.In</a>
                      <a href="https://www.barc.gov.in/" class="dropdown-item">Barc.Gov.In</a>
                         <a href="https://india.gov.in/" class="dropdown-item">India.Gov.In</a>
                           
              
        </div>
     
    </div>
</li>

  <li class="nav-item dropdown">
                    <a href="#" class="nav-link">Circular/Letters<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content">
                   
                     <a href="http://10.53.4.11/newicf/sports/tour/pdf/Basketball.pdf" class="dropdown-item">All India Inter.Rly Basketball-(Men)Championship 2024-2025</a> 
                       <a href="http://10.53.4.11/newicf/sports/pdf/59th%20badminton.pdf" class="dropdown-item">All India Inter.Rly Ball Badminton-Championship 2024-2025</a> 
                    
                        
                    </div></li>
 <li class="nav-item dropdown">

  <a href="#" class="nav-link dropdown-toggle">Downloads<i class="fas fa-caret-down"></i></a>
   <div class="dropdown-content">
                    
                     <a href="http://10.53.4.11/newicf/sports/pdf/Basketball.pdf" class="dropdown-item">All India Inter Rly.Basketball</a>        
                        
                    </div>
</li>
 <li class="nav-item dropdown">
  <a href="http://10.53.4.11/newicf/gallery/" class="nav-link dropdown-toggle">Gallery</a>
 
</li>

                <li class="nav-item dropdown">
  <a href="http://10.53.4.11/newicf/sports/pdf/sport_contacts.pdf" class="nav-link dropdown-toggle">Contacts</a>
  
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
                        <img src="image copy 40.png" alt="ICF Factory" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">70th All India Railway Tennis Championship 2024-25 held at ICFSA from 17.09.2024 to 21.09.2024, ICF team has emerged as Champions</div>
                            <div class="slide-subtitle">04-10-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 41.png" alt="Modern Train" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">70th All India Railway Tennis Championship 2024-25 held at ICFSA from 17.09.2024 to 21.09.2024, ICF team has emerged as Champions</div>
                            <div class="slide-subtitle">23-12-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 42.png" alt="Factory Interior" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICFSA Volleyball Women Team, Winners of All India Invitational Tournament 2024 at Hassan, Karnataka.</div>
                            <div class="slide-subtitle">23-12-2024</div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 43.png" alt="Factory Interior" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICFSA Volleyball Women Team, Winners of All India Invitational Tournament 2024 at Hassan, Karnataka.</div>
                            <div class="slide-subtitle"></div>
                        </div>
                    </div>
                    <div class="image-slide-frame">
                        <img src="image copy 44.png" alt="Factory Interior" class="slide-picture">
                        <div class="slide-text-overlay">
                            <div class="slide-main-title">ICFSA Volleyball Women Team, Winners of All India Invitational Tournament 2024 at Hassan, Karnataka.</div>
                            <div class="slide-subtitle"></div>
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
                $totalSlides = !empty($images) ? count($images) : 5; // Use 7 for default slides
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
            <h2>Winning Awards</h2>
        </div>
        <div class="panel-body-area">
 <div class="custom-table-container">
  <table class="custom-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Designation</th>
        <th>Sport</th>
        <th>Events</th>
        <th>Winning Position</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>B. SIVAKUMAR</td>
        <td>Junior Clerk</td>
        <td>Athletics</td>
        <td>All India Rly. Championship</td>
        <td>Bronze</td>
      </tr>
      <tr>
        <td>R. MANAV</td>
        <td>Junior Clerk</td>
        <td>Athletics</td>
        <td>All India Rly. Championship</td>
        <td>Gold</td>
      </tr>
      <tr>
        <td>S. ARYA</td>
        <td>Junior Clerk</td>
        <td>Soccer</td>
        <td>League</td>
        <td>Gold</td>
      </tr>
      <tr>
        <td>S. TAMILARASU</td>
        <td>Accounts Clerk</td>
        <td>Cricket</td>
        <td>Tournament</td>
        <td>Silver</td>
      </tr>
      <tr>
        <td>K. AVINASH</td>
        <td>Senior Clerk</td>
        <td>Baseball</td>
        <td>—</td>
        <td>Bronze</td>
      </tr>
       <tr>
        <td>K. AVINASH</td>
        <td>Senior Clerk</td>
        <td>Baseball</td>
        <td>—</td>
        <td>Bronze</td>
      </tr>
     
    </tbody>
  </table>
</div>


<style> 
    .custom-table-container {
  margin-top: -10px;
  overflow-x: auto; /* ensures responsiveness */
}

.custom-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.custom-table th,
.custom-table td {
  border: 1px solid #ddd;
  padding: 8px 12px;
  text-align: left;
}

.custom-table th {
  background-color: #f2f2f2;
  color: #333;
}

.custom-table tr:nth-child(even) {
  background-color: #fafafa;
}

.custom-table tr:hover {
  background-color: #f1f1f1;
}

</style>
            
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
    