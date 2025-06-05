<?php
require_once 'translations.php';
require_once 'language_helper.php';
?>
<!DOCTYPE html>
<html lang="<?php echo getCurrentLang(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Official website of Integral Coach Factory, Ministry of Railways, Government of India">
    <title>Integral Coach Factory - Government of India</title>
    <link rel="stylesheet" href="styles.css">
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
                <span class="govt-text"><?php echo __('govt_of_india'); ?></span>
                <span class="govt-text-mobile">GoI</span>
            </div>
            <div class="header-actions" style="margin-left: auto; margin-right: -80px; display: flex; align-items: center; gap: 10px;">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="<?php echo __('search_placeholder'); ?>">
                    <button class="search-button" aria-label="Search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="language-selector" style="display: flex; gap: 10px;">
                    <a href="?lang=en" class="lang-link <?php echo getCurrentLang() == 'en' ? 'active' : ''; ?>">English</a>
                    <a href="?lang=hi" class="lang-link <?php echo getCurrentLang() == 'hi' ? 'active' : ''; ?>">हिन्दी</a>
                </div>
                <div class="datetime-display" id="currentDatetime" style="margin-left: 15px;"></div>
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
                        <p class="org-subtitle"><?php echo __('ministry_of_railways'); ?></p>
                        <p class="org-subtitle"><?php echo __('govt_of_india'); ?></p>
                    </div>
                </div>

                <!-- Center: 75 Years Image -->
                <div class="anniversary-logo">
                    <img src="75.png" alt="75 Years of Constitution" class="anniversary-img">
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
                <li class="nav-item"><a href="#" class="nav-link"><?php echo __('home'); ?></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('about_icf'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
<<<<<<< HEAD
                        <a href="about.php" class="dropdown-item"><?php echo __('about_icf'); ?></a>
                        <a href="http://10.53.4.11/newicf/pdf/BGM3.pdf" class="dropdown-item"><?php echo __('our_gm'); ?></a>
                        <a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/Press%20Release-75000th%20coach%20roll%20out.pdf" class="dropdown-item"><?php echo __('coach_production'); ?></a>
                        <a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/GM%20republic%20day%20Speech%20final%2026-01-2025.pdf" class="dropdown-item"><?php echo __('gm_republic_day'); ?></a>
                        <a href="http://10.53.4.11/newicf/pdf/GM%20sir%20Speech%20final%2015-08-2024.pdf" class="dropdown-item"><?php echo __('gm_independence_day'); ?></a>
                        <a href="milestones.php" class="dropdown-item"><?php echo __('milestones'); ?></a>
                        <a href="http://10.53.4.11/newicf/pdf/export%20of%20coaches.pdf" class="dropdown-item"><?php echo __('exports'); ?></a>
                        <a href="http://10.53.4.105/pb/RTI.html" class="dropdown-item"><?php echo __('rti'); ?></a>
=======
                        <a href="about.php" class="dropdown-item">About ICF</a>
                        <a href="http://10.53.4.11/newicf/pdf/BGM3.pdf" class="dropdown-item">Our General Manager</a>
                        <a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/Press%20Release-75000th%20coach%20roll%20out.pdf" class="dropdown-item">75000th Coach Production</a>
                        <a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/GM%20republic%20day%20Speech%20final%2026-01-2025.pdf" class="dropdown-item">GM Speech-Republic Day</a>
                        <a href="http://10.53.4.11/newicf/pdf/GM%20sir%20Speech%20final%2015-08-2024.pdf" class="dropdown-item">GM Speech-Independence Day</a>
                        <a href="http://10.53.4.11/newicf/milestones.php" class="dropdown-item">Milestones</a>
                        <a href="http://10.53.4.11/newicf/pdf/export%20of%20coaches.pdf" class="dropdown-item">Exports</a>
                        <a href="http://10.53.4.105/pb/RTI.html" class="dropdown-item">Right to Info Act</a>
>>>>>>> 414fa9a10e6c23c4194d665fd64a5b270660c59e
                    </div>
                </li>
                <li class="nav-item"><a href="gm/gm.php" class="nav-link"><?php echo __('gm_secretariat'); ?></a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('department'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                            <a href="http://10.53.4.11/newicf/MECHANICAL/index.html" class="dropdown-item"><?php echo __('mechanical'); ?></a>
                            <a href="department/electrical.php" class="dropdown-item"><?php echo __('electrical'); ?></a>
                            <a href="department/engineering.php" class="dropdown-item"><?php echo __('engineering'); ?></a>
                            <a href="department/stores.php" class="dropdown-item"><?php echo __('stores'); ?></a>
                            <a href="http://10.53.4.105/pb/index.asp" class="dropdown-item"><?php echo __('personnel'); ?></a>
                            <a href="department/accounts.php" class="dropdown-item"><?php echo __('accounts'); ?></a>
                            <a href="department/hospital.php" class="dropdown-item"><?php echo __('hospital'); ?></a>
                        </div>
                        <div class="column">
                            <a href="http://10.53.4.11/newicf/rajbhasha_new/index.html" class="dropdown-item"><?php echo __('rajbhasha'); ?></a>
                            <a href="department/it.php" class="dropdown-item"><?php echo __('it_centre'); ?></a>
                            <a href="http://10.53.4.11/ihms/login1.asp" class="dropdown-item"><?php echo __('medical'); ?></a>
                            <a href="department/security.php" class="dropdown-item"><?php echo __('security'); ?></a>
                            <a href="department/vigilance.php" class="dropdown-item"><?php echo __('vigilance'); ?></a>
                            <a href="department/sports.php" class="dropdown-item"><?php echo __('sports'); ?></a>
                        </div>
                    </div>
                </li>
<<<<<<< HEAD
=======
  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Indian Railways <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content three-column-dropdown" style="min-width: 800px;">
        <div class="column">
            <h4>Zonal Railways</h4>
            <a href="#" class="dropdown-item">Southern Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">Northern Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">Central Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">East Central Railway</a>
            <a href="#" class="dropdown-item">East Coast Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">Eastern Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">North Central Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">North Eastern Railway</a>
        </div>
        <div class="column">
            <h4>&nbsp;</h4>
            <a href="#" class="dropdown-item">North Western Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">North Eastern Frontier Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">South Central Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">South East Central Railway</a>
            <a href="#" class="dropdown-item">South Eastern Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">South Western Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">West Central Railway <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">Western Railway <span class="badge">Railnet</span></a>
        </div>
        <div class="column">
            <h4>Production Units</h4>
            <a href="#" class="dropdown-item">Chitranjan Locomotive Works</a>
            <a href="#" class="dropdown-item">Diesel Locomotive Works</a>
            <a href="#" class="dropdown-item">Rail Spring Kharkana</a>
            <a href="#" class="dropdown-item">Diesel Loco Modernisation Works</a>
            <a href="#" class="dropdown-item">Rail Coach Factory</a>
            <a href="#" class="dropdown-item">Rail Wheel Factory</a>
            <a href="#" class="dropdown-item">CORE</a>
            <a href="#" class="dropdown-item">Modern Coach Factory</a>
        </div>
        <div class="column">
            <h4>Organizations</h4>
            <a href="#" class="dropdown-item">Metro Railway Kolkota</a>
            <a href="#" class="dropdown-item">RITES</a>
            <a href="#" class="dropdown-item">IRCON</a>
            <a href="#" class="dropdown-item">MRVC</a>
            <a href="#" class="dropdown-item">IRIEEN</a>
            <a href="#" class="dropdown-item">IRIMEE</a>
            <a href="#" class="dropdown-item">IRICEN</a>
            <a href="#" class="dropdown-item">RDSO <span class="badge">Railnet</span></a>
            <a href="#" class="dropdown-item">IRITM</a>
            <a href="#" class="dropdown-item">IRISET</a>
            <a href="#" class="dropdown-item">NAIR</a>
            <a href="#" class="dropdown-item">RVNL</a>
            <a href="#" class="dropdown-item">Railway Claims & Refund</a>
        </div>
    </div>
</li>

             <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Important Links <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content three-column-dropdown">
    <div class="column">
      <a href="https://pravas.indianrailways.gov.in/" class="dropdown-item">Online Booking of ORH-ICF</a>
      <a href="http://10.53.4.89/itc/" class="dropdown-item">IT Centre Help Desk Portal</a>
      <a href="http://10.53.4.11/Project_asst/output/login.php" class="dropdown-item">IT Asset Management</a>
      <a href="http://10.53.4.11/vbe/output/login.php" class="dropdown-item">Vande Bharat Maintenance Support Portal</a>
      <a href="http://10.53.4.11/newicf/rajbhasha_new/railmag/output/menu.php" class="dropdown-item">Rajbhasha Magazine</a>
      <a href="http://10.53.4.85/PP/bogie" class="dropdown-item">Bogie Inspection Details (Testing)</a>
      <a href="http://10.53.4.89/outturn/" class="dropdown-item">Coach Despatch Summary</a>
      <a href="http://10.53.4.105/PB/sop/" class="dropdown-item">Schedule of Powers (SOP)</a>
      <a href="http://10.53.4.105:81/vir_folder/" class="dropdown-item">Virtual Folder</a>
      <a href="http://10.53.4.100/stores/mm/dashboard_dashboard.php?page=dashboard" class="dropdown-item">Purchase Module/ICF-IMMS Reports</a>
    </div>
    <div class="column">
      <a href="login.php" class="dropdown-item">Image Upload</a>
      <a href="http://10.53.4.11/newicf/pdf/2024-25Proposals%20submitted%20to%20Railway%20board.pdf" class="dropdown-item">M&P Programme</a>
      <a href="http://10.53.4.11/newicf/cap_new/index.php" class="dropdown-item">Central Application Portal</a>
      <a href="https://vp.icf.gov.in/indexNew.php" class="dropdown-item">Vendor Portal</a>
      <a href="http://10.53.4.60:8081/MIS_ACCOUNTS/index.php?key=Accounts" class="dropdown-item">MIS-Accounts</a>
      <a href="http://10.53.4.11/newicf/MIS/index.php" class="dropdown-item">Management Information System(MIS)</a>
      <a href="http://10.53.4.89/PP/dca/" class="dropdown-item">Design Drawing Advise(DCA)</a>
    </div>
    <div class="column">
      <a href="#" class="dropdown-item">File Upload</a>
      <a href="http://10.53.4.60:8081/ESSDEMO/" class="dropdown-item">Employee Self Service(ESS)</a>
      <a href="http://10.53.4.89/esslink/mobile_app_download.php" class="dropdown-item">Mobile App Download Links</a>
      <a href="http://10.53.4.60:8081/SSSDEMO1/" class="dropdown-item">Supervisor Self Service(SSS)</a>
      <a href="http://10.53.4.11/newicf/sdownloads/index.html" class="dropdown-item">Software Downloads</a>
      <a href="https://email.gov.in/" class="dropdown-item">Rail Web Mail</a>
      <a href="http://10.53.4.86/cms/cmshome.php" class="dropdown-item">Centralized Messaging System</a>
    <a href="http://10.53.4.105/icfstorescirculars/index.asp" class="dropdown-item">ICF Stores Circulars</a>
      <a href="http://10.53.4.105/circulars_new/index.asp" class="dropdown-item">Railway Board Circulars</a>
      <a href="http://10.53.4.89/web_cert/" class="dropdown-item">Website content Certification</a>
    </div>
    <div class="column">
      <a href="http://10.53.4.11/PB/Welfare/welfare1.htm" class="dropdown-item">ICF Welfare</a>
      <a href="http://10.53.4.89/magazines/homenew.php" class="dropdown-item">ICF Magazines</a>
      <a href="http://10.53.4.11/newicf/PreVetted_ITSpec/main_page.htm" class="dropdown-item">Pre-Vetted IT Specs</a>
      <a href="http://10.53.4.11/scouts_guides/index.html" class="dropdown-item">ICF District Bharat Scouts & Guides</a>
      <a href="http://10.53.4.11/newicf/pdf/SRS%20LOA.pdf" class="dropdown-item">CAMC Maint. for PCs & Peripherals</a>
      <a href="http://10.53.4.11/newicf/pdf/SRS%20Agreement%20-New-compressed.pdf" class="dropdown-item">Agreement Signed Copy</a>
      <a href="http://10.53.4.11/newicf/greenco/index.html" class="dropdown-item">Green Co</a>
    </div>
    <div class="column">
      <!-- Moved links from columns 1, 2, and 3 -->
      <a href="http://10.53.4.89/PRODUCTION/" class="dropdown-item">Production Monitoring System</a>
      <a href="http://10.53.4.89/cts/" class="dropdown-item">Coach Tracking System</a>
      <a href="http://10.53.4.89/Assetsregister/index.php" class="dropdown-item">Assets Register</a>
      <a href="http://10.53.4.85/stores/mm/" class="dropdown-item">ICF - IMMS Reports</a>
      <a href="http://10.53.4.89/mfs" class="dropdown-item">Material Forecast System(MFS)</a>
      <a href="http://10.53.4.93/drgs/project1/output" class="dropdown-item">Design Drawings Portal</a>
      <a href="http://10.53.4.89/pcof/pcog/output/purc_gate_entry_s4_list.php" class="dropdown-item">Material Gate Entry</a>
      <a href="http://10.53.4.88/gstportal/gsthome.php" class="dropdown-item">GST Portal</a>
      <a href="http://10.53.4.11/newicf/pdf/WSMA.pdf" class="dropdown-item">IPAS Workorder List</a>
      <a href="https://chsfiapr01.icf.gov.in:8001/sap/bc/ui2/flp#Shell-home" class="dropdown-item">Incentive Entry Screen</a>
      <a href="http://10.53.4.11/newicf/milestones.php#" class="dropdown-item">Site Map</a>
    </div>
  </div>
</li>

>>>>>>> 414fa9a10e6c23c4194d665fd64a5b270660c59e
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('indian_railways'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content three-column-dropdown" style="min-width: 800px;">
                        <div class="column">
                            <h4><?php echo __('zonal_railways'); ?></h4>
                            <a href="https://sr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('southern_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://nr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('northern_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://cr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('central_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://ecr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('east_central_railway'); ?></a>
                            <a href="https://eastcoastrail.indianrailways.gov.in/" class="dropdown-item"><?php echo __('east_coast_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://er.indianrailways.gov.in/" class="dropdown-item"><?php echo __('eastern_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://ncr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('north_central_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://ner.indianrailways.gov.in/" class="dropdown-item"><?php echo __('north_eastern_railway'); ?></a>
                        </div>
                        <div class="column">
                            <h4>&nbsp;</h4>
                            <a href="https://nwr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('north_western_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://nfr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('north_eastern_frontier'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://scr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('south_central_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="http://www.secr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('south_east_central'); ?></a>
                            <a href="https://ser.indianrailways.gov.in/" class="dropdown-item"><?php echo __('south_eastern_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://swr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('south_western_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://wcr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('west_central_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="https://wr.indianrailways.gov.in/" class="dropdown-item"><?php echo __('western_railway'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                        </div>
                        <div class="column">
                            <h4><?php echo __('production_units'); ?></h4>
                            <a href="https://clw.indianrailways.gov.in/" class="dropdown-item"><?php echo __('clw'); ?></a>
                            <a href="https://dlw.indianrailways.gov.in/" class="dropdown-item"><?php echo __('dlw'); ?></a>
                            <a href="https://ncr.indianrailways.gov.in/view_section.jsp?lang=0&id=0,1,283,369,1100,1104" class="dropdown-item"><?php echo __('rail_spring'); ?></a>
                            <a href="https://dmw.indianrailways.gov.in/" class="dropdown-item"><?php echo __('dmw'); ?></a>
                            <a href="https://rcf.indianrailways.gov.in/" class="dropdown-item"><?php echo __('rcf'); ?></a>
                            <a href="http://www.rwf.indianrailways.gov.in/" class="dropdown-item"><?php echo __('rwf'); ?></a>
                            <a href="http://www.core.indianrailways.gov.in/" class="dropdown-item"><?php echo __('core'); ?></a>
                            <a href="https://mcf.indianrailways.gov.in/" class="dropdown-item"><?php echo __('mcf'); ?></a>
                        </div>
                        <div class="column">
                            <h4><?php echo __('organizations'); ?></h4>
                            <a href="https://mtp.indianrailways.gov.in/" class="dropdown-item"><?php echo __('metro_kolkata'); ?></a>
                            <a href="https://rites.com/" class="dropdown-item"><?php echo __('rites'); ?></a>
                            <a href="https://www.ircon.org/index.php?lang=en" class="dropdown-item"><?php echo __('ircon'); ?></a>
                            <a href="https://mrvc.indianrailways.gov.in/" class="dropdown-item"><?php echo __('mrvc'); ?></a>
                            <a href="https://irieen.indianrailways.gov.in/" class="dropdown-item"><?php echo __('irieen'); ?></a>
                            <a href="http://www.irimee.indianrailways.gov.in/" class="dropdown-item"><?php echo __('irimee'); ?></a>
                            <a href="https://www.iricen.gov.in/iricen/Home" class="dropdown-item"><?php echo __('iricen'); ?></a>
                            <a href="http://www.rdso.indianrailways.gov.in/" class="dropdown-item"><?php echo __('rdso'); ?> <span class="badge"><?php echo __('railnet'); ?></span></a>
                            <a href="http://www.iritm.indianrailways.gov.in/" class="dropdown-item"><?php echo __('iritm'); ?></a>
                            <a href="https://iriset.indianrailways.gov.in/" class="dropdown-item"><?php echo __('iriset'); ?></a>
                            <a href="http://www.nair.indianrailways.gov.in/" class="dropdown-item"><?php echo __('nair'); ?></a>
                            <a href="https://www.rvnl.org/en/pages/home.aspx" class="dropdown-item"><?php echo __('rvnl'); ?></a>
                            <a href="http://www.claims.indianrail.gov.in/" class="dropdown-item"><?php echo __('railway_claims'); ?></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
<<<<<<< HEAD
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('important_links'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content three-column-dropdown">
                        <div class="column">
                            <a href="https://pravas.indianrailways.gov.in/" class="dropdown-item"><?php echo __('orh_booking'); ?></a>
                            <a href="http://10.53.4.89/itc/" class="dropdown-item"><?php echo __('it_help_desk'); ?></a>
                            <a href="http://10.53.4.11/Project_asst/output/login.php" class="dropdown-item"><?php echo __('it_asset'); ?></a>
                            <a href="http://10.53.4.11/vbe/output/login.php" class="dropdown-item"><?php echo __('vande_maintenance'); ?></a>
                            <a href="http://10.53.4.11/newicf/rajbhasha_new/railmag/output/menu.php" class="dropdown-item"><?php echo __('rajbhasha_magazine'); ?></a>
                            <a href="http://10.53.4.85/PP/bogie" class="dropdown-item"><?php echo __('bogie_inspection'); ?></a>
                            <a href="http://10.53.4.89/outturn/" class="dropdown-item"><?php echo __('coach_despatch'); ?></a>
                            <a href="http://10.53.4.105/PB/sop/" class="dropdown-item"><?php echo __('sop'); ?></a>
                            <a href="http://10.53.4.105:81/vir_folder/" class="dropdown-item"><?php echo __('virtual_folder'); ?></a>
                            <a href="http://10.53.4.100/stores/mm/dashboard_dashboard.php?page=dashboard" class="dropdown-item"><?php echo __('purchase_module'); ?></a>
                        </div>
                        <div class="column">
                            <a href="login.php" class="dropdown-item" target="_blank" rel="noopener noreferrer"><?php echo __('image_upload'); ?></a>
                            <a href="http://10.53.4.11/newicf/pdf/2024-25Proposals%20submitted%20to%20Railway%20board.pdf" class="dropdown-item"><?php echo __('mp_programme'); ?></a>
                            <a href="http://10.53.4.11/newicf/cap_new/index.php" class="dropdown-item"><?php echo __('cap'); ?></a>
                            <a href="https://vp.icf.gov.in/indexNew.php" class="dropdown-item"><?php echo __('vendor_portal'); ?></a>
                            <a href="http://10.53.4.60:8081/MIS_ACCOUNTS/index.php?key=Accounts" class="dropdown-item"><?php echo __('mis_accounts'); ?></a>
                            <a href="http://10.53.4.11/newicf/MIS/index.php" class="dropdown-item"><?php echo __('mis'); ?></a>
                            <a href="http://10.53.4.89/PP/dca/" class="dropdown-item"><?php echo __('dca'); ?></a>
                        </div>
                        <div class="column">
                            <a href="#" class="dropdown-item"><?php echo __('file_upload'); ?></a>
                            <a href="http://10.53.4.60:8081/ESSDEMO/" class="dropdown-item"><?php echo __('ess'); ?></a>
                            <a href="http://10.53.4.89/esslink/mobile_app_download.php" class="dropdown-item"><?php echo __('mobile_app'); ?></a>
                            <a href="http://10.53.4.60:8081/SSSDEMO1/" class="dropdown-item"><?php echo __('sss'); ?></a>
                            <a href="http://10.53.4.11/newicf/sdownloads/index.html" class="dropdown-item"><?php echo __('software_downloads'); ?></a>
                            <a href="https://email.gov.in/" class="dropdown-item"><?php echo __('rail_webmail'); ?></a>
                            <a href="http://10.53.4.86/cms/cmshome.php" class="dropdown-item"><?php echo __('cms'); ?></a>
                            <a href="http://10.53.4.105/icfstorescirculars/index.asp" class="dropdown-item"><?php echo __('icf_circulars'); ?></a>
                            <a href="http://10.53.4.105/circulars_new/index.asp" class="dropdown-item"><?php echo __('rb_circulars'); ?></a>
                            <a href="http://10.53.4.89/web_cert/" class="dropdown-item"><?php echo __('web_cert'); ?></a>
                        </div>
                        <div class="column">
                            <a href="http://10.53.4.11/PB/Welfare/welfare1.htm" class="dropdown-item"><?php echo __('icf_welfare'); ?></a>
                            <a href="http://10.53.4.89/magazines/homenew.php" class="dropdown-item"><?php echo __('icf_magazines'); ?></a>
                            <a href="http://10.53.4.11/newicf/PreVetted_ITSpec/main_page.htm" class="dropdown-item"><?php echo __('it_specs'); ?></a>
                            <a href="http://10.53.4.11/scouts_guides/index.html" class="dropdown-item"><?php echo __('scouts_guides'); ?></a>
                            <a href="http://10.53.4.11/newicf/pdf/SRS%20LOA.pdf" class="dropdown-item"><?php echo __('camc'); ?></a>
                            <a href="http://10.53.4.11/newicf/pdf/SRS%20Agreement%20-New-compressed.pdf" class="dropdown-item"><?php echo __('agreement'); ?></a>
                            <a href="http://10.53.4.11/newicf/greenco/index.html" class="dropdown-item"><?php echo __('green_co'); ?></a>
                        </div>
                        <div class="column">
                            <a href="http://10.53.4.89/PRODUCTION/" class="dropdown-item"><?php echo __('production_monitoring'); ?></a>
                            <a href="http://10.53.4.89/cts/" class="dropdown-item"><?php echo __('coach_tracking'); ?></a>
                            <a href="http://10.53.4.89/Assetsregister/index.php" class="dropdown-item"><?php echo __('assets_register'); ?></a>
                            <a href="http://10.53.4.85/stores/mm/" class="dropdown-item"><?php echo __('icf_imms'); ?></a>
                            <a href="http://10.53.4.89/mfs" class="dropdown-item"><?php echo __('mfs'); ?></a>
                            <a href="http://10.53.4.93/drgs/project1/output" class="dropdown-item"><?php echo __('design_portal'); ?></a>
                            <a href="http://10.53.4.89/pcof/pcog/output/purc_gate_entry_s4_list.php" class="dropdown-item"><?php echo __('material_entry'); ?></a>
                            <a href="http://10.53.4.88/gstportal/gsthome.php" class="dropdown-item"><?php echo __('gst_portal'); ?></a>
                            <a href="http://10.53.4.11/newicf/pdf/WSMA.pdf" class="dropdown-item"><?php echo __('ipas_workorder'); ?></a>
                            <a href="https://chsfiapr01.icf.gov.in:8001/sap/bc/ui2/flp#Shell-home" class="dropdown-item"><?php echo __('incentive_screen'); ?></a>
                            <a href="http://10.53.4.11/newicf/milestones.php#" class="dropdown-item"><?php echo __('site_map'); ?></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('tenders'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                            <a href="#" class="dropdown-item"><strong><?php echo __('current_tenders'); ?></strong></a>
                            <a href="http://10.53.4.11/web_tenders/output/" class="dropdown-item"><?php echo __('tender_uploaded'); ?></a>
                            <a href="http://10.53.4.86/works/index.php" class="dropdown-item"><?php echo __('works_tender'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,513" class="dropdown-item"><?php echo __('administration'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,378" class="dropdown-item"><?php echo __('civil_engineering'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,474" class="dropdown-item"><?php echo __('electrical_engineering'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,514" class="dropdown-item"><?php echo __('hospital_tender'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,511" class="dropdown-item"><?php echo __('it_centre_tender'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,510" class="dropdown-item"><?php echo __('mechanical_engineering'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,687" class="dropdown-item"><?php echo __('personnel_tender'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,512,538" class="dropdown-item"><?php echo __('stores_tender'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,512,663" class="dropdown-item"><?php echo __('public_auction'); ?></a>
                        </div>
                        <div class="column">
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,512,656" class="dropdown-item"><?php echo __('auction_dates'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,515" class="dropdown-item"><?php echo __('scrap_sale'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,297,837" class="dropdown-item"><?php echo __('contracts'); ?></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('external_links'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                            <a href="https://email.nic.in/" class="dropdown-item"><?php echo __('nic_mail'); ?></a>
                            <a href="https://ircep.gov.in/IRPSM/" class="dropdown-item"><?php echo __('irpsm'); ?></a>
                            <a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,1,388" class="dropdown-item"><?php echo __('rb_directorate'); ?></a>
                            <a href="http://10.53.4.11/newicf/sparrow/sparrow.html" class="dropdown-item"><?php echo __('sparrow'); ?></a>
                            <a href="https://www.irastimes.org/" class="dropdown-item"><?php echo __('iras_times'); ?></a>
                            <a href="https://parichay.nic.in/pnv1/assets/login?sid=eOfficeRailAU" class="dropdown-item"><?php echo __('eoffice'); ?></a>
                            <a href="https://www.ireps.gov.in/" class="dropdown-item"><?php echo __('ireps'); ?></a>
                            <a href="https://www.ireps.gov.in/fcgi/webfrm" class="dropdown-item"><?php echo __('imms'); ?></a>
                            <a href="https://aims.indianrailways.gov.in/IPAS/LoginForms/Login.jsp" class="dropdown-item"><?php echo __('ipas'); ?></a>
                            <a href="https://hrms.indianrail.gov.in/HRMS/login" class="dropdown-item"><?php echo __('hrms'); ?></a>
                            <a href="http://www.reis.railnet.gov.in/" class="dropdown-item"><?php echo __('reis'); ?></a>
                            <a href="https://pgportal.gov.in/" class="dropdown-item"><?php echo __('public_grievances'); ?></a>
                        </div>
                        <div class="column">
                            <a href="https://www.irctc.co.in/nget/train-search" class="dropdown-item"><?php echo __('irctc'); ?></a>
                            <a href="http://cris.org.in/crisweb/design1/index.jsp" class="dropdown-item"><?php echo __('cris'); ?></a>
                            <a href="https://enquiry.indianrail.gov.in/ntes/index.html" class="dropdown-item"><?php echo __('train_enquiry'); ?></a>
                            <a href="http://nrmindia.org/" class="dropdown-item"><?php echo __('rail_museum'); ?></a>
                            <a href="http://www.mapsofindia.com/" class="dropdown-item"><?php echo __('maps_india'); ?></a>
                            <a href="https://arpan.railnet.gov.in/Arpan/home" class="dropdown-item"><?php echo __('arpan'); ?></a>
                            <a href="https://artsandculture.google.com/project/indian-railways" class="dropdown-item"><?php echo __('rail_heritage'); ?></a>
                            <a href="https://icf.indianrailways.gov.in/" class="dropdown-item"><?php echo __('icf_website'); ?></a>
                            <a href="https://indianrailways.gov.in/GST/index.html" class="dropdown-item"><?php echo __('gst_railways'); ?></a>
                            <a href="http://10.100.2.19/" class="dropdown-item"><?php echo __('rdso_portal'); ?></a>
                            <a href="https://www.tin-nsdl.com/" class="dropdown-item"><?php echo __('tin_nsdl'); ?></a>
                            <a href="http://rtdc.tourism.rajasthan.gov.in/" class="dropdown-item"><?php echo __('rtdc'); ?></a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"><?php echo __('contacts'); ?> <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="http://10.53.4.11/newicf/Tel/07_01_2025_GM_INTERCOM.pdf" class="dropdown-item"><?php echo __('gm_intercom'); ?></a>
                        <a href="http://10.53.4.89/gaz/" class="dropdown-item"><?php echo __('officers_directory'); ?></a>
                        <a href="http://10.53.4.89/icf_e_directory1/output/icf_telephones_list.php" class="dropdown-item"><?php echo __('telephone_directory'); ?></a>
                        <a href="http://10.53.4.89/pp/cug_list/" class="dropdown-item"><?php echo __('cug_directory'); ?></a>
                        <a href="http://10.53.4.11/newicf/icfwebmail/main.html" class="dropdown-item"><?php echo __('mail_ids'); ?></a>
                    </div>
                </li>
=======
    <a href="#" class="nav-link dropdown-toggle">External Links <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown">
        <div class="column">
            <a href="#" class="dropdown-item">NIC MAIL</a>
            <a href="#" class="dropdown-item">IRPSM</a>
            <a href="#" class="dropdown-item">Railway Board Directorate</a>
            <a href="#" class="dropdown-item">SPARROW</a>
            <a href="#" class="dropdown-item">IRAS Times</a>
            <a href="#" class="dropdown-item">eOffice</a>
            <a href="#" class="dropdown-item">IREPS</a>
            <a href="#" class="dropdown-item">IMMS</a>
            <a href="#" class="dropdown-item">IPAS</a>
            <a href="#" class="dropdown-item">HRMS</a>
            <a href="#" class="dropdown-item">REIS</a>
            <a href="#" class="dropdown-item">Public Grievances</a>
        </div>
        <div class="column">
            <a href="#" class="dropdown-item">IRCTC</a>
            <a href="#" class="dropdown-item">CRIS</a>
            <a href="#" class="dropdown-item">Train Enquiry System</a>
            <a href="#" class="dropdown-item">National Rail Museum</a>
            <a href="#" class="dropdown-item">Maps of India</a>
            <a href="#" class="dropdown-item">ARPAN</a>
            <a href="#" class="dropdown-item">Explore Rail Heritage online</a>
            <a href="#" class="dropdown-item">ICF Internet Website</a>
            <a href="#" class="dropdown-item">GST Portal-Indian Railways</a>
            <a href="#" class="dropdown-item">Suggestion/complaints-RDSO Portal</a>
            <a href="#" class="dropdown-item">TIN-NSDL</a>
            <a href="#" class="dropdown-item">RTDC</a>
        </div>
    </div>
</li>
               
                <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Contacts <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content">
    <a href="#" class="dropdown-item">GM Intercom</a>
    <a href="#" class="dropdown-item">ICF Officers Directory</a>
    <a href="#" class="dropdown-item">ICF Telephone E-Directory</a>
    <a href="#" class="dropdown-item">ICF CUG Directory</a>
    <a href="#" class="dropdown-item">Officers/Staffs Mail IDs</a>
  </div>
</li>
>>>>>>> 414fa9a10e6c23c4194d665fd64a5b270660c59e
            </ul>
        </div>
    </nav>

    <!-- Mobile Navigation Toggle -->
    <div class="mobile-nav-bar">
        <div class="container">
            <div class="mobile-nav-content">
                <a href="#" class="mobile-home-link">Home</a>
                <button class="mobile-nav-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <button class="mobile-menu-close" id="mobileMenuClose" aria-label="Close menu">
                <i class="fas fa-times"></i>
            </button>
            <nav class="mobile-nav">
                <div class="mobile-menu-item">
                    <a href="index.php" class="mobile-menu-link"><?php echo __('home'); ?></a>
                </div>
                <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="aboutSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('about_icf'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="aboutSubmenu">
                        <div class="mobile-submenu-item"><a href="about.php" class="mobile-submenu-link"><?php echo __('about_icf'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/BGM3.pdf" class="mobile-submenu-link"><?php echo __('our_gm'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/Press%20Release-75000th%20coach%20roll%20out.pdf" class="mobile-submenu-link"><?php echo __('coach_production'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/GM%20republic%20day%20Speech%20final%2026-01-2025.pdf" class="mobile-submenu-link"><?php echo __('gm_republic_day'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/GM%20sir%20Speech%20final%2015-08-2024.pdf" class="mobile-submenu-link"><?php echo __('gm_independence_day'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="milestones.php" class="mobile-submenu-link"><?php echo __('milestones'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/export%20of%20coaches.pdf" class="mobile-submenu-link"><?php echo __('exports'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.105/pb/RTI.html" class="mobile-submenu-link"><?php echo __('rti'); ?></a></div>
                    </div>
                </div>
                <div class="mobile-menu-item">
                    <a href="gm/gm.php" class="mobile-menu-link"><?php echo __('gm_secretariat'); ?></a>
                </div>
                <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="deptSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('department'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="deptSubmenu">
                         <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/MECHANICAL/index.html" class="mobile-submenu-link"><?php echo __('mechanical'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/electrical.php" class="mobile-submenu-link"><?php echo __('electrical'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/engineering.php" class="mobile-submenu-link"><?php echo __('engineering'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/stores.php" class="mobile-submenu-link"><?php echo __('stores'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.105/pb/index.asp" class="mobile-submenu-link"><?php echo __('personnel'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/accounts.php" class="mobile-submenu-link"><?php echo __('accounts'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/hospital.php" class="mobile-submenu-link"><?php echo __('hospital'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/rajbhasha_new/index.html" class="mobile-submenu-link"><?php echo __('rajbhasha'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/it.php" class="mobile-submenu-link"><?php echo __('it_centre'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/ihms/login1.asp" class="mobile-submenu-link"><?php echo __('medical'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/security.php" class="mobile-submenu-link"><?php echo __('security'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/VIGILANCE/index.php" class="mobile-submenu-link"><?php echo __('vigilance'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="department/sports.php" class="mobile-submenu-link"><?php echo __('sports'); ?></a></div>
                    </div>
                </div>
                 <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="irSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('indian_railways'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="irSubmenu">
                        <div class="mobile-submenu-item mobile-submenu-title"><?php echo __('zonal_railways'); ?></div>
                        <div class="mobile-submenu-item"><a href="https://sr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('southern_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://nr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('northern_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://cr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('central_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://ecr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('east_central_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://eastcoastrail.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('east_coast_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://er.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('eastern_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://ncr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('north_central_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://ner.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('north_eastern_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://nwr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('north_western_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://nfr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('north_eastern_frontier'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://scr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('south_central_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.secr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('south_east_central'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://ser.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('south_eastern_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://swr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('south_western_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://wcr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('west_central_railway'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://wr.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('western_railway'); ?></a></div>
                        
                        <div class="mobile-submenu-item mobile-submenu-title"><?php echo __('production_units'); ?></div>
                        <div class="mobile-submenu-item"><a href="https://clw.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('clw'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://dlw.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('dlw'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://ncr.indianrailways.gov.in/view_section.jsp?lang=0&id=0,1,283,369,1100,1104" class="mobile-submenu-link"><?php echo __('rail_spring'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://dmw.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('dmw'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://rcf.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('rcf'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.rwf.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('rwf'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.core.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('core'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://mcf.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('mcf'); ?></a></div>
                        
                        <div class="mobile-submenu-item mobile-submenu-title"><?php echo __('organizations'); ?></div>
                         <div class="mobile-submenu-item"><a href="https://mtp.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('metro_kolkata'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://rites.com/" class="mobile-submenu-link"><?php echo __('rites'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.ircon.org/index.php?lang=en" class="mobile-submenu-link"><?php echo __('ircon'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://mrvc.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('mrvc'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://irieen.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('irieen'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.irimee.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('irimee'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.iricen.gov.in/iricen/Home" class="mobile-submenu-link"><?php echo __('iricen'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.rdso.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('rdso'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.iritm.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('iritm'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://iriset.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('iriset'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.nair.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('nair'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.rvnl.org/en/pages/home.aspx" class="mobile-submenu-link"><?php echo __('rvnl'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.claims.indianrail.gov.in/" class="mobile-submenu-link"><?php echo __('railway_claims'); ?></a></div>
                    </div>
                </div>
                <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="importantSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('important_links'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="importantSubmenu">
                        <div class="mobile-submenu-item"><a href="https://pravas.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('orh_booking'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/itc/" class="mobile-submenu-link"><?php echo __('it_help_desk'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/Project_asst/output/login.php" class="mobile-submenu-link"><?php echo __('it_asset'); ?></a></div>
                         <div class="mobile-submenu-item"><a href="http://10.53.4.11/vbe/output/login.php" class="mobile-submenu-link"><?php echo __('vande_maintenance'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/rajbhasha_new/railmag/output/menu.php" class="mobile-submenu-link"><?php echo __('rajbhasha_magazine'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.85/PP/bogie" class="mobile-submenu-link"><?php echo __('bogie_inspection'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/outturn/" class="mobile-submenu-link"><?php echo __('coach_despatch'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.105/PB/sop/" class="mobile-submenu-link"><?php echo __('sop'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.105:81/vir_folder/" class="mobile-submenu-link"><?php echo __('virtual_folder'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.100/stores/mm/dashboard_dashboard.php?page=dashboard" class="mobile-submenu-link"><?php echo __('purchase_module'); ?></a></div>
                         <div class="mobile-submenu-item"><a href="login.php" class="mobile-submenu-link" target="_blank" rel="noopener noreferrer"><?php echo __('image_upload'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/2024-25Proposals%20submitted%20to%20Railway%20board.pdf" class="mobile-submenu-link"><?php echo __('mp_programme'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/cap_new/index.php" class="mobile-submenu-link"><?php echo __('cap'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://vp.icf.gov.in/indexNew.php" class="mobile-submenu-link"><?php echo __('vendor_portal'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.60:8081/MIS_ACCOUNTS/index.php?key=Accounts" class="mobile-submenu-link"><?php echo __('mis_accounts'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/MIS/index.php" class="mobile-submenu-link"><?php echo __('mis'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/PP/dca/" class="mobile-submenu-link"><?php echo __('dca'); ?></a></div>
                         <div class="mobile-submenu-item"><a href="#" class="mobile-submenu-link"><?php echo __('file_upload'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.60:8081/ESSDEMO/" class="mobile-submenu-link"><?php echo __('ess'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/esslink/mobile_app_download.php" class="mobile-submenu-link"><?php echo __('mobile_app'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.60:8081/SSSDEMO1/" class="mobile-submenu-link"><?php echo __('sss'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/sdownloads/index.html" class="mobile-submenu-link"><?php echo __('software_downloads'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://email.gov.in/" class="mobile-submenu-link"><?php echo __('rail_webmail'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.86/cms/cmshome.php" class="mobile-submenu-link"><?php echo __('cms'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.105/icfstorescirculars/index.asp" class="mobile-submenu-link"><?php echo __('icf_circulars'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.105/circulars_new/index.asp" class="mobile-submenu-link"><?php echo __('rb_circulars'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/web_cert/" class="mobile-submenu-link"><?php echo __('web_cert'); ?></a></div>
                         <div class="mobile-submenu-item"><a href="http://10.53.4.11/PB/Welfare/welfare1.htm" class="mobile-submenu-link"><?php echo __('icf_welfare'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/magazines/homenew.php" class="mobile-submenu-link"><?php echo __('icf_magazines'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/PreVetted_ITSpec/main_page.htm" class="mobile-submenu-link"><?php echo __('it_specs'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/scouts_guides/index.html" class="mobile-submenu-link"><?php echo __('scouts_guides'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/SRS%20LOA.pdf" class="mobile-submenu-link"><?php echo __('camc'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/SRS%20Agreement%20-New-compressed.pdf" class="mobile-submenu-link"><?php echo __('agreement'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/greenco/index.html" class="mobile-submenu-link"><?php echo __('green_co'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/PRODUCTION/" class="mobile-submenu-link"><?php echo __('production_monitoring'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/cts/" class="mobile-submenu-link"><?php echo __('coach_tracking'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/Assetsregister/index.php" class="mobile-submenu-link"><?php echo __('assets_register'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.85/stores/mm/" class="mobile-submenu-link"><?php echo __('icf_imms'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/mfs" class="mobile-submenu-link"><?php echo __('mfs'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.93/drgs/project1/output" class="mobile-submenu-link"><?php echo __('design_portal'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/pcof/pcog/output/purc_gate_entry_s4_list.php" class="mobile-submenu-link"><?php echo __('material_entry'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.88/gstportal/gsthome.php" class="mobile-submenu-link"><?php echo __('gst_portal'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/pdf/WSMA.pdf" class="mobile-submenu-link"><?php echo __('ipas_workorder'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://chsfiapr01.icf.gov.in:8001/sap/bc/ui2/flp#Shell-home" class="mobile-submenu-link"><?php echo __('incentive_screen'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/milestones.php#" class="mobile-submenu-link"><?php echo __('site_map'); ?></a></div>
                    </div>
                </div>
                <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="tendersSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('tenders'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="tendersSubmenu">
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/web_tenders/output/" class="mobile-submenu-link"><?php echo __('tender_uploaded'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.86/works/index.php" class="mobile-submenu-link"><?php echo __('works_tender'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,513" class="mobile-submenu-link"><?php echo __('administration'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,378" class="mobile-submenu-link"><?php echo __('civil_engineering'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,474" class="mobile-submenu-link"><?php echo __('electrical_engineering'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,514" class="mobile-submenu-link"><?php echo __('hospital_tender'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,511" class="mobile-submenu-link"><?php echo __('it_centre_tender'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,510" class="mobile-submenu-link"><?php echo __('mechanical_engineering'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,687" class="mobile-submenu-link"><?php echo __('personnel_tender'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,512,538" class="mobile-submenu-link"><?php echo __('stores_tender'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,512,663" class="mobile-submenu-link"><?php echo __('public_auction'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,512,656" class="mobile-submenu-link"><?php echo __('auction_dates'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,299,515" class="mobile-submenu-link"><?php echo __('scrap_sale'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,297,837" class="mobile-submenu-link"><?php echo __('contracts'); ?></a></div>
                    </div>
                </div>
                <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="externalSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('external_links'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="externalSubmenu">
                        <div class="mobile-submenu-item"><a href="https://email.nic.in/" class="mobile-submenu-link"><?php echo __('nic_mail'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://ircep.gov.in/IRPSM/" class="mobile-submenu-link"><?php echo __('irpsm'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,1,388" class="mobile-submenu-link"><?php echo __('rb_directorate'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/sparrow/sparrow.html" class="mobile-submenu-link"><?php echo __('sparrow'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.irastimes.org/" class="mobile-submenu-link"><?php echo __('iras_times'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://parichay.nic.in/pnv1/assets/login?sid=eOfficeRailAU" class="mobile-submenu-link"><?php echo __('eoffice'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.ireps.gov.in/" class="mobile-submenu-link"><?php echo __('ireps'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.ireps.gov.in/fcgi/webfrm" class="mobile-submenu-link"><?php echo __('imms'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://aims.indianrailways.gov.in/IPAS/LoginForms/Login.jsp" class="mobile-submenu-link"><?php echo __('ipas'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://hrms.indianrail.gov.in/HRMS/login" class="mobile-submenu-link"><?php echo __('hrms'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.reis.railnet.gov.in/" class="mobile-submenu-link"><?php echo __('reis'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://pgportal.gov.in/" class="mobile-submenu-link"><?php echo __('public_grievances'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.irctc.co.in/nget/train-search" class="mobile-submenu-link"><?php echo __('irctc'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://cris.org.in/crisweb/design1/index.jsp" class="mobile-submenu-link"><?php echo __('cris'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://enquiry.indianrail.gov.in/ntes/index.html" class="mobile-submenu-link"><?php echo __('train_enquiry'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://nrmindia.org/" class="mobile-submenu-link"><?php echo __('rail_museum'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://www.mapsofindia.com/" class="mobile-submenu-link"><?php echo __('maps_india'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://arpan.railnet.gov.in/Arpan/home" class="mobile-submenu-link"><?php echo __('arpan'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://artsandculture.google.com/project/indian-railways" class="mobile-submenu-link"><?php echo __('rail_heritage'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://icf.indianrailways.gov.in/" class="mobile-submenu-link"><?php echo __('icf_website'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://indianrailways.gov.in/GST/index.html" class="mobile-submenu-link"><?php echo __('gst_railways'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.100.2.19/" class="mobile-submenu-link"><?php echo __('rdso_portal'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="https://www.tin-nsdl.com/" class="mobile-submenu-link"><?php echo __('tin_nsdl'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://rtdc.tourism.rajasthan.gov.in/" class="mobile-submenu-link"><?php echo __('rtdc'); ?></a></div>
                    </div>
                </div>
                 <div class="mobile-menu-item">
                    <div class="mobile-dropdown-toggle" data-submenu="contactsSubmenu">
                        <a href="#" class="mobile-menu-link"><?php echo __('contacts'); ?></a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="mobile-submenu" id="contactsSubmenu">
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/Tel/07_01_2025_GM_INTERCOM.pdf" class="mobile-submenu-link"><?php echo __('gm_intercom'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/gaz/" class="mobile-submenu-link"><?php echo __('officers_directory'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/icf_e_directory1/output/icf_telephones_list.php" class="mobile-submenu-link"><?php echo __('telephone_directory'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.89/pp/cug_list/" class="mobile-submenu-link"><?php echo __('cug_directory'); ?></a></div>
                        <div class="mobile-submenu-item"><a href="http://10.53.4.11/newicf/icfwebmail/main.html" class="mobile-submenu-link"><?php echo __('mail_ids'); ?></a></div>
                    </div>
                </div>
                <div class="mobile-menu-item">
                    <div class="language-selector-mobile">
                        <a href="?lang=en" class="mobile-lang-link <?php echo getCurrentLang() == 'en' ? 'active' : ''; ?>">English</a>
                        <a href="?lang=hi" class="mobile-lang-link <?php echo getCurrentLang() == 'hi' ? 'active' : ''; ?>">हिन्दी</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <!-- Hero Section with Three Columns -->
        <section class="hero-section">
            <div class="container">
                <div class="hero-grid">
                    <!-- Carousel Section (Left) -->
                    <div class="carousel-container">
                        <div class="carousel" aria-label="News Carousel">
                            <!-- Carousel Items will be populated dynamically -->
                            <?php
                            // Database connection
                            $host = 'localhost';
                            $user = 'root';
                            $pass = ''; // Add password if you set one
                            $db = 'crud'; // change to your DB name

                            $conn = new mysqli($host, $user, $pass, $db);
                            if ($conn->connect_error) {
                                die('Connection failed: ' . $conn->connect_error);
                            }

                            // Fetch images ordered by position (1-10)
                            $result = $conn->query("SELECT * FROM images ORDER BY position ASC LIMIT 10");
                            $active = true; // First slide should be active
                            $count = 0;
                            
                            while ($row = $result->fetch_assoc()): 
                                $count++;
                            ?>
                                <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                                    <img src="<?php echo $row['image_path']; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="carousel-img">
                                    <div class="carousel-caption">
                                        <h3 class="carousel-title"><?php echo htmlspecialchars($row['title']); ?></h3>
                                        <p class="carousel-desc"><?php echo htmlspecialchars($row['description']); ?></p>
                                    </div>
                                </div>
                            <?php 
                                $active = false; // Only first one is active
                            endwhile; 
                            
                            // If we have fewer than 10 images from the database, show placeholders to complete 10 slides
                            while ($count < 10) {
                                $count++;
                            ?>
                                <div class="carousel-item">
                                    <img src="placeholder-image.png" alt="Placeholder" class="carousel-img">
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
                            // Generate indicators
                            for ($i = 1; $i <= 10; $i++) {
                                $isActive = ($i == 1) ? 'active-indicator' : '';
                                echo '<button class="indicator ' . $isActive . '" aria-label="Slide ' . $i . '" data-slide-to="' . ($i-1) . '"></button>';
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Middle Section - Document/Memo -->
                    <div class="document-container">
                        <a href="http://10.53.4.11/newicf/assets/gmwomsg.pdf" target="_blank">
                            <div class="document-card">
                                <img src="image copy 3.png" alt="Official Document" class="document-img">
                            </div>
                        </a>
                    </div>

                    
                    <!-- Right Section - General Manager Profile -->
                    <div class="gm-profile-container">
                        <div class="gm-profile-card">
                            <div class="card-header">
                                <h3 class="card-title">General Manager / ICF</h3>
                            </div>
                            <div class="card-body">
                                <div class="gm-image">
                                    <img src="image copy 4.png" alt="General Manager" class="gm-img">
                                </div>
                                <h3 class="gm-name">Shri U. Subba Rao</h3>
                                <p class="gm-desc">Shri U. Subba Rao has taken over charge as General Manager (GM) of ICF on the 1st of February 2024.</p>
                                <div class="gm-more">
                                    <a href="http://10.53.4.11/newicf/pdf/USR1.pdf" class="more-link">MORE...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News and Updates Section -->
        <section class="news-section">
            <div class="container">
                <div class="section-header">
                    <i class="fas fa-newspaper section-icon"></i>
                    <h2 class="section-title"><?php echo __('news_updates'); ?></h2>
                </div>
                <div class="news-item">
                    <i class="fas fa-arrow-right news-icon"></i>
                    <div class="news-ticker-container">
                        <div class="news-ticker">
                            <a href="http://10.53.4.11/newicf/images/75yrs_of_constitution.rar" target="_blank" style="color: inherit; text-decoration: none;">
                                <?php echo __('download_constitution_logo'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Three Column Section -->
        <section class="three-column-section">
            <div class="container">
                <div class="three-column-grid">
                    <!-- Calendar Section -->
                    <div class="calendar-container">
                        <div class="calendar-card">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo __('icf_calendar'); ?></h3>
                            </div>
                            <div class="card-body">
                                <div class="holiday-link">
                                    <p class="holiday-text"><?php echo __('holidays_2025'); ?></p>
                                    <a href="http://10.53.4.11/newicf/pdf/List_of_Holiday-2025.pdf" class="holiday-more"><?php echo __('click_here'); ?></a>
                                </div>

                                <div class="holiday-link">
                                    <p class="holiday-text"><?php echo __('icf_calendar'); ?></p>
                                    <a href="http://10.53.4.11/newicf/pdf/ICF_CALANDAR_2025.pdf" class="holiday-more"><?php echo __('click_here'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vande Bharat Section -->
                    <div class="vande-bharat-container">
                        <div class="vande-bharat-card">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo __('vande_bharat'); ?></h3>
                            </div>
                            <div class="card-body">
                                <div class="vande-bharat-image">
                                    <img src="image copy 5.png" alt="Vande Bharat Train" class="vande-bharat-img">
                                    <div class="image-overlay">
                                        <a href="http://10.53.4.11/newicf/vbportal/index.html" class="overlay-btn"><?php echo __('click_here'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="hindi-word-header">
                                <h3 class="hindi-word-title"><?php echo __('todays_hindi_word'); ?></h3>
                            </div>
                            <div class="hindi-word-body">
                                <table class="word-table">
                                    <thead>
                                        <tr>
                                            <th><?php echo __('hindi_word'); ?></th>
                                            <th><?php echo __('english_word'); ?></th>
                                            <th><?php echo __('tamil_word'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>अंकित</strong></td>
                                            <td>Last</td>
                                            <td>கடைசி</td>
                                        </tr>
                                        <tr>
                                            <td><strong>अंकित</strong></td>
                                            <td>Ankita</td>
                                            <td>அங்கிதா</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Birthday Wishes Section -->
                    <div class="birthday-container">
<<<<<<< HEAD
                        <div class="birthday-card">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo __('birthday_wishes'); ?></h3>
                            </div>
                            <div class="card-body">
                                <table class="birthday-table">
                                    <tbody>
                                        <tr>
                                            <td>R.KANNAIVALLI</td>
                                            <td>OS</td>
                                        </tr>
                                        <tr>
                                            <td>KUMAR P</td>
                                            <td>SSE(MECH)</td>
                                        </tr>
                                        <tr>
                                            <td>ARIBASKAR D</td>
                                            <td>SSE(MECH)</td>
                                        </tr>
                                        <tr>
                                            <td>RAKHI RAJPUT</td>
                                            <td>OS</td>
                                        </tr>
                                        <tr>
                                            <td>SURESH KUMARA.A</td>
                                            <td>SSE(MECH)</td>
                                        </tr>
                                        <tr>
                                            <td>ANANDAKUMAR.S</td>
                                            <td>JE D</td>
                                        </tr>
                                        <tr>
                                            <td>NISHA T.S</td>
                                            <td>LAB. ASST.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
=======
    <div class="birthday-card">
        <div class="card-header">
            <h3 class="card-title">Birthday Wishes</h3>
        </div>
        <div class="card-body">
            <table class="birthday-table">
                <tbody>
                    <tr>
                        <td>R.KANNAIVALLI</td>
                        <td>OS</td>
                    </tr>
                    <tr>
                        <td>KUMAR P</td>
                        <td>SSE(MECH)</td>
                    </tr>
                    <tr>
                        <td>ARIBASKAR D</td>
                        <td>SSE(MECH)</td>
                    </tr>
                    <tr>
                        <td>RAKHI RAJPUT</td>
                        <td>OS</td>
                    </tr>
                    <tr>
                        <td>SURESH KUMARA.A</td>
                        <td>SSE(MECH)</td>
                    </tr>
                    <tr>
                        <td>ANANDAKUMAR.S</td>
                        <td>JE D</td>
                    </tr>
                    <tr>
                        <td>NISHA T.S</td>
                        <td>LAB. ASST.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
>>>>>>> 414fa9a10e6c23c4194d665fd64a5b270660c59e
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-social">
                    <h3 class="footer-title"><?php echo __('social_media_links'); ?></h3>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/srproicf/" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/officialPageIcfChennai/" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.youtube.com/@IntegralCoachFactoryICF/" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="https://x.com/proicfindrlys/" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-info">
                    <p class="footer-address"><?php echo __('address'); ?></p>
                    <p class="footer-copyright"><?php echo __('copyright'); ?></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
