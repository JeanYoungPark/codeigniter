<ul>
<?php
foreach($topics as $entry) {
?>
    <li><a href="/index.php/topic/<?=$entry->id?>"><?=$entry->title?></a></li>
<?php
}
?>
</ul>
