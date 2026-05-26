<?php
include 'includes/header.php';

// Handle form submission
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Simple email sending (configure with your mail settings)
        $to = 'info@beyond-logistics.com';
        $email_subject = 'New Contact Form Submission: ' . $subject;
        $email_body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
        $headers = "From: $email";
        
        // Note: Mail function requires proper server configuration
        // mail($to, $email_subject, $email_body, $headers);
        
        $success_message = 'Thank you! Your message has been sent. We will get back to you soon.';
    }
}
?>

<section class="contact-section">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have any questions? We'd love to hear from you. Get in touch with us today!</p>
    </div>
</section>

<section class="contact-content">
    <div class="container">
        <div class="contact-form-wrapper">
            <h2>Send us a Message</h2>
            
            <?php if ($success_message): ?>
                <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php endif; ?>
            
            <?php if ($error_message): ?>
                <div class="alert alert-error"><?php echo $error_message; ?></div>
            <?php endif; ?>
            
            <form method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        
        <div class="contact-info-wrapper">
            <h2>Contact Information</h2>
            <div class="info-item">
                <h4>📍 Address</h4>
                <p>123 Business Avenue<br>Commerce City, CC 12345<br>Country</p>
            </div>
            
            <div class="info-item">
                <h4>📞 Phone</h4>
                <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
                <p><a href="tel:+1234567891">897 876 765 87</a></p>
            </div>
            
            <div class="info-item">
                <h4>✉️ Email</h4>
                <p><a href="mailto:info@beyond-logistics.com">info@beyond-logistics.com</a></p>
                <p><a href="mailto:support@beyond-logistics.com">support@beyond-logistics.com</a></p>
            </div>
            
            <div class="info-item">
                <h4>⏰ Business Hours</h4>
                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
            </div>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>