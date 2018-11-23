<h2 class="page-header">Users</h2>

        <?php if($this->session->flashdata('success')) : ?>
                <?= '<div class="alert alert-dismissable alert-success">'.$this->session->flashdata('success').'</div>'  ?>
            <?php endif; ?>
            <?php if($this->session->flashdata('error')) : ?>
                <?= '<div class="alert alert-dismissable alert-danger">'.$this->session->flashdata('error').'</div>'  ?>
            <?php endif; ?>


<?php if($users) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Registered</th>
            <th></th>
        </tr>
        <?php foreach($users as $user) : ?>

        <?php $date = strtotime($user->create_date); ?>
        <?php $formatted_date = date('F j, Y, g:i a', $date); ?>

        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->first_name; ?> <?= $user->last_name;?></td>
            <td><?= $user->username; ?></td>
            <td><?= $user->email; ?></td>
            <td><?= $formatted_date; ?></td>
            <td>
                <?= anchor('admin/users/edit/'.$user->id.'', 'Edit', 'class="btn btn-default"'); ?>
                <?= anchor('admin/users/delete/'.$user->id.'', 'Delete', 'class="btn btn-danger"'); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
 <?php else : ?> 
    <p>No Users</p>
    <?= anchor('admin/users/add', 'Create User', 'class="btn btn-primary"'); ?>
<?php endif; ?>