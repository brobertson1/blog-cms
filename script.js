
$(document).ready(function(){
   
    $("#hiddenMessage").hide();
    $("#helloButton").click(function(){
        $("#hiddenMessage").show();
        })
    
        var editor=ace.edit("editor");
        editor.session.setMode("ace/mode/html");

    $("#submit").click(function(){
        var title = $("#title").val();
        var author = $("#author").val();
        var date = $("#date").val();
        var content = editor.getValue();
        });

        
    
})

var options = {
    valueNames: ['title']
};
new List('sortable-blog-list', options);

