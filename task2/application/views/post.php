<?php
foreach ($data as $post) {
    ?>
    <h3>
        <?= $post['title']; ?>
    </h3>
    <div>
        <?= $post['text']; ?>
    </div>
    <hr>


    <?php
    if ($_COOKIE["user"] == 'admin') {
        ?>
        <a href="/deletepost/<?= $post['id']; ?>">remove</a>
        <?php
    }
    ?>
    <form name="person" action="addcoment" method="post">
        <input type="text" value="<?= $post['id']; ?>" hidden name="id">
        <input type="text" value="<?= $_COOKIE["user"]; ?>" hidden name="user">
        <input name="comment" class="form-control">
        <input type="submit">
    </form>


<?php
    echo "<div class='com'>";
    foreach ($message as $key => $value) {
        echo "<i>". $value["text"]."</i><br>";
        echo "<b>".$value["author"]."</b>";

        if($value['author']==$_COOKIE["user"]){
            ?>
            <div class="buttons">
            <form action="/editComment" method="post" id="i<?=$value["id"]; ?>" class="edit_coment">
                <input type="hidden" hidden value="<?= $value["id"];?>" name="id">
                <input type="text" value="<?= $value["text"];?>" class="form-control" name="text">
                <input type="submit" value="edit" class="btn btn-success">
            </form>
            <button onclick="show(<?= $value['id'];?>)" class="btn btn-default">Edit</button>
            <form action="/removeComment" method="post"><input type="text" hidden name="coment" value="<?= $value["id"] ?>"> <input
                    type="submit" value="remove" class="btn btn-danger"> </form>
            </div>

        <?php
        }
        echo "<hr>";
    }
    echo "</div>";
}
?>





<script>
    function show(id) {
        $('#i'+id + ' input').show();
        $('#i'+id).next('button').hide();
    }

</script>


