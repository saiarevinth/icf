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
        <script src="../script.js"></script>
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
                    <img src="gm.png" alt="75 Years of Constitution" class="anniversary-img">
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
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Sub Sections<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-item">Rail Museum</a>
                        <a href="http://10.53.4.11/newicf/secretariat/club/index.html" class="dropdown-item">Integral club</a>
            
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="http://10.53.4.11/newicf/secretariat/index.php" class="nav-link">Useful Information<i class="fas fa-caret-down"></i></a>
                <div class="dropdown-content two-column-dropdown">
                    <div class="column">
                        <a href="incumbency.php" class="dropdown-item">Incumbency Details</a>
                        <a href="tour.php" class="dropdown-item">Tour program</a>
                        <a href="http://10.53.4.105/pb/gmoffice/gm_pcdo.asp" class="dropdown-item">PCDO</a>
                        <a href="http://10.53.4.105/pb/gmoffice/briefcase-memo.pdf" class="dropdown-item">Briefcase</a>
                        <a href="http://10.53.4.11/newicf/secretariat/New%20Laptop%20Policy.pdf" class="dropdown-item">New Laptop Policy</a>
                        <a href="laptop.php" class="dropdown-item">Laptop</a></div>
                        <div class="column"> 
                        <a href="http://10.53.4.11/newicf/secretariat/pdf/Photocopier%20GeM%20Contract%202023-2025.pdf" class="dropdown-item">Photocopier GeM Contract 2023-2025</a>
                        <a href="http://10.53.4.11/newicf/gaz_qtrs/pdf/GAZ_QRS_ALLOTMENT.pdf" class="dropdown-item">Procedure Order-Qtrs.Gazttd.pool</a>
                        <a href="http://10.53.4.11/newicf/gaz_qtrs/pdf/qtrscopy.pdf" class="dropdown-item">Gazetted Quarters Occupancy Details</a>
                        <a href="http://10.53.4.105/pb/gmoffice/gaz_quarters.asp" class="dropdown-item">Gazetted Quarters-Allotment Orders</a>
                        <a href="http://10.53.4.105/pb/gmoffice/admin/" class="dropdown-item">Internal  Users</a>
                        <a href="http://10.53.4.105/pb/gmoffice/download.asp" class="dropdown-item">Downloads</a>
                    </div>
                        
            
                    </div></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">SPARROW<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="https://indianrailways.gov.in/railwayboard/uploads/directorate/Sparrow/Implementation_Sparrow_170217.pdf" class="dropdown-item">Implementation of SPARROW(APAR)</a>
                            <a href="http://www.reis.railnet.gov.in/SPARROW.htm" class="dropdown-item">SPARROW Guidelines</a>
                            <a href="#" class="dropdown-item">SPARROW Login</a>
                            <a href="http://10.53.4.11/newicf/secretariat/pdf/SPARROW_HELP_DESK.pdf" class="dropdown-item">SPARROW Help Desk</a>
                            <a href="http://10.53.4.11/newicf/secretariat/pdf/NIC%20MAIL%20ID.pdf" class="dropdown-item">Officers NIc Mail ID</a>
                            <a href="http://10.53.4.11/newicf/secretariat/pdf/sprrow.pdf" class="dropdown-item">Guide for APAR filling</a>
                    </div>
                </li>
  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Press Release <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown" style="min-width: -400px;">
        <div class="column">
            <a href="http://10.53.4.11/newicf/secretariat/pdf/pressrelease_1.pdf" class="dropdown-item">19.02.2025-The Hon'ble Governor of Tamil Nadu visited ICF.</a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/pressrelease_2.pdf" class="dropdown-item"> 03.02.2025-Celebrating "100 Yrs.Electric Traction"</a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/pressrelease_3.pdf" class="dropdown-item"> 31.01.2025-Australian Open Tennis Championship</a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/pressrelease_4.pdf" class="dropdown-item">20.01.2025-Visit of Addl.Member PU </a>
             
        <a href="http://10.53.4.11/newicf/secretariat/pdf/18.09.2024%20Press%20Release%20-Award.pdf" class="dropdown-item">18.09.2024 - Award       </a>
        </div>
        <div class="column">
            <a href="http://10.53.4.11/newicf/secretariat/pdf/07.11.2024-PRESS%20RELEASE%20OF%20MTRS%20TO%20ICF.pdf" class="dropdown-item">07.11.2024-PRESS RELEASE OF MTRS TO ICF </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/17.12.2024-NECA-2024%20AWARD.pdf" class="dropdown-item">17.12.2024-NECA-2024 AWARD   </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/29.10.2024-PRESS%20RELEASE_vigilance%20awareness%20week2024.pdf" class="dropdown-item">29.10.2024-vigilance awareness week2024 </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/23.10.2024-PRESS%20RELEASE%20OF%20VANDE%20BHARAT%20SLEEPER.pdf" class="dropdown-item">23.10.2024-VANDE BHARAT SLEEPER   </a>
         
        </div>
        <div class="column">
            <a href="http://10.53.4.11/newicf/secretariat/pdf/27.08.2024-PRESS%20RELEASE%20OF%20VENDOR%20MEET.pdf" class="dropdown-item">27.08.2024-VENDOR MEET   </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/03.08.2024-PRESS%20RELEASE-CCRS%20VISIT-VM.pdf" class="dropdown-item">03.08.2024-CCRS VISIT-VM          </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/27.06.2024-PRESS%20RELEASE%20OF%2075000TH%20COACH%20FLAG%20OFF.pdf" class="dropdown-item">27.06.2024-75000TH COACH FLAG OFF  </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/10.06.2024-PRESS%20RELEASE%20of%20Shri.%20M.%20Venkatesan,%20Hon%E2%80%99ble%20Chairman%20NCSK%20visit%20to%20ICF%20on%2010.06.2024.pdf" class="dropdown-item">Shri. M. Venkatesan, Hon'ble Chairman NCSK visit to ICF on 10.06.2024</a>
             <a href="http://10.53.4.11/newicf/secretariat/pdf/Visit%20of%20AM-PU%20Press%20Release.pdf" class="dropdown-item">
Shri S.K.Pankaj,AM(PU)R.B. Visits ICF</a>

  <a href="http://10.53.4.11/newicf/secretariat/pdf/pressrelease_5.pdf" class="dropdown-item">10.01.2025-Honourable Union Minister of Rlys. </a>
        </div>

    </div>
</li>

             <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">GM's Messages<i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content ">
        <a href="http://10.53.4.11/newicf/secretariat/pdf/GM%20republic%20day%20Speech%20final%2026-01-2025.pdf" class="dropdown-item">GM's Speech-Republic Day-26.01.2025  </a>
            <a href="http://10.53.4.11/newicf/secretariat/pdf/GM%20sir%20Speech%20final%2015-08-2024.pdf" class="dropdown-item">GM's Speech - I-Day Celebrations - 15.08.2024</a>
                <a href="http://10.53.4.11/newicf/secretariat/pdf/GM%20Speech%20-%20Republic%20Day%20-%2026.01.2024-small%20letter.pdf" class="dropdown-item">GM's Speech -Republic Day -26.01.2024  </a>
                    <a href="http://10.53.4.11/newicf/secretariat/pdf/GM%20Speech%20-%20Ind%20Day%2015.08.2023.pdf" class="dropdown-item">GM's Speech - I-Day Celebrations - 15.08.2023</a>
   
    
    
    
  </div>
</li>

                <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">S-O-P <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content two-column-dropdown">
    <div class="column">
      <a href="http://10.53.4.11/newicf/secretariat/pdf/gm_msop_amended_Feb_2025.pdf" class="dropdown-item">GM Powers</a>
      <a href="http://10.53.4.105/pb/sop/corrigendum_SOP_171018.pdf" class="dropdown-item">Corrigendum Slip No:1 to Model SOP-2018</a>
      <a href="http://10.53.4.105/pb/sop/SOP18_ESTAB.pdf" class="dropdown-item">Establishment</a>
      <a href="http://10.53.4.11/newicf/secretariat/pdf/msop_works_matter_2025.pdf" class="dropdown-item">Works</a>
      <a href="http://10.53.4.11/newicf/secretariat/pdf/Stores_msop_amended%20dt.05.05.2023.pdf" class="dropdown-item">Stores</a>
     
    </div>
    <div class="column">
      <a href="http://10.53.4.105/pb/sop/Medical-micfsop-dec-18.pdf" class="dropdown-item">Medical</a>
      <a href="http://10.53.4.11/newicf/secretariat/pdf/MSOP_MISC_SEPT_2023.pdf" class="dropdown-item">Miscellaneous</a>
      <a href="http://10.53.4.11/newicf/secretariat/10.53.4.105/pb/sop/SOP18_COMM.pdf" class="dropdown-item">Commercial</a>
            <a href="http://10.53.4.105/pb/sop/SOP18_SECURITY.pdf" class="dropdown-item">Security</a>
    </div>
  </div>
</li>

                <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Guest House<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        
            <a href="https://pravas.indianrailways.gov.in/" class="dropdown-item">Online Booking</a>
    </div>
</li>
               
                <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Annual Narrative Report<i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content two-column-dropdown">
    <div class="column">
        <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2023_24.pdf" class="dropdown-item">Annual Narrative Report-2024-25</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2022_23.pdf" class="dropdown-item">Annual Narrative Report-2023-24</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2021_2022.pdf" class="dropdown-item">Annual Narrative Report-2022-23</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2020_2021.pdf" class="dropdown-item">Annual Narrative Report-2021-22</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2019_2020.pdf" class="dropdown-item">Annual Narrative Report-2019-20</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2018_2019.pdf" class="dropdown-item">Annual Narrative Report-2018-19</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_2017-18.pdf" class="dropdown-item">Annual Narrative Report-2017-18</a>
    </div>
    <div class="column">
        <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR%202016-17.pdf" class="dropdown-item">Annual Narrative Report-2016-17</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR%202015-16.pdf" class="dropdown-item">Annual Narrative Report-2015-16</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/ANR_14-15.pdf" class="dropdown-item">Annual Narrative Report-2014-15</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/anr_13-14.pdf" class="dropdown-item">Annual Narrative Report-2013-14</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/anrweb.pdf" class="dropdown-item">Annual Narrative Report-2012-13</a>
     <a href="http://10.53.4.11/newicf/secretariat/ANR/annual_report_11_12.pdf" class="dropdown-item">Annual Narrative Report-2011-12</a>
    <a href="http://10.53.4.11/newicf/secretariat/ANR/annual_report_10_11.pdf" class="dropdown-item">Annual Narrative Report-2010-11</a>
    </div>
    
    
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

    <!-- Main Content -->
    <main>
   <!-- Main Content -->
<main>
  <div class="hi">
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">

       <!-- Carousel Section (Left) -->
<div class="carousel-container" style="margin-left: 50px;"> 
  <div class="carousel" aria-label="News Carousel" style="width: 650px; height: 360px;">
    <!-- Carousel Items will be populated dynamically -->
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'crud';

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM images ORDER BY position ASC LIMIT 10");
    $active = true;
    $count = 0;

    while ($row = $result->fetch_assoc()):
        $count++;
    ?>
        <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
            <img src="<?php echo '../' . $row['image_path']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="carousel-img">
            <div class="carousel-caption">
                <h3 class="carousel-title"><?php echo htmlspecialchars($row['title']); ?></h3>
                <p class="carousel-desc"><?php echo htmlspecialchars($row['description']); ?></p>
            </div>
        </div>
    <?php 
        $active = false;
    endwhile; 

    while ($count < 10) {
        $count++;
    ?>
        <div class="carousel-item">
            <img src="../placeholder-image.png" alt="Placeholder" class="carousel-img">
            <div class="carousel-caption">
                <h3 class="carousel-title">Add New Image</h3>
                <p class="carousel-desc">Upload a new image from the admin panel</p>
            </div>
        </div>
    <?php
    }
    $conn->close();
    ?>

    <!-- Carousel Controls -->
    <button class="carousel-control carousel-control-prev" id="carouselPrev" aria-label="Previous slide">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="carousel-control carousel-control-next" id="carouselNext" aria-label="Next slide">
        <i class="fas fa-chevron-right"></i>
    </button>
  </div>

  <!-- Carousel Indicators -->
  <div class="carousel-indicators">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $isActive = ($i == 1) ? 'active-indicator' : '';
        echo '<button class="indicator ' . $isActive . '" aria-label="Slide ' . $i . '" data-slide-to="' . ($i - 1) . '"></button>';
    }
    ?>
  </div>
</div> <!-- end of .carousel-container -->


          <div class="cal-img" style="margin-left: 80px;width:300px;">
            <img src="cal.png" />
          </div>

        </div> <!-- end of .hero-grid -->
      </div> <!-- end of .container -->
    </section> <!-- end of .hero-section -->
  </div>
    <div class="dual-panel-wrapper">

      <!-- Info Panel -->
      <div class="info-panel-box">
        <div class="panel-title-section">
          <h2>About us</h2>
        </div>
        <div class="panel-body-area">
          <p><strong>Welcome to GM's Secretariat:</strong></p>
          <ul style="line-height: 1.8;">
            <li>We thank you for sparing your valuable time in visiting this site.</li>
            <li>We have made every effort to give authentic and updated info in the various pages of this site.</li>
            <li>Please be free to inform us if you find any information is incorrect or you feel anything more is required.</li>
            <li>You may give your suggestions for improvements to 
              <a href="mailto:dysecytgm@gmail.com">dysecytgm@gmail.com</a>
            </li>
          </ul>
          <button class="action-btn-more" onclick="#">More..</button>
        </div>
      </div> <!-- end of .info-panel-box -->

      <!-- News Panel -->
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

          </div> <!-- end of #newsScrollContainer -->
        </div> <!-- end of .sliding-news-content-area -->
      </div> <!-- end of .sliding-news-panel-wrapper -->

    </div> <!-- end of .dual-panel-wrapper -->

  </div> <!-- end of .hi -->
</main> <!-- end of main -->

<!-- Scripts -->
<script>
  let activeSlideIndex = 0;
  const slideFrames = document.querySelectorAll('.image-slide-frame');
  const slideDots = document.querySelectorAll('.slide-dot');
  const totalSlideCount = slideFrames.length;

  function displaySlide(index) {
    slideFrames.forEach(frame => frame.classList.remove('slide-visible'));
    slideDots.forEach(dot => dot.classList.remove('dot-active'));
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

  setInterval(moveSlideForward, 5000);
  displaySlide(0);
</script>

<footer style="background-color: #173fac; text-align: center; padding: 15px;">
  <p style="margin: 0; color: white; font-family: 'Poppins', sans-serif;">
    © Integral Coach Factory | Updated 2025
  </p>
</footer>

<script src="../script.js"></script>
</body>
</html>
