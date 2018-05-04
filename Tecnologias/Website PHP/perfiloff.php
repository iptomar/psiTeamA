
    <?php
        session_start();    

        if($_SESSION["login"] === true) {
            include_once "headeron.php";
        } else {
            include_once "headeroff.php";
        }
    ?> 
    <div class="conteudo">
        <h3>Por Favor faça login antes de aceder a esta página.</h3>
    </div>
    <?php
        include_once "footer.php"; 
    ?>
	