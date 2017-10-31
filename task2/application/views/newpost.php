<?php
if(isset($_COOKIE["user"]) && $_COOKIE["user"]=="admin") {

    ?>

    <form action="newpost" method="post">
        <p>title: <input type="text" name="title" value="title"></p>
        post:
    <textarea name="post" id="editor" style="width: 100%; min-height: 300px;">
        <?php
        if (isset($_POST["post"])) {
            print_r($_POST["post"]);
        }
        ?>
    </textarea>
        <input type="submit" value="add new Post" class="btn btn-success">
    </form>

    <?php
}else{
    ?>
    <a href="/main">go main!</a>
    <?php
}

?>

<script src="tiny_mce/tiny_mce.js"></script>

<script>


tinyMCE.init({
    mode : "textareas",
    theme : "advanced",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    plugins : "table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,zoom,flash,searchreplace,print,contextmenu",
    theme_advanced_buttons1_add_before : "save,separator",
    theme_advanced_buttons1_add : "fontselect,fontsizeselect",
    theme_advanced_buttons2_add : "separator,insertdate,inserttime,preview,zoom,separator,forecolor,backcolor",
    theme_advanced_buttons2_add_before: "cut,copy,paste,separator,search,replace,separator",
    theme_advanced_buttons3_add_before : "tablecontrols,separator",
    theme_advanced_buttons3_add : "emotions,iespell,flash,advhr,separator,print",

});
function fileBrowserCallBack(field_name, url, type) {
    // This is where you insert your custom filebrowser logic
    alert("Filebrowser callback: " + field_name + "," + url + "," + type);
}




</script>