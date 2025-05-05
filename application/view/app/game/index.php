<?php $this->include("app.game.layouts.headerGame",['userId' => $userId]); ?>

<div id="score_div">
Score: <span id="score">0</span> | <?php echo $userId; ?>
</div>
</div>
<div id="container">
<div id="line_1" class="line"></div>
<div id="line_2" class="line"></div>
<div id="line_3" class="line"></div>
<div id="car" class="car">
    <div class="f_glass"></div>
    <div class="b_glass"></div>
    <div class="f_light_l"></div>
    <div class="f_light_r"></div>
    <div class="f_tyre_l"></div>
    <div class="f_tyre_r"></div>
    <div class="b_tyre_l"></div>
    <div class="b_tyre_r"></div>
</div>
<div id="car_1" class="car">
    <div class="f_glass"></div>
    <div class="b_glass"></div>
    <div class="f_light_l"></div>
    <div class="f_light_r"></div>
    <div class="f_tyre_l"></div>
    <div class="f_tyre_r"></div>
    <div class="b_tyre_l"></div>
    <div class="b_tyre_r"></div>
</div>
<div id="car_2" class="car">
    <div class="f_glass"></div>
    <div class="b_glass"></div>
    <div class="f_light_l"></div>
    <div class="f_light_r"></div>
    <div class="f_tyre_l"></div>
    <div class="f_tyre_r"></div>
    <div class="b_tyre_l"></div>
    <div class="b_tyre_r"></div>
</div>
<div id="car_3" class="car">
    <div class="f_glass"></div>
    <div class="b_glass"></div>
    <div class="f_light_l"></div>
    <div class="f_light_r"></div>
    <div class="f_tyre_l"></div>
    <div class="f_tyre_r"></div>
    <div class="b_tyre_l"></div>
    <div class="b_tyre_r"></div>
</div>
<div id="restart_div">
    <button id="restart">
        Restart<br>
        <small class="small_text">(press Enter)</small>
    </button>
</div>
</div>

<?php $this->include("app.game.layouts.footerGame"); ?>