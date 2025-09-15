
<?php
include('includes/header.php');
include('config/db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch specific blog post from the database
    $sql = "SELECT * FROM blog WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>
<main>
    <h1><?php echo $row['title']; ?></h1>
    <p><?php echo $row['content']; ?></p>
</main>
<?php include('includes/footer.php'); ?>


