<?php include('header.php'); ?>
<main style = "height:480px; padding:45px;">
    <h1>Contact Us</h1>
    <form action="contact.php" method="POST" style = "height:100px; padding:45px;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required ><br><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br><br>
        <label for="message">Message:</label><br><br>
        <textarea id="message" name="message" required style = "height:0-05px; width:400px; padding:45px;"></textarea><br><br><br>
        <button type="submit" name="submit">Send</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Save the contact form to the database or send email
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Here, you would save data to a database or send an email
        echo "Thank you for contacting us!";
    }
    ?>
</main>
<?php include('footer.php'); ?>

