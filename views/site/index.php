<?php

declare(strict_types=1);

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Stansofts Solutions Ltd';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Technology solutions for networking, software delivery, security systems, and support for growing businesses.',
]);
?>
  <div class="site-shell">
    <header class="topbar">
      <div class="container topbar-inner">
        <a class="brand" href="#home" aria-label="Stansofts Solutions home">
          <span class="brand-mark">S</span>
          <span class="brand-text">
            <strong>Stansofts Solutions</strong>
            <small>Technology that keeps work moving</small>
          </span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <nav id="site-nav" class="nav">
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#plans">Plans</a>
          <a href="#projects">Work</a>
          <a href="#testimonials">Testimonials</a>
          <a href="#contact">Contact</a>
          <a class="nav-cta" href="#contact">Get a Quote</a>
        </nav>
      </div>
    </header>

    <main>
      <section id="home" class="hero section">
        <div class="hero-media">
          <img
            src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=80"
            alt="Technician working on networking hardware"
          >
        </div>
        <div class="container hero-grid">
          <div class="hero-copy">
            <p class="eyebrow">Best Technology Solutions For You</p>
            <h1>Reliable software, networks, and security systems built for everyday business.</h1>
            <p class="hero-text">
              We help organizations plan, install, secure, and improve the technology they depend on,
              from software platforms to fibre, CCTV, access control, and managed support.
            </p>
            <div class="hero-actions">
              <a class="button button-primary" href="#plans">View Plans</a>
              <a class="button button-secondary" href="#services">Explore Services</a>
            </div>
            <div class="hero-pills">
              <span>Cloud support</span>
              <span>Software delivery</span>
              <span>IT consultation</span>
            </div>
          </div>

          <aside class="hero-panel">
            <div class="signal-card">
              <p class="signal-label">Availability</p>
              <h2>24/7</h2>
              <p>Fast support coverage for urgent operational issues.</p>
            </div>
            <div class="signal-card">
              <p class="signal-label">Response rate</p>
              <h2>100%</h2>
              <p>Structured communication from first contact to handoff.</p>
            </div>
            <div class="signal-card">
              <p class="signal-label">Delivery focus</p>
              <h2>Practical</h2>
              <p>Technology choices aligned to the way your team actually works.</p>
            </div>
          </aside>
        </div>
      </section>

      <section id="about" class="section section-band">
        <div class="container split">
          <div class="section-copy">
            <p class="eyebrow">About Us</p>
            <h2>Technology support that covers strategy, implementation, and day-to-day continuity.</h2>
            <p>
              Stansofts Solutions Ltd supports institutions, businesses, and growing teams with
              software systems, networking, security infrastructure, and practical IT guidance.
            </p>
            <p>
              Instead of treating development, infrastructure, and support as separate problems, we
              bring them together so your tools, people, and processes work as one system.
            </p>
          </div>
          <div class="about-grid">
            <article class="mini-panel">
              <h3>Analysis and planning</h3>
              <p>We map requirements, current gaps, rollout risks, and the best path to delivery.</p>
            </article>
            <article class="mini-panel">
              <h3>Implementation and testing</h3>
              <p>Projects are installed, configured, validated, and tuned for real operating conditions.</p>
            </article>
            <article class="mini-panel">
              <h3>Support and enhancement</h3>
              <p>We stay involved after launch so systems remain useful instead of slowly drifting.</p>
            </article>
            <article class="mini-panel accent">
              <h3>7+ years serving clients</h3>
              <p>Built around dependable response, clear communication, and technology that earns trust.</p>
            </article>
          </div>
        </div>
      </section>

      <section id="services" class="section">
        <div class="container">
          <div class="section-head">
            <div>
              <p class="eyebrow">Our Services</p>
              <h2>Explore more than a brochure. Filter by the kind of work you need.</h2>
            </div>
            <div class="filter-group" role="tablist" aria-label="Service filters">
              <button class="filter-chip is-active" type="button" data-filter="all">All</button>
              <button class="filter-chip" type="button" data-filter="software">Software</button>
              <button class="filter-chip" type="button" data-filter="networking">Networking</button>
              <button class="filter-chip" type="button" data-filter="security">Security</button>
            </div>
          </div>

          <div class="services-grid">
            <article class="service-card" data-category="software">
              <div class="service-icon" data-lucide="monitor-cog"></div>
              <h3>Point of Sale Systems</h3>
              <p>Reliable sales, stock, and reporting workflows designed for busy operations.</p>
            </article>
            <article class="service-card" data-category="software">
              <div class="service-icon" data-lucide="graduation-cap"></div>
              <h3>School Management Systems</h3>
              <p>Enrollment, billing, communication, and administration tools for learning institutions.</p>
            </article>
            <article class="service-card" data-category="software">
              <div class="service-icon" data-lucide="heart-pulse"></div>
              <h3>Hospital Management Systems</h3>
              <p>Structured patient, billing, and operational workflows for healthcare environments.</p>
            </article>
            <article class="service-card" data-category="networking">
              <div class="service-icon" data-lucide="cable"></div>
              <h3>Fibre Installation</h3>
              <p>Splicing, termination, testing, and deployment for future-ready connectivity.</p>
            </article>
            <article class="service-card" data-category="security">
              <div class="service-icon" data-lucide="scan-face"></div>
              <h3>Biometrics and Access Control</h3>
              <p>Identity verification and secure access systems for controlled environments.</p>
            </article>
            <article class="service-card" data-category="security">
              <div class="service-icon" data-lucide="cctv"></div>
              <h3>CCTV Installation and Servicing</h3>
              <p>Camera planning, installation, support, and maintenance for homes and businesses.</p>
            </article>
          </div>
        </div>
      </section>

      <section id="plans" class="section section-band">
        <div class="container">
          <div class="section-head">
            <div>
              <p class="eyebrow">Our Plans</p>
              <h2>Switch between service bundles to see what fits your environment.</h2>
            </div>
          </div>

          <div class="plans-shell">
            <div class="plans-tabs" role="tablist" aria-label="Plans">
              <button class="plan-tab is-active" type="button" data-plan="network">Networking</button>
              <button class="plan-tab" type="button" data-plan="security">Security</button>
              <button class="plan-tab" type="button" data-plan="products">Products</button>
            </div>

            <div class="plan-panel is-active" data-plan-panel="network">
              <div>
                <h3>Networking</h3>
                <p>Structured networking services for offices, branches, and high-uptime teams.</p>
              </div>
              <ul class="feature-list">
                <li>Data installation</li>
                <li>Voice installation</li>
                <li>Fibre optic deployment</li>
                <li>Wireless network planning</li>
              </ul>
            </div>

            <div class="plan-panel" data-plan-panel="security">
              <div>
                <h3>Security</h3>
                <p>Physical security systems that improve visibility, control, and response.</p>
              </div>
              <ul class="feature-list">
                <li>Electric fences</li>
                <li>CCTV surveillance</li>
                <li>Biometric devices</li>
                <li>Alarm systems</li>
              </ul>
            </div>

            <div class="plan-panel" data-plan-panel="products">
              <div>
                <h3>Products</h3>
                <p>Operational hardware and accessories selected for compatibility and supportability.</p>
              </div>
              <ul class="feature-list">
                <li>Routers and network switches</li>
                <li>Cabinets and fibre accessories</li>
                <li>CCTV cameras</li>
                <li>Computers and peripherals</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="projects" class="section">
        <div class="container">
          <div class="section-head">
            <div>
              <p class="eyebrow">Our Work</p>
              <h2>Explore unlimited possibilities</h2>
              <p class="section-subtext">
                Managed network services are vital for today's small businesses and medium-sized
                enterprises, it helps run the applications that fuels your day-to-day business,
                enhances communication and sharing tools, and improve business flexibility and agility..
              </p>
            </div>
          </div>

          <div class="stats-grid">
            <article class="stat-card">
              <strong class="counter" data-target="1258">0</strong>
              <span>Projects Completed</span>
            </article>
            <article class="stat-card">
              <strong class="counter" data-target="150">0</strong>
              <span>Awards</span>
            </article>
            <article class="stat-card">
              <strong class="counter" data-target="1255">0</strong>
              <span>Customer Active</span>
            </article>
            <article class="stat-card">
              <strong class="counter" data-target="1157">0</strong>
              <span>Good Reviews</span>
            </article>
          </div>
        </div>
      </section>

      <section id="testimonials" class="section section-band">
        <div class="container">
          <div class="section-head">
            <div>
              <p class="eyebrow">Client Feedback</p>
              <h2>What Our Clients Says</h2>
              <p class="section-subtext">
                We are very fortunate to have formed excellent partnerships with many of our clients.
                And we've formed more than just working relationships with them; we have formed true
                friendships. Here's what they're saying about us.
              </p>
            </div>
            <div class="carousel-controls">
              <button class="icon-button" type="button" id="prev-testimonial" aria-label="Previous testimonial">
                <span data-lucide="arrow-left"></span>
              </button>
              <button class="icon-button" type="button" id="next-testimonial" aria-label="Next testimonial">
                <span data-lucide="arrow-right"></span>
              </button>
            </div>
          </div>

          <div class="testimonial-stage">
            <article class="testimonial-card is-active">
              <p>
                They are dependable, honest, and thoughtful about how they deliver. Their work feels
                considered from start to finish.
              </p>
              <h3>Automation Spares and Supplies Ltd</h3>
              <span>General Manager</span>
            </article>
            <article class="testimonial-card">
              <p>
                Their service level is strong. We got practical guidance, good communication, and a team
                that clearly understands implementation details.
              </p>
              <h3>Ken</h3>
              <span>CEO, Keltech Technologies</span>
            </article>
            <article class="testimonial-card">
              <p>
                The overall experience was smooth and professional. We felt supported during rollout and
                after handover as well.
              </p>
              <h3>Alvin</h3>
              <span>CEO, Ankles Ltd</span>
            </article>
          </div>
        </div>
      </section>

      <section class="section newsletter-band">
        <div class="container newsletter-grid">
          <div>
            <p class="eyebrow">Newsletter</p>
            <h2>Stay close to updates, service news, and project ideas.</h2>
          </div>
          <form class="newsletter-form" id="newsletter-form">
            <label class="sr-only" for="newsletter-email">Email address</label>
            <input id="newsletter-email" name="email" type="email" placeholder="Enter your email" required>
            <button class="button button-primary" type="submit">Subscribe</button>
          </form>
          <p class="form-feedback" id="newsletter-feedback" aria-live="polite"></p>
        </div>
      </section>

      <section id="contact" class="section">
        <div class="container contact-grid">
          <div class="contact-copy">
            <p class="eyebrow">Contact</p>
            <h2>Send your query and get a faster, clearer response path.</h2>
            <p>
              Tell us what you need, and we will shape the message into a support request or project lead.
            </p>

            <div class="contact-list">
              <div>
                <span>Address</span>
                <strong>Nairobi</strong>
              </div>
              <div>
                <span>Call for query</span>
                <strong>(254) 733 668 500</strong>
              </div>
              <div>
                <span>Email</span>
                <strong>info@stansoftssolutions.com</strong>
              </div>
              <div>
                <span>Opening hours</span>
                <strong>08:00 AM - 18:00 PM</strong>
              </div>
            </div>
          </div>

          <form class="contact-form" id="contact-form" method="post" action="<?= Url::to(['site/send-mail']) ?>">
            <?= Html::hiddenInput(Yii::$app->request->csrfParam, Yii::$app->request->csrfToken) ?>
            <div class="form-row">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" placeholder="Enter name" required>
            </div>
            <div class="form-row">
              <label for="phone">Phone number</label>
              <input id="phone" name="phone" type="tel" placeholder="Enter phone number" required>
            </div>
            <div class="form-row">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" placeholder="Enter email" required>
            </div>
            <div class="form-row">
              <label for="message">Project or support need</label>
              <textarea id="message" name="message" rows="5" placeholder="Tell us a bit about your project, issue, or timeline." required></textarea>
            </div>

            <div class="form-actions">
              <button class="button button-primary" type="submit">Submit</button>
              <a
                class="button button-secondary"
                id="whatsapp-link"
                href="https://wa.me/254727214814?text=Hello%20Stansofts%20Solutions%2C%20I%20would%20like%20to%20ask%20about%20your%20services."
              >
                Continue on WhatsApp
              </a>
            </div>
            <p class="form-feedback" id="contact-feedback" aria-live="polite"></p>
          </form>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container footer-inner">
        <div>
          <strong>Stansofts Solutions Ltd</strong>
          <p>Trusted technology solutions for small, medium, and large organizations.</p>
          <div class="social-links" aria-label="Social media links">
            <a
              href="https://www.facebook.com/keltechnologies"
              target="_blank"
              rel="noreferrer"
              aria-label="Visit our Facebook page"
              title="Facebook"
              class="social-link facebook-link"
            >
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M13.5 22v-8h2.7l.4-3.1h-3.1V8.9c0-.9.2-1.5 1.5-1.5H16.7V4.6c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.4v2H7.3V14H10v8h3.5z"/>
              </svg>
            </a>
            <a
              href="https://twitter.com/gichobi_haron?s=08"
              target="_blank"
              rel="noreferrer"
              aria-label="Visit our X page"
              title="X"
              class="social-link x-link"
            >
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M18.9 2H22l-6.8 7.8L23 22h-6.1l-4.8-6.3L6.7 22H3.6l7.3-8.4L1 2h6.2l4.4 5.8L18.9 2zm-1.1 18h1.7L6.3 3.9H4.5L17.8 20z"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="footer-links">
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#plans">Plans</a>
          <a href="#contact">Contact</a>
        </div>
      </div>
    </footer>

    <a
      class="whatsapp-float"
      href="https://wa.me/254727214814?text=Hello%20Stansofts%20Solutions%2C%20I%20would%20like%20to%20learn%20more%20about%20your%20services."
      aria-label="Chat on WhatsApp"
    >
      <span data-lucide="message-circle-more"></span>
    </a>
  </div>
