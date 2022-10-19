<?php

function generateCommentInput($projectId){
    if (isset($_SESSION["user"])) {
        echo '<form id="comment-form" method="post" action="files/form-handler.php">';
        echo '  <input id="comm" type="text" name="comment" placeholder="Dodaj komentarz...">';
        echo '  <input type="number" name="projectId" value="' . $projectId . '" style="display:none;">';
        echo '  <input type="hidden" name="operation" value="Comment"/>';
        echo '  <input id="post-comm" type="submit" value="Dodaj"/>';
        echo '</form>';
    }
    else {
        echo '<p id="add-comment">Zaloguj się aby dodać komentarz...</p>';
    }
}
