<?php
// Email template
ob_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Victor Nwutobo</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Main container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #3CAAFB 0%, #020013 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .tagline {
            font-size: 16px;
            opacity: 0.9;
        }

        /* Content sections */
        .content {
            padding: 40px 30px;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .hero-title {
            font-size: 32px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 30px;
        }

        /* CTA Button */
        .cta-button {
            display: inline-block;
            background: #22274A;
            color: white;
            padding: 15px 35px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 16px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        /* Feature sections */
        .features {
            margin: 40px 0;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateX(5px);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: #020013;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .feature-content h3 {
            color: #2c3e50;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .feature-content p {
            color: #7f8c8d;
            font-size: 14px;
        }

        /* Stats section */
        .stats {
            display: flex;
            justify-content: space-between;
            margin: 40px 0;
            padding: 30px;
            background: #22274A;
            border-radius: 15px;
            color: white;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 28px;
            font-weight: bold;
            display: block;
        }

        .stat-label {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Footer */
        .footer {
            background-color: #020013;
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        .footer-content {
            margin-bottom: 20px;
        }

        .social-links {
            margin: 20px 0;
        }

        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: opacity 0.3s ease;
        }

        .social-links a:hover {
            opacity: 0.7;
        }

        /* Mobile responsive adjustments for social links */
        @media screen and (max-width: 600px) {
            .social-links a {
                display: block !important;
                margin: 5px 0 !important;
                font-size: 16px !important;
            }
        }

        .footer-text {
            font-size: 12px;
            opacity: 0.8;
            line-height: 1.5;
        }

        /* Responsive design */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                margin: 0 !important;
            }

            .content {
                padding: 20px 15px !important;
            }

            .header {
                padding: 20px 15px !important;
            }

            .hero-title {
                font-size: 24px !important;
            }

            .hero-subtitle {
                font-size: 16px !important;
            }

            .feature-item {
                flex-direction: column !important;
                text-align: center !important;
            }

            .feature-icon {
                margin-right: 0 !important;
                margin-bottom: 15px !important;
            }

            .stats {
                flex-direction: column !important;
                gap: 20px;
            }

            .cta-button {
                display: block !important;
                margin: 0 auto !important;
                width: fit-content;
            }
        }

        @media screen and (max-width: 480px) {
            .logo {
                font-size: 24px !important;
            }

            .tagline {
                font-size: 14px !important;
            }

            .hero-title {
                font-size: 20px !important;
            }

            .cta-button {
                padding: 12px 25px !important;
                font-size: 14px !important;
            }
        }
    </style>
</head>


<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <p style="display: block; align-items: center; gap: 8px;" class="lg:flex">
                <img src="<?= $logo ?>" style="width: 30px;" />
            </p>
            <div class="logo">Victor Nwutobo</div>
            <div class="tagline">Full Stack Developer • Designer • Problem Solver</div>
        </div>

        <!-- Main Content -->
        <div class="content">

                <!-- Hero Section -->
                <div class="hero-section">
                    <h1 class="hero-title">Thanks for Reaching Out!</h1>
                    <p class="hero-subtitle">I appreciate your interest in my work and will get back to you within 24 hours</p>
                    <a href="<?=$href?>" class="cta-button">View My Portfolio</a>
                </div>

                <!-- Features Section -->
                <div class="features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <polyline points="16,18 22,12 16,6" stroke="currentColor" stroke-width="2" fill="none" />
                                <path d="M8,5V19L2,12L8,5Z" stroke="currentColor" stroke-width="2" fill="none" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3>Frontend Development</h3>
                            <p>React, JavaScript, HTML5, CSS3, and modern responsive design frameworks.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2" />
                                <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2" />
                                <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2" />
                                <line x1="7" y1="7" x2="7" y2="11" stroke="currentColor" stroke-width="2" />
                                <line x1="11" y1="7" x2="11" y2="13" stroke="currentColor" stroke-width="2" />
                                <line x1="15" y1="7" x2="15" y2="9" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3>Backend Development</h3>
                            <p>Node.js, PHP, database design, API development, and cloud deployment.</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" />
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" />
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" />
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h3>Graphics Design</h3>
                            <p>Visual storytelling, branding, layout mastery, and crafting impactful, memorable designs that communicate clearly.</p>
                        </div>
                    </div>
                </div>


            <!-- Stats Section -->
            <div class="stats">
                <div class="stat-item">
                    <span class="stat-number">6+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Client Satisfaction</span>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <h3>Let's Connect</h3>
                <div class="social-links">
                    <a href="https://github.com/nwutobo24victor" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; margin: 0 10px; color: white; text-decoration: none; font-size: 18px; transition: opacity 0.3s ease;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="20" height="20" style="margin-right: 8px;">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.26.82-.577v-2.234c-3.338.724-4.033-1.61-4.033-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.082-.729.082-.729 1.204.084 1.837 1.236 1.837 1.236 1.07 1.835 2.807 1.305 3.492.997.108-.776.418-1.305.762-1.605-2.665-.3-5.467-1.332-5.467-5.932 0-1.31.467-2.382 1.235-3.222-.124-.303-.535-1.52.117-3.165 0 0 1.008-.322 3.3 1.23a11.52 11.52 0 0 1 3.003-.403 11.5 11.5 0 0 1 3.003.403c2.29-1.552 3.296-1.23 3.296-1.23.653 1.645.242 2.862.118 3.165.77.84 1.233 1.912 1.233 3.222 0 4.61-2.807 5.63-5.48 5.922.43.37.814 1.103.814 2.222v3.293c0 .32.216.694.825.576C20.565 21.796 24 17.298 24 12c0-6.63-5.37-12-12-12z" />
                        </svg>
                        GitHub
                    </a>

                    <a href="https://www.linkedin.com/in/victor-nwutobo-091214201" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; margin: 0 10px; color: white; text-decoration: none; font-size: 18px; transition: opacity 0.3s ease;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="20" height="20" style="margin-right: 8px;">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.327-.024-3.037-1.85-3.037-1.853 0-2.136 1.446-2.136 2.939v5.667h-3.554V9h3.414v1.561h.049c.476-.9 1.636-1.848 3.368-1.848 3.598 0 4.264 2.368 4.264 5.452v6.287zM5.337 7.433c-1.144 0-2.07-.927-2.07-2.07s.926-2.07 2.07-2.07 2.07.927 2.07 2.07-.926 2.07-2.07 2.07zM6.76 20.452H3.913V9H6.76v11.452zM22.225 0H1.771C.792 0 0 .771 0 1.729v20.542C0 23.229.792 24 1.771 24h20.451C23.2 24 24 23.229 24 22.271V1.729C24 .771 23.2 0 22.225 0z" />
                        </svg>
                        LinkedIn
                    </a>

                    <a href="https://web.facebook.com/nwutobo.victor" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; margin: 0 10px; color: white; text-decoration: none; font-size: 18px; transition: opacity 0.3s ease;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="20" height="20" style="margin-right: 8px;">
                            <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.464.099 2.797.143v3.24l-1.919.001c-1.504 0-1.796.715-1.796 1.763v2.312h3.587l-.467 3.622h-3.12V24h6.116c.729 0 1.326-.597 1.326-1.326V1.326C24 .597 23.403 0 22.675 0z" />
                        </svg>
                        Facebook
                    </a>

                    <a href="https://x.com/DrVNCharles1" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; margin: 0 10px; color: white; text-decoration: none; font-size: 18px; transition: opacity 0.3s ease;">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="20" height="20" style="margin-right: 8px;">
                            <path d="M20.188 3H23L15.437 10.75 24 21h-6.844l-5.313-6.594L5.75 21H2l8.125-8.875L0 3h7l4.875 6.094L20.188 3zm-2.25 16h1.5L7.688 5h-1.5L17.938 19z" />
                        </svg>
                        Twitter
                    </a>
                </div>
            </div>
            <div class="footer-text">
                © <?= date('Y') ?> Victor Nwutobo. All rights reserved.<br>
                Available for freelance and full-time opportunities<br>
            </div>
        </div>
    </div>
</body>

</html>


<?php
$emailBody = ob_get_clean();
?>
