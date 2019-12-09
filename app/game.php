<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css">
</head>

<body class="background_gradient_1">
    <section class="logo_zpsb">
        <img onclick="location.href='https://www.zpsb.pl'" src="assets/images/Logo_new_beztła.png" alt="">
    </section>
    <div class="flex flex_row">


        <section class="swipable main_menu_div">
            <div style="position:relative">

                <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
                    <div class="flex flex_column flex_align_items_flex_end fit_content" id="ustawieniaParametrow">
                        <label id="liczbaDruzyn_div" for="liczbaDruzyn">Menu:
                            <button class="button_blue_small" onclick="dodajArkuszMenu();">Dodaj arkusz</button>
                            <button class="button_blue_small">Oblicz kolejny krok</button>
                        </label>
                        <label id="liczbaDruzyn_div" for="liczbaDruzyn">Wyświetl:
                            <button class="button_blue_small">Rozmiary produkcji <br> i koszty operacyjne</button>
                            <button class="button_blue_small">Alokacja sprzedaży <br> - macież udziałów w rynku</button>
                            <button class="button_blue_small">Księgowość <br> - przychody i koszty</button>
                            <button class="button_blue_small">Stany magazynowe</button>
                        </label>
                    </div>
                </div>
            </div>
        </section>
        <section class="swipable dodaj_arkusz_div swiped_left">
            <div style="position:relative">

                <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
                    <div class="flex flex_column flex_align_items_flex_end fit_content" id="ustawieniaParametrow">
                        <label id="liczbaDruzyn_div" for="liczbaDruzyn">RZECZY:
                            <button class="button_blue_small">Dodaj arkusz</button>
                            <button class="button_blue_small">Oblicz kolejny krok</button>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

<script>
    string = decodeURIComponent(window.location.href);
    string.indexOf

    data = new Object();
    data = JSON.parse(string.substring(string.indexOf("=") + 1));
    console.log(data);




    function dodajArkuszMenu() {
        $(".main_menu_div").addClass("swiped_right");
    }
</script>

</html>