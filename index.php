<?php include 'header.php'
?>

    <main>
        <?php
            function getPostTitlesFromDatabase() {
                include_once 'db_connect.php';
                $sql = "SELECT title FROM posts";
                $result = mysqli_query($conn, $sql);

                $postTitle = array();
                while($row = mysqli_fetch_assoc($result)){
                    array_push($postTitle, $row['title']);
                }
                return $postTitle;
            }
        ?>

            <div class="main-container">
            
            <h1>Hello, World!</h1>
            <h2>Latest Posts</h2>
            <ul>
                <?php
                    $postTitle = getPostTitlesFromDatabase();

                    foreach($postTitle as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
                    }
                ?>
            </ul>
            </div>
    </main>
        

<?php include 'footer.php'?>