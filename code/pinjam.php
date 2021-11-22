<?php
    include "header.php";
?>

<body>

    <!-- Form peminjam -->
    <div class="formData">
    <div class="secondTitle">
        Peminjaman
    </div> <br> <br>

    <form action="pinjamScript.php" method="post" id="msg">

        <label>&nbspTanggal request</label> <br> <br>
        <label>&nbsp&nbsp<?php echo date("d/m/Y"); ?></label> <br> <br> <br>

        <label>&nbspTanggal pinjam</label> <br> <br>
        <label>&nbsp
            <?php
                $day = date("d") + 1;
                echo $day . "/" . date("m/Y");
            ?>
        </label> <br> <br> <br>

        <label>&nbspDurasi</label> <br> <br>
        <label>&nbsp&nbsp1 minggu</label><br> <br> <br>

        <label>&nbspName barang</label> <br>
        <select name="namaBarang" id="namaBarang" multiple required>
            <option value="google cardboard">Google Cardboard</option>
            <option value="rj45">RJ45</option>
            <option value="kabel ethernet">Kabel Ethernet</option>
            <option value="vr headset">VR Headset</option>
            <option value="arduino uno">Arduino Uno</option>
        </select> <br> <br>

        <label>&nbspKeperluan</label> <br>
        <textarea name="keperluan" rows="5" cols="20" form="msg" placeholder="Keperluan" required></textarea> <br> <br>

        <input type="submit" name="submit" value="SUBMIT" class="submit1">
    </form>  <br> <br>

    </div> <br>

    <!-- Footer -->
    <footer>
    <div class="end">
        <div style="font-size:15px;font-weight:500">
        Copyright &copy; <?php echo date("Y"); ?>, PT Company
        </div>
    </div>
    </footer>
</body>
</html>