<?php include 'header.php'?>
    <main>
        <?php
            function getPostDetailsFromDatabase(){
                //ToDo in Module 4
                //get this data from a database instead of hardcoding it
                $postDetails = array('title' => 'Blog Post 1',
                                    'content' => 'My first blog post',
                                    'date' => '01/01/2018',
                                    'author' => 'christikaes');
                return $postDetails;
            }
        ?>
        <div class="main-container">
            <?php 
                //post details contains all the data to generate the blog from
                $postDetails = getPostDetailsFromDatabase();
            ?>
        <h1> <?php echo $postDetails["title"];?> </h1>
        <div class="name"> <?php echo $postDetails["author"];?> </div>
        <div class="date"><em> <?php echo $postDetails["date"];?></em> </div>
        <div> <?php echo $postDetails["content"];?> </div>
        </div>
    </main>

<?php include 'footer.php' ?>