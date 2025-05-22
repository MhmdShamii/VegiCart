<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <title>Shop</title>
</head>

<body>
    <nav>
        <div class="logo">
            <img src="./rec/Logo.png" alt="" />
            <h3>VeggieCart</h3>
        </div>
        <ul>
            <li>
                <a href="./index.php">
                    <i class="fa-solid fa-store"></i>
                    <p>Store</p>
                </a>
            </li>
            <li>
                <a href="dashboard.php">
                    <i class="fa-solid fa-table"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="about.php">
                    <i class="fa-solid fa-user"></i>
                    <p>About Us</p>
                </a>
            </li>
            <li class="active">
                <a href="contact.php">
                    <i class="fa-solid fa-phone"></i>
                    <p>Contact</p>
                </a>
            </li>
        </ul>
    </nav>
    <div class="main">
        <div class="body">
            <div class="contact-form">
                <h2 class="form-title">Contact Us</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name" class="required-field">Your Name</label>
                        <input type="text" id="name" name="name" required>
                        <div class="error-message" id="nameError">Please enter your name</div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="required-field">Email Address</label>
                        <input type="email" id="email" name="email" required>
                        <div class="error-message" id="emailError">Please enter a valid email address</div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject">
                    </div>

                    <div class="form-group">
                        <label for="message" class="required-field">Your Message</label>
                        <textarea id="message" name="message" required></textarea>
                        <div class="error-message" id="messageError">Please enter your message</div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="submit-btn">Send Message</button>
                    </div>

                    <div class="success-message" id="successMessage">
                        Thank you for your message! We'll get back to you soon.
                    </div>
                </form>
            </div>
        </div>
</body>
<script src="js/app.js"></script>

</html>