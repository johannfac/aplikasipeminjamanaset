<?php
    include "header.php";
?>

<body>

    <!-- Login -->
    <div class="formData">
    <div class="secondTitle">
        Login
    </div> <br> <br> <br>

    <form action="pinjam.php" method="post" id="msg">

        <label>&nbspUsername</label> <br>
        <input type="text" name="username" size="42" required> <br> <br>

        <label>&nbspPassword</label> <br>
        <input type="password" name="password" size="42" required> <br> <br>

        <input type="submit" name="submit" value="SUBMIT" class="submit1">
    </form>  <br> <br>

    </div> <br> <br> <br> <br>

    <!-- Footer -->
    <footer>
    <div class="end">
        <div style="font-size:15px;font-weight:500">
        Copyright &copy; <?php echo date("Y"); ?>, PT Company
        </div>
    </div>

</body>
</html>