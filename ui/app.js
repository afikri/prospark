$(document).ajaxSend(function() {
    $("#overlay").fadeIn(300);　
  });

$(document).ready(function () {
    const apiUrl = 'http://localhost:8000/api/products';

    $("button").click(function () {

        $.ajax({
            url: apiUrl,
            type: 'GET',

            success: function (data) {
                console.log(data);
                for (let i = 0; i < data.length; i++) {
                    const row = $("<tr><td>" + data[i].name + "</td>" +
                        "<td>" + data[i].description + "</td>" +
                        "<td>" + data[i].price + "</td>" +
                        "<td>" + data[i].qty + "</td></tr>");
                    $("#myTable").append(row);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error: ' + textStatus + ' - ' + errorThrown);
            }
        }).done(function(){
            setTimeout(function(){
                $("#overlay").fadeOut(300);
              },500);
        });
    });
});



