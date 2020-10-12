
<?php 
include 'head.php';
include 'header.php';
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

            <button onclick="revealMessage()" class="primary-button">Hello</button>
            <p id="hiddenMessage" style="display:none" class="hidden-message">Hi There!</p>
            </div>
           
           
    </main>
        

<?php include 'footer.php'?>