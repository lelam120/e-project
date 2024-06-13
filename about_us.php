<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borderless Car</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header class="bg-dark text-white text-center py-3">
        <h1>Borderless Car</h1>
        <p>Your One-Stop Automotive Solution</p>
    </header>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Borderless Car</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#brand-story">Brand Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#professionalism">Professionalism</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Us Section -->
    <section id="contact-us" class="container py-5">
        <h2 class="text-primary">Contact Us</h2>
        <p>
            <strong>Phone / Whatsapp / Wechat:</strong> +8619037179250<br>
            <strong>Send Email:</strong> info@borderlesscar.com<br>
            <strong>Tel:</strong> +86-19037179250<br>
            <strong>Address:</strong> No. 1291, Hanghai East Road, Economic and Technical Development Zone, Zhengzhou, He'nan Province, China
        </p>

        <h3>Get In Touch</h3>
        <p>Complete control over products allows us to ensure our customers receive the best quality prices and service.</p>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="country_region" class="form-label">Country/Region:</label>
                <input type="text" id="country_region" name="country_region" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile or Whatsapp/Skype:</label>
                <input type="text" id="mobile" name="mobile" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <!-- Brand Story Section -->
    <section id="brand-story" class="container py-5 bg-light">
        <h2 class="text-primary">Brand Story</h2>
        <p>Welcome To Henan Borderless International Trade Co., Ltd.</p>
        <p>Our committed to providing high-quality and professional services to our customers, and creating a comprehensive automotive sales ecosystem. With over 10 years of experience and accumulated professional skills in the automotive industry, we constantly innovate and improve product quality with customer needs at the forefront, which has made us a leader in the automotive industry.</p>
        <p>Our main products include electric cars, used cars, and other well-known international brands that cover various consumer groups. Through years of market practice and technological innovation, our vehicle performance and quality have reached advanced levels both domestically and internationally. Our goal is to become a leader in the automotive sales industry, achieve mutual benefit with customers, and provide them with more professional, reliable, and comfortable services during the car-buying process.</p>
        <img src="images/Screenshot_2024-06-13_105503.png" alt="Brand Story Image" class="img-fluid rounded">
    </section>

    <!-- Professionalism Section -->
    <section id="professionalism" class="container py-5">
        <h2 class="text-primary">Professionalism</h2>
        <p>As a professional import and export trading company, we have rich experience and professional skills. We understand the trends and demands of domestic and foreign markets and can provide customized services according to different customer needs.</p>
        <h3>Diverse product range</h3>
        <p>Our main products include new energy vehicles, used cars, electric motorcycles, electric tricycles, electric skateboards, and charging piles. We offer a complete range of brands, years, and models for customers to choose from.</p>
        <h3>Quality assurance</h3>
        <p>We have established long-term cooperative relationships with many well-known domestic and foreign automobile manufacturers and suppliers, and all products are guaranteed to be of high quality. We strictly control each import and export project to ensure that we can provide customers with excellent products and services.</p>
        <h3>Competitive pricing</h3>
        <p>We have established stable cooperation relationships with multiple suppliers, have advantageous purchasing channels, and can provide flexible pricing strategies to ensure that we can offer the most favorable prices to customers.</p>
        <h3>Integrity-based operation</h3>
        <p>As a company that operates with integrity, we always prioritize customer benefits and guarantee service quality and product quality. We value the trust and support of customers and continuously improve our service level, which has won the praise and trust of many customers.</p>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Borderless Car. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
