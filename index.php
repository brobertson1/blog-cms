<?php include 'header.php'
?>

    <main>
        <?php
            function getPostTitlesFromDatabase() {
                //TODO in Module 4
                //get this data from a database instead of hardcoding it
                $postTitle = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
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