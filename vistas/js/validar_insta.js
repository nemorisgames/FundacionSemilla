function validarinsta() {

    var str = document.getElementById('link').value;
    var n = str.lastIndexOf("instagram.com");

    if (n == -1) {
        alert("no es un link valido de instagram");
        return false;

    } else {
        var user = $("[name=id_usuario_1]").val();
        var desafio = $("[name=id_desafio_1]").val();
        var url = $("[name=link_insta_1]").val();

        axios.post("vistas/paginas/desafiobd.php", {
            id: desafio,
            usr: user,
            url: url
        }).then(response => {
            if (response.status == 200) {
                $("[name=desafio19] img:last-child").replaceWith(response.data);

            }
        }).catch(e => {
            alert(e.response);
        });
        //return true;
    }

}

function validarinsta2() {

    var str = document.getElementById('link2').value;
    var n = str.lastIndexOf("instagram.com");

    if (n == -1) {
        alert("no es un link valido de instagram");
        return false;

    } else {
        var user = $("[name=id_usuario_2]").val();
        var desafio = $("[name=id_desafio_2]").val();
        var url = $("[name=link_insta_2]").val();

        axios.post("vistas/paginas/desafiobd.php", {
            id: desafio,
            usr: user,
            url: url
        }).then(response => {
            if (response.status == 200) {
                $("[name=desafio20] img:last-child").replaceWith(response.data);

            }
        }).catch(e => {
            alert(e.response);
        });
        //return true;
    }

}

function validarinsta3() {

    var str = document.getElementById('link3').value;
    var n = str.lastIndexOf("instagram.com");

    if (n == -1) {
        alert("no es un link valido de instagram");
        return false;

    } else {
        var user = $("[name=id_usuario_3]").val();
        var desafio = $("[name=id_desafio_3]").val();
        var url = $("[name=link_insta_3]").val();

        axios.post("vistas/paginas/desafiobd.php", {
            id: desafio,
            usr: user,
            url: url
        }).then(response => {
            if (response.status == 200) {
                $("[name=desafio21] img:last-child").replaceWith(response.data);

            }
        }).catch(e => {
            alert(e.response);
        });
        // return true;
    }

}