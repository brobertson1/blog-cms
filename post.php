<?php include 'header.php';
?>

    <main>
        <?php
            function getPostDetailsFromDatabase(){

                $postTitle = rawurldecode($_GET["title"]);

                include_once 'db_connect.php';
                $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                $result = mysqli_query($conn, $sql);

                $postDetails = mysqli_fetch_assoc($result);
                return $postDetails;
            }
        ?>
        <div class="main-container">
            <?php 
                $postDetails = getPostDetailsFromDatabase();
            ?>
        <h1> <?php echo $postDetails["title"];?> </h1>
        <div class="name"> <?php echo $postDetails["author"];?> </div>
        <div class="date"><em> <?php echo $postDetails["date"];?></em> </div>
        <div> <?php echo $postDetails["content"];?> </div>
        </div>
    </main>

<?php include 'footer.php' ?>