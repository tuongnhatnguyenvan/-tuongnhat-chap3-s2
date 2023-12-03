<?php require 'templates/header.php'; ?>
<?php
// YOUR CODE HERE
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $province = isset($_POST['province']) ? $_POST['province'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : array();
   }
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province; ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php
            if ($gender === 'Male') {
                echo '<img class='.'"rounded-circle w-25 h-25"'.' src="./images/male.png">';
            } else{
                echo '<img class='.'"rounded-circle w-25 h-25"'.' src="./images/female.png">';
            }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                foreach ($subjects as $value) {
                    echo '<button class="btn btn-primary me-3">'. $value . '</button>';
                }
            ?>
        </div>
    </div>

<?php require 'templates/footer.php'; ?>