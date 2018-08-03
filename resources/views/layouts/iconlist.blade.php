<div id="overlay"></div>
<div id="linelay" class="lay">
    <img src="images/svg_icon/line.svg">
    <h3>Line</h3>
    <span class="fas fa-times" id="linelay_close"></span>
    <!--<p>ID: @nexstar1436</p>-->
    <p>準備中</p>
    <div>
        <a class="keyreply-button" href="line://">Open Line</a>
    </div>
</div>
<div id="phonelay" class="lay">
    <img src="images/svg_icon/phone.svg">
    <h3>Phone</h3>
    <span class="fas fa-times" id="phonelay_close"></span>
    <div>
        <a class="keyreply-button" href="tel:0932385405">0932385405</a>
    </div>
</div>
<div class="icon_list">
    <div class="li1">
        <div style="background-color: #2D70E7;">
            <a href="mailto:banessa1121@gmail.com" target="_blank">
                <img src="images/svg_icon/email.svg">
                <span>Email</span>
            </a>
        </div>
    </div>
    <div class="li2">
        <div style="background-color: #09CF2B;">
            <img src="images/svg_icon/phone.svg">
            <span>Phone</span>
        </div>
    </div>
    <div class="li3">
        <div style="background-color: #3ACE01;">
            <img src="images/svg_icon/line.svg">
            <span>Line</span>
        </div>
    </div>
    <div class="li4">
        <div style="background-color: #0082FC;">
            <a href="https://www.facebook.com/mk.flowershop/" target="_blank">
                <img src="images/svg_icon/facebook.svg">
                <span>FB</span>
            </a>
        </div>
    </div>
    <div class="li5">
        <div style="width: 50px;height: 50px;border-radius: 50%;background-color: green;text-align: center;">
            <i class="fas fa-comment" aria-hidden="true" style="font-size: 30px;color: white;margin:8px 0 0 4px;"></i>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $(".li5").click(function() {
            $(".li1, .li2, .li3, .li4").toggle();
        });

        $(".li3").click(function() {
            $("#overlay").show();
            $("#linelay").show();
            $("#phonelay").hide();
        });

        $("#linelay_close").click(function() {
            $("#overlay").hide();
            $("#linelay").hide();
        });

        $(".li2").click(function() {
            $("#overlay").show();
            $("#linelay").hide();
            $("#phonelay").show();
        });

        $("#phonelay_close").click(function() {
            $("#overlay").hide();
            $("#phonelay").hide();
        });

    });
</script>
