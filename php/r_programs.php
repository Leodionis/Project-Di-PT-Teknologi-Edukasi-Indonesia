<?php
include 'koneksi.php';
$db = "SELECT * from programs";
$programs = $conn->query($db);
foreach ($programs as $program) {
?>
    <div class="program-content">
        <img src="./img/<?php echo "$program[img_url]" ?>" alt="">
        <div class="program-content-text">
            <span><?php echo "$program[tag]" ?></span>
            <div class="program-title">
                <i class="material-icons"><?php echo "$program[icon_url]" ?></i>
                <p><?php echo "$program[judul]" ?></p>
            </div>
            <p><?php echo "$program[deskripsi]" ?></p>
        </div>
    </div>
<?php
}
?>