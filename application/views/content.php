<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Panel title</h3>
    </div>
    <div class="panel-body">
        <table class="table"> <caption>Optional table caption.</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($all_users as $user){
                ?>
                <tr>
                    <th scope="row"><?php echo $user->id; ?></th>
                    <td><?php echo $user->name; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->password; ?></td>
                </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>