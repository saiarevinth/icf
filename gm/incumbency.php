<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of Integral Coach Factory, Ministry of Railways, Government of India">
    <title>Integral Coach Factory - Government of India</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="incumbency.css">
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
                <li class="nav-item"><a href="http://localhost:8000" class="nav-link">Home</a></li>
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
                        <a href="#" class="dropdown-item">Incumbency Details</a>
                        <a href="http://10.53.4.11/newicf/secretariat/tour/tour.php" class="dropdown-item">Tour program</a>
                        <a href="http://10.53.4.105/pb/gmoffice/gm_pcdo.asp" class="dropdown-item">PCDO</a>
                        <a href="http://10.53.4.105/pb/gmoffice/briefcase-memo.pdf" class="dropdown-item">Briefcase</a>
                        <a href="http://10.53.4.11/newicf/secretariat/New%20Laptop%20Policy.pdf" class="dropdown-item">New Laptop Policy</a>
                        <a href="http://10.53.4.11/newicf/secretariat/laptop.php" class="dropdown-item">Laptop</a></div>
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
<div class="hi">
  <section class="u-align-left u-clearfix u-typography-custom-page-typography-15--Basic-Headlines u-white u-section-2" id="carousel_7927">
    <div class="u-clearfix u-sheet u-sheet-1">
      <header class="milestone-header-section">
        <h1 class="milestone-main-title" style="margin-top: -30px;">Incumbency Details</h1>
      </header>

      <!-- Thin black horizontal line -->
      <hr style="border: 0; height: 1px; background-color: black; margin: 20px 0;">


      <header class="milestone-header-section">
        <h1 class="milestone-text">Chief Administrative Officers</h1>
      </header>
    </div>
  </section>

<section class="u-border-2 u-border-grey-10 u-clearfix u-white u-section-3" id="sec-ee7c">
  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-list u-repeater u-list-1">

      <!-- Officer 1 -->
      <div class="u-align-center u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
        <div class="u-container-layout u-similar-container u-container-layout-1">
          <div class="u-image u-image-circle u-image-1">
            <img src="images/image004.jpg" alt="K. SADAGOPAN">
          </div>
          <h5 class="u-align-center u-text u-text-palette-2-base u-text-1">K. SADAGOPAN</h5>
          <p class="u-align-left u-text u-text-6">From&nbsp; :&nbsp;15.07.1953</p>
          <p class="u-align-left u-text u-text-7">To&nbsp; &nbsp; &nbsp;:&nbsp;18.03.1958</p>
        </div>
      </div>

      <!-- Officer 2 -->
      <div class="u-align-center u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
        <div class="u-container-layout u-similar-container u-container-layout-2">
          <div class="u-image u-image-circle u-image-2">
            <img src="images/image001.jpg" alt="K. SWARUP">
          </div>
          <h5 class="u-align-center u-text u-text-palette-2-base u-text-2">K. SWARUP</h5>
          <p class="u-align-left u-text u-text-6">From&nbsp; :&nbsp;19.03.1958</p>
          <p class="u-align-left u-text u-text-7">To&nbsp; &nbsp; &nbsp;:&nbsp;16.01.1962</p>
        </div>
      </div>

      <!-- Officer 3 -->
      <div class="u-align-center u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
        <div class="u-container-layout u-similar-container u-container-layout-3">
          <div class="u-image u-image-circle u-image-3">
            <img src="images/image006.jpg" alt="I. HYDARI">
          </div>
          <h5 class="u-align-center u-text u-text-palette-2-base u-text-3">I. HYDARI</h5>
          <p class="u-align-left u-text u-text-6">From&nbsp; :&nbsp;16.01.1962</p>
          <p class="u-align-left u-text u-text-7">To&nbsp; &nbsp; &nbsp;:&nbsp;10.09.1962</p>
        </div>
      </div>

    </div>
  </div>
  
</section>
<hr style="border: 0; height: 1px; background-color: black; margin: 20px 0;">
 <header class="milestone-header-section">
  
    <h1 class="milestone-text">General Managers</h1>
  </header>
        <div class="u-expanded-width u-list u-repeater u-list-2">
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-4" src="images/image006.jpg" data-image-width="90" data-image-height="83">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-5">I. HYDARI&nbsp;</h5>
              <p class="u-align-left u-text u-text-6">From&nbsp; &nbsp; :&nbsp;&nbsp;&nbsp;11.09.1962</p>
              <p class="u-align-left u-text u-text-7">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp;15.05.1963</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-5" src="images/image007.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-8">&nbsp;M.A.
RAO&nbsp;</h5>
              <p class="u-align-left u-text u-text-9">From&nbsp; &nbsp;: 16.05.1963&nbsp;</p>
              <p class="u-align-left u-text u-text-10">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.08.1963</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-6">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-6" src="images/image006.jpg" data-image-width="90" data-image-height="83">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-11">I.
HYDARI&nbsp;</h5>
              <p class="u-align-left u-text u-text-12">From&nbsp; &nbsp;:&nbsp; 01.09.1963&nbsp;</p>
              <p class="u-align-left u-text u-text-13">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 10.04.1967</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-7">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-7" src="images/image0091.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-14">&nbsp;P.S.
VENKATARAMAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-15">From&nbsp; : 11.04.1967&nbsp;</p>
              <p class="u-align-left u-text u-text-16">To&nbsp; &nbsp; &nbsp; &nbsp;: 12.07.1967&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-8">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-8" src="images/image006.jpg" data-image-width="90" data-image-height="83">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-17">&nbsp;I. HYDARI&nbsp;</h5>
              <p class="u-align-left u-text u-text-18">From&nbsp; &nbsp;:&nbsp; 13.07.1967&nbsp;</p>
              <p class="u-align-left u-text u-text-19">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 14.01.1968
&nbsp;&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-9">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-9" src="images/image0111.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-20">&nbsp;E.G.
KOTISWARAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-21">From&nbsp; &nbsp;:&nbsp; 15.01.1968</p>
              <p class="u-align-left u-text u-text-22">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 21.01.1969</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-10">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-10" src="images/image013.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-23">R.
RAJAGOPALAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-24">From:&nbsp; 21.01.1969&nbsp;</p>
              <p class="u-align-left u-text u-text-25">To&nbsp; &nbsp; &nbsp; : 19.01.1971 </p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-11">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-11" src="images/image015.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-26">K.
VAIDYANATH&nbsp;</h5>
              <p class="u-align-left u-text u-text-27">From:&nbsp; 03.06.1971&nbsp;</p>
              <p class="u-align-left u-text u-text-28">To&nbsp; &nbsp; &nbsp;:&nbsp; &nbsp;31.03.1973</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-12">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-12" src="images/image017.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-29">J.
MATTHAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-30">From:&nbsp; &nbsp; &nbsp; 28.05.1973&nbsp;</p>
              <p class="u-align-left u-text u-text-31">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; 30.09.1976</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-13">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-13" src="images/image019.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-32">L.R.
GOSAIN&nbsp;</h5>
              <p class="u-align-left u-text u-text-33">From:&nbsp; &nbsp; &nbsp;01.10.1976&nbsp;</p>
              <p class="u-align-left u-text u-text-34">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.01.1980</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-14">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-14" src="images/image021.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-35">K.P.
JAYARAM&nbsp;</h5>
              <p class="u-align-left u-text u-text-36">From:&nbsp; &nbsp; &nbsp; 07.04.1980&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-37">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; 04.10.1980</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-15">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-15" src="images/image023.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-38">IM.
SAHNI&nbsp;</h5>
              <p class="u-align-left u-text u-text-39">From:&nbsp; &nbsp; &nbsp;21.11.1980&nbsp;</p>
              <p class="u-align-left u-text u-text-40">To&nbsp; &nbsp; &nbsp; &nbsp; :&nbsp; 31.07.1982</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-16">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-16" src="images/image025.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-41">C.N.
KAPUR&nbsp;</h5>
              <p class="u-align-left u-text u-text-42">From:&nbsp; &nbsp; &nbsp;02.08.1982&nbsp;</p>
              <p class="u-align-left u-text u-text-43">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 28.02.1985</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-17">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-17" src="images/image027.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-44">R.C.
TANDON&nbsp;</h5>
              <p class="u-align-left u-text u-text-45">From:&nbsp; &nbsp; &nbsp;21.03.1985&nbsp;</p>
              <p class="u-align-left u-text u-text-46">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 30.04.1986</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-18">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-18" src="images/image029.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-47">KULDIP
NARAIN&nbsp;</h5>
              <p class="u-align-left u-text u-text-48">From:&nbsp; &nbsp; &nbsp;01.05.1986&nbsp;</p>
              <p class="u-align-left u-text u-text-49">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.10.1987</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-19">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-19" src="images/image031.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-50">SATISH
BAHL&nbsp;</h5>
              <p class="u-align-left u-text u-text-51">From:&nbsp; &nbsp; 01.11.1987&nbsp;</p>
              <p class="u-align-left u-text u-text-52">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:
28.02.1990
&nbsp;&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-20">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-20" src="images/image033.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-53">S.N.
MAHANT&nbsp;</h5>
              <p class="u-align-left u-text u-text-54">From:&nbsp; &nbsp; &nbsp;01.03.1990&nbsp;</p>
              <p class="u-align-left u-text u-text-55">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;
31.05.1990
&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-21">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-21" src="images/image035.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-56">B.T.
BHIDE&nbsp;</h5>
              <p class="u-align-left u-text u-text-57">From:&nbsp; &nbsp; &nbsp;31.05.1990&nbsp;</p>
              <p class="u-align-left u-text u-text-58">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 28.11.1990&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-22">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-22" src="images/image037.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-59">M.C.
DAS&nbsp;</h5>
              <p class="u-align-left u-text u-text-60">From&nbsp; &nbsp; : 29.11.1990&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-61">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 01.01.1991&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-23">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-23" src="images/image035.jpg" data-image-width="165" data-image-height="197">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-62">B.T. BHIDE&nbsp;</h5>
              <p class="u-align-left u-text u-text-63">From&nbsp; &nbsp; : 02.01.1991&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-64">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 17.04.1992&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-24">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-24" src="images/image039.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-65">B.
RANGARAJAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-66">From&nbsp; &nbsp; : 18.04.1992&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-67">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 18.05.1992&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-25">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-25" src="images/image035.jpg" data-image-width="165" data-image-height="197">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-68">B.T. BHIDE</h5>
              <p class="u-align-left u-text u-text-69">From&nbsp; &nbsp; : 19.05.1992&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-70">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;
31.10.1993
&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-26">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-26" src="images/image042.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-71">S.N.
MATHUR&nbsp;</h5>
              <p class="u-align-left u-text u-text-72">From&nbsp; &nbsp; : 01.11.1993&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-73">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.07.1996</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-27">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-27" src="images/image044.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-74">K.B.
SANKARAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-75">From&nbsp; &nbsp; : 01.08.1996&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-76">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 29.11.1996&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-28">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-28" src="images/image046.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-77">A.K.
MALHOTRA&nbsp;</h5>
              <p class="u-align-left u-text u-text-78">From&nbsp; &nbsp; : 29.11.1996&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-79">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.12.2001&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-29">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-29" src="images/image048.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-80">M.V.
RAMANI&nbsp;</h5>
              <p class="u-align-left u-text u-text-81">From&nbsp; &nbsp; : 01.01.2002&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-82">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;
29.02.2004
&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-30">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-30" src="images/image051.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-83">V. ANAND</h5>
              <p class="u-align-left u-text u-text-84">From&nbsp; &nbsp; : 01.03.2004&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-85">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;
20.04.2004
&nbsp;</p>
            </div>
          </div>
		
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-31">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-31" src="images/image052.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-86">SHIVENDRA
KUMAR&nbsp;</h5>
              <p class="u-align-left u-text u-text-87">From&nbsp; &nbsp; : 21.04.2004&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-88">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 10.05.2005&nbsp;</p>
            </div>
          </div>


           <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-32">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-32" src="images/image054.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-89">D.N.
MATHUR&nbsp;</h5>
              <p class="u-align-left u-text u-text-90">From&nbsp; &nbsp; : 12.05.2005&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-91">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;
30.06.2005
&nbsp;</p>
            </div>
          </div>
          
            <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-33">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-33" src="images/image056.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-92">Dr.P.RAJA
GOUNDAN&nbsp;</h5>
              <p class="u-align-left u-text u-text-93">From&nbsp; &nbsp; : 30.06.2005&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-94">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 30.06.2007&nbsp;&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-34">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-34" src="images/image058.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-95">SABITA
GOPAL&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-96">From&nbsp; &nbsp; : 01.07.2007&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-97">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 15.12.2008&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-35">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-35" src="images/image060.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-98">MS.
JAYANTH&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-99">From&nbsp; &nbsp; : 29.12.2008&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-100">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 20.11.2009&nbsp;</p>
            </div>
          </div>
		  
		  
		  
		   <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-37">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-37" src="images/updayay.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-104"> R.K.UPADHYAY (GWRWE
-L/A)&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-105">From&nbsp; &nbsp; : 14.01.2010&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-106">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 04.02.2010&nbsp;&nbsp;&nbsp;</p>
            </div>
          </div>
		  
		  
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-36">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-36" src="images/image062.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-101">POMPA
BABBAR&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-102">From&nbsp; &nbsp; : 05.02.2010&nbsp;&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-103">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.03.2011&nbsp;&nbsp;&nbsp;</p>
            </div>
          </div>
         
          
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-39">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-39" src="images/handa.png" data-image-width="91" data-image-height="106">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-110"> SANJIV HANDA&nbsp; .
(Member/MechJ/RB - L/A)&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-111">From&nbsp; &nbsp; :02.05.2011&nbsp;&nbsp; &nbsp;</p>
              <p class="u-align-left u-text u-text-112">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 11.11.2011&nbsp;&nbsp;&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-40">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-40" src="images/abaykanna.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-113">ABHAY
K. KHANNA&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-114">From&nbsp; &nbsp; : 11.11.2011&nbsp;&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-115">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 
30.06.2013 </p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/rakeshmisra.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">RAKESH
MISRA&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 01.07.2013&nbsp; &nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-118">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 20.11.2013&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-42">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-42" src="images/ashokagarwal1.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-119">ASHOK
K. AGARWAL&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-120">From&nbsp; &nbsp; : 20.11.2013&nbsp;&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-121">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 30.06.2016</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-43">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-43" src="images/jhori1.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-122">VASHISHTA
JOHRI&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-123">From&nbsp; &nbsp; : 01.07.2016&nbsp; &nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-124">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 02.08.2016&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-44">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-44" src="images/mani1.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-125">SUDHANSHU
MANI&nbsp;</h5>
              <p class="u-align-left u-text u-text-126">From&nbsp; &nbsp; : 02.08.2016&nbsp;&nbsp;&nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-127">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 31.12.2018&nbsp;</p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-45">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-45" src="images/aksing1.png">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-128">AJAY
KUMAR SINGH&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-129">From&nbsp; &nbsp; : 01.01.2019&nbsp; &nbsp;&nbsp;</p>
              <p class="u-align-left u-text u-text-130">To&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 
03.02.2019 </p>
            </div>
          </div>
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-46">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-46" src="images/gm-photo1.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-131">RAHUL JAIN&nbsp;&nbsp; &nbsp;</h5>
              <p class="u-align-left u-text u-text-132">From&nbsp; &nbsp; : 
04.02.2019
&nbsp;&nbsp; &nbsp;</p>
              <p class="u-align-left u-text u-text-133">To&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
03.03.2021&nbsp; &nbsp; &nbsp;&nbsp;</p>
            </div>
          </div>
		
          <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/johnthomas.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">JOHN THOMAS&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 04.03.2021&nbsp; &nbsp;&nbsp;</p>
             <p class="u-align-left u-text u-text-117">To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : 30.07.2021(FN)&nbsp; &nbsp;&nbsp;</p>
            </div>
          </div>


           <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/akagrwal2.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">A.K. AGARWAL&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 30.07.2021(AN)&nbsp; &nbsp;&nbsp;
			  <br>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : 07.11.2022 (FN)&nbsp; &nbsp;&nbsp;</p>
             
            </div>
          </div>

            <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/NaveenGulati.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">NAVEEN GULATI&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 07.11.2022 (AN) &nbsp; &nbsp;&nbsp;
			  <br>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : 17.12.2022 (AN)&nbsp; &nbsp;&nbsp;</p></p>
             
            </div>
          </div>
          
            <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/srinivas.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">S. SRINIVAS&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 17.12.2022 (AN) &nbsp; &nbsp;&nbsp;
			  <br>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 24.01.2023 ( AN )&nbsp; &nbsp;&nbsp;</p></p>
             
            </div>
          </div>

            <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/mallya.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">B.G. MALLYA&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 24.01.2023 (AN ) &nbsp; &nbsp;&nbsp;
			  <br>To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 31.01.2024 ( AN )&nbsp; &nbsp;&nbsp;
			  </p>
             
            </div>
          </div>

		   <div class="u-border-2 u-border-grey-25 u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-41">
              <img alt="" class="u-border-2 u-border-custom-color-2 u-image u-image-round u-radius-29 u-image-41" src="images/USR.jpg">
              <h5 class="u-align-center u-text u-text-palette-2-base u-text-116">U. SUBBA RAO&nbsp;&nbsp;&nbsp;</h5>
              <p class="u-align-left u-text u-text-117">From&nbsp; &nbsp; : 01.02.2024 (FN ) &nbsp; &nbsp;&nbsp;
			 
			  </p>
             
            </div>
          </div>
		  
		  
		  
		  
		  
        </div>
      </div>
    </section>
</div>
    
    <footer class="footer2">
    <p class="footer2-text">© Integral Coach Factory | Updated 2025</p>
  </footer>
    
  </body>
</html>