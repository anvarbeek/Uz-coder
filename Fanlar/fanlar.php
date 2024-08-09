<? include '../Qabul/navbar.php';  ?>
<? session_start();
require_once '../Data/data.php';

if (empty($_SESSION['xotira'])) {
    $_SESSION['xotira'] = [];
}


if (isset($_POST['submit'])) {
    $savol = $_POST['savol'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    if (isset($savol) && isset($a) && isset($b) && isset($c) && isset($d)) {
        if ($savol != '' && $a != ''  && $b != ''  && $c != ''  && $d != '') {

            $sql1 = "INSERT INTO fanlar (savol, a, b, c, d) VALUES ('$savol', '$a', '$b', '$c', '$d')";
            $run = mysqli_query($conn, $sql1);
            if ($run) {
                header('location:fanlar.php?error=yubordi');
            } else {
                echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
            }
        }else{
            header('location:fanlar.php?error=toldir');

        }
    }
}

?>
<div class="conteiner">
    <a type="button" class="btn-close mx-5 mt-2" href="../Ustoz/teacher.php" aria-label="Close"></a>

    <center> <?
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'yubordi') {
                ?>
                <h1 class="alert alert-success m-5 mt-2"><i class="bi bi-check-square-fill">Savol qo'shildi</i></h1>
        <?
                    }
                }
        ?>
        <?
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'toldir') {
                ?>
                <h1 class="alert alert-danger m-5 mt-2"><i class="bi bi-exclamation-triangle-fill">Ma'lumotlarni to'ldir</i></h1>
        <?
                    }
                }
        ?>
        <form action="fanlar.php" method="post" style="margin:3% 20%;">
            <div class="col-md-4 position-relative">
                <label class="form-label">Savol:</label>
                <input type="text" class="form-control" name="savol" >
            </div>
            <div class="col-md-4 position-relative">
                <label  class="form-label">A: varyand</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" >A:</span>
                    <input type="text" class="form-control" name="a" >
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label class="form-label">B: varyand</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" >B:</span>
                    <input type="text" class="form-control" name="b" >
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label  class="form-label">C: varyand</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" >C:</span>
                    <input type="text" class="form-control" name="c">
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label  class="form-label">D: varyand</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" >D:</span>
                    <input type="text" class="form-control" name="d" >
                </div>
            </div>
            <div class="col-md-4 mt-5 d-grid">
                <input type="submit" class="btn btn-outline-info" name="submit">
            </div>
        </form>
    </center>
</div>

</body>

</html>