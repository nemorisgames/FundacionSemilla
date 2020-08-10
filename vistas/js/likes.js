$(document).ready(function() {

    $(".like").click(function(e) {


        var id = $(this).attr('id');
        var dat = $('#usr').val();
        var responseLike = null;
        console.log(this.id);
        //ajax
        axios.post("vistas/paginas/like.php", {
            id: id,
            usr: dat
        }).then(response => {
            if (response.status == 200) {
                responseLike = response.data;
                $(".like#" + this.id + " img:last-child").replaceWith(response.data);

            }
        }).catch(e => {
            alert(e.response);
        });


        /*   $.ajax({
               url: 'vistas/paginas/like.php',
               type: 'post',
               data: { 'id': id, 'usr': dat },
               success: function(data) {
                   //var arrayJson = JSON.parse(data);
                   //var img = data['img'];
                   //alert($('#' + id).html(img));
                   //console.log(arrayJson);


                   //for (var i = 0; i < data.length; i++) {
                   $(".like img:last-child").remove();
                   $(".like").append(data);
                   //}

               },
               error: function(jqXHR, textStatus) {

                   if (jqXHR.status === 0) {

                       alert('Not connect: Verify Network.');

                   } else if (jqXHR.status == 404) {

                       alert('Requested page not found [404]');

                   } else if (jqXHR.status == 500) {

                       alert('Internal Server Error [500].');

                   } else if (textStatus === 'parsererror') {

                       alert('Requested JSON parse failed.');

                   } else if (textStatus === 'timeout') {

                       alert('Time out error.');

                   } else if (textStatus === 'abort') {

                       alert('Ajax request aborted.');

                   } else {

                       alert('Uncaught Error: ' + jqXHR.responseText);

                   }

               },
           });*/

    });





});


$.ajax({
    url: '../funciones/requestData.php',
    async: false,
    data: {
        tipo: 'cargarSelectCategoria'
    },
    type: 'POST',
    success: function(result) {
        var data = JSON.parse(result);
        for (var i = 0; i < data.length; i++) {
            $("#codi_categoria").append("<option value=" + data[i].codi_categoria + ">" + data[i].desc_categoria + "</option>");
            $("#codi_categoriaAct").append("<option value=" + data[i].codi_categoria + ">" + data[i].desc_categoria + "</option>");
        }
    }
});