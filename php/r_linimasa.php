<?php
include 'koneksi.php';
$db = "SELECT * FROM linimasa WHERE id_program = 3 ORDER BY `id` DESC";
$linimasa = $conn->query($db);


foreach ($linimasa as $data) {
?>
    <div class="linimasa-content">
        <div class="linimasa-header">
            <div class="linimasa-batch">
                <p>Batch <?php echo "$data[batch]" ?></p>
            </div>
            <div class="linimasa-header-icon">
                <i class="material-icons">calendar_month</i>
                <?php
                if ($data['registration_status'] == "dibuka") {
                ?>
                    <p>Pendaftaran ditutup
                        <?php
                        // echo "$data[closed_date]";
                        $inputDateClosed = $data['closed_date'];
                        $closedDate = strtotime($inputDateClosed);
                        echo date('d F ', $closedDate);
                        ?>
                    </p>
                <?php
                } else {
                ?>
                    <p>Segera Diumumkan</p>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="linimasa-schedule">
            <div class="linimasa-date">
                <p>Program dimulai</p>
                <p><?php
                    $input_start = $data['program_start'];
                    $date = strtotime($input_start);
                    echo date('d F ', $date);
                    echo " - ";
                    $input_last = $data['program_end'];
                    $date_2 = strtotime($input_last);
                    echo date('d F ', $date_2);
                    ?>
                </p>
            </div>
            <div class="linimasa-jadwal">
                <p>Jadwal belajar</p>
                <p><?php echo "$data[schedule]"; ?></p>
            </div>
            <div class="linimasa-method">
                <p>Metode</p>
                <p><?php echo "$data[method]"; ?></p>
            </div>
            <div class="linimasa-time">
                <p>Jadwal Webinar</p>
                <p><?php echo "$data[webinar_schedule]"; ?></p>
            </div>
        </div>
        <div class="linimasa-schedule-btn">
            <?php
            if ($data['registration_status'] == "dibuka") {
            ?>
                <button class="linimasa-btn-reg">Daftar Sekarang</button>
                <button class="linimasa-btn-contact">Hubungi Kami</button>
            <?php
            } else {
            ?>
                <button class="linimasa-btn-closed">Pendaftaran belum dibuka</button>
            <?php
            }
            ?>
        </div>
    </div>
<?php
}
?>