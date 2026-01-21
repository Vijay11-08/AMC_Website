<?php $pageTitle = 'Our Services'; $activePage = 'services'; include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive engineering & automation solutions.</p>
        </div>
    </section>

    <!-- Services Detail -->
    <section class="section-padding">
        <div class="container">
        <div class="container">
            <h2 class="section-title animate-on-scroll">What We Offer</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem;">
                
                <!-- Service 1: Industrial Automation -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left;">
                    <img src="images/service 1.png" alt="Industrial Automation" class="service-card-image">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-robot" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Industrial Automation</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Complete automation lifecycle management from concept to commissioning.</p>
                        <ul style="list-style: none; padding: 0;">
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> PLC, HMI, SCADA Development</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Servo & Motion Control</li>
                        </ul>
                        </ul>
                    </div>
                </div>

                <!-- Service 2: Control Panel Design -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left; transition-delay: 0.1s;">
                    <img src="images/service 2.png" alt="Control Panels" class="service-card-image">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-microchip" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Control Panel Design</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Precision engineering for reliable and safe electrical control panels.</p>
                        <ul style="list-style: none; padding: 0;">
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Electrical Schematics & Panel Layouts</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Standards-Compliant Documentation</li>
                        </ul>
                        </ul>
                    </div>
                </div>

                <!-- Service 3: Engineering Consultancy -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left; transition-delay: 0.2s;">
                    <img src="images/service 3.png" alt="Consultancy" class="service-card-image">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-drafting-compass" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Engineering Consultancy</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Expert advice to optimize your manufacturing processes and safety.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Automation Concept Design & Architecture</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> CE Implementation & EMC Compliance</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> IEC60204 Implementation</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Machinery Safety & Cost Optimization</li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4: Commissioning & Support -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left; transition-delay: 0.3s;">
                    <img src="images/service 4.png" alt="Support" class="service-card-image" style="object-position: top;">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-tools" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Commissioning & Support</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Ensuring your systems run smoothly from day one and beyond.</p>
                        <ul style="list-style: none; padding: 0;">
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Site Commissioning, Testing & Debugging</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> AMC & Technical Support</li>
                        </ul>
                        </ul>
                    </div>
                </div>

                 <!-- Service 5: IIoT -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left;">
                    <img src="images/service 6.png" alt="IIoT" class="service-card-image">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-network-wired" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">IIoT & Industry 4.0</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Connect your factory floor to the cloud for real-time insights.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Data Collection</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Predictive Dashboards</li>
                        </ul>
                    </div>
                </div>

                 <!-- Service 6: Robotics -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left; transition-delay: 0.1s;">
                    <img src="images/service 7.png" alt="Robotics" class="service-card-image">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-vr-cardboard" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Robotics & Simulation</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Visualize and optimize production lines before building them.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Process Simulation</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Cycle Time Analysis</li>
                        </ul>
                    </div>
                </div>

                 <!-- Service 7: Upgrades -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left; transition-delay: 0.2s;">
                    <img src="images/service 8.png" alt="Upgrades" class="service-card-image">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-sync-alt" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Legacy System Upgrades</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Modernize your aging equipment to improve efficiency.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> PLC Migration</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Drive Retrofits</li>
                        </ul>
                    </div>
                </div>

                 <!-- Service 8: Training -->
                <div class="service-card animate-on-scroll" style="padding: 0; overflow: hidden; text-align: left; transition-delay: 0.3s;">
                    <img src="images/service 9.png" alt="Training" class="service-card-image" style="object-position: top;">
                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-chalkboard-teacher" style="font-size: 2rem; color: var(--accent-color); margin-right: 1rem;"></i>
                            <h3 style="margin: 0; font-size: 1.4rem;">Industrial Training</h3>
                        </div>
                        <p style="margin-bottom: 1rem; color: #666;">Empower your workforce with hands-on technical training.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> PLC Workshops</li>
                            <li><i class="fas fa-check" style="color: var(--accent-color); margin-right: 8px;"></i> Custom Modules</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Innovative Process Section -->
    <section class="section-padding" style="background-color: var(--primary-color); color: white;">
        <div class="container">
            <h2 class="section-title animate-on-scroll" style="color: white;">Our Process</h2>
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; text-align: center; gap: 2rem;">
                
                <div class="animate-on-scroll" style="flex: 1; min-width: 200px;">
                    <div style="width: 80px; height: 80px; border: 2px solid var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem;">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 style="color: white; margin-bottom: 0.5rem;">1. Consult</h3>
                    <p style="font-size: 0.9rem; opacity: 0.8;">We understand your requirements and challenges.</p>
                </div>

                <div class="animate-on-scroll" style="flex: 1; min-width: 200px; transition-delay: 0.1s;">
                    <div style="width: 80px; height: 80px; border: 2px solid var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem;">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3 style="color: white; margin-bottom: 0.5rem;">2. Design</h3>
                    <p style="font-size: 0.9rem; opacity: 0.8;">We create efficient, safe, and scalable engineering designs.</p>
                </div>

                <div class="animate-on-scroll" style="flex: 1; min-width: 200px; transition-delay: 0.2s;">
                    <div style="width: 80px; height: 80px; border: 2px solid var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem;">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 style="color: white; margin-bottom: 0.5rem;">3. Develop</h3>
                    <p style="font-size: 0.9rem; opacity: 0.8;">Our team builds, programs, and assembles the solution.</p>
                </div>

                <div class="animate-on-scroll" style="flex: 1; min-width: 200px; transition-delay: 0.3s;">
                    <div style="width: 80px; height: 80px; border: 2px solid var(--accent-color); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 style="color: white; margin-bottom: 0.5rem;">4. Deploy</h3>
                    <p style="font-size: 0.9rem; opacity: 0.8;">Installation, testing, and handover with full support.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding" style="background-color: #f9f9f9;">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Frequently Asked Questions</h2>
            <div style="max-width: 800px; margin: 0 auto;">
                
                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                    <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Do you provide custom automation solutions?</h4>
                    <p style="color: #666;">Yes, we specialize in tailor-made solutions. We analyze your specific production requirements and design a system that fits your needs and budget.</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.05); transition-delay: 0.1s;">
                    <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Which PLC brands do you support?</h4>
                    <p style="color: #666;">We work with all major brands including Siemens, Allen-Bradley (Rockwell), Mitsubishi, Omron, and Delta. We are brand-agnostic and choose the best hardware for your application.</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem; box-shadow: 0 2px 5px rgba(0,0,0,0.05); transition-delay: 0.2s;">
                    <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">Do you offer after-sales support?</h4>
                    <p style="color: #666;">Absolutely. We provide comprehensive after-sales support, including on-site troubleshooting, remote assistance, and Annual Maintenance Contracts (AMC).</p>
                </div>

                <div class="animate-on-scroll" style="background: white; padding: 1.5rem; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); transition-delay: 0.3s;">
                    <h4 style="margin-bottom: 0.5rem; color: var(--primary-color);">What industries do you serve?</h4>
                    <p style="color: #666;">We serve a wide range of industries including Automotive, Pharmaceuticals, Food & Beverage, Water Treatment, and General Manufacturing.</p>
                </div>

            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
