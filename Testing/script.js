//Signup and login modal function
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});

function slide(){
    var images=["c.jpg","f.png","g.jpg","h.jpg","k.png"];
    var current = 0;
    var total = 4;
    for (var i = 0; i<=images.length; i++){
        if(i == total){
            i = current;
        }
        else{
            document.getElementById("slider").src=images[i];
        }
    }
}