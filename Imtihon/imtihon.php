<? include '../Qabul/navbar.php'; ?>

<?
session_start();
if (empty($_SESSION['test'])) {
    $_SESSION['test'] = [];
}
















$data = array(
    ''
);

$total = 0;
switch ($data) {
    case 'A':
        $total++;
        break;
    case 'B':
        $total++;
        break;
    case 'C':
        $total++;
        break;
    case 'D':
        $total++;
        break;
}
if ($en_1_1 == 'C') {
    $total++;
}

?>



<div class="conteiner">
    <center>
        <div class="card m-5 bg-body-tertiary  shadow bg-body rounded" style="width: 58rem; height:70vh;">
            <nav aria-label="Page navigation example  ">
                <ul class="pagination justify-content-center m-2">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="?error=er">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>   
                    </li>
                </ul>
            </nav>
            <form action="imtihon.php" method="post" >
                <h1 class="card-text-top m-4"> We ___ American?</h1
                    <div class="card-body " style="margin-left:50%;">
                <div class="form-check ">
                    <div class="form-check d-flex justify-content-start gap-4">
                        <input class="form-check-input" type="radio" name="en-1" id="en" value="A" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            not
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-4">
                        <input class="form-check-input" type="radio" name="en-1" id="en" value="B" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            not are
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-4">
                        <input class="form-check-input" type="radio" name="en-1" id="en" value="C" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            aren’t
                        </label>
                    </div>
                    <div class="form-check d-flex justify-content-start gap-4">
                        <input class="form-check-input" type="radio" name="en-1" id="en" value="D" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            isn’t
                        </label>
                    </div>
                </div>
            </form>
        </div>
</div>
</center>
</div>

































</body>

</html>