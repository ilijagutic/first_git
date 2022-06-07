<?php
$sql = "SELECT * FROM comments WHERE post_id = {$_GET['post_id']}";
$statement = $connection->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$comments = fetch($sql, $connection, true)

?>
<div>
    <h4>Komentari:</h4>
    <ul class="comments-list">
        <?php foreach ($comments as  $comment) { ?>
            <?php
                $sqlComment = "SELECT author,text FROM comments WHERE id = '{$comment['id']}'";
                $comm = fetch($sqlComment, $connection);
                ?>
            <li>
                <p><?php echo $comm['text'] ?></p>

                <h6>komentarisao : <?php echo ($comm['author']) ?></h6>
            </li>
            <hr />
        <?php } ?>
    </ul>

</div>