<<<<<<< HEAD
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
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle">About ICF <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="about.php" class="dropdown-item">About ICF</a>
                            <a href="http://10.53.4.11/newicf/gm.php" class="dropdown-item">Our General Manager</a>
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
    <div class="icf-main-wrapper">
        <section class="icf-content-block">
            <h2>About Us</h2>
            <p>The Integral Coach Factory is one of the earliest railway production units of independent India. It was inaugurated by the first Prime Minister of India Pt. Jawaharlal Nehru on 2nd October, 1955. Later the Furnishing Division was inaugurated on 2nd October, 1962 and the production of fully furnished coaches steadily increased over the years.</p>
            <p>Spread over 511 acres, it has more than 9079 employees who turnout more than 2500 coaches per year on an average in the past 10 years in more than 175 varieties which includes conventional and self-propelled coaches in LHB and other designs including India's first semi-high speed train the Vande Bharat Express.</p>
            
            <div class="icf-metrics-grid">
                <div class="icf-metric-card">
                    <div class="icf-metric-value">511</div>
                    <div class="icf-metric-title">Acres</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">9079+</div>
                    <div class="icf-metric-title">Employees</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">2500+</div>
                    <div class="icf-metric-title">Coaches Per Year</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">175+</div>
                    <div class="icf-metric-title">Coach Varieties</div>
                </div>
            </div>
        </section>
        
        <section class="icf-content-block">
            <h2>Production</h2>
            <p>ICF has the capability of designing and developing any variant with in-house facility. Every year, new variants are added to the product mix. Till March-2025, ICF has achieved the distinction of having turned out 77,000+ coaches since its inception, which is the highest by any passenger coach manufacturer in the world.</p>
            
            <div class="icf-history-timeline">
                <div class="icf-timeline-entry icf-timeline-left">
                    <div class="icf-timeline-box">
                        <div class="icf-timeline-date">1955</div>
                        <p>Production of indigenously manufactured all-steel, all-welded railway coach shells commenced with an initial installed capacity of 350 shells per annum.</p>
                    </div>
                </div>
                <div class="icf-timeline-entry icf-timeline-right">
                    <div class="icf-timeline-box">
                        <div class="icf-timeline-date">1990</div>
                        <p>A significant milestone was achieved when 1,000 coaches were produced in a single year for the first time.</p>
                    </div>
                </div>
                <div class="icf-timeline-entry icf-timeline-left">
                    <div class="icf-timeline-box">
                        <div class="icf-timeline-date">2019-20</div>
                        <p>The Integral Coach Factory (ICF) set a global benchmark by manufacturing 4,166 coaches—the highest annual output by ICF and any coach manufacturing unit worldwide.</p>
                    </div>
                </div>
                <div class="icf-timeline-entry icf-timeline-right">
                    <div class="icf-timeline-box">
                        <div class="icf-timeline-date">2024-25</div>
                        <p>ICF turned out a total of 3,007 coaches, including 1,169 coaches under Distributed Power Rolling Stock (DPRS), comprising 21 rakes (392 coaches) of Vande Bharat trains and 1,830 LHB coaches.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="icf-content-block">
            <h2>Growth by leaps and bounds</h2>
            <p>The production of indigenously manufactured all-steel, all-welded railway coach shells commenced in 1955 with an initial installed capacity of 350 shells per annum. Over the years, production has steadily increased through consistent augmentation of infrastructure and technology. In 1990, a significant milestone was achieved when 1,000 coaches were produced in a single year for the first time.</p>
            <p>In the production year 2019-20, the Integral Coach Factory (ICF) set a global benchmark by manufacturing 4,166 coaches—the highest annual output by ICF and any coach manufacturing unit worldwide. During the production year 2024-25, ICF turned out a total of 3,007 coaches. This includes 1,169 coaches under Distributed Power Rolling Stock (DPRS), comprising 21 rakes (392 coaches) of Vande Bharat trains and 1,830 LHB coaches. This marks a notable increase in output compared to the previous year and reflects ICF's sustained commitment to scaling up indigenous production capabilities.</p>
        </section>
        
        <section class="icf-content-block icf-export-theme">
            <h2>Export</h2>
            <p>ICF has exported more than 875 coaches, shells and components to countries such as Thailand, Burma, Taiwan, Zambia, Philippines, Tanzania, Uganda, Vietnam, Nigeria, Bangladesh, Mozambique, Malaysia, Angola and Sri Lanka to a total value of Rs.1004 crores (approx).</p>
            
            <div class="icf-metrics-grid">
                <div class="icf-metric-card">
                    <div class="icf-metric-value">875+</div>
                    <div class="icf-metric-title">Exported Coaches</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">14+</div>
                    <div class="icf-metric-title">Countries</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">₹1004</div>
                    <div class="icf-metric-title">Crores Value</div>
                </div>
            </div>
        </section>
        
        <section class="icf-content-block icf-green-theme">
            <h2>ICF – Green Producer</h2>
            <p>ICF is known for its efforts in the eco-preservation front be it creation of exclusive green forests in the ICF surroundings, installation of windmills and solar panels for generation of electricity. ICF is a zero discharge factory and also a 'Green Workshop'.</p>
            <p>ICF has developed Green houses in its premises, where it develops saplings and it is supported by a Poly House where the seeding process for the saplings is been undertaken. ICF has become the only organization in Indian Railways to have completely neutralized green house gas emission and achieved Carbon Negative status.</p>
            
            <div class="icf-metrics-grid">
                <div class="icf-metric-card">
                    <div class="icf-eco-symbol">🌳</div>
                    <div class="icf-metric-title">Green Forests</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-eco-symbol">💨</div>
                    <div class="icf-metric-title">Zero Discharge</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-eco-symbol">🌱</div>
                    <div class="icf-metric-title">Green Houses</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-eco-symbol">♻️</div>
                    <div class="icf-metric-title">Carbon Negative</div>
                </div>
            </div>
        </section>
        
        <section class="icf-content-block icf-milestone-theme">
            <h2>Milestones of 'Team ICF'</h2>
            <p>ICF has completed glorious 68 years since inception and is the front runner in the manufacture of self-propelled coaches viz. EMU, MEMU, SPARI, OHE Tower car, SPIC, DEMU and Vande Bharat.</p>
            <p>Till March-2024 ICF has produced 63 rakes of Vande Bharat which connect all the States of the nation which have been electrified. The Vande Bharat with 87% indigenous inputs manufactured by ICF under "Make in India", is designed for maximum operating speed of 160 kmph.</p>
            <p>ICF is also in the process of manufacture of different variants of trains in the Vande Bharat platform.</p>
            
            <div class="icf-metrics-grid">
                <div class="icf-metric-card">
                    <div class="icf-metric-value">68</div>
                    <div class="icf-metric-title">Years of Excellence</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">63</div>
                    <div class="icf-metric-title">Vande Bharat Rakes</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">87%</div>
                    <div class="icf-metric-title">Indigenous Inputs</div>
                </div>
                <div class="icf-metric-card">
                    <div class="icf-metric-value">160</div>
                    <div class="icf-metric-title">KMPH Speed</div>
                </div>
            </div>
        </section>
        
        <section class="icf-content-block icf-award-theme">
            <h2>Best Production Unit Award</h2>
            <p>For the year 2021-22, ICF has been jointly declared as the Best Production Unit among the Indian Railway PUs.</p>
        </section>
    </div>
    </div>
    <footer class="footer2">
    <p class="footer2-text">© Integral Coach Factory | Updated 2025</p>
  </footer>
</body>
</html>
=======
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
                    <a href="#" class="login-btn">Login</a>
                    <div class="language-selector">
                        <a href="#" class="lang-link">English</a>
                        <a href="#" class="lang-link">हिन्दी</a>
                        <button class="lang-toggle" id="langToggle">EN</button>
                    </div>
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
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">About ICF <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="about.php" class="dropdown-item">About ICF</a>
                        <a href="http://10.53.4.11/newicf/gm.php" class="dropdown-item">Our General Manager</a>
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
   <div class="icf-main-wrapper">
    <section class="icf-content-block">
        <h2>About Us</h2>
        <p>The Integral Coach Factory is one of the earliest railway production units of independent India. It was inaugurated by the first Prime Minister of India Pt. Jawaharlal Nehru on 2nd October, 1955. Later the Furnishing Division was inaugurated on 2nd October, 1962 and the production of fully furnished coaches steadily increased over the years.</p>
        <p>Spread over 511 acres, it has more than 9079 employees who turnout more than 2500 coaches per year on an average in the past 10 years in more than 175 varieties which includes conventional and self-propelled coaches in LHB and other designs including India's first semi-high speed train the Vande Bharat Express.</p>
        
        <div class="icf-metrics-grid">
            <div class="icf-metric-card">
                <div class="icf-metric-value">511</div>
                <div class="icf-metric-title">Acres</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">9079+</div>
                <div class="icf-metric-title">Employees</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">2500+</div>
                <div class="icf-metric-title">Coaches Per Year</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">175+</div>
                <div class="icf-metric-title">Coach Varieties</div>
            </div>
        </div>
    </section>
    
    <section class="icf-content-block">
        <h2>Production</h2>
        <p>ICF has the capability of designing and developing any variant with in-house facility. Every year, new variants are added to the product mix. Till March-2025, ICF has achieved the distinction of having turned out 77,000+ coaches since its inception, which is the highest by any passenger coach manufacturer in the world.</p>
        
        <div class="icf-history-timeline">
            <div class="icf-timeline-entry icf-timeline-left">
                <div class="icf-timeline-box">
                    <div class="icf-timeline-date">1955</div>
                    <p>Production of indigenously manufactured all-steel, all-welded railway coach shells commenced with an initial installed capacity of 350 shells per annum.</p>
                </div>
            </div>
            <div class="icf-timeline-entry icf-timeline-right">
                <div class="icf-timeline-box">
                    <div class="icf-timeline-date">1990</div>
                    <p>A significant milestone was achieved when 1,000 coaches were produced in a single year for the first time.</p>
                </div>
            </div>
            <div class="icf-timeline-entry icf-timeline-left">
                <div class="icf-timeline-box">
                    <div class="icf-timeline-date">2019-20</div>
                    <p>The Integral Coach Factory (ICF) set a global benchmark by manufacturing 4,166 coaches—the highest annual output by ICF and any coach manufacturing unit worldwide.</p>
                </div>
            </div>
            <div class="icf-timeline-entry icf-timeline-right">
                <div class="icf-timeline-box">
                    <div class="icf-timeline-date">2024-25</div>
                    <p>ICF turned out a total of 3,007 coaches, including 1,169 coaches under Distributed Power Rolling Stock (DPRS), comprising 21 rakes (392 coaches) of Vande Bharat trains and 1,830 LHB coaches.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="icf-content-block">
        <h2>Growth by leaps and bounds</h2>
        <p>The production of indigenously manufactured all-steel, all-welded railway coach shells commenced in 1955 with an initial installed capacity of 350 shells per annum. Over the years, production has steadily increased through consistent augmentation of infrastructure and technology. In 1990, a significant milestone was achieved when 1,000 coaches were produced in a single year for the first time.</p>
        <p>In the production year 2019-20, the Integral Coach Factory (ICF) set a global benchmark by manufacturing 4,166 coaches—the highest annual output by ICF and any coach manufacturing unit worldwide. During the production year 2024-25, ICF turned out a total of 3,007 coaches. This includes 1,169 coaches under Distributed Power Rolling Stock (DPRS), comprising 21 rakes (392 coaches) of Vande Bharat trains and 1,830 LHB coaches. This marks a notable increase in output compared to the previous year and reflects ICF's sustained commitment to scaling up indigenous production capabilities.</p>
    </section>
    
    <section class="icf-content-block icf-export-theme">
        <h2>Export</h2>
        <p>ICF has exported more than 875 coaches, shells and components to countries such as Thailand, Burma, Taiwan, Zambia, Philippines, Tanzania, Uganda, Vietnam, Nigeria, Bangladesh, Mozambique, Malaysia, Angola and Sri Lanka to a total value of Rs.1004 crores (approx).</p>
        
        <div class="icf-metrics-grid">
            <div class="icf-metric-card">
                <div class="icf-metric-value">875+</div>
                <div class="icf-metric-title">Exported Coaches</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">14+</div>
                <div class="icf-metric-title">Countries</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">₹1004</div>
                <div class="icf-metric-title">Crores Value</div>
            </div>
        </div>
    </section>
    
    <section class="icf-content-block icf-green-theme">
        <h2>ICF – Green Producer</h2>
        <p>ICF is known for its efforts in the eco-preservation front be it creation of exclusive green forests in the ICF surroundings, installation of windmills and solar panels for generation of electricity. ICF is a zero discharge factory and also a 'Green Workshop'.</p>
        <p>ICF has developed Green houses in its premises, where it develops saplings and it is supported by a Poly House where the seeding process for the saplings is been undertaken. ICF has become the only organization in Indian Railways to have completely neutralized green house gas emission and achieved Carbon Negative status.</p>
        
        <div class="icf-metrics-grid">
            <div class="icf-metric-card">
                <div class="icf-eco-symbol">🌳</div>
                <div class="icf-metric-title">Green Forests</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-eco-symbol">💨</div>
                <div class="icf-metric-title">Zero Discharge</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-eco-symbol">🌱</div>
                <div class="icf-metric-title">Green Houses</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-eco-symbol">♻️</div>
                <div class="icf-metric-title">Carbon Negative</div>
            </div>
        </div>
    </section>
    
    <section class="icf-content-block icf-milestone-theme">
        <h2>Milestones of 'Team ICF'</h2>
        <p>ICF has completed glorious 68 years since inception and is the front runner in the manufacture of self-propelled coaches viz. EMU, MEMU, SPARI, OHE Tower car, SPIC, DEMU and Vande Bharat.</p>
        <p>Till March-2024 ICF has produced 63 rakes of Vande Bharat which connect all the States of the nation which have been electrified. The Vande Bharat with 87% indigenous inputs manufactured by ICF under "Make in India", is designed for maximum operating speed of 160 kmph.</p>
        <p>ICF is also in the process of manufacture of different variants of trains in the Vande Bharat platform.</p>
        
        <div class="icf-metrics-grid">
            <div class="icf-metric-card">
                <div class="icf-metric-value">68</div>
                <div class="icf-metric-title">Years of Excellence</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">63</div>
                <div class="icf-metric-title">Vande Bharat Rakes</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">87%</div>
                <div class="icf-metric-title">Indigenous Inputs</div>
            </div>
            <div class="icf-metric-card">
                <div class="icf-metric-value">160</div>
                <div class="icf-metric-title">KMPH Speed</div>
            </div>
        </div>
    </section>
    
    <section class="icf-content-block icf-award-theme">
        <h2>Best Production Unit Award</h2>
        <p>For the year 2021-22, ICF has been jointly declared as the Best Production Unit among the Indian Railway PUs.</p>
    </section>
</div>
</div>
>>>>>>> 414fa9a10e6c23c4194d665fd64a5b270660c59e
