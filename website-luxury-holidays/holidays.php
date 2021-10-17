<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Leading Choice Getaways - Luxury Holidays</title>
    <meta name="description" content="Leading Choice Getaways - Luxury Holidays">
    <meta name="author" content="Kacper Adamski">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="menu">
        <div class="menu-container">
            <div class="logo-container">
                <img class="logo" alt="logo" src="images/logo-leading-choice-getaways/logo.png">
            </div>
            <ul class="nav-link-container">
                <li>
                    <a class="link" href="index.html">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a class="link" href="holidays.php">
                        Holidays
                        <i class="fas fa-chevron-down "></i>
                    </a>
                </li>
                <li><a class="link" href="admin.html">Admin</a></li>
                <li><a class="link" href="credits.html">Credits</a></li>
                <li><a class="link" href="wireframes/wireframes.pdf" target="_blank">Wireframes</a></li>
            </ul>
        </div>
        <div class="hamburger">
            <div class="hamburger-logo">
                <img class="logo" alt="logo" src="images/logo-leading-choice-getaways/logo.png">
            </div>
            <div class="hamburger-container">
                <i class="fas fa-bars hamburger-icon"></i>
            </div>
        </div>
    </nav>
    <button id="scroll-to-top" title="Go to Top">
            <i class="fas fa-chevron-up arrow-go-top"></i>
    </button>
    <header id="header">
        <div class="header-container">
            <h1>Available Holiday Offers</h1>
        </div>
        <div class="video-container">
            <video playsinline autoplay muted loop poster="images/header-poster.png" class="header-video">
                <source src="video/header.mp4" type="video/mp4">
            </video>
        </div>
        <div class="scroll-arrows">
            <a href="#holiday-offers" class="arrows-link">
                <i class="fas fa-chevron-down arrow1"></i>
                <i class="fas fa-chevron-down arrow2"></i>
            </a>
        </div>
    </header>
    <section id="holiday-offers">
        <div class="holidays-container">
            <?php
                  include 'php/database_conn.php';	  // make db connection

                  $sql = "SELECT holidayTitle, holidayDescription, catDesc, locationName, country, holidayPrice
                          FROM LCG_holidays
                          INNER JOIN LCG_category
                          ON LCG_category.catID = LCG_holidays.catID
                          INNER JOIN LCG_location
                          ON LCG_location.locationID = LCG_holidays.locationID
                          ORDER BY holidayTitle";
                  $queryResult = $dbConn->query($sql);

            // Check for and handle query failure
            if($queryResult === false) {
            echo "<p>Query failed: ".$dbConn->error."</p>\n</body>\n</html>";
            exit;
            }
            // Otherwise fetch all the rows returned by the query one by one
            else {
            while($rowObj = $queryResult->fetch_object()){
            echo "<div class=holiday-container>
                    <h3>{$rowObj->holidayTitle}</h3>
                    <p>{$rowObj->catDesc}</p>
                    <p class=location>{$rowObj->locationName}, {$rowObj->country}</p>
                    <p>{$rowObj->holidayDescription}</p>
                    <p class=price>Prices from <span class=strong>£{$rowObj->holidayPrice}</span> per person</p>
                   </div>
                  ";
            }
            }
            $queryResult->close();
            $dbConn->close();
            ?>
        </div>
    </section>
    <div class="footer-svg">
        <img class="svg" src="icons/separator.svg" alt="section separator">
    </div>
    <footer id="footer">
        <div class="links-container">
            <div class="footer-links">
                <h2 class="footer-h2">Useful Information</h2>
                <hr class="separator">
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    About Us
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Contact
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Sales offices
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Terms of cooperation
                </a>
            </div>
            <div class="footer-links">
                <h2 class="footer-h2">How To Reserve?</h2>
                <hr class="separator">
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    About Us
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Contact
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Sales offices
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Terms of cooperation
                </a>
            </div>
            <div class="footer-links">
                <h2 class="footer-h2">Recommendations</h2>
                <hr class="separator">
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    About Us
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Contact
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Sales offices
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Terms of cooperation
                </a>
            </div>
            <div class="footer-links">
                <h2 class="footer-h2">Social Media</h2>
                <hr class="separator">
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    About Us
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Contact
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Sales offices
                </a>
                <a class="footer-link" href="index.html">
                    <i class="fas fa-chevron-right"></i>
                    Terms of cooperation
                </a>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/2d5172904e.js" crossorigin="anonymous"></script>
    <script src="scripts/collapsable-text.js"></script>
    <script src="scripts/menu.js"></script>
    <script src="scripts/scroll-to-top.js"></script>
</body>
</html>