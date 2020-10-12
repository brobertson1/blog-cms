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
            <input type="text" id="title" name="title" placeholder="Title"></input><br>
            <input type="text" id="author" name="author" placeholder="Author"></input><br>
            <input type="date" id="date" name="date" placeholder="Date"></input><br><br>
            <div id="editor"></div><br>
            <button id="submit" class="primary-button">Submit</input>  
            </form>
            </div>
        </main>
        
<?php include 'footer.php' ?>