
<?php
include('includes/header.php');
include('config/db.php');

// Fetch portfolio items from the database
$sql = "SELECT * FROM portfolio";
$result = $conn->query($sql);
?>
<main>
    <h1>Our Portfolio</h1>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="portfolio-item">
            <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['title']; ?>">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['description']; ?></p>
        </div>
    <?php endwhile; ?>
</main>
<?php include('includes/footer.php'); ?>

