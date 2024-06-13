<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borderless Car</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php include_once("html/Header.php"); ?>
    </header>

    <nav>
        <ul>
            <li><a href="#contact-us">Contact Us</a></li>
            <li><a href="#brand-story">Brand Story</a></li>
            <li><a href="#professionalism">Professionalism</a></li>
        </ul>
    </nav>

    <!-- Contact Us Section -->
    <section id="contact-us">
        <h1>Contact Us</h1>
        <p>
            <strong>Phone / Whatsapp / Wechat:</strong> +8619037179250<br>
            <strong>Send Email:</strong> info@borderlesscar.com<br>
            <strong>Tel:</strong> +86-19037179250<br>
            <strong>Address:</strong> No. 1291, Hanghai East Road, Economic and Technical Development Zone, Zhengzhou, He'nan Province, China
        </p>

        <h2>Get In Touch</h2>
        <p>Complete control over products allows us to ensure our customers receive the best quality prices and service.</p>

        <form method="POST" action="">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="country_region">Country/Region:</label><br>
            <input type="text" id="country_region" name="country_region" required><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="mobile">Mobile or Whatsapp/Skype:</label><br>
            <input type="text" id="mobile" name="mobile" required><br><br>
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>

        <h2>You May Also Want to See</h2>
        <ul>
            <li><a href="all_vehicles.php">All Vehicles</a></li>
            <li><a href="used_car.php">Used Car</a></li>
            <li><a href="trucks.php">Trucks</a></li>
            <li><a href="about_us.php">About Us</a></li>
        </ul>
    </section>

    <!-- Brand Story Section -->
    <section id="brand-story">
        <h1>Brand Story</h1>
        <p>Welcome To Henan Borderless International Trade Co., Ltd.</p>
        <p>Our committed to providing high-quality and professional services to our customers, and creating a comprehensive automotive sales ecosystem. With over 10 years of experience and accumulated professional skills in the automotive industry, we constantly innovate and improve product quality with customer needs at the forefront, which has made us a leader in the automotive industry.</p>
        <p>Our main products include electric cars, used cars, and other well-known international brands that cover various consumer groups. Through years of market practice and technological innovation, our vehicle performance and quality have reached advanced levels both domestically and internationally. Our goal is to become a leader in the automotive sales industry, achieve mutual benefit with customers, and provide them with more professional, reliable, and comfortable services during the car-buying process.</p>
        <!-- Hình ảnh -->
        <img src="images/Screenshot_2024-06-13_105503.png" alt="Brand Story Image">
    </section>

    <!-- Professionalism Section -->
    <section id="professionalism">
        <h1>Professionalism</h1>
        <p>As a professional import and export trading company, we have rich experience and professional skills. We understand the trends and demands of domestic and foreign markets and can provide customized services according to different customer needs.</p>
        <h2>Diverse product range</h2>
        <p>Our main products include new energy vehicles, used cars, electric motorcycles, electric tricycles, electric skateboards, and charging piles. We offer a complete range of brands, years, and models for customers to choose from.</p>
        <h2>Quality assurance</h2>
        <p>We have established long-term cooperative relationships with many well-known domestic and foreign automobile manufacturers and suppliers, and all products are guaranteed to be of high quality. We strictly control each import and export project to ensure that we can provide customers with excellent products and services.</p>
        <h2>Competitive pricing</h2>
        <p>We have established stable cooperation relationships with multiple suppliers, have advantageous purchasing channels, and can provide flexible pricing strategies to ensure that we can offer the most favorable prices to customers.</p>
        <h2>Integrity-based operation</h2>
        <p>As a company that operates with integrity, we always prioritize customer benefits and guarantee service quality and product quality. We value the trust and support of customers and continuously improve our service level, which has won the praise and trust of many customers.</p>
    </section>

    <footer>
        <?php include_once("html/Footers.php"); ?>
    </footer>
</body>
</html>
