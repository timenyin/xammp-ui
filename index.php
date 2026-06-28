<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalHost — Developer Workspace</title>

    <!-- Favicons -->
    <link href="assets/img/icons8-php-logo.svg" rel="icon" type="image/svg+xml">
    <link href="assets/img/icons8-php-logo.svg" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

    <!-- Retro Dashboard Main CSS -->
    <link href="assets/css/retro-dashboard.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Navigation Bar ======= -->
    <header class="retro-header">
        <div class="container retro-nav-container">
            <a href="index.php" class="retro-brand">
                <img src="assets/img/icons8-php-logo.svg" alt="PHP Logo">
                <div class="retro-brand-title">LocalHost</div>
            </a>

            <nav>
                <ul class="retro-nav-links">
                    <!-- 1. Home -->
                    <li class="retro-nav-item">
                        <a href="index.php" class="retro-nav-link active">
                            <i class="ri-home-4-line"></i> Home
                        </a>
                    </li>

                    <!-- 2. Recently Clicked Dropdown -->
                    <li class="retro-nav-item">
                        <a href="#" class="retro-nav-link" id="recentProjectsToggle">
                            <i class="ri-time-line"></i> Recent Projects <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <div class="retro-dropdown-menu" id="recentProjectsDropdown">
                            <!-- Populated dynamically via assets/js/recent-projects.js -->
                        </div>
                    </li>

                    <!-- 3. XAMPP Docs -->
                    <li class="retro-nav-item">
                        <a href="/dashboard" target="_blank" class="retro-nav-link">
                            <i class="ri-book-read-line"></i> XAMPP Docs
                        </a>
                    </li>

                    <!-- 4. phpMyAdmin -->
                    <li class="retro-nav-item">
                        <a href="/phpmyadmin" target="_blank" class="retro-nav-link">
                            <i class="ri-database-2-line"></i> phpMyAdmin
                        </a>
                    </li>

                    <!-- 5. GitHub -->
                    <li class="retro-nav-item">
                        <a href="https://github.com/timenyin" target="_blank" class="retro-nav-link">
                            <i class="ri-github-line"></i> GitHub
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section class="retro-hero">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-7">
                    <span class="hero-tag"><i class="ri-earth-line"></i> Local Environment Workspace</span>
                    <h1 class="hero-title">Crafting Modern <em>PHP Apps, APIs & Databases</em></h1>
                    <p class="hero-subtitle">
                        High-performance local development environment powered by Apache, MariaDB, and PHP. Streamlining web apps, REST microservices, and databases.
                    </p>

                    <!-- Quick Environment Info Bar -->
                    <div class="env-bar">
                        <div class="env-pill">
                            <i class="ri-server-line"></i>
                            <span>Server: <strong>Apache/XAMPP</strong></span>
                        </div>
                        <div class="env-divider"></div>
                        <div class="env-pill">
                            <i class="ri-code-s-slash-line"></i>
                            <span>PHP Version: <strong><?php echo phpversion(); ?></strong></span>
                        </div>
                        <div class="env-divider"></div>
                        <div class="env-pill">
                            <i class="ri-database-line"></i>
                            <span>Database: <strong>MariaDB</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block text-center">
                    <div class="hero-svg-wrapper">
                        <!-- Fully Animated Inline SVG with Prominent Monitor Leg -->
                        <svg class="hero-svg-inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 418.531">
                            <g transform="translate(-439.989 -276.123)">
                                <ellipse cx="182.923" cy="18.522" rx="182.923" ry="18.522" transform="translate(439.989 529.967)" fill="#e6e6e6"/>
                                <!-- Reverted Desk Pad to Default Neutral Grey -->
                                <ellipse cx="235.284" cy="32.008" rx="235.284" ry="32.008" transform="translate(929.421 630.638)" fill="#e6e6e6"/>
                                
                                <!-- Animated Connecting Cable -->
                                <path class="anim-wire" d="M100.67,218.8l-.022.089c-17.722-4.529-26.878-9.766-29.692-16.98-3.5-8.969,3.063-19.08,12.161-33.07,13.871-21.343,32.868-50.575,29.792-95.2C111.171,48.424,102.144,29.871,86.084,18.5,53.4-4.649,1.845,9.218,1.33,9.361L0,4.552c2.207-.611,54.312-14.65,88.948,9.859,17.355,12.281,27.088,32.095,28.935,58.884,3.19,46.284-17.135,77.562-30.587,98.259C79.013,184.3,73.026,193.5,75.6,200.091c2.144,5.489,10.493,9.928,26.281,13.96v0c75.948,18.464,214.74-25.18,229.868-72.938l4.754,1.5c-13.22,41.751-116.716,81.156-195.455,81.156-.539.007-1.08.01-1.619.01C126.357,223.785,113.411,221.761,100.67,218.8Z" transform="translate(754.094 408.116)" fill="#2f2e41" stroke="#2D5A46" stroke-width="2"/>
                                
                                <circle cx="2.52" cy="2.52" r="2.52" transform="translate(1160.898 296.637)" fill="#f2f2f2"/>
                                
                                <path d="M914.01,663.788v5.038H642.968v-4.031l.368-1.008,6.681-18.137H908.465Z" transform="translate(360.745 4.65)" fill="#fff"/>
                                <path d="M1110.4,758.515c-.491,2.111-2.358,4.338-6.569,6.444-15.113,7.557-45.845-2.016-45.845-2.016s-23.678-4.03-23.678-14.611a18.921,18.921,0,0,1,2.075-1.235c6.355-3.362,27.423-11.657,64.78.351a15.581,15.581,0,0,1,7.1,4.659C1109.773,753.877,1110.961,756.125,1110.4,758.515Z" transform="translate(268.664 -95.01)" fill="#d6d6e3"/>
                                <path d="M1110.817,758.515c-18.5,7.089-34.989,7.617-51.91-4.137-8.534-5.924-16.288-7.391-22.107-7.28,6.354-3.362,27.423-11.657,64.78.351a15.581,15.581,0,0,1,7.1,4.659C1110.194,753.877,1111.381,756.125,1110.817,758.515Z" transform="translate(268.245 -95.01)" fill="#fff"/>
                                <path d="M914.01,667.466V672.5H642.968v-4.031l.368-1.008Z" transform="translate(360.745 0.971)" fill="#d6d6e3"/>
                                
                                <!-- Server Blade 1 -->
                                <g transform="translate(491.732 302.128)">
                                    <path d="M841.281,486.854H593.826c-4.114,0-7.448-2.663-7.453-5.944V414.332c0-3.281,3.339-5.94,7.453-5.944H841.281c4.114,0,7.448,2.663,7.453,5.944v66.577C848.73,484.191,845.4,486.851,841.281,486.854Z" transform="translate(-586.373 -408.388)" fill="#1c2321"/>
                                    <path d="M3.727,0H61.864a3.727,3.727,0,1,1,0,7.453H3.727A3.727,3.727,0,0,1,3.727,0Z" transform="translate(38.758 22.36)" fill="#f2f2f2"/>
                                    <circle class="anim-led-1" cx="4.473" cy="4.473" r="4.473" transform="translate(186.336 22.36)"/>
                                    <circle class="anim-led-2" cx="4.473" cy="4.473" r="4.473" transform="translate(201.244 22.36)"/>
                                    <circle class="anim-led-3" cx="4.473" cy="4.473" r="4.473" transform="translate(216.15 22.36)"/>
                                </g>
                                
                                <!-- Server Blade 2 -->
                                <g transform="translate(491.732 383.446)">
                                    <path d="M841.281,599.908H593.826c-4.114,0-7.448-2.663-7.453-5.944V527.386c0-3.281,3.339-5.94,7.453-5.944H841.281c4.114,0,7.448,2.663,7.453,5.944v66.577c0,3.282-3.338,5.941-7.453,5.945Z" transform="translate(-586.373 -521.442)" fill="#090814"/>
                                    <path d="M3.727,0H61.864a3.727,3.727,0,1,1,0,7.453H3.727A3.727,3.727,0,0,1,3.727,0Z" transform="translate(38.758 22.361)" fill="#1c2321"/>
                                    <circle class="anim-led-4" cx="4.473" cy="4.473" r="4.473" transform="translate(186.336 22.361)"/>
                                    <circle class="anim-led-5" cx="4.473" cy="4.473" r="4.473" transform="translate(201.244 22.361)"/>
                                    <circle class="anim-led-6" cx="4.473" cy="4.473" r="4.473" transform="translate(216.15 22.361)"/>
                                </g>
                                
                                <!-- Server Blade 3 -->
                                <g transform="translate(491.732 464.764)">
                                    <path d="M841.281,712.962H593.826c-4.114,0-7.448-2.663-7.453-5.944V640.44c0-3.281,3.339-5.94,7.453-5.944H841.281c4.114,0,7.448,2.663,7.453,5.944v66.578C848.729,710.3,845.395,712.958,841.281,712.962Z" transform="translate(-586.373 -634.496)" fill="#090814"/>
                                    <path d="M3.727,0H61.864a3.727,3.727,0,1,1,0,7.453H3.727A3.727,3.727,0,0,1,3.727,0Z" transform="translate(38.758 22.362)" fill="#1c2321"/>
                                    <circle class="anim-led-7" cx="4.473" cy="4.473" r="4.473" transform="translate(186.336 22.362)"/>
                                    <circle class="anim-led-8" cx="4.473" cy="4.473" r="4.473" transform="translate(201.244 22.362)"/>
                                    <circle class="anim-led-9" cx="4.473" cy="4.473" r="4.473" transform="translate(216.15 22.362)"/>
                                </g>

                                <rect width="11.28" height="1.99" transform="translate(1102.513 637.067)" fill="#b6b3c5"/>
                                <rect width="11.28" height="1.99" transform="translate(1202.37 637.4)" fill="#b6b3c5"/>
                                
                                <!-- PROMINENT MONITOR STAND NECK / LEG COLUMN -->
                                <path class="anim-monitor-leg" d="M302.243,370.945a16.253,16.253,0,0,1-32.071,0H229.146v88.909H343.27V370.945Z" transform="translate(872.011 177.543)"/>
                                
                                <rect width="114.122" height="3.095" transform="translate(1101.49 630.354)" fill="#fff"/>
                                
                                <!-- Screen Frame & Animated Modules -->
                                <path d="M465.387,296.6H6.362A6.369,6.369,0,0,1,0,290.238V28.273A6.369,6.369,0,0,1,6.362,21.91H465.387a6.369,6.369,0,0,1,6.362,6.363V290.238a6.368,6.368,0,0,1-6.362,6.362Z" transform="translate(922.345 254.213)" fill="#090814"/>
                                <rect width="449.191" height="253.458" transform="translate(932.541 286.004)" fill="#fff"/>
                                <rect class="anim-screen-sidebar" width="56.329" height="187.763" rx="4" transform="translate(995.431 332.245)"/>
                                <rect width="253.48" height="130.026" rx="6" transform="translate(1068.19 389.983)" fill="#f2f2f2"/>
                                <rect class="anim-screen-header" width="253.48" height="46.471" rx="6" transform="translate(1068.19 332.245)"/>
                                <rect width="326.238" height="17.368" rx="8" transform="translate(995.431 303.612)" fill="#1c2321"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Main Projects Directory ======= -->
    <main class="retro-projects-section">
        <div class="container">
            <div class="section-header-wrap">
                <div>
                    <div class="section-eyebrow">Project Directory</div>
                    <h2 class="section-main-title">Local Workspace Projects</h2>
                </div>

                <!-- Live Search / Filter Input -->
                <div class="project-search-box">
                    <i class="ri-search-line"></i>
                    <input type="text" id="projectSearchInput" placeholder="Filter projects...">
                </div>
            </div>

            <div class="row g-3" id="projectsGrid">
                <?php
                $docRoot = $_SERVER['DOCUMENT_ROOT'];
                $ignoreList = array('.', '..', '.git', '.vscode', '.qodo', 'webalizer', 'xampp', 'dashboard', 'bitnami.css', 'favicon.ico', 'index.php', 'index_remead.php', 'applications.html', '127_0_0_1.sql');

                if (is_dir($docRoot)) {
                    $entries = scandir($docRoot);
                    foreach ($entries as $entry) {
                        if (in_array($entry, $ignoreList)) continue;

                        $fullPath = $docRoot . '/' . $entry;
                        $isDir = is_dir($fullPath);
                        $ext = strtolower(pathinfo($entry, PATHINFO_EXTENSION));

                        if ($isDir) {
                            $badgeText = 'project folder';
                            $badgeClass = 'badge-folder';
                            $iconBoxClass = '';
                            $iconClass = 'ri-folder-3-line';
                        } else if (in_array($ext, ['zip', 'tar', 'gz', 'rar', '7z', 'sql'])) {
                            $badgeText = ($ext == 'sql') ? 'sql database' : $ext . ' archive';
                            $badgeClass = 'badge-archive';
                            $iconBoxClass = 'icon-archive';
                            $iconClass = ($ext == 'sql') ? 'ri-database-2-line' : 'ri-archive-line';
                        } else {
                            $badgeText = 'file';
                            $badgeClass = 'badge-file';
                            $iconBoxClass = 'icon-file';
                            $iconClass = 'ri-file-code-line';
                        }
                ?>
                        <div class="col-lg-4 col-md-6 project-card-col" data-project-name="<?php echo htmlspecialchars($entry); ?>">
                            <div class="project-card">
                                <div>
                                    <div class="project-card-header">
                                        <div class="project-icon <?php echo $iconBoxClass; ?>">
                                            <i class="<?php echo $iconClass; ?>"></i>
                                        </div>
                                        <span class="project-badge <?php echo $badgeClass; ?>"><?php echo $badgeText; ?></span>
                                    </div>

                                    <h3 class="project-title">
                                        <a href="<?php echo htmlspecialchars($entry); ?>" target="_blank" class="js-project-link" data-project-name="<?php echo htmlspecialchars($entry); ?>">
                                            <?php echo htmlspecialchars(ucfirst($entry)); ?>
                                        </a>
                                    </h3>

                                    <p class="project-meta">
                                        <i class="ri-time-line me-1"></i> Modified: <?php echo date("M d, Y", filemtime($fullPath)); ?>
                                    </p>
                                </div>

                                <div class="project-card-footer">
                                    <span class="project-url-text">localhost/<?php echo htmlspecialchars($entry); ?></span>
                                    <a href="<?php echo htmlspecialchars($entry); ?>" target="_blank" class="btn-open-project js-project-link" data-project-name="<?php echo htmlspecialchars($entry); ?>">
                                        Open <i class="ri-arrow-right-line ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </main>

    <!-- ======= Footer ======= -->
    <footer class="retro-footer">
        <div class="container footer-content">
            <div>
                <strong>LocalHost Dashboard</strong> &mdash; Developer Edition
            </div>
            <div class="footer-links">
                <a href="/dashboard/phpinfo.php" target="_blank"><i class="ri-information-line me-1"></i>PHP Info</a>
                <span class="text-muted">|</span>
                <span>Crafted by <a href="https://github.com/timenyin" target="_blank">Harmony</a></span>
            </div>
        </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS for Recent Projects Tracking & Search -->
    <script src="assets/js/recent-projects.js"></script>
</body>

</html>