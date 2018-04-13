function logoutFunc(){
    event.preventDefault();
    document.getElementById('logout-form').submit();   
}

window.onload = function(){
    var ctxP = document.getElementById("pieChart").getContext('2d');
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["Home", "School"],
        datasets: [
            {
                data: [300, 50],
                backgroundColor: ["#F7464A", "#46BFBD"],
                hoverBackgroundColor: ["#FF5A5E", "#5AD3D1"]
            }
        ]
    },
    options: {
        responsive: true
    }    
});
  myPieChart.resize(50,50);
}