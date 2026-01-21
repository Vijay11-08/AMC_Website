<?php $pageTitle = 'Our Services'; $activePage = 'services'; include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header" style="background-color: var(--primary-color); padding: 4rem 0; color: white; text-align: center;">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive engineering & automation solutions.</p>
        </div>
    </section>

    <!-- Services Detail -->
    <section class="section-padding">
        <div class="container">
            
            <!-- Service Block 1 -->
            <div class="service-block" style="display: flex; flex-wrap: wrap; gap: 3rem; margin-bottom: 4rem; align-items: flex-start;">
                <div style="flex: 1; min-width: 300px;">
                    <div style="background: var(--secondary-color); color: var(--text-color); padding: 2rem; border-radius: 8px;">
                        <i class="fas fa-robot" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                        <h2 style="margin-bottom: 1rem;">Industrial Automation</h2>
                        <ul style="list-style-type: square; padding-left: 1.5rem; line-height: 1.8;">
                            <li>PLC Programming & Development (Siemens, Allen-Bradley, Mitsubishi, Delta)</li>
                            <li>HMI & SCADA System Design</li>
                            <li>Servo & Motion Control Integration</li>
                            <li>VFD Commissioning & Optimization</li>
                        </ul>
                    </div>
                </div>
                <!-- Service Block 2 -->
                <div style="flex: 1; min-width: 300px;">
                    <div style="background: var(--secondary-color); color: var(--text-color); padding: 2rem; border-radius: 8px;">
                        <i class="fas fa-microchip" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                        <h2 style="margin-bottom: 1rem;">Control Panel & Electrical Design</h2>
                        <ul style="list-style-type: square; padding-left: 1.5rem; line-height: 1.8;">
                            <li>Comprehensive Electrical Schematics (EPLAN / AutoCAD Electrical)</li>
                            <li>Intelligent Panel Layout Design</li>
                            <li>Standards-Compliant Documentation (IEC/IEEE)</li>
                            <li>BOM Generation & Component Selection</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Service Block 3 & 4 -->
            <div class="service-block" style="display: flex; flex-wrap: wrap; gap: 3rem; align-items: flex-start;">
                <div style="flex: 1; min-width: 300px;">
                    <div style="background: var(--secondary-color); color: var(--text-color); padding: 2rem; border-radius: 8px;">
                        <i class="fas fa-drafting-compass" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                        <h2 style="margin-bottom: 1rem;">Engineering Consultancy</h2>
                        <ul style="list-style-type: square; padding-left: 1.5rem; line-height: 1.8;">
                            <li>Automation Concept Design & System Architecture</li>
                            <li>Machinery Safety & Risk Assessment</li>
                            <li>CE Implementation & EMC Compliance</li>
                            <li>IEC60204 Implementation Guidance</li>
                            <li>Cost Optimization Strategies</li>
                        </ul>
                    </div>
                </div>
                <div style="flex: 1; min-width: 300px;">
                    <div style="background: var(--secondary-color); color: var(--text-color); padding: 2rem; border-radius: 8px;">
                        <i class="fas fa-tools" style="font-size: 2.5rem; color: var(--accent-color); margin-bottom: 1rem;"></i>
                        <h2 style="margin-bottom: 1rem;">Commissioning & Support</h2>
                        <ul style="list-style-type: square; padding-left: 1.5rem; line-height: 1.8;">
                            <li>On-site Commissioning & Line Integration</li>
                            <li>Rigorous Testing & Debugging</li>
                            <li>Annual Maintenance Contracts (AMC)</li>
                            <li>Remote & Field Technical Support</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php include 'includes/footer.php'; ?>
