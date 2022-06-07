<?php
$sql_comments = "SELECT c.id, c.text, a.ime, a.prezime
FROM comments AS c 
inner join author as a on c.id = a.id
WHERE c.post_id = {$_GET['post_id']}";

$comments = fetch($sql_comments, $connection, true);
?>
<div>
    <ul class="comments-list">
        <?php foreach ($comments as  $comment) { ?>
            <h5>Komentar :</h5>
            <li>
                <p><?php echo $comment['text'] ?></p>

                <h7>komentarisao : <?php echo ($comment['ime']) ?> <?php echo ($comment['prezime'])?></h7>
            </li>
            <hr />
        <?php } ?>
    </ul>

</div>