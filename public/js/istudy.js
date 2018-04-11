function logoutFunc(){
    event.preventDefault();
    document.getElementById('logout-form').submit();   
}

window.onload = function(){
    var c=document.getElementById("study-time");
    var ctx=c.getContext("2d");
    ctx.beginPath();
    ctx.arc(100,75,50,0,2*Math.PI);
    ctx.stroke();
}
