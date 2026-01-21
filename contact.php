<?php $pageTitle = 'Contact Us'; $activePage = 'contact'; include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
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

                    <!-- Business Hours -->
                    <div style="margin-top: 3rem;">
                        <h3 style="margin-bottom: 1rem; font-size: 1.2rem;">Business Hours</h3>
                        <ul style="color: #666;">
                            <li style="margin-bottom: 0.5rem;"><strong>Mon - Fri:</strong> 9:00 AM - 6:00 PM</li>
                            <li style="margin-bottom: 0.5rem;"><strong>Saturday:</strong> 9:00 AM - 1:00 PM</li>
                            <li><strong>Sunday:</strong> Closed</li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Form -->
                <div style="flex: 1; min-width: 300px; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
                    <h2 style="margin-bottom: 1.5rem;">Send an Inquiry</h2>
                    <form action="process_contact.php" method="POST" class="modern-form">
                        <div class="form-group">
                            <input type="text" name="name" required placeholder=" ">
                            <label>Your Name</label>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="company" placeholder=" ">
                            <label>Company Name</label>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" required placeholder=" ">
                            <label>Email Address</label>
                        </div>

                        <div class="form-group">
                            <input type="tel" name="phone" placeholder=" ">
                            <label>Phone Number</label>
                        </div>

                        <div class="form-group">
                            <textarea name="message" required rows="4" placeholder=" "></textarea>
                            <label>Requirement Description</label>
                        </div>

                        <button type="submit" class="btn primary-btn" style="width: 100%; border: none;">Submit Inquiry</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
