<?php include 'header.php'; ?>
<?php $item = ItemMapper::instance()->find($_GET['id']) ?>

<?php $feed_helper = new FeedHelper();?>

<?= $feed_helper->link($item->feed())?>

<h2><?=$item->title() ?></h2>

<?= $item->body() ?>
<?php include 'footer.php'; ?>
