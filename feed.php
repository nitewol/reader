<?php include 'header.php'; ?>
<?php $feed = FeedMapper::instance()->find($_GET['id']);
$item_helper = new ItemHelper();
?>

<table>
<th>id</th><th>title</th>

<?php foreach( $feed->items() as $item): ?>

<tr>
 <td><?=$item->id()?></td>
  <td><?= $item_helper->link($item)?> </td>
</tr>

<?php endforeach ?>



</table>

<?php include 'footer.php'; ?>
