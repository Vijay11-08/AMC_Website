<?php $pageTitle = 'About Us'; $activePage = 'about'; include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header" style="background-color: var(--primary-color); padding: 4rem 0; color: white; text-align: center;">
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

    <!-- Mission & Values -->
    <section class="section-padding" style="background-color: #f0f2f5;">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; gap: 3rem;">
                <div style="flex: 1; background: white; padding: 3rem; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Our Mission</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7;">To deliver robust, efficient, and future-ready engineering solutions that improve productivity and reliability for our clients across the globe.</p>
                </div>
                <div style="flex: 1;">
                    <h3 style="margin-bottom: 2rem;">Our Core Values</h3>
                    <div style="margin-bottom: 2rem;">
                        <h4 style="margin-bottom: 0.5rem;"><i class="fas fa-star" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Engineering Excellence</h4>
                        <p style="color: #666;">We allow for no compromises in quality and technical precision.</p>
                    </div>
                    <div style="margin-bottom: 2rem;">
                        <h4 style="margin-bottom: 0.5rem;"><i class="fas fa-handshake" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Integrity & Transparency</h4>
                        <p style="color: #666;">We build trust through honest communication and ethical practices.</p>
                    </div>
                    <div>
                        <h4 style="margin-bottom: 0.5rem;"><i class="fas fa-users" style="color: var(--accent-color); margin-right: 0.5rem;"></i> Long-Term Partnerships</h4>
                        <p style="color: #666;">We view our clients as partners and are dedicated to their long-term success.</p>
                    </div>
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
