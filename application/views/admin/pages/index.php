<h2 class="page-header">Pages</h2>

<?php if($this->session->flashdata('success')) : ?>
        <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('error')) : ?>
        <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
    <?php endif; ?>

<?php if($pages) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Published</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date Created</th>
            <th></th>
        </tr>
        <?php foreach($pages as $page) : ?>

        <?php if($page->is_published) :?>
                <?php $publish_icon = 'glyphicon glyphicon-ok'; ?>
        <?php else : ?>
                <?php $publish_icon = 'glyphicon glyphicon-remove'; ?>
        <?php endif; ?>

        <?php $date = strtotime($page->create_date); ?>
        <?php $formatted_date = date('F j, Y, g:i a', $date); ?>
        <tr>
            <td><?= $page->id; ?></td>
            <td><span class="<?= $publish_icon; ?>"></span></td>
            <td><?= $page->title; ?></td>
            <td><?= get_user_full_name($page->user_id); ?></td>
            <td><?= $formatted_date; ?></td>
            <td>
                <?= anchor('admin/pages/edit/'.$page->id.'', 'Edit', 'class="btn btn-default"'); ?>
                <?= anchor('admin/pages/delete/'.$page->id.'', 'Delete', 'class="btn btn-danger"'); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
 <?php else : ?> 
    <p>No Pages</p>
<?php endif; ?>