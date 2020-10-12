<?php 
include 'head.php';
include 'header.php';
?>

        
        <main>
            <div class="main-container">
            <h1>Post Submission Page</h1>
            <p>If you have an idea for a post, we'd love to hear from you. Please fill out this form to submit your idea for a post.</p>
            <h2>Submission Form</h2>
            <form class="post-form" action="submit-post.php" method="POST">
                <label>Title</label><br>
                <input type="text" name="title"> <br><br>
                <label>Author</label><br>
                <input type="text" name="author"> <br><br>
                <label>Today's Date</label><br>
                <input type="date" name="date"> <br><br>
                <label>Post</label><br>
                <textarea rows="7" cols="40" name="content">
                </textarea><br><br>
                <input type="submit" name ="submit">
            </form>
            </div>
        </main>
        
<?php include 'footer.php' ?>