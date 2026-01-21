<?php $pageTitle = 'Home'; $activePage = 'home'; include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(rgba(11, 28, 62, 0.85), rgba(11, 28, 62, 0.7)), url('images/hero_bg.png'); background-size: cover; background-position: center; height: 90vh; display: flex; align-items: center; color: white; text-align: center;">
        <div class="container">
            <h1 style="font-size: 3rem; margin-bottom: 1.5rem; text-transform: uppercase; letter-spacing: 1px;">Engineering Automation that Drives Performance</h1>
            <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto 2.5rem; color: #e0e0e0;">ABC Engineering & Consultancy delivers intelligent automation, control system design, and industrial engineering solutions tailored for modern manufacturing.</p>
            <div class="cta-group">
                <a href="contact.php" class="btn primary-btn" style="margin-right: 1rem;">Get a Consultation</a>
                <a href="services.php" class="btn secondary-btn">View Our Services</a>
            </div>
        </div>
    </section>

    <!-- Core Services Snapshot -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Core Services</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;">
                <!-- Service 1 -->
                <div class="service-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <i class="fas fa-robot" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1.5rem;"></i>
                    <h3>Industrial Automation</h3>
                    <p>Advanced PLC, HMI, and SCADA solutions for seamless manufacturing operations.</p>
                </div>
                <!-- Service 2 -->
                <div class="service-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <i class="fas fa-microchip" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1.5rem;"></i>
                    <h3>Control Panel & PLC Design</h3>
                    <p>Custom electrical schematics and panel layouts compliant with global standards.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-card animate-on-scroll" style="transition-delay: 0.3s;">
                    <i class="fas fa-drafting-compass" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1.5rem;"></i>
                    <h3>Engineering Consultancy</h3>
                    <p>Expert guidance on system architecture, safety implementation, and cost optimization.</p>
                </div>
                <!-- Service 4 -->
                <div class="service-card animate-on-scroll" style="transition-delay: 0.4s;">
                    <i class="fas fa-tools" style="font-size: 3rem; color: var(--accent-color); margin-bottom: 1.5rem;"></i>
                    <h3>Commissioning & Support</h3>
                    <p>On-site testing, debugging, and long-term technical support for your systems.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why ABC Section -->
    <section class="section-padding animate-on-scroll" style="background-color: var(--primary-color); color: white;">
        <div class="container">
            <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 4rem;">
                <div style="flex: 1;">
                    <h2 style="color: white; margin-bottom: 2rem;">Why Choose ABC?</h2>
                    <ul style="font-size: 1.1rem;">
                        <li style="margin-bottom: 1.5rem; display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: var(--accent-color); margin-right: 1rem;"></i> Experienced Automation Engineers</li>
                        <li style="margin-bottom: 1.5rem; display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: var(--accent-color); margin-right: 1rem;"></i> Industry-Focused Solutions</li>
                        <li style="margin-bottom: 1.5rem; display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: var(--accent-color); margin-right: 1rem;"></i> Cost-Effective & Scalable Designs</li>
                        <li style="margin-bottom: 1.5rem; display: flex; align-items: center;"><i class="fas fa-check-circle" style="color: var(--accent-color); margin-right: 1rem;"></i> Strong Documentation & Support</li>
                    </ul>
                </div>
                <div style="flex: 1; background: rgba(255,255,255,0.1); padding: 3rem; border-radius: 8px; border-left: 5px solid var(--accent-color);">
                    <h3 style="color: white; margin-bottom: 1rem;">Our Mission</h3>
                    <p style="font-style: italic; font-size: 1.1rem; line-height: 1.8;">"To deliver robust, efficient, and future-ready engineering solutions that improve productivity and reliability."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Showcase Section (NEW) -->
    <section class="section-padding" style="background-color: #f4f4f4;">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Featured Projects</h2>
            <div class="project-grid">
                <!-- Project 1 -->
                <div class="project-card animate-on-scroll">
                    <div class="project-image">
                        <img src="images/project1.png" alt="Automated Assembly Line">
                    </div>
                    <div class="project-content">
                        <h3>Automated Assembly Line</h3>
                        <p>Turnkey robotic assembly line integration for a leading automotive parts manufacturer.</p>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="project-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <div class="project-image">
                        <img src="images/project2.png" alt="Control Panel Design">
                    </div>
                    <div class="project-content">
                        <h3>Custom Control Panels</h3>
                        <p>Design and fabrication of IP65 rated control panels for pharmaceutical packaging.</p>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="project-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <div class="project-image">
                        <img src="images/project3.png" alt="SCADA System">
                    </div>
                    <div class="project-content">
                        <h3>SCADA Monitoring System</h3>
                        <p>Centralized data acquisition and monitoring system for a water treatment facility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section (NEW) -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title animate-on-scroll">What Our Clients Say</h2>
            <div class="testimonial-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card animate-on-scroll">
                    <p class="testimonial-text">"ABC Engineering transformed our production line. Their automation solutions increased our efficiency by 40%. Highly recommended!"</p>
                    <div class="client-info">
                        <div class="client-avatar">JD</div>
                        <div class="client-details">
                            <h5>John Doe</h5>
                            <span>Plant Manager, AutoCorp</span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="testimonial-card animate-on-scroll" style="transition-delay: 0.1s;">
                    <p class="testimonial-text">"Professional, knowledgeable, and reliable. The control panels they designed were top-notch and delivered on time."</p>
                    <div class="client-info">
                        <div class="client-avatar">SM</div>
                        <div class="client-details">
                            <h5>Sarah Miller</h5>
                            <span>Director, PharmaTech</span>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="testimonial-card animate-on-scroll" style="transition-delay: 0.2s;">
                    <p class="testimonial-text">"Excellent support even after the project was completed. Their team is truly dedicated to client success."</p>
                    <div class="client-info">
                        <div class="client-avatar">RK</div>
                        <div class="client-details">
                            <h5>Rajesh Kumar</h5>
                            <span>Operations Head, InduSys</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Served -->
    <section class="section-padding">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Industries We Serve</h2>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem;">
                <span class="animate-on-scroll" style="background: white; padding: 1rem 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 50px; font-weight: 500; border: 1px solid #eee;">CNC & Machine Tools</span>
                <span class="animate-on-scroll" style="background: white; padding: 1rem 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 50px; font-weight: 500; border: 1px solid #eee; transition-delay: 0.1s;">Manufacturing Plants</span>
                <span class="animate-on-scroll" style="background: white; padding: 1rem 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 50px; font-weight: 500; border: 1px solid #eee; transition-delay: 0.2s;">OEMs & System Integrators</span>
                <span class="animate-on-scroll" style="background: white; padding: 1rem 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 50px; font-weight: 500; border: 1px solid #eee; transition-delay: 0.3s;">Special Purpose Machines (SPM)</span>
                <span class="animate-on-scroll" style="background: white; padding: 1rem 2rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 50px; font-weight: 500; border: 1px solid #eee; transition-delay: 0.4s;">Process & Discrete Automation</span>
            </div>
        </div>
    </section>

    <!-- Trusted Manufacturers (Expanded) -->
    <section class="section-padding" style="background-color: #f9f9f9;">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Trusted By Leading Manufacturers</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
                
                <!-- Client 1 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color);">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">Global Motors</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Automotive Manufacturing</span>
                    <p style="font-size: 0.9rem; color: #555;">Complete robotic welding line integration and safety validation.</p>
                </div>

                <!-- Client 2 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color); transition-delay: 0.1s;">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">PharmaCare Inc.</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Pharmaceuticals</span>
                    <p style="font-size: 0.9rem; color: #555;">Validatable HVAC control system upgrade for clean rooms.</p>
                </div>

                <!-- Client 3 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color); transition-delay: 0.2s;">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">SteelWorks Corp</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Heavy Industry</span>
                    <p style="font-size: 0.9rem; color: #555;">Automated crane control retrofit with anti-sway technology.</p>
                </div>

                <!-- Client 4 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color); transition-delay: 0.3s;">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">AgriTech Solutions</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Food & Beverage</span>
                    <p style="font-size: 0.9rem; color: #555;">High-speed packaging conveyor synchronization system.</p>
                </div>

                <!-- Client 5 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color);">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">Precision Tools</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Precision Machining</span>
                    <p style="font-size: 0.9rem; color: #555;">IoT data collection integration for CNC machine fleet.</p>
                </div>

                <!-- Client 6 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color); transition-delay: 0.1s;">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">EcoEnergy Systems</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Renewable Energy</span>
                    <p style="font-size: 0.9rem; color: #555;">Centralized SCADA for 50MW solar power plant.</p>
                </div>

                <!-- Client 7 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color); transition-delay: 0.2s;">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">Future Foods</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">FMCG</span>
                    <p style="font-size: 0.9rem; color: #555;">Recipe management automation for batch processing.</p>
                </div>

                <!-- Client 8 -->
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); border-left: 4px solid var(--accent-color); transition-delay: 0.3s;">
                    <h4 style="margin-bottom: 0.3rem; color: var(--primary-color);">ChemSynth Ltd</h4>
                    <span style="display: block; font-size: 0.9rem; color: #777; margin-bottom: 0.8rem; font-weight: 500;">Chemical Processing</span>
                    <p style="font-size: 0.9rem; color: #555;">SIL 3 Safety PLC implementation for reactor control.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section style="background-color: var(--secondary-color); padding: 4rem 0; text-align: center;">
        <div class="container">
            <h2 style="margin-bottom: 1rem;">Looking for a Reliable Automation Partner?</h2>
            <p style="margin-bottom: 2rem; font-size: 1.1rem;">Let's discuss how we can engineer success for your business.</p>
            <a href="contact.php" class="btn primary-btn">Talk to Our Engineers</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
