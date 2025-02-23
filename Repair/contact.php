<?php include('includes/header.php'); ?>

<section class="contact">
    <h1>Contact Us</h1>
    <p>Need a repair? Fill out the form below, and we'll get back to you!</p>

    <form action="send_message.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" name="name" required>
        
        <label for="email">Email Address:</label>
        <input type="email" name="email" required>
        
        <label for="message">Your Message:</label>
        <textarea name="message" required></textarea>
        
        <button type="submit" class="btn">Send Message</button>
    </form>
</section>

<?php include('includes/footer.php'); ?>
