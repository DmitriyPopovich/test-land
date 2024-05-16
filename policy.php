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
                    <div class="features-wrap"  >

                        <section class="policy">
                            <div class="container">
                                <div class="policy__wrapper">
                                    <h4>This Privacy Policy explains how we collect, use, and disclose your personal data when you use our website. By using our website, you consent to the collection and use of your personal data in accordance with this Privacy Policy.</h4>
                                    <br/>
                                    <br/>
                                    <h4>Information We Collect</h4>
                                    <p>We may collect personal data such as your name, email address, postal address, phone number, and other contact details when you use our website. We may also collect non-personal data such as IP address, browser type, and operating system.</p>
                                    <h4>How We Use Your Data</h4>
                                    <p>We use your personal data to provide you with the services and products you request, to communicate with you about your account or transactions, and to improve our website and services. We may also use your personal data for marketing purposes, but we will always give you the option to opt out of receiving such messages.</p>
                                    <h4>Disclosure of Your Data</h4>
                                    <p>We may disclose your personal data to external service providers who perform services on our behalf, such as payment processors, email service providers, and web analytics providers. We may also disclose your personal data if required by law, court order, or other governmental or law enforcement authority.</p>
                                    <h4>Your Choices</h4>
                                    <p>You have the right to access, correct, or delete your personal data at any time. You can also opt out of marketing messages from us by following the instructions included in the message.</p>
                                    <h4>Security of Your Information</h4>
                                    <p>We take reasonable steps to protect your personal data from unauthorized access, use, or disclosure. However, no data transmission over the Internet or electronic storage can be guaranteed 100% secure.</p>
                                    <h4>Changes to This Privacy Policy</h4>
                                    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by posting the updated Privacy Policy on our website. Your continued use of our website after the updated Privacy Policy becomes effective means that you agree to the updated Privacy Policy.</p>
                                    <h4>Contact Us</h4>
                                    <p>If you have any questions or concerns about this Privacy Policy, please contact us.</p>
                                </div>
                            </div>
                        </section>



                    </div>
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
