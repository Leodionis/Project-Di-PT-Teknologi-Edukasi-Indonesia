<?php 
include 'koneksi.php';
$db = "SELECT * FROM kurikulum WHERE id_program = 3";
$res = $conn->query($db);
$nomor = 0;
foreach($res as $kurikulum){
    $nomor +=1 ;
    ?>
    <div class="module">
        <div class="module-header" onclick="toggleContent(<?php echo $nomor ?>)">
            <div class="module-header-title">
                <i class="material-icons">folder</i>
                <p><?php echo "$kurikulum[title]" ?></p>
            </div>
            <div class="module-header-schedule">
                <p><?php echo "Minggu $kurikulum[week]" ?></p>
                <i class="material-icons">keyboard_arrow_down</i>
            </div>
        </div>
        <div class="module-content" id="<?php echo $nomor ?>">
            <p><?php echo "$kurikulum[deskripsi]" ?></p>
            <ul>
                <?php
                $listMateri = explode(';',$kurikulum['materi']);
                // var_dump($listMateri);
                $totalTugas = count($listMateri);
                // echo "$test materi";
                foreach($listMateri as $materi){
                    ?>
                        <li><?php echo "$materi" ?></li>
                    <?php
                }
                ?>
            </ul>
            <div class="module-content-icon">
                <i class="material-icons">summarize</i><p><?php echo "$totalTugas Tugas Praktik" ?></p>
            </div>
        </div>
    </div>
    <?php
}
?>