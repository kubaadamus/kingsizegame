<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css">
</head>

<body class="background_gradient_1" >

    <div id="transition" class="transition"></div>
    <img onclick="location.href='https://www.zpsb.pl'" src="assets/images/Logo_new_beztła.png" alt="" style="cursor:pointer;position: absolute;width:500px;left:30px;top:30px;">
    <img src="assets/images/Logo.png" alt="" style="position: absolute;width:35vh;left:50%;top:50%;transform:translate(-50%,-80%)">

    <img class="animation_1 animation_ease" src="assets/images/gnome.png" alt="" style="position: absolute;width:120px;right:100px;bottom:300px;">
    <img src="assets/images/gnome.png" alt="" style="position: absolute;width:120px;right:150px;bottom:320px;">
    <img class="animation_1 animation_ease_in" src="assets/images/gnome.png" alt="" style="position: absolute;width:120px;right:200px;bottom:340px;">
    <img class="animation_1 animation_ease_out" src="assets/images/gnome.png" alt="" style="position: absolute;width:120px;right:50px;bottom:500px;">
    <img src="assets/images/gnome.png" alt="" style="position: absolute;width:120px;right:100px;bottom:520px;">
    <img class="animation_1 animation_ease_in_out" src="assets/images/gnome.png" alt="" style="position: absolute;width:120px;right:150px;bottom:540px;">

    <img src="assets/images/Profit.png" alt="" style="position: absolute;width:120px;left:60px;bottom:200px;">
    <img src="assets/images/Profit.png" alt="" style="position: absolute;width:120px;left:100px;bottom:240px;">
    <img class="animation_1 animation_ease" src="assets/images/Profit.png" alt="" style="position: absolute;width:120px;left:100px;bottom:280px;">
    <img class="animation_1 animation_ease_in" src="assets/images/Profit.png" alt="" style="position: absolute;width:120px;left:180px;bottom:290px;">
    <img src="assets/images/Profit.png" alt="" style="position: absolute;width:120px;left:190px;bottom:250px;">
    <img class="animation_1 animation_ease_in_out" src="assets/images/Profit.png" alt="" style="position: absolute;width:120px;left:230px;bottom:220px;">

    <button onclick="PageTransition('main.php');" class="button_big_pink button_big_pink_with_hover shadow_box_1" style="position:absolute;bottom:120px;left:50%;transform:translateX(-50%)">START</button>

</body>

</html>

<script>
    $(document).ready(function() {
        $("#transition").addClass("translate_x_right");
    });

    function PageTransition(href) {
        $("#transition").removeClass("translate_x_right");
        setTimeout(() => {
            location.href = href;
        }, 1200);
    }
</script>