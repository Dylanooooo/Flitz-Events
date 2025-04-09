<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Flitz-Events Stagiairs Portal</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!-- 1. Header -->
    <header>
        <div class="header-container">
            <h1>Welkom bij Flitz-Events Stagiairs Portal</h1>
            <div class="user-info">
                <span id="user-name">Stagiair</span>
                <form action="../auth/logout.php" method="post">
                    <button type="submit" id="logout-btn">Uitloggen</button>
                </form>

            </div>
        </div>
    </header>

    <!-- 2. Banner - met vereenvoudigde maar functionele structuur -->
    <div class="intro-banner-wrapper">
        <div class="intro-banner">
            <img src="../assets/images/FlitzBanner.png" alt="Flitz Events Banner" class="banner-img">
            <div class="banner-text">
                <div class="banner-container">
                    <h3>Welkom bij je stage!</h3>
                    <p>Belangrijke informatie: Stagebegeleider: Milan Laroes (te bereiken via chat) | Aanwezigheid:
                        Ma-Do 9:00-17:00
                </div>
            </div>
        </div>
    </div>

    <!-- 3. Navigatie -->
    <nav>
        <div class="container">
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-list">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="projecten.html">Projecten</a></li>
                <li><a href="chat.html">Chat</a></li>
            </ul>
        </div>
    </nav>

    <!-- De nav-spacer zal nu automatisch worden toegevoegd door JavaScript -->

    <!-- 4. Dashboard content -->
    <section id="dashboard">
        <div class="container">
            <h2>Jouw Dashboard</h2>

            <!-- Project Overzicht Sectie - Bovenaan en volledige breedte -->
            <div class="dashboard-widget featured-widget">
                <div class="widget-header">
                    <h3>Actief Project: Zomerfestival Noordwijk</h3>
                    <a href="projecten.html" class="button-small">Alle Projecten</a>
                </div>

                <div class="project-overview">
                    <!-- Vervang de bestaande meter met deze SVG-versie -->
                    <div class="project-progress-container">
                        <div class="svg-meter" data-percentage="35">
                            <svg width="200" height="100" viewBox="0 0 200 100">
                                <!-- Grijze achtergrond boog -->
                                <path class="meter-bg" d="M10,100 A90,90 0 0,1 190,100" stroke="#eee" stroke-width="10"
                                    fill="none" />
                                <!-- Gekleurde voortgangsboog -->
                                <path class="meter-fg" d="M10,100 A90,90 0 0,1 190,100" stroke="url(#gradient)"
                                    stroke-width="10" fill="none" />
                                <!-- Gradient definitie -->
                                <defs>
                                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" stop-color="#a71680" />
                                        <stop offset="100%" stop-color="#ec6708" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="meter-needle"></div>
                            <div class="meter-center">35%</div>
                        </div>
                        <div class="meter-label">Projectvoortgang</div>
                    </div>

                    <div class="project-details">
                        <div class="project-info">
                            <div class="info-item">
                                <span class="info-label">Start:</span>
                                <span class="info-value">15 april 2025</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Deadline:</span>
                                <span class="info-value">10 juni 2025</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Team:</span>
                                <div class="team-avatars">
                                    <span class="avatar">J</span>
                                    <span class="avatar">M</span>
                                    <span class="avatar">S</span>
                                    <span class="avatar">+2</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-tasks">
                        <h4>Te doen deze week:</h4>
                        <ul class="task-list">
                            <li class="task-item">
                                <input type="checkbox" id="task1" class="task-checkbox">
                                <label for="task1">Leverancierslijst controleren</label>
                                <span class="task-due">Deadline: 29 Maart</span>
                            </li>
                            <li class="task-item">
                                <input type="checkbox" id="task2" class="task-checkbox">
                                <label for="task2">Voorbereiden beachvolleybaltoernooi</label>
                                <span class="task-due">Deadline: 30 Maart</span>
                            </li>
                            <li class="task-item">
                                <input type="checkbox" id="task3" class="task-checkbox" checked>
                                <label for="task3">Contact opnemen met DJ's</label>
                                <span class="task-due">Afgerond</span>
                            </li>
                        </ul>
                        <a href="taken.html" class="view-all">Bekijk alle taken</a>
                    </div>
                </div>
            </div>

            <div class="dashboard-grid">
                <!-- Aankomende Shifts Widget -->
                <div class="dashboard-widget">
                    <h3>Aankomende Shifts</h3>
                    <div class="shifts-list">
                        <div class="shift-item">
                            <div class="shift-date">27 Maart 2025</div>
                            <div class="shift-time">09:00 - 17:00</div>
                            <div class="shift-location">Noordwijk Strand</div>
                        </div>
                        <div class="shift-item">
                            <div class="shift-date">29 Maart 2025</div>
                            <div class="shift-time">12:00 - 20:00</div>
                            <div class="shift-location">Scheveningen</div>
                        </div>
                    </div>
                    <a href="rooster.html" class="view-all">Bekijk volledige rooster</a>
                </div>

                <!-- Team Updates Widget -->
                <div class="dashboard-widget">
                    <h3>Team Updates</h3>
                    <div class="updates-list">
                        <div class="update-item">
                            <h4>Teamuitje</h4>
                            <p>Vergeet niet: ons teamuitje is gepland op 25 maart!</p>
                            <span class="date">18 maart 2025</span>
                        </div>
                        <div class="update-item">
                            <h4>Nieuwe Zomerplanning</h4>
                            <p>De planning voor de zomerperiode is nu beschikbaar.</p>
                            <span class="date">15 maart 2025</span>
                        </div>
                    </div>
                </div>

                <!-- Snelle Links Widget -->
                <div class="dashboard-widget">
                    <h3>Snelle Links</h3>
                    <ul class="quick-links">
                        <li><a href="rooster.html">Mijn Rooster</a></li>
                        <li><a href="projecten.html">Actieve Projecten</a></li>
                        <li><a href="training.html">Trainingsmateriaal</a></li>
                        <li><a href="docs/stagegids.pdf">Stagegids</a></li>
                    </ul>
                </div>

                <!-- Voortgang Widget -->
                <div class="dashboard-widget">
                    <h3>Jouw Voortgang</h3>
                    <div class="progress-bars">
                        <div class="progress-item">
                            <label>Competentie 1</label>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                            <span>75%</span>
                        </div>
                        <div class="progress-item">
                            <label>Competentie 2</label>
                            <div class="progress-bar">
                                <div class="progress" style="width: 45%"></div>
                            </div>
                            <span>45%</span>
                        </div>
                    </div>
                    <a href="voortgang.html" class="view-all">Bekijk gedetailleerde voortgang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Flitz-Events Stageportaal | Alle rechten voorbehouden</p>
        </div>
    </footer>

    <script src="../assets/js/scripts.js"></script>
</body>

</html>