<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
       if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $number = isset($_POST['number']) ? $_POST['number'] : '';
        $province = isset($_POST['province']) ? $_POST['province'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : array();
        $message = isset($_POST['message']) ? $_POST['message'] : '';
       }
    ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $number; ?></td>
            <td><?php echo $message; ?></td>
            <td><?php echo $province; ?></td>
            <td>
                <?php 
                   // subjects
                foreach($subjects as $value){
                    echo $value . '|';
                }
                ?>
            </td>
            <td><?php echo $gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>