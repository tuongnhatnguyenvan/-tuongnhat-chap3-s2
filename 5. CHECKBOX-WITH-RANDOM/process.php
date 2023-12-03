<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : array();
}
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            foreach ($subjects as $value){
                $random_color = $colors[array_rand($colors)];
                echo '<button class="btn btn-' . $random_color . ' me-3">' . $value .'</button>';
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>