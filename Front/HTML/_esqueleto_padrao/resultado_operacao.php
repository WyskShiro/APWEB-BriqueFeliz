<?php
    if (isset($resultado)) {
        if ($resultado) {
?>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span>Funfou</span>
</div>

<?php
    } else {
?>

<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <span>Não Funfou</span>
</div>

<?php

    }
}
?>