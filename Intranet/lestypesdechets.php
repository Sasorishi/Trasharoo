<?php
    include("controlleur/controlleur.php");
?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <title>INTRANET - POUBELLE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="shortcut icon" href="images/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLibre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css"  href='css/clear.css' />
        <link rel="stylesheet" type="text/css"  href='css/common.css' />
        <link rel="stylesheet" type="text/css"  href='css/font-awesome.min.css' />
        <link rel="stylesheet" type="text/css"  href='css/carouFredSel.css' />
        <link rel="stylesheet" type="text/css"  href='css/sm-clean.css' />
        <link rel="stylesheet" type="text/css"  href='style.css' />

        <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
        <![endif]-->

    </head>


    <body class="home blog">

        <!-- Preloader Gif -->
        <table class="doc-loader">
            <tbody>
                <tr>
                    <td>
                        <img src="images/ajax-document-loader.gif" alt="Loading...">
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Left Sidebar -->
        <div id="sidebar" class="sidebar">
            <div class="menu-left-part">
                <div class="search-holder">
                    <label>
                        <input type="search" class="search-field" placeholder="Type here to search..." value="" name="s" title="Search for:">
                    </label>
                </div>
                <div class="site-info-holder">
                    <h1 class="site-title">INTRANET</h1>
                    <p class="site-description">
                        Gestion des poubelles de l'usager
                    </p>
                </div>
                <nav id="header-main-menu">
                    <ul class="main-menu sm sm-clean">
                        <li><a href="accueil.php" class="current">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="scroll.php">Scroll</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <footer>
                    <div class="footer-info">
                        © 2018 SUPPABLOG HTML TEMPLATE. <br> CRAFTED WITH <i class="fa fa-heart"></i> BY <a href="https://colorlib.com">COLORLIB</a>.
                    </div>
                </footer>
            </div>
            <div class="menu-right-part">
                <div class="logo-holder">
                    <a href="accueil.php">
                        <img src="images/logo.png" alt="Suppablog WP">
                    </a>
                </div>
                <div class="toggle-holder">
                    <div id="toggle">
                        <div class="menu-line"></div>
                    </div>
                </div>
                <div class="social-holder">
                    <div class="social-list">
                        <a href="meshabitations.php?page=1"><i class="fa fa-twitter"><br/>Mes habitations</i></a>
                        <a href="mespoubelles.php?page=1"><i class="fa fa-youtube-play"><br/>Mes poubelles</i></a>
                        <a href="leslevees.php?page=1"><i class="fa fa-facebook"><br/>Les levées</i></a>
                        <a href="lestypesdechets.php?page=1"><i class="fa fa-vimeo"><br/>Les types de déchets</i></a>
                    </div>
                </div>
                <div class="fixed scroll-top"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></div>
            </div>
            <div class="clear"></div>
        </div>

        <!-- Home Content -->
                                <?php
                                if (isset($_GET["action"]) && isset($_GET["idD"]))
                                {
                                    $action = $_GET["action"];
                                    $idD = $_GET["idD"];
                                    if ($action == "X")
                                    {
                                        deleteTypeDechetC($idD);
                                    }
                                    else if ($action == "E")
                                    {
                                        $resultat = selectWhereIdTypeDechetC($idD);

                                    }
                                }
                                if (isset($_POST["Modifier"]))
                                {
                                    updateTypeDechetC($_POST);
                                    $resultat = null;
                                }
                                if (isset($_POST["Enregistrer"]))
                                {
                                    insertTypeDechetC($_POST);
                                }
                                    $resultats = selectAllC("dechet");
                                    include ("formtypesdechets.php");
                                ?>



        <!--Load JavaScript-->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type='text/javascript' src='js/imagesloaded.pkgd.js'></script>
        <script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='js/jquery.smartmenus.min.js'></script>
        <script type='text/javascript' src='js/jquery.carouFredSel-6.0.0-packed.js'></script>
        <script type='text/javascript' src='js/jquery.mousewheel.min.js'></script>
        <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='js/main.js'></script>
    </body>
</html>
