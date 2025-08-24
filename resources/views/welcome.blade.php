<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abu Huraira Deeniyat Maktab</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;0,700;1,400&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary: #1a5e3f;
            --color-primary-light: #2d8360;
            --color-primary-dark: #0f4b2f;
            --color-secondary: #d4af37;
            --color-secondary-light: #e8c766;
            --color-secondary-dark: #b8941f;
            --color-text: #333333;
            --color-text-light: #666666;
            --color-background: #f8f5e9;
            --color-white: #ffffff;
            --color-light-beige: #faf8f2;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.12), 0 1px 3px rgba(0,0,0,0.08);
            --shadow-lg: 0 10px 25px rgba(0,0,0,0.15), 0 5px 10px rgba(0,0,0,0.05);
            --border-radius: 8px;
            --border-radius-lg: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--color-white);
            box-shadow: var(--shadow-sm);
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background-color: var(--color-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-white);
            font-weight: bold;
            font-size: 18px;
        }

        .logo-text {
            font-family: 'Amiri', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-primary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: var(--color-text);
            font-weight: 600;
            transition: color 0.3s;
            position: relative;
        }

        nav a:hover {
            color: var(--color-primary);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--color-primary);
            transition: width 0.3s;
        }

        nav a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--color-primary-dark) 0%, var(--color-primary) 100%);
            color: var(--color-white);
            text-align: center;
            border-radius: 0 0 var(--border-radius-lg) var(--border-radius-lg);
            margin-bottom: 3rem;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-family: 'Amiri', serif;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .quran-verse {
            font-family: 'Amiri', serif;
            font-style: italic;
            font-size: 1.4rem;
            margin: 2rem 0;
            padding: 1.5rem;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: var(--border-radius);
            border-right: 4px solid var(--color-secondary);
        }

        /* Pillars Section */
        .pillars {
            padding: 3rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-family: 'Amiri', serif;
            font-size: 2.2rem;
            color: var(--color-primary);
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 3px;
            background-color: var(--color-secondary);
            margin: 0.5rem auto;
        }

        .pillars-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .pillar-card {
            background-color: var(--color-white);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            box-shadow: var(--shadow-md);
            transition: transform 0.3s, box-shadow 0.3s;
            text-align: center;
        }

        .pillar-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .pillar-icon {
            width: 70px;
            height: 70px;
            background-color: var(--color-primary-light);
            color: var(--color-white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.8rem;
        }

        .pillar-card h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--color-primary);
        }

        /* Vision Section */
        .vision {
            padding: 4rem 0;
            background-color: var(--color-light-beige);
            border-radius: var(--border-radius-lg);
            margin: 3rem 0;
        }

        .vision-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .vision-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .hadith {
            font-family: 'Amiri', serif;
            font-style: italic;
            font-size: 1.3rem;
            padding: 1.5rem;
            background-color: var(--color-white);
            border-radius: var(--border-radius);
            margin: 2rem 0;
            border-left: 4px solid var(--color-secondary);
        }

        /* Call to Action */
        .cta {
            padding: 3rem 0;
            text-align: center;
            background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
            color: var(--color-white);
            border-radius: var(--border-radius-lg);
        }

        .cta h2 {
            font-family: 'Amiri', serif;
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 2rem;
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: var(--color-secondary);
            color: var(--color-primary-dark);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.3s;
            border: 2px solid var(--color-secondary);
        }

        .btn:hover {
            background-color: transparent;
            color: var(--color-secondary);
        }

        /* Footer */
        footer {
            background-color: var(--color-primary-dark);
            color: var(--color-white);
            padding: 3rem 0 1.5rem;
            margin-top: 4rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--color-secondary);
        }

        .footer-section p {
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            nav ul {
                gap: 1.2rem;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .quran-verse, .hadith {
                font-size: 1.1rem;
            }
            
            .pillars-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">ا</div>
                    <div class="logo-text">Abu Huraira Deeniyat Maktab</div>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Advocating the Fair, Forbidding the Unfair</h1>
                    <div class="quran-verse">
                        "You are sent for the benefit of mankind. You should advocate the fair and forbid the Unfair, and believe in one Allah." 
                        <br>(Surah Aale Imran: 110)
                    </div>
                    <p>Continuing the noble mission from the tradition of the Prophet Muhammad ﷺ through education, worship, social service, and invitation towards Deen.</p>
                </div>
            </div>
        </section>

        <section class="pillars">
            <div class="container">
                <h2 class="section-title">Our Four Pillars of Work</h2>
                <div class="pillars-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">📚</div>
                        <h3>Education</h3>
                        <p>Providing comprehensive religious and formal education to nurture knowledgeable, ethical individuals grounded in Islamic values.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🕌</div>
                        <h3>Worship</h3>
                        <p>Facilitating proper worship and spiritual development through mosque activities and religious guidance.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🤲</div>
                        <h3>Social Service</h3>
                        <p>Serving all communities regardless of faith, following the prophetic example of compassion and charity.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📢</div>
                        <h3>Invitation to Deen</h3>
                        <p>Spreading the message of Islam with wisdom, beautiful preaching, and exemplary conduct.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="vision">
            <div class="container">
                <div class="vision-content">
                    <h2 class="section-title">Our Vision</h2>
                    <p>Following the prophetic tradition, we believe the dearest places to Allah on earth are mosques. The Prophet ﷺ constructed Masjid-e-Nabawi and initiated four essential works from it: Education, Worship, Social service, and Invitation towards Deen.</p>
                    
                    <div class="hadith">
                        "The dearest places to Allah on earth are mosques." 
                        <br>(Muslim: 1560, An Abi Hurairah)
                    </div>
                    
                    <p>Now it is our responsibility to continue these works from our mosques with the intention of benefiting people and preventing them from wrongdoing. Deeniyat Educational & Charitable Trust has established an excellent system of religious education through organized maktabs and formal schools, along with social services for people of all faiths.</p>
                    
                    <p>Our mission is to share our experience and knowledge through digital platforms so that others may easily implement these beneficial works from their mosques or communities, spreading education, social justice, and humanity throughout the world.</p>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <h2>Join Us in This Noble Mission</h2>
                <p>Whether through volunteering, donations, or implementing our model in your community, your support helps spread beneficial knowledge and service to humanity.</p>
                <a href="#" class="btn">Get Involved</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Abu Huraira Deeniyat Maktab is an initiative of Deeniyat Educational & Charitable Trust, dedicated to continuing the prophetic mission of education, worship, social service, and invitation to Deen.</p>
                </div>
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <p>Email: info@deeniayatmaktab.org</p>
                    <p>Phone: +91 XXXXX XXXXX</p>
                    <p>Address: Main Road, City, State, India</p>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <p><a href="#" style="color: #fff;">Our Programs</a></p>
                    <p><a href="#" style="color: #fff;">Volunteer Opportunities</a></p>
                    <p><a href="#" style="color: #fff;">Donation</a></p>
                    <p><a href="#" style="color: #fff;">Resources</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 Abu Huraira Deeniyat Maktab. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>