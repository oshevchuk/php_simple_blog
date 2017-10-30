<div class="footer">
    <p> @Create by <b>Sasha T.</b></p>
   <p>
    <b>Today:</b> <?= date("Y-m-d h:i:sa"); ?>
   </p>
    <p>
    <b>Created:</b> <?= date("Y-m-d H:i:s.",filemtime("index.php")) ?>
    </p>
</div>

</div>
</body>
</html>