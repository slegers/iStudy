function logoutFunc(){
    event.preventDefault();
    document.getElementById('logout-form').submit();   
}

window.onload = function(){
    $.getJSON('/summary/data', function(data) {
        for (var i = 0; i < data.length; i++){
        var ctxP = document.getElementById(data[i]['id']).getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'doughnut',
            data: {
                labels: ["Home", "School"],
                datasets: [
                    {
                        data: [data[i]["home"], data[i]["school"]],
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
    });
}