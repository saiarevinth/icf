<!DOCTYPE html>
<html lang="en">
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
    <script src="script.js"></script>
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
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">About ICF <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="about.php" class="dropdown-item">About ICF</a>
                        <a href="http://10.53.4.11/newicf/pdf/BGM3.pdf" class="dropdown-item">Our General Manager</a>
                        <a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/Press%20Release-75000th%20coach%20roll%20out.pdf" class="dropdown-item">75000th Coach Production</a>
                        <a href="http://10.53.4.11/newicf/SECRETARIAT/pdf/GM%20republic%20day%20Speech%20final%2026-01-2025.pdf" class="dropdown-item">GM Speech-Republic Day</a>
                        <a href="http://10.53.4.11/newicf/pdf/GM%20sir%20Speech%20final%2015-08-2024.pdf" class="dropdown-item">GM Speech-Independence Day</a>
                        <a href="http://10.53.4.11/newicf/milestones.php" class="dropdown-item">Milestones</a>
                        <a href="http://10.53.4.11/newicf/pdf/export%20of%20coaches.pdf" class="dropdown-item">Exports</a>
                        <a href="http://10.53.4.105/pb/RTI.html" class="dropdown-item">Right to Info Act</a>
                    </div>
                </li>
                <li class="nav-item"><a href="http://10.53.4.11/newicf/secretariat/index.php" class="nav-link">G.M. Secretariat</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Department <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                            <a href="http://10.53.4.11/newicf/MECHANICAL/index.html" class="dropdown-item">Mechanical</a>
                            <a href="http://10.53.4.11/newicf/ELECTRICAL/index.php" class="dropdown-item">Electrical</a>
                            <a href="http://10.53.4.11/newicf/ENGINEERING/index.php" class="dropdown-item">Engineering</a>
                            <a href="http://10.53.4.11/newicf/STORES/index.php" class="dropdown-item">Stores</a>
                            <a href="http://10.53.4.105/pb/index.asp" class="dropdown-item">Personnel</a>
                            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php" class="dropdown-item">Accounts</a>
                            <a href="http://10.53.4.11/newicf/medical/index.php" class="dropdown-item">ICF Hospital</a>
                        </div>
                        <div class="column">
                            <a href="http://10.53.4.11/newicf/rajbhasha_new/index.html" class="dropdown-item">Rajbhasha</a>
                            <a href="http://10.53.4.11/newicf/ITCENTRE/index.php" class="dropdown-item">IT Centre</a>
                            <a href="http://10.53.4.11/ihms/login1.asp" class="dropdown-item">Medical</a>
                            <a href="http://10.53.4.11/newicf/SECURITY/index.php" class="dropdown-item">Security</a>
                            <a href="http://10.53.4.11/newicf/VIGILANCE/index.php" class="dropdown-item">Vigilance</a>
                            <a href="http://10.53.4.11/newicf/sports/index.php" class="dropdown-item">ICF Sports Association</a>
                        </div>
                    </div>
                </li>
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

                <li class="nav-item dropdown">
  <a href="#" class="nav-link dropdown-toggle">Tenders <i class="fas fa-caret-down"></i></a>
  <div class="dropdown-content two-column-dropdown">
    <div class="column">
      <a href="#" class="dropdown-item"><strong>Tenders</strong></a>
      <a href="#" class="dropdown-item">Tender Uploaded since 01.04.2022</a>
      <a href="#" class="dropdown-item">Centralized Works Tender</a>
      <a href="#" class="dropdown-item">Administration</a>
      <a href="#" class="dropdown-item">Civil Engineering</a>
      <a href="#" class="dropdown-item">Electrical Engineering</a>
      <a href="#" class="dropdown-item">Hospital</a>
      <a href="#" class="dropdown-item">IT Centre</a>
      <a href="#" class="dropdown-item">Mechanical Engineering</a>
      <a href="#" class="dropdown-item">Personnel</a>
      <a href="#" class="dropdown-item">Stores</a>
      <a href="#" class="dropdown-item">Public Auction Category</a>
    </div>
    <div class="column">
      <a href="#" class="dropdown-item">Auction Dates</a>
      <a href="#" class="dropdown-item">Scrap Sale</a>
      <a href="#" class="dropdown-item">Award of Contracts</a>
    </div>
  </div>
</li>

                <li class="nav-item dropdown">
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
            </ul>
        </div>
    </nav>
     <div class="hi">
    <body class="milestone-page-container">
  <header class="milestone-header-section">
    <h1 class="milestone-main-title">ICF Milestones and Achievements</h1>
  </header>

  <main class="milestone-content-wrapper">
    <table class="milestone-table">
      <thead class="milestone-table-header">
        <tr>
          <th class="milestone-header-cell">S. No.</th>
          <th class="milestone-header-cell">Category</th>
          <th class="milestone-header-cell">Milestone</th>
          <th class="milestone-header-cell">Date</th>
        </tr>
      </thead>
      <tbody class="milestone-table-body">
            <tr>
                <td class="milestone-table-cell">1</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Third Class Shell production</td>
                <td class="milestone-table-cell">2nd October 1955</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">2</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Indigenous Shell produced</td>
                <td class="milestone-table-cell">14th August 1956</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">3</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Temporary Furnishing Capacity created</td>
                <td class="milestone-table-cell">1956-57</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">4</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Full production capacity achieved</td>
                <td class="milestone-table-cell">1958-59</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">5</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Second Shift working introduced</td>
                <td class="milestone-table-cell">Apr-59</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">6</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Incentive system of payment introduced</td>
                <td class="milestone-table-cell">Jan-60</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">7</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">MG First Class Coach</td>
                <td class="milestone-table-cell">1960-61</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">8</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">1000th Shell, fully furnished and produced</td>
                <td class="milestone-table-cell">1962-63</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">9</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Technical collaboration concluded</td>
                <td class="milestone-table-cell">27th May 1961</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">10</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Fully furnished third class sleeper coach</td>
                <td class="milestone-table-cell">Oct-61</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">11</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Furnishing division inaugurated</td>
                <td class="milestone-table-cell">2nd October 1962</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">12</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC EMU A produced</td>
                <td class="milestone-table-cell">Sep-62</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">13</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC EMU C produced</td>
                <td class="milestone-table-cell">Jan-63</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">14</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC EMU D produced</td>
                <td class="milestone-table-cell">Feb-63</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">15</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC EMU Motor coach with Hitachi equipment</td>
                <td class="milestone-table-cell">May-63</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">16</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC EMU Motor coach with AEI equipment</td>
                <td class="milestone-table-cell">Jan-64</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">17</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Metre Gauge Third class coach</td>
                <td class="milestone-table-cell">Dec-63</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">18</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">MG Diesel Rail Car</td>
                <td class="milestone-table-cell">1964-65</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">19</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">MG EMU Motor coach</td>
                <td class="milestone-table-cell">1965-66</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">20</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Inauguration of Computer centre</td>
                <td class="milestone-table-cell">Nov-66</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">21</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Export of bogies to Thailand</td>
                <td class="milestone-table-cell">Apr-67</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">22</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC Express</td>
                <td class="milestone-table-cell">1966-67</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">23</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">Bogies to Burma</td>
                <td class="milestone-table-cell">1968-69</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">24</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC Pantry Car</td>
                <td class="milestone-table-cell">1968-69</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">25</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Rajdhani Express</td>
                <td class="milestone-table-cell">Nov-68</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">26</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Power Car (WLRRM)</td>
                <td class="milestone-table-cell">Nov-68</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">27</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DC EMU Motor coach</td>
                <td class="milestone-table-cell">1969-70</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">28</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">MG bogies to Thailand</td>
                <td class="milestone-table-cell">1970</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">29</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">113 Coaches to Taiwan</td>
                <td class="milestone-table-cell">Jun-71</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">30</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">6 coaches of 2 types to Zambia</td>
                <td class="milestone-table-cell">May-73</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">31</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC Composite Coach (FACCW)</td>
                <td class="milestone-table-cell">1972-73</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">32</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">BG AC 2 tier Sleeper</td>
                <td class="milestone-table-cell">Dec-74</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">33</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">30 coaches of 2 types to Phillipines</td>
                <td class="milestone-table-cell">Feb-75</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">34</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">Bogies to Taiwan</td>
                <td class="milestone-table-cell">1975</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">35</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC Power Car (WLRRM AC)</td>
                <td class="milestone-table-cell">1975-76</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">36</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Second Class Day Coach (SDC)</td>
                <td class="milestone-table-cell">1975-76</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">37</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DC EMU high capacity Motor coach</td>
                <td class="milestone-table-cell">Jan-76</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">38</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">17 coaches to Tanzania</td>
                <td class="milestone-table-cell">Aug-76</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">39</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">BG Double Decker Coach</td>
                <td class="milestone-table-cell">1976-77</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">40</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Manufacture of Vaigai Express</td>
                <td class="milestone-table-cell">15th August 1977</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">41</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">23 Metre (70 feet) SCN Coach</td>
                <td class="milestone-table-cell">1978-79</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">42</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Military Ward Car</td>
                <td class="milestone-table-cell">1978-79</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">43</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Military Ward cum Dining Car</td>
                <td class="milestone-table-cell">1978-79</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">44</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">30 coaches of 2 types to Philippines</td>
                <td class="milestone-table-cell">1978-79</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">45</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">20 coaches to Uganda</td>
                <td class="milestone-table-cell">Feb-79</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">46</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">MG Milk van Bogie</td>
                <td class="milestone-table-cell">4th July 1979</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">47</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Military Kitchen Car</td>
                <td class="milestone-table-cell">1979-80</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">48</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">50 Coaches to Vietnam</td>
                <td class="milestone-table-cell">Apr-80</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">49</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">32 Coaches to Nigeria</td>
                <td class="milestone-table-cell">1981-82</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">50</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">MG ACCW coach</td>
                <td class="milestone-table-cell">1981-82</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">51</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Metro Coach for Calcutta Sub-urban</td>
                <td class="milestone-table-cell">1981-82</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">52</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">9 Coaches to Bangladesh</td>
                <td class="milestone-table-cell">1984-85</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">53</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">15 Coaches to Mozambique</td>
                <td class="milestone-table-cell">1984-85</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">54</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">61 Coaches to Bangladesh</td>
                <td class="milestone-table-cell">Jul-86</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">55</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Taj Express</td>
                <td class="milestone-table-cell">1987-88</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">56</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Shatabdi Express</td>
                <td class="milestone-table-cell">1989-90</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">57</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">MG Palace on Wheels,20 Coaches, 5 types</td>
                <td class="milestone-table-cell">Jul-91</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">58</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Conventional Coach with Air Brake</td>
                <td class="milestone-table-cell">Nov-93</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">59</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC MEMU Motor Coach</td>
                <td class="milestone-table-cell">Mar-94</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">60</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DEMU Coach</td>
                <td class="milestone-table-cell">Mar-94</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">61</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">15 AC Coaches of 2 types to Vietnam</td>
                <td class="milestone-table-cell">Jan-95</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">62</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">BG palace on Wheels, 20 Coaches, 5 types</td>
                <td class="milestone-table-cell">May-95</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">63</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Biological Toilet implemented</td>
                <td class="milestone-table-cell">May-95</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">64</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">OHE Inspection Car (DETC)</td>
                <td class="milestone-table-cell">Nov-95</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">65</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Roof Mounted BG ACCW Coach</td>
                <td class="milestone-table-cell">Jan-96</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">66</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DHMU Coach</td>
                <td class="milestone-table-cell">Mar-96</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">67</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">27 Coaches to Tanzania</td>
                <td class="milestone-table-cell">Jul-97</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">68</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DHTC Shell for SAN Engineering.</td>
                <td class="milestone-table-cell">Mar-98</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">69</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC Chair Car Roof Mounted</td>
                <td class="milestone-table-cell">1998-99</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">70</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">ARMV DTC AC coach</td>
                <td class="milestone-table-cell">Mar-99</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">71</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Stainless Steel AC Coach</td>
                <td class="milestone-table-cell">1999-2000</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">72</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DEMU High Horse Power</td>
                <td class="milestone-table-cell">2000-01</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">73</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC DC EMU Motor Coach</td>
                <td class="milestone-table-cell">2001-02</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">74</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC DC EMU Trailer Coaches</td>
                <td class="milestone-table-cell">2001-02</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">75</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Jan Shatabdi Coach</td>
                <td class="milestone-table-cell">2001-02</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">76</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Coaches fitted with Modular Toilets</td>
                <td class="milestone-table-cell">2001-02</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">77</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">New Generation EMUs for AP Metro</td>
                <td class="milestone-table-cell">2002-03</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">78</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Deccan Odyssey Coaches for MTDC</td>
                <td class="milestone-table-cell">2002-03</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">79</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">CBC-fitted coaches for Prayag Raj Express</td>
                <td class="milestone-table-cell">2003-04</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">80</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Fire retardant coaches</td>
                <td class="milestone-table-cell">2003-04</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">81</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">HHP DMU with aerodynamic front end</td>
                <td class="milestone-table-cell">2003-04</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">82</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Prototype coaches for MRVC</td>
                <td class="milestone-table-cell">2004-05</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">83</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">MG AC Shells to Malaysia</td>
                <td class="milestone-table-cell">2004-05</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">84</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">SPURT Car</td>
                <td class="milestone-table-cell">2004-05</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">85</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Jet Deflector Crane Car</td>
                <td class="milestone-table-cell">2005-06</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">86</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">DEMUs for Jammu & Kashmir Region</td>
                <td class="milestone-table-cell">2006-07</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">87</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC Chair Cars for Garib Rath Train</td>
                <td class="milestone-table-cell">2006-07</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">88</td>
                <td class="milestone-table-cell">Export</td>
                <td class="milestone-table-cell">Cape Gauge Coaches to Angola</td>
                <td class="milestone-table-cell">2006-07</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">89</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">AC/DC EMUs with Siemens Electrics</td>
                <td class="milestone-table-cell">2007-08</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">90</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Luxury Tourist Coaches for KSTDC</td>
                <td class="milestone-table-cell">2007-08</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">91</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Coaches for Lifeline Express</td>
                <td class="milestone-table-cell">2007-08</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">92</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">LHB Stainless Steel Coach Design</td>
                <td class="milestone-table-cell">2008-09</td>
            </tr>
            <tr>
                <td class="milestone-table-cell">93</td>
                <td class="milestone-table-cell">First</td>
                <td class="milestone-table-cell">Prototype Self-Propelled Accident Relief Train SPART</td>
                <td class="milestone-table-cell">2009-10</td>
</tr>
<tr>
  <td class="milestone-table-cell">94</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">ICC (Integrated Communication Coach) for Military</td>
  <td class="milestone-table-cell">2009-10</td>
</tr>
<tr>
  <td class="milestone-table-cell">95</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Maharajas' Express Coaches for IRCTC</td>
  <td class="milestone-table-cell">2009-10</td>
</tr>
<tr>
  <td class="milestone-table-cell">96</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Air-conditioned rakes for Kolkata Metro</td>
  <td class="milestone-table-cell">2010-11</td>
</tr>
<tr>
  <td class="milestone-table-cell">97</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">ICF's production crossed 1500 coach mark</td>
  <td class="milestone-table-cell">2010-11</td>
</tr>
<tr>
  <td class="milestone-table-cell">98</td>
  <td class="milestone-table-cell">Export</td>
  <td class="milestone-table-cell">Stainless steel DEMU rakes for Sri Lanka</td>
  <td class="milestone-table-cell">2010-11</td>
</tr>
<tr>
  <td class="milestone-table-cell">99</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Emission Test Car</td>
  <td class="milestone-table-cell">2011-12</td>
</tr>
<tr>
  <td class="milestone-table-cell">100</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Kolkata Metro coaches with stainless steel shells</td>
  <td class="milestone-table-cell">2011-12</td>
</tr>
<tr>
  <td class="milestone-table-cell">101</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">3-phase 1600 HP DEMU with stainless steel shells</td>
  <td class="milestone-table-cell">2012-13</td>
</tr>
<tr>
  <td class="milestone-table-cell">102</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB Executive AC Chair Car (Furnishing)</td>
  <td class="milestone-table-cell">2012-13</td>
</tr>
<tr>
  <td class="milestone-table-cell">103</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB AC Chair Car (Furnishing)</td>
  <td class="milestone-table-cell">2012-13</td>
</tr>
<tr>
  <td class="milestone-table-cell">104</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB Power Car (Furnishing)</td>
  <td class="milestone-table-cell">2012-13</td>
</tr>
<tr>
  <td class="milestone-table-cell">105</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Stainless steel 3-phase ACEMU (MUTP-II)</td>
  <td class="milestone-table-cell">2012-13</td>
</tr>
<tr>
  <td class="milestone-table-cell">106</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">CNG DEMU</td>
  <td class="milestone-table-cell">2014-15</td>
</tr>
<tr>
  <td class="milestone-table-cell">107</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB Shell turned out from LHB Unit</td>
  <td class="milestone-table-cell">2014-15</td>
</tr>
<tr>
  <td class="milestone-table-cell">108</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">50000th Shell</td>
  <td class="milestone-table-cell">2014-15</td>
</tr>
<tr>
  <td class="milestone-table-cell">109</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB shell with in-house manufactured side wall and roof</td>
  <td class="milestone-table-cell">2014-15</td>
</tr>
<tr>
  <td class="milestone-table-cell">110</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">DEMU Trailer Coach with Air conditioning</td>
  <td class="milestone-table-cell">2014-16</td>
</tr>
<tr>
  <td class="milestone-table-cell">111</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">3-Phase AC EMU Rake with Air conditioning (BHEL Electrics)</td>
  <td class="milestone-table-cell">2015-16</td>
</tr>
<tr>
  <td class="milestone-table-cell">112</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">3-Phase AC EMU Rake (MEDHA Electrics)</td>
  <td class="milestone-table-cell">2015-16</td>
</tr>
<tr>
  <td class="milestone-table-cell">113</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB 3-Tier AC Sleeper Coach (LWACCN)</td>
  <td class="milestone-table-cell">2015-16</td>
</tr>
<tr>
  <td class="milestone-table-cell">114</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LS (Antyodaya)</td>
  <td class="milestone-table-cell">2016-17</td>
</tr>
<tr>
  <td class="milestone-table-cell">115</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SG GS (DeenDayalu)</td>
  <td class="milestone-table-cell">2016-17</td>
</tr>
<tr>
  <td class="milestone-table-cell">116</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SG GS CBC (DeenDayalu)</td>
  <td class="milestone-table-cell">2016-17</td>
</tr>
<tr>
  <td class="milestone-table-cell">117</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SG SCZAC IRCTC</td>
  <td class="milestone-table-cell">2016-17</td>
</tr>
<tr>
  <td class="milestone-table-cell">118</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">AC EMU CIDCO</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">119</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">AC EMU Harbour Line</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">120</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">DMU DPC 1600 JK</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">121</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">DMU TC AC JK (Vista dome)</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">122</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Kolkata Metro 3-PH</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">123</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LOMS</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">124</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LWFCZAC Anubhuti</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">125</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LWSCZ</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">126</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SG ACCN CBC</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">127</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Model rake coaches</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">128</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">3 Phase MEMU underslung</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">129</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Train 18</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<!-- Remaining rows (132 to 153) will continue in next message due to length -->
<tr>
  <td class="milestone-table-cell">132</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB 2-Tier AC Sleeper Coach (LWACCW)</td>
  <td class="milestone-table-cell">2013-14</td>
</tr>
<tr>
  <td class="milestone-table-cell">133</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LFCZAC TEJAS</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">134</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LSCZAC TEJAS</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">135</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LWLRRM TEJAS</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">136</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LHB Non-AC Day Coaches (LWSCZ)</td>
  <td class="milestone-table-cell">2017-18</td>
</tr>
<tr>
  <td class="milestone-table-cell">137</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Mobile Training Car</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">138</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SPIC</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">139</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">MG NMR prototypes</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">140</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SL DMU prototypes</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">141</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LDSLR (Brake van with underslung DA set)</td>
  <td class="milestone-table-cell">2018-19</td>
</tr>
<tr>
  <td class="milestone-table-cell">142</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LSLRD without underslung DA set</td>
  <td class="milestone-table-cell">2019-20</td>
</tr>
<tr>
  <td class="milestone-table-cell">143</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LWFCWAC</td>
  <td class="milestone-table-cell">2019-20</td>
</tr>
<tr>
  <td class="milestone-table-cell">144</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">NEPAL DEMU</td>
  <td class="milestone-table-cell">2019-20</td>
</tr>
<tr>
  <td class="milestone-table-cell">145</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LRAAC</td>
  <td class="milestone-table-cell">2020-21</td>
</tr>
<tr>
  <td class="milestone-table-cell">146</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LWCTZAC LHB VISTADOME</td>
  <td class="milestone-table-cell">2020-21</td>
</tr>
<tr>
  <td class="milestone-table-cell">147</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">SRILANKA MAINLINE COACHES</td>
  <td class="milestone-table-cell">2020-21</td>
</tr>
<tr>
  <td class="milestone-table-cell">148</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LVPH - HIGH CAPACITY PARCEL VAN</td>
  <td class="milestone-table-cell">2021-22</td>
</tr>
<tr>
  <td class="milestone-table-cell">149</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">LWACCNE-AC 3 TIER ECONOMY</td>
  <td class="milestone-table-cell">2021-22</td>
</tr>
<tr>
  <td class="milestone-table-cell">150</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">VANDE BHARAT VER-2.0</td>
  <td class="milestone-table-cell">2022-23</td>
</tr>
<tr>
  <td class="milestone-table-cell">151</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Amrit Bharat Train</td>
  <td class="milestone-table-cell">2023-24</td>
</tr>
<tr>
  <td class="milestone-table-cell">152</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Oscillograph Car for RDSO</td>
  <td class="milestone-table-cell">2023-24</td>
</tr>
<tr>
  <td class="milestone-table-cell">153</td>
  <td class="milestone-table-cell">First</td>
  <td class="milestone-table-cell">Vande Metro</td>
  <td class="milestone-table-cell">2024-25</td>
</tr>
</tbody>
    </table>
</div>
  </main>

  <footer class="footer2">
    <p class="footer2-text">© Integral Coach Factory | Updated 2025</p>
  </footer>
</body>
</html>

