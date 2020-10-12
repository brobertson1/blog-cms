
$(document).ready(function(){
   
    $("#hiddenMessage").hide();
    $("#helloButton").click(function(){
        $("#hiddenMessage").show();
        })
    
    var editor=ace.edit("editor");
    editor.session.setMode("ace/mode/html");
    editor.setTheme("ace/theme/chrome");

    

    $("#submit").click(function(){
        var title = $("#title").val();
        var author = $("#author").val();
        var date = $("#date").val();
        var content = editor.getValue();
        });

    
    $.post( "submit-post.php", { 
        title: title, 
        content: content, 
        author: author, 
        date: date 
    }).done(function() {
        window.location = "/index.php";
    });    
    
})

var options = {
    valueNames: ['title']
};
new List('sortable-blog-list', options);


