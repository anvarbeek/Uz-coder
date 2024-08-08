<? include 'navbar.php'; ?>

<div class="conteiner">
    <form action="royhatdanOtish.php" method="post" class="card shadow bg-body rounded" style=" margin:3% 30%; width:40%; padding:3%; height:80vh;">
        <a href="../index.php" class="btn-close justify-content-end-top"></a>
        <center>
            <h1 class="m-4">Ro'yhatdan o'tish</h1>
            <span class="text-muted"> Bu yerda har bitta odam biri marta ro'yhatdan o'tadi</span>
        </center>
        <div class="row ">
            <div class="m-4 d-flex flex-wrap ">

                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <input type="text" class="form-control" name="f_name" placeholder="First Name">
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <input type="text" class="form-control" name="l_name" placeholder="Last Name">
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <input type="tel" class="form-control" name="tel" placeholder="+998">
                </div>
                <div class="form-check col-sm-md m-2 mt-4 shadow bg-body rounded">
                    <div class="form-check form-check-inline m-2">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="erkak">
                        <label class="form-check-label" for="inlineRadio1">Erkak</label>
                    </div>
                    <div class="form-check form-check-inline m-2 px-4">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="ayol">
                        <label class="form-check-label" for="inlineRadio2">Ayol</label>
                    </div>
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <select name="nation" id="" class="form-control">
                        <option value="tanlang">Nation</option>
                        <option value="uzbek">Uzbek</option>
                        <option value="rus">Rus</option>
                    </select>
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <input type="email" class="form-control" name="f_name" placeholder="Email address">
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <div class="form-group col-sm-md  m-2 mt-4 shadow bg-body rounded">
                    <select name="skills" id="" class="form-control">
                        <option value="tanlang">Skills</option>
                        <option value="frontend">Front-end</option>
                        <option value="backend">Back-end</option>
                        <option value="fullstack">Full-stack</option>
                        <option value="mobile">Mobile</option>
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