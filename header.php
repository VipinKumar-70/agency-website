<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark m-0 p-0 bg-md-white">
        <div class="container p-3">
            <a class="navbar-brand" href="index.php">
                <img src="images/weblogo.png" alt="gdf logo" style="width:12vh;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon hamburger"></span>
            </button>
            <div class="collapse navbar-collapse navbar-link-a" id="navbarSupportedContent" style="padding-left:90px;">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 pl-md-5">
                    <li class="nav-item main-nav">
                        <a class="new-navlink nav-link dropdown active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item main-nav">
                        <a class="new-navlink nav-link active" aria-current="page" href="#">About</a>
                        <div class="dropdown-menu drop-submenu">
                            <ul>
                                <li><a href="#" class="dropdown-item">Web project</a></li>
                                <li><a href="#" class="dropdown-item">Dyanimic project</a></li>
                                <li><a href="#" class="dropdown-item">Excel project</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item main-nav">
                        <a class="new-navlink nav-link active" aria-current="page" href="#">Services</a>
                        <div class="dropdown-menu drop-submenu">
                            <ul>
                                <li><a href="GDS WEB/gds_digital/index.php" class="dropdown-item">Digital Marketing</a>
                                </li>
                                <li><a href="GDS WEB/gds_itsolution/index.php" class="dropdown-item">IT Solution</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item main-nav">
                        <a class="new-navlink nav-link active" aria-current="page" href="#">Contact</a>
                        <div class="dropdown-menu drop-submenu">
                            <ul>
                                <li><a href="#" class="dropdown-item">Web project</a></li>
                                <li><a href="#" class="dropdown-item">Dyanimic project</a></li>
                                <li><a href="#" class="dropdown-item">Excel project</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item main-nav">
                        <a class="new-navlink nav-link dropdown active" aria-current="page"
                            href="gdfSolution1.php">Blog</a>
                    </li>
                    <li class="nav-item main-nav">
                        <a class="new-navlink nav-link active" aria-current="page" href="#">Client</a>
                    </li>
                </ul>
                <div class="right-header-element">
                    <div class="icon-box-wrapper">
                        <div class="icon-wrapper">
                            <a href="#">
                                <img src="Images/asset 1.png" alt="">
                            </a>
                        </div>
                        <div class="icon-text">
                            <div class="new-navlink content">Call Helpline</div>
                            <h6 class="icon-box-title">
                                <a class="new-navlink" href="tel:+91-9718750164">+91-9898912456</a>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="icon-header-element">
                    <ul class="header-social-icon">
                        <li><a href="https://github.com/VipinKumar-70" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/vipinkumar70/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/vipinkumar__70/" target="_blank"><i class="fa-brands fa-instagram new-navlink"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>



</body>
<script>
    // Get the current URL
    const currentURL = window.location.pathname;

    var targetURL = "index.php";

    // Get the element you want to style
    const myElements = document.querySelectorAll('.new-navlink');

    // Check the URL and apply different styles based on it
    if (currentURL == "/vipinResponsiveProject/index.php" || currentURL == "/vipinResponsiveProject/") {
        myElements.forEach((element) => {
            element.style.color = "white";
        });
    } else {
        // Default styles if the URL doesn't match any condition

        myElements.forEach((element) => {
            element.style.color = "black";
        });
    }

</script>

<script>
    $(".dropdown-menu").css({ "display": "none" });
</script>

</html>