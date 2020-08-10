$(document).ready(function() {
    const originalPost = $("[name=btn-edit-post]").html();
    $("[name=btn-edit-post]").click(function(e) {
        var id = $(this).attr('id');

        var content = $("[name=post-content-edit][id=" + id + "]").text().trim();
        $("[name=post-content-edit][id=" + id + "]").replaceWith('<input name="post-content-edit" type="text" id="' + id + '" value="' + $("[name=post-content-edit][id=" + id + "]").text().trim() + '">');

        window.addEventListener("keydown", (e) => {
            if (e.key === "Enter") {

                if (content == $("[name=post-content-edit][id=" + id + "]").val().trim()) {
                    $("[name=post-content-edit][id=" + id + "][type=text]").replaceWith('<div name="post-content-edit" id="' + id + '">' + $("[name=post-content-edit][id=" + id + "]").val() + ' </div>');
                } else {

                    axios.post("/vistas/paginas/post.php?action=edit", { id: id, content: $("[name=post-content-edit][id=" + id + "]").val().trim() }).then(response => {

                        $("[name=post-content-edit][id=" + id + "][type=text]")
                            .replaceWith('<div name="post-content-edit" id="' + id + '">' + response.data + ' </div>');

                    });

                }

            }
        })
    });
    $("[name=pin-post]").click(function(e) {
        var id = $(this).attr('id');
        var dat = $('#usr').val();
        var pinPost = null;
        console.log(this.id);
        axios.post("vistas/paginas/post.php?action=pin-post", {
            id: id,
            usr: dat
        }).then(response => {
            if (response.status == 200) {
                pinPost = response.data;
                $("[name=pin-post][id=" + this.id + "] img:last-child").replaceWith(response.data);

            }
        }).catch(e => {
            alert(e.response);
        });
    });

    $("[name=pin-post]").click(function(e) {
        var id = $(this).attr('id');
        var dat = $('#usr').val();
        var pinPost = null;
        console.log(this.id);
        axios.post("vistas/paginas/post.php?action=pin-post", {
            id: id,
            usr: dat
        }).then(response => {
            if (response.status == 200) {
                pinPost = response.data;
                $("[name=pin-post][id=" + this.id + "] img:last-child").replaceWith(response.data);

            }
        }).catch(e => {
            alert(e.response);
        });
    });



});