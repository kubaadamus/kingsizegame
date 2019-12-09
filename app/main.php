<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css">
</head>
<!--div id="transition" class="transition"></div-->

<body class="background_gradient_1">

    <section class="logo_zpsb">
        <img onclick="location.href='https://www.zpsb.pl'" src="assets/images/Logo_new_beztła.png" alt="">
    </section>

    <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
        <h2 class="text_center header_big_blue padding_10 margin_bottom_10">Nowa gra <br> ustawienia parametrów</h2>
        <div class="flex flex_column flex_align_items_flex_end fit_content" id="ustawieniaParametrow">
            <label id="liczbaDruzyn_div" for="liczbaDruzyn">Liczba drużyn:
                <div class="margin_top_10">
                    <button class="button_blue_medium liczbaDruzynPrzycisk" onclick="chlonnoscRynkuUpdate(3);$('.liczbaDruzynPrzycisk').removeClass('selected');$(this).addClass('selected');">3</button>
                    <button class="button_blue_medium liczbaDruzynPrzycisk" onclick="chlonnoscRynkuUpdate(4);$('.liczbaDruzynPrzycisk').removeClass('selected');$(this).addClass('selected');">4</button>
                    <button class="button_blue_medium liczbaDruzynPrzycisk" onclick="chlonnoscRynkuUpdate(5);$('.liczbaDruzynPrzycisk').removeClass('selected');$(this).addClass('selected');">5</button>
                    <button class="button_blue_medium liczbaDruzynPrzycisk" onclick="chlonnoscRynkuUpdate(6);$('.liczbaDruzynPrzycisk').removeClass('selected');$(this).addClass('selected');">6</button>
                    <button class="button_blue_medium liczbaDruzynPrzycisk" onclick="chlonnoscRynkuUpdate(7);$('.liczbaDruzynPrzycisk').removeClass('selected');$(this).addClass('selected');">7</button>
                </div>
            </label>
            <label id="chlonnoscRynku_div" for="chlonnoscRynku">Chłonność&nbsp;rynku&nbsp;światowego WORLD:
                <input readonly class="input_standard input_text_center padding_10" type="text" id="chlonnoscRynku" name="chlonnoscRynku" size="10" value="50">
            </label>
            <label id="poziomTrudnosci_div" for="poziomTrudnosci">Generuj losowo:
                <div class="flex flex_row">
                    <button class="button_blue_small poziomTrudnosci" onclick="GenerujLosowo('latwy');$('.poziomTrudnosci').removeClass('selected');$(this).addClass('selected');">Łatwy</button>
                    <button class="button_blue_small poziomTrudnosci" onclick="GenerujLosowo('sredni');$('.poziomTrudnosci').removeClass('selected');$(this).addClass('selected');">Średni</button>
                    <button class="button_blue_small poziomTrudnosci" onclick="GenerujLosowo('trudny');$('.poziomTrudnosci').removeClass('selected');$(this).addClass('selected');">Trudny</button>
                </div>
            </label>
            <label id="kapitalStartowy_div" class="margin_10" for="kapitalStartowy">Kapitał startowy do dyspozycji drużyn:
                <input onchange="if($(this).val()<70){$(this).val(70)};if($(this).val()>100){$(this).val(100)}" class="input_standard input_text_center padding_10" type="text" id="kapitalStartowy" name="kapitalStartowy" size="10" placeholder="70-100 profitów">
            </label>
            <label id="oprocentowanieKredytuInwestycyjnego_div" class="margin_10" for="oprocentowanieKredytuInwestycyjnego">Oprocentowanie kredytu inwestycyjnego:
                <input onchange="if($(this).val()<3){$(this).val(3)};if($(this).val()>10){$(this).val(10)}" class="input_standard input_text_center padding_10" type="text" id="oprocentowanieKredytuInwestycyjnego" name="oprocentowanieKredytuInwestycyjnego" size="10" placeholder="3-10 proc.">
            </label>
            <label id="oprocentowanieKredytuObrotowego_div" class="margin_10" for="oprocentowanieKredytuObrotowego">Oprocentowanie kredytu obrotowego:
                <input onchange="if($(this).val()<2){$(this).val(2)};if($(this).val()>4){$(this).val(4)}" class="input_standard input_text_center padding_10" type="text" id="oprocentowanieKredytuObrotowego" name="oprocentowanieKredytuObrotowego" size="10" placeholder="2-4 proc.">
            </label>
        </div>
        <div class="nazwyDruzyn margin_center fit_content">
            <table id="nazwyDruzynTabela">
                <tr>
                    <th style="min-width: 400px;" class=" header_big_blue padding_10 " colspan="3">Nazwy drużyn</th>
                </tr>
            </table>
        </div>
        <button onclick="startGame();" class="button_start_small">Rozpocznij Grę</button>
    </div>
</body>

</html>
<script>
    //Ustalanie chłonności rynku
    var liczbaDruzyn;
    var chlonnoscRynku;
    var kapitalStartowy;
    var oprocentowanieKredytuInwestycyjnego;
    var oprocentowanieKredytuObrotowego;
    var listaDruzyn = new Array();

    function chlonnoscRynkuUpdate(_liczbaDruzyn) {
        $("#chlonnoscRynku").val(_liczbaDruzyn * 20 - 10);
        nazwyDruzynUpdate(_liczbaDruzyn);
        liczbaDruzyn = _liczbaDruzyn;
        chlonnoscRynku = _liczbaDruzyn * 20 - 10;
    }

    function nazwyDruzynUpdate(liczbaDruzyn) {

        nazwyDruzynTabela = $("#nazwyDruzynTabela");

        $(".nazwaDruzynyTr").remove();

        for (i = 0; i < liczbaDruzyn; i++) {
            nazwyDruzynTr = `
            <tr class="nazwaDruzynyTr">
                <td class="nazwaFirmyTd">Drużyna ` + (i + 1) + `</td>
                <td>
                <select numer="` + i + `" class="input_standard nazwaFirmyWalidacjaSelect" onchange="nazwaFirmyWalidacja($(this));">
                    <option value="">WYBIERZ NAZWĘ</option>
                    <option value="FRANCJA">FRANCJA</option>
                    <option value="JAPONIA">JAPONIA</option>
                    <option value="KANADA">KANADA</option>
                    <option value="NIEMCY">NIEMCY</option>
                    <option value="USA">USA</option>
                    <option value="WIELKA BRYTANIA">WIELKA BRYTANIA</option>
                    <option value="WŁOCHY">WŁOCHY</option>
                </select>
                </td>
            </tr>
            `;
            $(nazwyDruzynTabela).append(nazwyDruzynTr);
        }
    }
    $(document).ready(function() {
        $("#transition").addClass("translate_x_right");
        chlonnoscRynkuUpdate(3);
    });

    function PageTransition(href) {
        $("#transition").removeClass("translate_x_right");
        setTimeout(function() {
            location.href = href;
        }, 1);
    }

    function GenerujLosowo(poziomTrudnosci) {
        if (poziomTrudnosci == "latwy") {
            $("#kapitalStartowy").val(parseInt((Math.random() * 10) + 90));
            $("#oprocentowanieKredytuInwestycyjnego").val(parseInt((Math.random() * 2) + 3));
            $("#oprocentowanieKredytuObrotowego").val(2);
        }
        if (poziomTrudnosci == "sredni") {
            $("#kapitalStartowy").val(parseInt((Math.random() * 30) + 50));
            $("#oprocentowanieKredytuInwestycyjnego").val(parseInt((Math.random() * 3) + 5));
            $("#oprocentowanieKredytuObrotowego").val(3);
        }
        if (poziomTrudnosci == "trudny") {
            $("#kapitalStartowy").val(parseInt((Math.random() * 20) + 30));
            $("#oprocentowanieKredytuInwestycyjnego").val(parseInt((Math.random() * 4) + 7));
            $("#oprocentowanieKredytuObrotowego").val(4);
        }

        kapitalStartowy = $("#kapitalStartowy").val();
        oprocentowanieKredytuInwestycyjnego = $("#oprocentowanieKredytuInwestycyjnego").val();
        oprocentowanieKredytuObrotowego = $("#oprocentowanieKredytuObrotowego").val();
    }

    function nazwaFirmyWalidacja(select) {

        listaDruzyn = new Array();
        var TablicaZajetych = new Array();
        $(".nazwaFirmyWalidacjaSelect").each(function() { // Przeleć wszystkie selecty
            if ($(this).val() != "") { // jeśli wartość skanowanego to WYBRANY
                TablicaZajetych.push($(this).val());
                listaDruzyn.push($(this).val());
            }
        });

        $(".nazwaFirmyWalidacjaSelect").each(function() { // Przeleć wszystkie selecty

            if ($(this).attr("numer") !== $(select).attr("numer")) { // Jeśli skanowany to nie ten sam co wywołuje funkcję
                $(this).children("option").each(function() { // to przeskanuj jego optionsy
                    if ($.inArray($(this).attr("value"), TablicaZajetych) != -1) {

                        $(this).hide(); //wywal go
                    } else {
                        $(this).show();
                    }
                });
            }
        });

    }

    function startGame() {
        //console.log("liczba drużyn: " + liczbaDruzyn);
        //console.log("chłonność: " + chlonnoscRynku);
        //console.log("kapitał startowy: " + kapitalStartowy);
        //console.log("oprocentowanie kredytu inwestycyjnego: " + oprocentowanieKredytuInwestycyjnego);
        //console.log("oprocentowanie kredytu obrotowego: " + oprocentowanieKredytuObrotowego);
        //console.log(listaDruzyn);

        var data = new Object();
        data.liczbaDruzyn = liczbaDruzyn;
        data.chlonnoscRynku = chlonnoscRynku;
        data.kapitalStartowy = kapitalStartowy;
        data.oprocentowanieKredytuInwestycyjnego = oprocentowanieKredytuInwestycyjnego;
        data.oprocentowanieKredytuObrotowego = oprocentowanieKredytuObrotowego;
        data.listaDruzyn = listaDruzyn;
        var url = 'game.php?data=' + encodeURIComponent(JSON.stringify(data));
        window.location.href = url;

    }
</script>