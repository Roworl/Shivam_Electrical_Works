<?php include "includes/header.php"?>

<body>
  <?php include "includes/navbar.php" ?>

  <main class="main">
    <!-- breadcrumb -->
    <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
      <div class="container">
        <h2 class="breadcrumb-title">Contact Us</h2>
        <ul class="breadcrumb-menu">
          <li><a href="index.html">Home</a></li>
          <li class="active">Contact Us</li>
        </ul>
      </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact area -->
    <div class="contact-area py-120">
      <div class="container">
        <div class="contact-content">
          <div class="row">
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-map-location-dot"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Office Address</h5>
                  <p>MIDC Tarapur BOISAR,
                    Palghar</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-phone-volume"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Call Us</h5>
                  <p>+91 9673235339</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-envelopes"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Email Us</h5>
                  <p>
                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                      data-cfemail="442d2a222b04213c25293428216a272b29">[shivamelectrical1978@gmail.com]</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-alarm-clock"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Open Time</h5>
                  <p>Mon - Sat (8.00AM - 8.30PM)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="contact-wrapper">
          <div class="row">
            <div class="col-lg-5">
              <div class="contact-img">
                <img src="assets/img/contact/01.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-7 align-self-center">
              <div class="contact-form">
                <div class="contact-form-header">
                  <h2>Get In Touch</h2>
                  <p>
                    We’re here to help you with all your motor and electrical repair needs.
                    Whether you require expert diagnostics, quick repairs, or ongoing maintenance support,
                    our team is ready to assist. Contact Shivam Electrical today to discuss your requirements,
                    request a quote, or schedule a service visit.
                  </p>
                </div>

                <!-- WhatsApp Form -->
                <form id="contact-form">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Your Subject" required />
                  </div>
                  <div class="form-group">
                    <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message"
                      required></textarea>
                  </div>
                  <button type="submit" class="theme-btn">
                    Send Message <i class="far fa-paper-plane"></i>
                  </button>
                  <div class="col-md-12 mt-3">
                    <div class="form-messege text-success"></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- WhatsApp Redirect Script -->
        <script>
        document.getElementById("contact-form").addEventListener("submit", function(e) {
          e.preventDefault();

          // Get values
          const name = this.name.value.trim();
          const email = this.email.value.trim();
          const subject = this.subject.value.trim();
          const message = this.message.value.trim();

          // Create formatted text
          const text = `Hello, I would like to get in touch:%0A
*Name:* ${name}%0A
*Email:* ${email}%0A
*Subject:* ${subject}%0A
*Message:* ${message}`;

          // Encode and send to WhatsApp
          const whatsappMessage = encodeURIComponent(text);
          const phoneNumber = "917709434833"; // with country code (India = 91)
          const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

          // Redirect to WhatsApp
          window.open(url, "_blank");
        });
        </script>

      </div>
    </div>
    <!-- end contact area -->

    <!-- map -->
    <div class="contact-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7507.965999982429!2d72.73846417665482!3d19.798318124238858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be71f982ace9e25%3A0xd96d1e867bc7878e!2sSHIVAM%20ELECTRICAL%20WORKS%2C%20MIDC%20Rd%2C%20behind%20gaurav%20steel%2C%20opposite%20Ajmeri%20hotel%2C%20Churi%20Compound%2C%20Award%20nagar%2C%20Boisar%2C%20Maharashtra%20401506!3m2!1d19.7983178!2d72.74799089999999!5e0!3m2!1sen!2sin!4v1756360276045!5m2!1sen!2sin"
        style="border: 0" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </main>

  <?php include "includes/footer.php" ?>
</body>