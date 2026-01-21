<?php $pageTitle = 'Contact Us'; $activePage = 'contact'; include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header" style="background-color: var(--primary-color); padding: 4rem 0; color: white; text-align: center;">
        <div class="container">
            <h1>Contact Us</h1>
            <p>Get in touch for expert engineering solutions.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="section-padding">
        <div class="container">
            
            <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                <div style="background-color: #d4edda; color: #155724; padding: 1rem; margin-bottom: 2rem; border-radius: 4px; border: 1px solid #c3e6cb; text-align: center;">
                    <i class="fas fa-check-circle"></i> Thank you! Your inquiry has been sent successfully. We will contact you shortly.
                </div>
            <?php endif; ?>

            <div style="display: flex; flex-wrap: wrap; gap: 4rem;">
                
                <!-- Contact Info -->
                <div style="flex: 1; min-width: 300px;">
                    <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Contact Information</h2>
                    
                    <div style="margin-bottom: 2rem; display: flex;">
                        <div style="margin-right: 1.5rem; color: var(--accent-color); font-size: 1.5rem;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">Location</h4>
                            <p style="color: #666;">Office No. 123, Industrial Area Phase 1,<br>Bangalore, Karnataka, India.</p>
                        </div>
                    </div>

                    <div style="margin-bottom: 2rem; display: flex;">
                        <div style="margin-right: 1.5rem; color: var(--accent-color); font-size: 1.5rem;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">Email Us</h4>
                            <p style="color: #666;">info@abc.in</p>
                            <p style="font-size: 0.9rem; color: #999;">(Looking for domain pricing? Check below)</p>
                        </div>
                    </div>

                    <div style="margin-bottom: 2rem; display: flex;">
                        <div style="margin-right: 1.5rem; color: var(--accent-color); font-size: 1.5rem;">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 0.5rem;">Call Us</h4>
                            <p style="color: #666;">+91-1234567890</p>
                        </div>
                    </div>

                    <div style="background: #f9f9f9; padding: 1.5rem; border-left: 4px solid var(--accent-color); margin-top: 2rem;">
                        <p style="font-style: italic; color: #555;">"We are ready to partner with you on your next automation project."</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div style="flex: 1; min-width: 300px; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <h2 style="margin-bottom: 1.5rem;">Send an Inquiry</h2>
                    <form action="process_contact.php" method="POST">
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Your Name</label>
                            <input type="text" name="name" required placeholder="John Doe" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
                        </div>
                        
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Company Name</label>
                            <input type="text" name="company" placeholder="Your Company" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
                        </div>

                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Email Address</label>
                            <input type="email" name="email" required placeholder="john@example.com" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
                        </div>

                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91-9876543210" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 4px; font-family: inherit;">
                        </div>

                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Requirement Description</label>
                            <textarea name="message" required rows="4" placeholder="Tell us about your project..." style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 4px; font-family: inherit; resize: vertical;"></textarea>
                        </div>

                        <button type="submit" class="btn primary-btn" style="width: 100%; border: none;">Submit Inquiry</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
