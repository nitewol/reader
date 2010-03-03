<?php include 'header.php'; ?>
<?php $feeds = FeedMapper::instance()->find_all(); 
$feed_helper = new FeedHelper();
?>

<table>

<tr><th>id</th><th>title</th><th>feed url</th><th>time to live</th>
 <tr>

<?php foreach($feeds as $feed): ?>
<tr>

<td><?= $feed->id() ?></td>
<td><?= $feed_helper->link($feed) ?></td>
<td><?= $feed->feed_url() ?></td>
<td><?= $feed->time_to_live() ?></td>

</tr>
<?php endforeach ?>


</table>


<?php include 'footer.php'; ?>
