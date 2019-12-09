<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css">

</head>
<script>
    $(document).ready(function() {
        $("#transition").addClass("translate_x_right");
    });

    function PageTransition(href) {
        $("#transition").removeClass("translate_x_right");
        setTimeout(function() {
            location.href = href;
        }, 1);
    }
    $("#startButton").click(function() {
        alert("lolz");
        console.log("tak");
    });
</script>

<body class="background_gradient_1">
    <!--div id="transition" class="transition"></div-->
    <section class="logo_zpsb">
        <img onclick="location.href='https://www.zpsb.pl'" src="assets/images/Logo_new_beztła.png" alt="">
    </section>

    <main class="flex flex_column">
        <div class="flex flex_row flex_align_items_center" id="main_content">

            <section style="position:relative" class="moneta_container">
                <img class=" moneta" src="assets/images/Profit.png" alt="" style="left:25px;top:20px">
                <img class="animation_1 animation_ease_in_out moneta" src="assets/images/Profit.png" alt="" style="left:90px;top:60px">
                <img class="animation_1 animation_ease moneta" src="assets/images/Profit.png" alt="" style="left:40px;top:100px">
                <img class="moneta" src="assets/images/Profit.png" alt="" style="left:90px;top:150px">
                <img class="animation_1 animation_ease_in moneta" src="assets/images/Profit.png" alt="" style="left:150px;top:200px">
                <img class="animation_1 moneta" src="assets/images/Profit.png" alt="" style="left:100px;top:220px">
            </section>
            <section class="logo_kingsize">
                <img src="assets/images/Logo.png" alt="">
            </section>


            <section style="position:relative;" class="krasnal_container">
            <img class="animation_1 animation_ease_out krasnal" src="assets/images/gnome.png" alt="" style="left:25px;top:20px">
                <img class=" krasnal" src="assets/images/gnome.png" alt="" style="left:55px;top:60px">
                <img class="animation_1 animation_ease_in_out krasnal" src="assets/images/gnome.png" alt="" style="left:85px;top:100px">
                <img class="animation_1 animation_ease_out krasnal" src="assets/images/gnome.png" alt="" style="left:25px;top:200px">
                <img class=" krasnal" src="assets/images/gnome.png" alt="" style="left:55px;top:240px">
                <img class="animation_1 animation_ease_in_out krasnal" src="assets/images/gnome.png" alt="" style="left:85px;top:280px">
            </section>

        </div>
        <section class="flex flex_justify_center" id="main_start">
            <button onclick="PageTransition('main.php');" id="startButton" class="button_start shadow_box_1">START</button>
        </section>
    </main>



</body>

</html>