<? include 'navbar.php';?>

<div class="conteiner">
    <form action="royhatdanOtish.php" method="post" class="card shadow bg-body rounded" style=" margin:3% 35%; width:30%; padding:3%; height:60vh;">
        <a href="../index.php" class="btn-close justify-content-end-top"></a>
        <center>
            <h1 class="m-4">Kirish</h1>
            <span class="text-muted">Login va parolni hech kimga bermang</span>
        </center>
        <div class="row ">
            <div class="m-4 d-flex flex-wrap ">
                <div class="form-group col-sm-dm-6 m-2 mt-4 shadow bg-body rounded">
                    <input type="text" class="form-control" name="login" placeholder="Login">
                </div>
                <div class="form-group col-sm-dm-6  m-2 mt-4 shadow bg-body rounded">
                    <input type="Password" class="form-control" name="password" placeholder="Password">
                </div>
               
                <div class="form-group m-2 mt-4 flex-grow-1 shadow bg-body rounded">
                    <select name="skills" id="" class="form-control text-center">
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>
            </div>
        </div>
        <div class=" shadow bg-body d-grid mt-5 ">
            <a type="submit" class="btn btn-outline-success" name="submit">Next </a>
        </div>
    </form>

</div>



</body>
</html>