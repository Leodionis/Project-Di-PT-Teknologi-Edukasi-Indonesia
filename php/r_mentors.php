<?php
    include 'koneksi.php';
    $db = "SELECT * FROM mentors WHERE id_program = 3";
    $res = $conn->query($db);
    
    foreach($res as $mentors){
        ?>
        <div class="mentor-item">
            <img src="img/<?php echo "$mentors[img]" ?>" alt="">
            <h4><?php echo "$mentors[name]" ?></h4>
            <p><?php echo "$mentors[job_title]" ?></p>
            <p><?php echo "$mentors[company]" ?></p>
            <div class="mentor-link">
                <img src="img/icon/linkedin-blue.png" alt="icon">
                <a href="<?php echo "$mentors[linkedin]" ?>">Lihat Linkedin 
                <?php 
                    $cropName = explode(' ',$mentors['name']);
                    $resultName = $cropName[0];
                    echo "$resultName";
                ?>
                </a>
            </div>
        </div>
        <?php
    }
?>