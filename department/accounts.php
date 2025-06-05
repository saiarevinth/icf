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
$createTable = "CREATE TABLE IF NOT EXISTS accounts_images (
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
$result = $conn->query("SELECT * FROM accounts_images ORDER BY position ASC");
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
        .nav-link {
            font-size: 0.85rem;
            padding: 8px 12px;
        }

        .dropdown-item {
            font-size: 0.8rem;
            padding: 6px 12px;
        }

        .nav-list {
            gap: 2px;
        }

        .dropdown-content {
            min-width: 200px;
        }

        .two-column-dropdown {
            min-width: 400px;
        }

        .three-column-dropdown {
            min-width: 600px;
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
                    <img src="accounts.png" alt="75 Years of Constitution" class="anniversary-img">
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
                <li class="nav-item"><a href="http://10.53.4.11/newicf/ACCOUNTS/pdf/Gazetted%20Organisation%20Chart%20Dec%202024.pdf" class="nav-link">Orgn.Chart</a></li>
               <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"> Presentations<i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                             <a href="http://10.53.4.11/newicf/ACCOUNTS/pdf/highlights-accounts-presentation--GM-corrected-final.pdf" class="dropdown-item">Presentation on Accounts Function</a>
                    </div>
                </li>
 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Accounts Admin <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
    <a href="http://10.53.4.11/accounts/phpr/accdocs/output/tbl_valid_documents_user_list.php?tab=Circulars&&page=list" class="dropdown-item">Circulars</a>
    <a href="http://10.53.4.11/ACCOUNTS/accounts_doc.html" class="dropdown-item">Railway Board Circulars</a>
    <a href="http://10.53.4.11/accounts/phpr/accdocs/output/tbl_valid_documents_user_list.php?tab=Office_Order_Gaz&&page=list" class="dropdown-item">Office Orders (GAZ.)</a>
    <a href="http://10.53.4.11/accounts/phpr/accdocs/output/tbl_valid_documents_user_list.php?tab=Office_Order_NonG&&page=list" class="dropdown-item">Office Orders (NON-GAZ.)</a>
    <a href="http://10.53.4.11/accounts/phpr/accdocs1/output/tbl_valid_documents_report_report.php" class="dropdown-item">Seniority List (Gaz.)</a>
    <a href="http://10.53.4.11/accounts/phpr/accdocs1/output/tbl_valid_documents_report_non_report.php" class="dropdown-item">Seniority List (Non-Gaz.)</a>
    <a href="http://10.53.4.60:8081/ESSDEMO/" class="dropdown-item">Service Record (for Officers)</a>
    <a href="http://sparrow.railnet.gov.in/SPARROW/LoginPage.action" class="dropdown-item">APAR (SPARROW)</a>
    <a href="http://10.53.4.11/accounts/phpr/accdocs/output/tbl_valid_documents_user_list.php?tab=Notifications&&page=list" class="dropdown-item">Notifications</a>
    <a href="http://10.53.4.105/pb/icfonly/acc/head.html" class="dropdown-item">ICF Circulars</a>
    <a href="http://www.indianrailways.gov.in/railwayboard/view_section_new.jsp?lang=0&id=0,5,377" class="dropdown-item">Stores Circulars</a>
</div>
                </li>
            <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">General <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content two-column-dropdown">
                        <div class="column">
                              <a href="http://10.53.4.11/newicf/ACCOUNTS/PDF/allocations.pdf" class="dropdown-item">Valid Allocations</a>
        <a href="http://10.53.4.11/newicf/ACCOUNTS/PDF/expense.pdf" class="dropdown-item">Valid Expense Numbers</a>
        <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/cost_centre_report.php" class="dropdown-item">Valid Cost Centres</a>
        <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/cost_element_report.php" class="dropdown-item">Valid Cost Elements</a>
        <a href="http://10.53.4.11/newicf/ACCOUNTS/sb/user_manuals.php" class="dropdown-item">User Manual (Domestic LC)</a>
        <a href="http://10.53.4.11/newicf/ACCOUNTS/arbitration_awards_nocaption.pdf" class="dropdown-item">Guidelines (Arbitration Awards)</a>
                        </div>
                        <div class="column">
                           <a href="#" class="dropdown-item">About IPAS Exception Reports</a>
        <a href="http://10.53.4.11/newicf/ACCOUNTS/pdf/PFA-MIS-Reports.pdf" class="dropdown-item">PFA MIS</a>
        <a href="http://10.53.4.11/newicf/ACCOUNTS/pdf/Exception%20Reports%20-%20For%20Sections.pdf" class="dropdown-item">Exception Reports - For Section</a>
                        </div>
                    </div>
                </li>
            <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Applications <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown">
        <div class="column">
            <a href="https://icf.gov.in/VEND/SNI/index.php" class="dropdown-item">Supply & Installation-IC</a>
            <a href="http://10.53.4.50/ccnet/fmis/je_server/default.asp" class="dropdown-item">Prepare JEs</a>
            <a href="http://10.53.4.50/ccnet/fmis/CASHTRAN/repstatus.asp" class="dropdown-item">Edit Cash</a>
            <a href="http://10.53.4.88/gstportal/gsthome.php" class="dropdown-item">GST Portal</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/accounts_new/fundsregister.html" class="dropdown-item">Funds Register</a>
            <a href="http://10.53.4.50/ccnet/stores/wms_drawal_test.asp" class="dropdown-item">Drawal Position</a>
            <a href="http://10.53.4.89/PP/asffms/asfIndex.php" class="dropdown-item">Accounts-Stores File Management System</a>
            <a href="http://10.53.4.89/PP/axffms/axfIndex.php" class="dropdown-item">Accounts-X File Management System</a>
            <a href="http://10.53.4.89/PP/wmsfms/wmsIndex.php" class="dropdown-item">Accounts WMS File Management System</a>
            <a href="http://10.53.4.89/pfa_notes/output/login.php" class="dropdown-item">PFA Notes</a>
        </div>
        <div class="column">
            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php#" class="dropdown-item">Pre-Vetted IT Specs</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php#" class="dropdown-item">Railway Board Circulars</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php#" class="dropdown-item">Supervisor Self Service</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php#" class="dropdown-item">Schedule of Powers</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php#" class="dropdown-item">Site Map</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/index.php#" class="dropdown-item">Virtual Folder</a>
        </div>
    </div>
</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Sections<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content three-column-dropdown">
        <div class="column">
            <div class="dropdown-item"><strong>IPAS</strong></div>
            <a href="http://10.53.4.88/IPAS/default1.php" class="dropdown-item">Upload Screen-(Cash/Rem/JE)</a>

            <div class="dropdown-item"><strong>MIS</strong></div>
            <a href="http://10.53.4.60:8081/MIS_ACCOUNTS/index.php?key=Accounts" class="dropdown-item">MIS - Accounts</a>

            <div class="dropdown-item"><strong>PFA Dashboard</strong></div>
            <a href="http://10.53.4.60:8081/MIS_ACCOUNTS/index.php?key=Accounts" class="dropdown-item">PFA Dashboard</a>

            <div class="dropdown-item"><strong>COSTING<br>Unit Price - Type wise</strong></div>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/PDF/unit%20cost%202023-24.pdf" class="dropdown-item">For the Year 2023-2024</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/PDF/UNIT%20COST%202022-23.pdf" class="dropdown-item">For the Year 2022-2023</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/PDF/UNIT%20COST%202021-22.pdf" class="dropdown-item">For the Year 2021-2022</a>
            <a href="http://10.53.4.11/newicf/ACCOUNTS/PDF/UC2020-21.pdf" class="dropdown-item">For the Year 2020-2021</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit-cost-19-20-final.pdf" class="dropdown-item">For the Year 2019-2020</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit_cost_18-19.pdf" class="dropdown-item">For the Year 2018-2019</a>
        </div>
         <div class="column">
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit_cost_17-18.pdf" class="dropdown-item">For the Year 2017-2018</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit_cost_16-17.pdf" class="dropdown-item">For the Year 2016-2017</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/Unit_cost_2015-16.pdf" class="dropdown-item">For the Year 2015-2016</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/Unit_cost_2014-15.pdf" class="dropdown-item">For the Year 2014-2015</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/Breakupofunitcostofcoaches(ActualCost)2013-14.pdf" class="dropdown-item">Breakup of Coaches 2013-2014</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit%20cost%2012-13.pdf" class="dropdown-item">For the Year 2012-2013</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/BreakupUnitCostofCoaches201112.pdf" class="dropdown-item">For the Year 2011-2012</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit%20cost%20from%2010-11%20to%2011-12.pdf" class="dropdown-item">For the Year 2010-2011</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/PDF/unit%20cost%20from%2009-10%20to%2011-12.pdf" class="dropdown-item">For the Year 2009-2010</a>
</div>
        <div class="column">
            <div class="dropdown-item"><strong>Previous Years</strong></div>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2011-12.pdf" class="dropdown-item">For the Year 2011-2012</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2010-11.pdf" class="dropdown-item">For the Year 2010-2011</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2009-10.pdf" class="dropdown-item">For the Year 2009-2010</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2008-09.pdf" class="dropdown-item">For the Year 2008-2009</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2007-08.pdf" class="dropdown-item">For the Year 2007-2008</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2006-07.pdf" class="dropdown-item">For the Year 2006-2007</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2005-06.pdf" class="dropdown-item">For the Year 2005-2006</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2004-05.pdf" class="dropdown-item">For the Year 2004-2005</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2003-04.pdf" class="dropdown-item">For the Year 2003-2004</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2002-03.pdf" class="dropdown-item">For the Year 2002-2003</a>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost2001-02.pdf" class="dropdown-item">For the Year 2001-2002</a>
        </div>

        <div class="column">
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/breakupunitcost1980-2007.pdf" class="dropdown-item">For the Year 1980-2007</a>

            <div class="dropdown-item"><strong>EMU Cost</strong></div>
            <a href="http://10.53.4.60:8081/MIS/Acc_Grp/Fmis/unitcost-previous-yrs/emucost.pdf" class="dropdown-item">EMU Cost</a>

            <div class="dropdown-item"><strong>Budget</strong></div>
            <a href="https://icf.indianrailways.gov.in/view_section.jsp?lang=0&id=0,295,333,454" class="dropdown-item">Budget</a>
        </div>
    </div>
</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Codes/Rules <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        <a href="http://www.indianrailways.gov.in/railwayboard/view_section_new.jsp?lang=0&id=0,5,377" class="dropdown-item">Codes and Manuals</a>
        <a href="http://10.50.19.92/empc/" class="dropdown-item">Establishment Orders</a>
        <a href="http://10.53.4.105/pb/asp/rer/rer1.asp" class="dropdown-item">Establishment Rules</a>
        <a href="https://indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,1,304,366,498,1891" class="dropdown-item">Accounts Directorate</a>
        <a href="http://www.indianrailways.gov.in/railwayboard/view_section_new.jsp?lang=0&id=0,5,1418" class="dropdown-item">Rly. Board Orders</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">SOP<i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content two-column-dropdown">
        <div class="column">
            <div class="dropdown-item"><strong>S-O-P</strong></div>
            <a href="http://10.53.4.105/pb/sop_new/Revised_GM_sop_2020.pdf" class="dropdown-item">GM Powers</a>
            <a href="http://10.53.4.105/pb/sop/corrigendum_SOP_171018.pdf" class="dropdown-item">Corrigendum Slip No:1 to Model SOP-2018</a>
            <a href="http://10.53.4.105/pb/sop/SOP18_ESTAB.pdf" class="dropdown-item">Establishment</a>
            <a href="http://10.53.4.105/pb/sop/Works-icfmsop-dec-18.pdf" class="dropdown-item">Works*</a>
            <a href="http://10.53.4.105/pb/sop/ICF_Stores_SOP_26_10_18.pdf" class="dropdown-item">Stores*</a>
            <a href="http://10.53.4.105/pb/sop/Medical-micfsop-dec-18.pdf" class="dropdown-item">Medical*</a>
            <a href="http://10.53.4.105/pb/sop/Misc_final_SOP_2021.pdf" class="dropdown-item">Miscellaneous*</a>
        </div>
        <div class="column">
            <a href="http://10.53.4.105/pb/sop/SOP18_COMM.pdf" class="dropdown-item">Commercial</a>
            <a href="http://10.53.4.105/pb/sop/SOP18_SECURITY.pdf" class="dropdown-item">Security</a>
            <a href="http://10.53.4.105/pb/sop/SOP18_ANNEX1.pdf" class="dropdown-item">Annexure-1</a>
            <a href="http://10.53.4.105/pb/sop/SOP18_ANNEX2.pdf" class="dropdown-item">Annexure-2</a>
        </div>
    </div>
</li>
    <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle">Useful Links <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-content">
        <a href="http://icf.indianrailways.gov.in/" class="dropdown-item">ICF Internet Website</a>
        <a href="https://indianrailways.gov.in/railwayboard/" class="dropdown-item">Railway Board Website</a>
        <a href="https://www.irastimes.org/" class="dropdown-item">IRAS Times</a>
        <a href="http://aims.indianrailways.gov.in/" class="dropdown-item">IRA&F Portal</a>
        <a href="http://arpan.railnet.gov.in/Arpan/home" class="dropdown-item">ARPAN</a>
        <a href="http://www.indianrail.gov.in/pnr_Enq.html" class="dropdown-item">PNR Status</a>
        <a href="https://gem.gov.in/" class="dropdown-item">GeM</a>
        <a href="../login.php?redirect=department/accounts_main.php" class="dropdown-item" target="_blank">Image Upload</a>
    </div>
</li>
<li class="nav-item"><a href="http://10.53.4.88/sb/" class="nav-link">Stores Bills</a></li>
    <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle">Contacts <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown-content">
                             <a href="http://10.53.4.89/gaz/" class="dropdown-item">ICF Directory</a>
<a href="http://10.53.4.89/pp/cug_list/" class="dropdown-item">ICF CUG Directory</a>
                    </div>
                </li>
                 <li class="nav-item"><a href="http://10.53.4.50/ccnet/fmis/download/" class="nav-link">Downloads</a></li>
     <li class="nav-item"><a href="http://10.53.4.89/pfa_notes/output/login.php" class="nav-link">PFA Notes</a></li>
    </nav>
<div class="hi">
 <div class="main-container">
    <!-- Image Carousel Section -->
    <div class="image-slider-wrapper">
        <div class="image-slider-box">
            <?php if (empty($images)): ?>
                <!-- Default slides if no images in database -->
                <div class="image-slide-frame slide-visible">
                    <img src="image copy 21.png" alt="ICF Factory" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">Shri S. Prithi and Shri S. Sankaranarayanan inaugurated the renovated Accounts Office at GM's Building today (19.05.2025).</div>
                        <div class="slide-subtitle">21-05-2025</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 22.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">Shri S. Prithi and Shri S. Sankaranarayanan inaugurated the renovated Accounts Office at GM's Building today (19.05.2025).</div>
                        <div class="slide-subtitle">21-05-2025</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 23.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">Shri S. Prithi and Shri S. Sankaranarayanan inaugurated the renovated Accounts Office at GM's Building today (19.05.2025).</div>
                        <div class="slide-subtitle">21-05-2025</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 24.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">New Year Greeting from the Accounts Officer and General Manager.</div>
                        <div class="slide-subtitle">22-11-2024</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 25.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">New Year Greeting from the Accounts Officer and General Manager.</div>
                        <div class="slide-subtitle">22-11-2024</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 26.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">New Year Greeting from the Accounts Officer and General Manager.</div>
                        <div class="slide-subtitle">22-11-2024</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 27.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">New Year Greeting from the Accounts Officer and General Manager.</div>
                        <div class="slide-subtitle">22-11-2024</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 28.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">Accounts Officers honour Smt. Sumamadan and Smt. Indira's remarkable career at their superannuation lunch party.</div>
                        <div class="slide-subtitle">02-01-2025</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 29.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">Accounts Officers honour Smt. Sumamadan and Smt. Indira's remarkable career at their superannuation lunch party.</div>
                        <div class="slide-subtitle">02-01-2025</div>
                    </div>
                </div>
                <div class="image-slide-frame">
                    <img src="image copy 30.png" alt="Modern Train" class="slide-picture">
                    <div class="slide-text-overlay">
                        <div class="slide-main-title">Accounts Officers honour Smt. Sumamadan and Smt. Indira's remarkable career at their superannuation lunch party.</div>
                        <div class="slide-subtitle">02-01-2025</div>
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
            $totalSlides = !empty($images) ? count($images) : 10; // Use 10 for default slides
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
 <p>• Keeping the accounts of the Railway in accordance with the prescribed rules;</p>
<p>• The check with reference to Rules or orders (known as "INTERNAL CHECK") of transactions affecting the receipts and expenditure of Railway;</p>
<p>• Prompt settlement of proper claims against the Railway;</p>
<p>• Tendering as part of its important functions, advice to Administration whenever required or necessary in all matters involving Railway Finance;</p>
<p>• Compilation of Budgets in consultation with other departments and monitoring the budgetary control procedures as may be laid down in the relevant orders and code rules from time to time;</p>
<p>• Generally discharging other management accounting functions such as providing financial data for management reporting, assisting inventory management, participation in purchase/contracting decisions and surveys for major schemes in accordance with relevant rules and orders; and</p>
<p>• Seeing that there are no financial irregularities in the transactions of the Railway.</p>

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
    