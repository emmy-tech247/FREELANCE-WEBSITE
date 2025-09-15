
<?php
include('includes/header.php');
include('config/db.php');

// Fetch blog posts from the database
$sql = "SELECT * FROM blog ORDER BY date_posted DESC";
$result = $conn->query($sql);
?>
<main>
    <h1>Blog</h1>
    <?php while ($row = $result->fetch_assoc()) : ?>
        <div class="blog-post">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo substr($row['content'], 0, 150); ?>...</p>
            <a href="blog_post.php?id=<?php echo $row['id']; ?>">Read more</a>
        </div>
    <?php endwhile; ?>
</main>
<?php include('includes/footer.php'); ?>

