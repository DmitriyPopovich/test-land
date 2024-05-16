<?php
session_start();
$pixel = (isset($_GET["pixel"])) ? $_GET["pixel"] : 'Unknown';
$subid = (isset($_GET["subid"])) ? $_GET["subid"] : 'Unknown';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agnes Template</title>
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="src/js/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="assets/css/cookie-policy.css" />
</head>
<body class="is-boxed has-animations">
<div class="body-wrap boxed-container">
    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand">
                    <h1 class="m-0">
                        <a href="/">
                            <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                                <title>Agnes</title>
                                <defs>
                                    <linearGradient x1="0%" y1="100%" y2="0%" id="logo-a">
                                        <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#007DFF" offset="100%"/>
                                    </linearGradient>
                                    <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="logo-b">
                                        <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                        <stop stop-color="#FF4F7A" offset="100%"/>
                                    </linearGradient>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <rect fill="url(#logo-a)" width="32" height="32" rx="16"/>
                                    <rect fill="url(#logo-b)" x="16" width="32" height="32" rx="16"/>
                                </g>
                            </svg>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="features section text-center">
            <div class="section-square"></div>
            <div class="container">
                <div class="features-inner section-inner">

                    <section class="policy">
                        <div class="container">
                            <div class="policy__wrapper">
                                <h3>Welcome!</h3>
                                <h4>This terms and conditions document sets out the rules for the use of the company's website</h4>
                                <br/>
                                <br/>
                                <h4>By accessing this website we assume you accept these terms and conditions. Do not continue
                                    using the website if you do not agree to accept all of the terms and conditions stated on this page.</h4>
                                <p>The following terminology applies to these Terms and Conditions, Privacy Statement,
                                    Disclaimer and all Agreements: "Client", "You" and "Your" refers to you,
                                    the person log on this website and compliant to the Company’s terms and conditions.
                                    "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company.
                                    "Party", "Parties", or "Us", refers to both the Client and ourselves.
                                    All terms refer to the offer, acceptance and consideration of payment
                                    necessary to undertake the process of our assistance to the Client in the most
                                    appropriate manner for the express purpose of meeting the Client’s needs in respect
                                    of provision of the Company’s stated services, in accordance with and subject to,
                                    prevailing law of Netherlands. Any use of the above terminology or other words in the
                                    singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                                <h4>Cookies</h4>
                                <p>We employ the use of cookies. By accessing <span class="logo-text"></span>, you agreed
                                    to use cookies in agreement with the Company's Privacy Policy.</p>
                                <p>Most interactive websites use cookies to let us retrieve the user’s details
                                    for each visit. Cookies are used by our website to enable the functionality of
                                    certain areas to make it easier for people visiting our website. Some of
                                    our affiliate/advertising partners may also use cookies.</p>
                                <h4>License</h4>
                                <p>Unless otherwise stated, the Company and/or its licensors own the intellectual property rights
                                    for all material on the website. All intellectual property rights are reserved.
                                    You may access this from the website for your own personal use subjected to restrictions set in these terms and conditions.</p>

                                <h4>This Agreement shall begin on the date hereof.</h4>
                                <p>Parts of this website offer an opportunity for users to post and exchange opinions
                                    information in certain areas of the website. Company Name does not filter, edit, publish or review
                                    Comments prior to their presence on the website. Comments do not reflect the views and opinions of Company Name,
                                    its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions.
                                    To the extent permitted by applicable laws, Company Name shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered
                                    as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
                                <p>Company Name reserves the right to monitor all Comments and to remove any Comments
                                    which can be considered inappropriate, offensive or causes breach of these Terms.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer text-light">
        <div class="container">
            <div class="site-footer-inner has-top-divider">
                <div class="brand footer-brand">
                    <a href="/">
                        <svg width="48" height="32" viewBox="0 0 48 32" xmlns="http://www.w3.org/2000/svg">
                            <title>Agnes</title>
                            <defs>
                                <linearGradient x1="0%" y1="100%" y2="0%" id="logo-footer-a">
                                    <stop stop-color="#007CFE" stop-opacity="0" offset="0%"/>
                                    <stop stop-color="#007DFF" offset="100%"/>
                                </linearGradient>
                                <linearGradient x1="100%" y1="50%" x2="0%" y2="50%" id="logo-footer-b">
                                    <stop stop-color="#FF4F7A" stop-opacity="0" offset="0%"/>
                                    <stop stop-color="#FF4F7A" offset="100%"/>
                                </linearGradient>
                            </defs>
                            <g fill="none" fill-rule="evenodd">
                                <rect fill="url(#logo-footer-a)" width="32" height="32" rx="16"/>
                                <rect fill="url(#logo-footer-b)" x="16" width="32" height="32" rx="16"/>
                            </g>
                        </svg>
                    </a>
                </div>
                <ul class="footer-links list-reset">
                    <li>
                        <a href="policy.php">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="terms.php">Terms</a>
                    </li>
                </ul>
                <ul class="footer-social-links list-reset">
                    <li>
                        <a href="#reg_form">
                            <span class="screen-reader-text">Facebook</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFFFFF"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#reg_form">
                            <span class="screen-reader-text">Twitter</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFFFFF"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#reg_form">
                            <span class="screen-reader-text">Google</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFFFFF"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="footer-copyright">&copy; 2018-<?=date("Y")?> Agnes, all rights reserved</div>
            </div>
        </div>
    </footer>
</div>

<script src="src/js/main.js"></script>
<script src="assets/js/cookie-policy.js"></script>

</body>
</html>
