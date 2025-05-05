<?php $this->include("app.layouts.header"); ?>

    <div id="main" class="d-flex flex-row">
        <section id="leftPanel" class="panel
        d-flex flex-column align-items-center justify-content-center
        ">
            <!-- Form Login -->
            <h1>Signin Form</h1>
            <br>
            <h3>
                <?php ?>
            </h3>
            <form action="http://localhost/foxsweeper/user/authSignIn" method="post" enctype="multipart/form-data"
            class="form-group col-lg-6 d-flex flex-column 
            justify-content-center align-items-center"
            >
                <input
                class="form-control formTextBox m-3"
                type="text" name="username" id="username" placeholder="Username">
                <input
                class="form-control formTextBox m-3"
                type="password" name="password" id="password" placeholder="Password">
                <button
                class="btnLogin col-lg-12" 
                type="submit" name="login" id="login">Sign In</button>
            </form>
        </section>
    
        <section id="rightPanel" class="panel
        d-flex flex-column align-items-center justify-content-center
        ">
            <img
            class="col-lg-6 imgFox"
            src="<?php $this->url("public/picture/rightSideImage.png"); ?>" alt="FoxSweeper">
            <p class="desText col-lg-6">
                This is a nostalgic Windows XP game where you find bombs like a fox, just click on the box on the board to find out which box is a bomb and which is not.
            </p>
        </section>
    </div>
<?php $this->include("app.layouts.footer"); ?>
