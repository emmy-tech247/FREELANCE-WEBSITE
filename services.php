
<?php
include('header.php');
include('db.php');

// Fetch services from the database
$sql = "SELECT * FROM services";
$result = $conn->query($sql);
?>
<main>
    <h1>Our Services</h1>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="service">
            <h2><?php echo $row['name']; ?></h2>
            <p><?php echo $row['description']; ?></p>
        </div>
    <?php endwhile; ?>
</main>
<?php include('footer.php'); ?>



