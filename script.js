
$(document).ready(function(){
h    
    $("#hiddenMessage").hide();
    $("#helloButton").click(function(){
        $("#hiddenMessage").show();
        })
})

var options={
    valueNames: ['title']
};
new List('sortable-blog-list', options);