<?php $this->include("app.layouts.header",['message' => $message]); ?>

<div id="main" class="d-flex flex-row justify-content-center align-items-center ">
        <h1>
            <?php 
            if ($message['error']) {
                echo $message['message'];
            }else{
                echo $message['message'] . "(" . $_SESSION['currentUser'] . ")";
            }
            ?>
        </h1>

        <?php echo ($message['error']) ? ' ' : '<a class="col-lg-4 text-center btn btn-primary m-2" href="http://localhost:81/cariuo/user/playGame" >Play</a>' ;

        ?>
        

</div>

<?php $this->include("app.layouts.footer"); ?>