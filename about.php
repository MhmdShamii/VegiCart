<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/about.css" />
    <title>About Us - VeggieCart</title>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="./rec/Logo.png" alt="VeggieCart Logo" />
            <h3>VeggieCart</h3>
        </div>
        <ul>
            <li>
                <a href="./index.php">
                    <i class="fa-solid fa-store"></i>
                    <p>Store</p>
                </a>
            </li>
            <li>
                <a href="dashboard.php">
                    <i class="fa-solid fa-table"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="active">
                <a href="about.php">
                    <i class="fa-solid fa-user"></i>
                    <p>About Us</p>
                </a>
            </li>
            <li>
                <a href="contact.php">
                    <i class="fa-solid fa-phone"></i>
                    <p>Contact</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="main">
        <div class="body">
            <section class="about-section">
                <div class="about-content">
                    <h1>About VeggieCart</h1>
                    <p class="tagline">Fresh. Organic. Delivered.</p>

                    <div class="about-card">
                        <h2><i class="fas fa-leaf"></i> Our Story</h2>
                        <p>Founded in 2023, VeggieCart began as a small family-owned business with a passion for bringing fresh, organic produce directly to our community.</p>

                        <table class="timeline-table">
                            <tr>
                                <th colspan="2">Company Milestones</th>
                            </tr>
                            <tr>
                                <td rowspan="2" class="year-cell">2023</td>
                                <td>Founded as local farmers' market stand</td>
                            </tr>
                            <tr>
                                <td>First 100 customers served</td>
                            </tr>
                            <tr>
                                <td class="year-cell">2024</td>
                                <td>Launched online platform</td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="year-cell">2025</td>
                                <td>Expanded to regional delivery</td>
                            </tr>
                            <tr>
                                <td>Partnered with 20+ local farms</td>
                            </tr>
                        </table>
                        <button id="showMoreTimeline" class="expand-btn">Show More Milestones <i class="fas fa-chevron-down"></i></button>
                        <div id="extraTimeline" class="hidden-content">
                            <table class="timeline-table">
                                <tr>
                                    <td class="year-cell">2026</td>
                                    <td>Planned expansion to neighboring states</td>
                                </tr>
                                <tr>
                                    <td class="year-cell">2027</td>
                                    <td>Goal: National organic certification</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="about-card">
                        <h2><i class="fas fa-bullseye"></i> Our Mission & Values</h2>

                        <div class="mission-grid">
                            <div class="mission-item">
                                <h3><i class="fas fa-seedling"></i> Quality Promise</h3>
                                <ul class="checklist">
                                    <li>Daily farm-fresh deliveries</li>
                                    <li>100% organic certification</li>
                                    <li>Strict quality control</li>
                                </ul>
                            </div>
                            <div class="mission-item">
                                <h3><i class="fas fa-globe"></i> Sustainability</h3>
                                <ul class="leaf-list">
                                    <li>Zero-waste packaging</li>
                                    <li>Carbon-neutral delivery</li>
                                    <li>Water conservation</li>
                                </ul>
                            </div>
                        </div>

                        <div class="values-filter">
                            <label for="valueFilter">Filter Values:</label>
                            <select id="valueFilter" class="filter-select">
                                <option value="all">Show All</option>
                                <option value="community">Community</option>
                                <option value="transparency">Transparency</option>
                                <option value="innovation">Innovation</option>
                            </select>
                        </div>

                        <table class="values-table">
                            <thead>
                                <tr>
                                    <th>Core Value</th>
                                    <th>How We Implement It</th>
                                    <th>Impact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-value="community">
                                    <td>Community Support</td>
                                    <td>Work with local farmers</td>
                                    <td>90% of produce sourced within 50 miles</td>
                                </tr>
                                <tr data-value="transparency">
                                    <td>Transparency</td>
                                    <td>Farm origin tracking</td>
                                    <td>Customers know exactly where food comes from</td>
                                </tr>
                                <tr data-value="innovation">
                                    <td>Innovation</td>
                                    <td>Smart delivery routing</td>
                                    <td>Reduced delivery emissions by 30%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="about-card stats-card">
                        <h2><i class="fas fa-chart-line"></i> By The Numbers</h2>

                        <div id="statsList" class="stats-view">
                            <ol class="numbered-stats">
                                <li>Served <strong>5,000+</strong> happy customers</li>
                                <li>Delivered <strong>25,000+</strong> produce boxes</li>
                                <li>Supported <strong>30+</strong> local farms</li>
                                <li>Achieved <strong>98%</strong> customer satisfaction</li>
                            </ol>

                            <table class="stats-table">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                        <th>Customers</th>
                                        <th>Produce Varieties</th>
                                        <th>Delivery Areas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2023</td>
                                        <td>150</td>
                                        <td>25</td>
                                        <td>1 city</td>
                                    </tr>
                                    <tr>
                                        <td>2024</td>
                                        <td>1,200</td>
                                        <td>45</td>
                                        <td>3 cities</td>
                                    </tr>
                                    <tr>
                                        <td>2025</td>
                                        <td>5,000</td>
                                        <td>80+</td>
                                        <td>Regional</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div id="statsChart" class="stats-view hidden">
                            <canvas id="growthChart" width="400" height="300"></canvas>
                        </div>
                    </div>

                    <div class="team-section">
                        <h2><i class="fas fa-users"></i> Meet Our Team</h2>

                        <div class="team-display">
                            <table class="team-table">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Photo</th>
                                        <th colspan="2">Team Member</th>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-photo" style="background-image: url('./rec/mhmd.jpeg')"></div>
                                        </td>
                                        <td>Mhmd shami</td>
                                        <td>Founder & CEO</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-photo" style="background-image: url('./rec/yoyy.jpeg')"></div>
                                        </td>
                                        <td>Aya khalife</td>
                                        <td>Head of Operations</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="department-structure">
                                <h3><i class="fas fa-sitemap"></i> Our Structure</h3>
                                <div class="org-chart">
                                    <div class="org-level">
                                        <div class="org-head">Executive Team</div>
                                        <div class="org-members">
                                            <div class="org-member">CEO</div>
                                            <div class="org-member">Operations</div>
                                        </div>
                                    </div>
                                    <div class="org-level">
                                        <div class="org-head">Farm Relations</div>
                                        <div class="org-members">
                                            <div class="org-member">Sourcing</div>
                                            <div class="org-member">Quality Control</div>
                                        </div>
                                    </div>
                                    <div class="org-level">
                                        <div class="org-head">Customer Service</div>
                                        <div class="org-members">
                                            <div class="org-member">Support</div>
                                            <div class="org-member">Delivery</div>
                                        </div>
                                    </div>
                                </div>
                                <button id="viewFullTeam" class="view-more-btn">View Full Team Directory</button>
                            </div>
                        </div>

                        <div id="teamModal" class="modal">
                            <div class="modal-content">
                                <span class="close-modal">&times;</span>
                                <h3>Full Team Directory</h3>
                                <div class="team-grid" id="teamGrid">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="js/about.js"></script>
</body>

</html>