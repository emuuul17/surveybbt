<h2 class="page-header">Dashboard</h2>
<h4>Recent Activities</h4>
<ul class="list-group">
<?php foreach($activities as $activity) : ?>
    <?php $date = strtotime($activity->create_date); ?>
        <?php $formatted_date = date('F j, Y, g:i a', $date); ?>
    <li class="list-group-item"><strong><?= $activity->message; ?></strong> - <?= $formatted_date; ?></li>
<?php endforeach; ?>
</ul>
