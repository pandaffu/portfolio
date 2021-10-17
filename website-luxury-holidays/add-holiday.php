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
                <li><a class="link" href="index.html">Admin</a></li>
                <li><a class="link" href="index.html">Credits</a></li>
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
    <section id="admin-panel">
        <div class="panel-container">
            <div class="form-container">
                <h1>Success!</h1>
                <p>New holiday record has been added to the database.</p>
                <?php

                include 'php/database_conn.php';

                // Retrieving data from the form
                $holidayTitle = $_POST['holidayTitle'];
                $holidayDesc = $_POST['holidayDesc'];
                $holidayDuration = $_POST['holidayDuration'];
                $holidayPrice = $_POST['holidayPrice'];
                $categoryID = $_POST['holidayCatID'];
                $locationID = $_POST['holidayLocationID'];
                // Query for inserting the data
                $insertSQL = "INSERT INTO LCG_holidays (holidayTitle, holidayDescription, holidayDuration,
                              holidayPrice, catID, locationID )
                              VALUES ('$holidayTitle','$holidayDesc', '$holidayDuration', '$holidayPrice',
                             '$categoryID', '$locationID')";

                $success = $dbConn->query($insertSQL);

                // Check for successful connection and display success message
                if($success === false) {
                echo "<p>Query failed: ".$dbConn->error."</p>\n";
                exit;
                } else {
                    echo "<div id=success-container>
                             <div class=success-item>Title: $holidayTitle</div>
                             <div class=success-item>Description: $holidayDesc</div>
                             <div class=success-item>Duration: $holidayDuration</div>
                             <div class=success-item>Price: $holidayPrice</div>
                             <div class=success-item>Category ID: $categoryID</div>
                             <div class=success-item>Location ID: $locationID</div>
                          </div>
                         ";
                }
            $dbConn->close();
            ?>
            </div>
        </div>
    </section>
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
</body>
</html>