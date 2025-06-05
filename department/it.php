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
                    <img src="it.png" alt="75 Years of Constitution" class="anniversary-img">
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
                    <a href="http://10.53.4.89/hana/" class="nav-link dropdown-toggle">S4 HANA</a>
                   
                </li>
                <li class="nav-item dropdown">
                    <a href="http://10.53.4.11/newicf/secretariat/index.php" class="nav-link">Application<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content two-column-dropdown">
                    <div class="column">
                        <a href="http://10.53.4.11/newicf/MECHANICAL/PRODN_PLG/index.php" class="dropdown-item">Production & Planning Control </a>
                         <a href="http://10.53.4.89/PRODUCTION/" class="dropdown-item">Coach Outturn Dispatch Details</a>
                          <a href="http://10.53.4.89/PRODUCTION/" class="dropdown-item">Production Programme</a>
                           <a href="http://10.53.4.11/newicf/MIS/index.php" class="dropdown-item"> Mgmt.Information System-Production</a>
                            <a href="http://10.53.4.11/newicf/cap_new/" class="dropdown-item">Central Application Portal</a>
                             <a href="http://10.53.4.89/PP/dca/" class="dropdown-item">Job Sheet Cum Design Change Advise</a>
                              <a href="#" class="dropdown-item">Design Drawing Portal</a></div>
                               <div class="column">
                        <a href="http://10.53.4.89/pp/pr_drg/PR/output/login.php" class="dropdown-item">Purchase Request(PR) Drgs.(HANA)</a>
                         <a href="http://10.53.4.11/newicf/ITCENTRE/pdf/2024-25Proposals%20submitted%20to%20Railway%20board.pdf" class="dropdown-item">M&P Programme</a>
                          <a href="https://icf.gov.in/cap/framepage_cc_login.php" class="dropdown-item">Customer Complaints</a>
                           <a href="https://icf.gov.in/cap/framepage_rsc.php" class="dropdown-item">Rolling Stock Certificate(Mech.)</a>
                            <a href="#" class="dropdown-item">Rolling Stock Certificate(LHB.)</a>
                             <a href="#" class="dropdown-item">Rolling Stock Certificate(NON-LHB)</a>
                              <a href="#" class="dropdown-item">Rolling Stock Certificate(Elect.)</a></div>
                               <div class="column">
                        <a href="#" class="dropdown-item">File Upload/Download for CME/QA</a>
                         <a href="https://vp.icf.gov.in/indexNew.php" class="dropdown-item">Vendor Portal</a>
                          <a href="https://icf.gov.in/VEND/SNI/" class="dropdown-item">Supply and Installation Portal</a>
                           <a href="http://10.53.4.100/stores/mm/dashboard_dashboard.php?page=dashboard" class="dropdown-item">Purchase Module/ICF IMMS Reports</a>
                            <a href="http://10.53.4.50/ccnet/stores/main.html" class="dropdown-item">Materials Mgmt.Informn System(Old Portal)</a>
                             <a href="http://10.53.4.86/ds/" class="dropdown-item">Digital Signature Portal</a>
                              <a href="http://10.53.4.86/works/index.php" class="dropdown-item">Centralized Wroks Tender</a></div>
                               <div class="column">
                        <a href="http://10.53.4.11/ihms/LOGIN1.ASP" class="dropdown-item">ICF Hospital</a>
                         <a href="https://chsfiapr01.icf.gov.in:8001/sap/bc/ui2/flp?sap-client=300&sap-language=EN#Shell-home" class="dropdown-item">Incentive System-S/4 HANA</a>
                          <a href="http://10.53.4.11/newicf/MIS/index.php" class="dropdown-item">Mgmt.Information Sytem-PAYROLL</a>
                           <a href="http://10.53.4.60:8081/essdemo/" class="dropdown-item">Employee Self Service</a>
                            <a href="http://10.53.4.60:8081/SSSDEMO1/" class="dropdown-item">Supervisor Self Service</a>
                             <a href="#" class="dropdown-item">Payroll Downloads</a>
                              <a href="http://10.53.4.11/ccnet/PR/pr1/index.asp" class="dropdown-item">Payroll and Incentive(Old Portal)</a></div>
                               <div class="column">
                        <a href="http://10.53.4.11/NEWicf/fmis/index.php" class="dropdown-item">FMIS</a>
                         <a href="http://10.53.4.88/sb/" class="dropdown-item">Stores Bills System(Legacy)</a>
                          <a href="http://10.53.4.88/sb/SBReports.php" class="dropdown-item">Stores Bills Reports(Legacy)</a>
                           <a href="http://10.53.4.88/gstportal/gsthome.php" class="dropdown-item">GST Portal</a>
                            <a href="http://10.53.4.60:8081/MIS_ACCOUNTS/index.php?key=Accounts" class="dropdown-item">MIS-Accounts</a>
                             <a href="http://10.53.4.86/amc/" class="dropdown-item">Network Help Desk</a>
                              <a href="http://10.53.4.11/newicf/pdf/helpdesk.pdf" class="dropdown-item">AMC Help Desk Details</a></div>
                               
                        
                    </div></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Important Link<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="http://10.53.4.89/work/output/login.php" class="dropdown-item">New Development
                             & Enhancement by IT Center</a>
                            <a href="http://10.53.4.89/cts/" class="dropdown-item">Coach Tracking System</a>
                            <a href="https://chsfiapr01.icf.gov.in:8001/sap/bc/ui2/flp#Shell-home" class="dropdown-item">FIORI</a>
                            <a href="http://10.53.4.86/ga/gahome.php" class="dropdown-item">Gate Attendance System</a>
                            <a href="http://10.53.4.86/cms/cmshome.php" class="dropdown-item">Centralized Messaging System</a>
                            <a href="http://10.53.4.11/newicf/pdf/RCPCEXTENSION_2021_11022021.pdf" class="dropdown-item">Rate Contract PC's etc.</a>
                            <a href="http://10.53.4.11/newicf/PreVetted_ITSpec/main_page.htm" class="dropdown-item">Pre-vetted IT Specifications</a>
                            <a href="http://10.53.4.50/ccnet/DExchange/entry.htm" class="dropdown-item">Data Exchange</a>
                            <a href="http://10.53.4.86/web/index.php?APP=STOR" class="dropdown-item">Stores Documents Upload</a>
                            <a href="it_main.php" class="dropdown-item" target="_blank">Image Upload</a>
                    </div>
                </li>
 

             <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Network<i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content ">
        <a href="https://www.speedtest.net/" class="dropdown-item">Check Internet Bandwidth(speed)  </a>
            <a href="http://10.53.4.89/speed/" class="dropdown-item">Bandwidth Monitor</a>
                <a href="http://10.53.4.11/NEWICF/ITCENTRE/pdf/Implementation-e-waste.pdf" class="dropdown-item">Implementation of E-Waste Management Rule 2016 </a>
                    <a href="http://10.53.4.11/NEWICF/ITCENTRE/pdf/1035e_eng.pdf" class="dropdown-item">Guidelines of E-Waste Management</a>
   
    
    
    
  </div>
</li>
   <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Hardware<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        
            <a href="http://10.53.4.11/newicf/pdf/AMC%20Circular.pdf" class="dropdown-item">CAMC Maint. for PCs & Peripherals</a>
    </div>
</li>

                <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">External Links <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content two-column-dropdown">
    <div class="column">
      <a href="https://cert-rail.railnet.gov.in/" class="dropdown-item">Computer Emergency Responsive Team-IR</a>
      <a href="https://indianrailways.gov.in/railwayboard/EmpData/HomePage.html" class="dropdown-item">Indian Rlys Employees Inform System-RB</a>
      <a href="https://indianrailways.gov.in/GST/index.html" class="dropdown-item">GST-Indian Railways</a>
      <a href="https://indianrailways.gov.in/railwayboard/index.jsp?lang=0" class="dropdown-item">Information Security Advisories</a>
      <a href="https://indianrailways.gov.in/railwayboard/index.jsp?lang=0" class="dropdown-item">IT Security</a>
     
    </div>
    <div class="column">
      <a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,1,304,366,548,670" class="dropdown-item">IT Circulars-Rly.Board</a>
      <a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,1,304,366,548,2404" class="dropdown-item">DSC Policy</a>
      <a href="http://www.reis.railnet.gov.in/" class="dropdown-item">REIS</a>
            <a href="https://www.cert-in.org.in/" class="dropdown-item">CERT-In</a>
            <a href="https://www.irctc.co.in/nget/train-search" class="dropdown-item">IRCTC</a>
            
    </div>
  </div>
</li>
 <li class="nav-item dropdown">
    <a href="http://10.53.4.11/newicf/ITCENTRE/ITC_CIRCULARS/index.html" class="nav-link dropdown-toggle">Circular/Letter</a>
   
</li>
 <li class="nav-item dropdown">
  <a href="http://10.53.4.89/PP_ICF_TRG/PP_TRG_TECH.PPS" class="nav-link dropdown-toggle">Training </a>
 
</li>
             
               
                <li class="nav-item dropdown">
  <a href="http://10.53.4.11/gallery/" class="nav-link dropdown-toggle">Gallery</a>
   <div class="dropdown-content">
        
            <a href="http://10.53.4.89/gaz/" class="dropdown-item">ICF Directory</a>
             <a href="http://10.53.4.89/pp/cug_list/" class="dropdown-item">ICF CUG Directory</a>
              <a href="http://10.53.4.11/newicf/ITCENTRE/icfwebmail/main.html" class="dropdown-item">Offiers/staffs Mail ID's</a>
    </div>
</li>

<li class="nav-item dropdown">
  <a href="http://10.53.4.89/gaz/" class="nav-link dropdown-toggle">Contacts </a>
 
</li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
   <div class="hi">
 <div class="main-container">
    <!-- Image Carousel Section -->
        <div class="image-slider-wrapper">
            <div class="image-slider-box">
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
                $result = $conn->query("SELECT * FROM it_images ORDER BY position ASC");
                $images = [];
                while ($row = $result->fetch_assoc()) {
                    $images[] = $row;
                }

                if (empty($images)): ?>
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
                $totalSlides = !empty($images) ? count($images) : 5; // Use 5 for default slides
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
                <p>Information Technology Centre (IT Centre) at ICF has its roots in the early eighties and has been a witness to computers ranging from the Auto Coder to the Present day Multiprocessor based Servers and Storage systems.</p>
                <p><strong>Software Development:</strong> IT Centre develops and maintains IT systems for the various departments of ICF with its dedicated team of engineers. Catering to areas in Production Planning, Materials Management, Plant Maintenance, Quality Management, Accounts, Costing, Payroll, and Incentive.</p>

<p><strong>Network Management:</strong> IT Centre manages and maintains the network and hardware across the ICF campus.</p>

<p><strong>ICF Web Portal Management:</strong> IT Centre maintains ICF web portals (designing, developing, hosting in-house) such as Railnet, Internet, and several other internal portals.</p>
   
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
    