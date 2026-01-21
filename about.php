<?php $pageTitle = 'About Us'; $activePage = 'about'; include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>About Us</h1>
            <p>Our story, mission, and values.</p>
        </div>
    </section>

    <!-- Who We Are -->
    <section class="section-padding">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <h2 style="margin-bottom: 1.5rem;">Who We Are</h2>
                <p style="font-size: 1.1rem; color: #555; margin-bottom: 2rem;">
                    ABC Engineering & Consultancy is a technology-driven firm specializing in automation, control systems, and engineering design services for industrial applications. We bridge the gap between complex engineering challenges and practical, efficient solutions.
                </p>
                <div style="height: 4px; width: 60px; background-color: var(--accent-color); margin: 0 auto;"></div>
            </div>
        </div>
    </section>

    <!-- History Timeline -->
    <section class="section-padding" style="background-color: #f9f9f9;">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Our Journey</h2>
            <div class="timeline">
                <div class="timeline-container left animate-on-scroll">
                    <div class="timeline-content">
                        <h3>2015</h3>
                        <p>Founded by a group of passionate engineers with a vision to revolutionize industrial automation.</p>
                    </div>
                </div>
                <div class="timeline-container right animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="timeline-content">
                        <h3>2018</h3>
                        <p>Expanded operations to cover pan-India projects and partnered with major PLC manufacturers.</p>
                    </div>
                </div>
                <div class="timeline-container left animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="timeline-content">
                        <h3>2021</h3>
                        <p>Achieved ISO 9001:2015 certification and launched our in-house control panel manufacturing unit.</p>
                    </div>
                </div>
                <div class="timeline-container right animate-on-scroll" style="transition-delay: 0.3s;">
                    <div class="timeline-content">
                        <h3>2024</h3>
                        <p>Celebrating over 100+ successful projects and expanding into IoT and Industry 4.0 solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Meet Our Leaders</h2>
            <div class="team-grid">
                <!-- Member 1 -->
                <div class="team-card animate-on-scroll">
                    <div class="team-img">
                        <img src="images/team1.png" alt="Engineering Manager">
                    </div>
                    <div class="team-info">
                        <h3>James Wilson</h3>
                        <p>Managing Director</p>
                        <span>15+ years of experience in Industrial Automation and System Integration.</span>
                    </div>
                </div>
                <!-- Member 2 -->
                <div class="team-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="team-img">
                        <img src="images/team2.png" alt="Senior Engineer">
                    </div>
                    <div class="team-info">
                        <h3>Anita Roy</h3>
                        <p>Technical Head</p>
                        <span>Expert in SCADA systems and IoT-based industrial solutions.</span>
                    </div>
                </div>
                <!-- Member 3 -->
                <div class="team-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="team-img" style="background: #eee; display: flex; align-items: center; justify-content: center; color: #999; font-size: 3rem;">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="team-info">
                        <h3>Robert Chang</h3>
                        <p>Operations Director</p>
                        <span>Ensuring seamless execution and delivery of all our projects.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients Setup -->
    <section class="section-padding" style="background-color: #f0f2f5;">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Our Esteemed Clients</h2>
            <div class="clients-grid">
                <div class="client-logo-box animate-on-scroll">
                   <span style="font-weight: 700; color: #555; font-size: 1.2rem;">AUTO<span style="color:var(--accent-color)">CORP</span></span>
                </div>
                <div class="client-logo-box animate-on-scroll" style="transition-delay: 0.1s;">
                    <span style="font-weight: 700; color: #555; font-size: 1.2rem;">TECH<span style="color:var(--accent-color)">MECH</span></span>
                </div>
                <div class="client-logo-box animate-on-scroll" style="transition-delay: 0.2s;">
                    <span style="font-weight: 700; color: #555; font-size: 1.2rem;">PHARMA<span style="color:var(--accent-color)">PLUS</span></span>
                </div>
                <div class="client-logo-box animate-on-scroll" style="transition-delay: 0.3s;">
                    <span style="font-weight: 700; color: #555; font-size: 1.2rem;">IND<span style="color:var(--accent-color)">USTRIES</span></span>
                </div>
                <div class="client-logo-box animate-on-scroll" style="transition-delay: 0.4s;">
                    <span style="font-weight: 700; color: #555; font-size: 1.2rem;">SOLAR<span style="color:var(--accent-color)">SYS</span></span>
                </div>
                <div class="client-logo-box animate-on-scroll" style="transition-delay: 0.5s;">
                    <span style="font-weight: 700; color: #555; font-size: 1.2rem;">AERO<span style="color:var(--accent-color)">DYN</span></span>
                </div>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section style="background-color: var(--primary-color); padding: 4rem 0; text-align: center; color: white;">
        <div class="container">
            <h2 style="color: white; margin-bottom: 1rem;">Join Our Network of Satisfied Clients</h2>
            <a href="contact.php" class="btn primary-btn" style="margin-top: 1.5rem;">Contact Us Today</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
