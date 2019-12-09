<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css">
</head>

<body class="background_gradient_1">
    <section class="logo_zpsb">
        <img onclick="location.href='https://www.zpsb.pl'" src="assets/images/Logo_new_beztła.png" alt="">
    </section>
    <span id="krok">POCZĄTEK GRY</span>
    <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
        <div class="flex flex_row margin_center flex_align_items_flex_center fit_content">
            <div id="dodajArkuszPrzycisk"> <button class="button_blue_medium margin_left_right_10" onclick="nowyArkusz();">Dodaj arkusz</button>
            </div>
        </div>
        <div id="przegladMenu" class="flex flex_row flex_align_items_flex_end fit_content margin_top_20">
            <button class="button_blue_small przegladMenuPrzycisk" onclick="zmienPrzeglad($(this),'rozmiaryProdukcji');">Rozmiary produkcji i koszty operacyjne</button>
            <button class="button_blue_small przegladMenuPrzycisk" onclick="zmienPrzeglad($(this),'alokacjaSprzedazy');">Alokacja sprzedaży - macież udziałów w rynku</button>
            <button class="button_blue_small przegladMenuPrzycisk" onclick="zmienPrzeglad($(this),'ksiegowosc');">Księgowość - przychody i koszy</button>
            <button class="button_blue_small przegladMenuPrzycisk" onclick="zmienPrzeglad($(this),'stanyMagazynowe');">Stany magazynowe</button>
        </div>
    </div>
    <main class="margin_center flex flex_column padding_15" style="width:85%">
        <div id="arkusz">
            <h2 style="color:white; margin:0 auto; width:fit-content; margin-bottom:20px">Dodaj arkusz</h2>
            <div class="column">
                <h3 style="color:white; margin:0 auto; width:fit-content">Drużyna:</h3>
                <div class="flex flex_row margin_center flex_align_items_flex_center fit_content" id="firmyArkusz">
                </div>
            </div>
            <div class="column">
                <div class="flex flex_row margin_center fit_content">
                    <div class="left">
                        <div class="margin_center flex flex_column padding_15">
                            <div class="margin_center flex flex_column">
                                <table style="color:white;width:400px;">
                                    <tr>
                                        <td colspan="2">
                                            <h3 style="color:white; margin:0 auto; width:fit-content">Decyzje strategiczne i taktyczne:</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:300px;"></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Inwestycje:</td>
                                        <td><input size="4" type="text" placeholder="np.?" class="input_standard input_arkusz" id="inwestycje_data"></td>
                                    </tr>
                                    <tr>
                                        <td>Modernizacje:</td>
                                        <td style="text-align: center"><input type="checkbox" id="modernizacje_data" class="input_standard input_arkusz"></td>
                                    </tr>
                                    <tr>
                                        <td>Reklama:</td>
                                        <td style="text-align: center"><input type="checkbox" id="reklama_data" class="input_standard input_arkusz"></td>
                                    </tr>
                                    <tr>
                                        <td>Ochrona celna:</td>
                                        <td style="text-align: center"> <input type="checkbox" id="ochrona_data" class="input_standard input_arkusz"></td>
                                    </tr>
                                    <tr>
                                        <td>Fuzja (przejęcie):</td>
                                        <td style="text-align: center">
                                            <select name="fuzja" id="fuzja_data" class="input_standard input_arkusz">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Koszt przejęcia:</td>
                                        <td><input size="4" type="text" placeholder="np.?" class="input_standard input_arkusz" id="przejecie_data"></td>
                                    </tr>
                                    <tr>
                                        <td>Kredyt inwestycyjny:</td>
                                        <td><input size="4" type="text" placeholder="np.?" class="input_standard input_arkusz" id="inwestycyjny_data"></td>
                                    </tr>
                                    <tr>
                                        <td>Kredyt obrotowy:</td>
                                        <td> <input size="4" type="text" placeholder="np.?" class="input_standard input_arkusz" id="obrotowy_data"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="margin_center flex flex_column">
                                <table style="color:white;">
                                    <tr>
                                        <td colspan="2">
                                            <h3 style="color:white; margin:0 auto; width:fit-content">Decyzje operacyjne:</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width:300px;"></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Bieżące rozmiary produkcji:</td>
                                        <td><input size="4" type="text" placeholder="np.?" class="input_standard input_arkusz" id="produkcja_data"></td>
                                    </tr>
                                    <tr>
                                        <td>Zapasy magazynowe:</td>
                                        <td><input size="4" type="text" placeholder="np.?" class="input_standard input_arkusz" id="magazyn_data"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="margin_center flex flex_column padding_15">
                            <div class="flex flex_row margin_center fit_content">
                                <div class="margin_center flex flex_column">
                                    <table id="strategiaTabela" style="color:white;min-width:400px">
                                        <tr>
                                            <td colspan="4">
                                                <h3 style="color:white; margin:0 auto; width:fit-content">Strategia sprzedaży:</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Rynek</th>
                                            <th>Ilość</th>
                                            <th>Cena</th>
                                            <th>Przychód</th>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
                    <div class="flex flex_row margin_center flex_align_items_flex_center fit_content">
                        <div id="dodajButton">
                            <button onclick="dodajArkusz();" class="button_blue_medium margin_left_right_10">Dodaj</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="obliczKrok" hidden>
            <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
                <div class="flex flex_row margin_center flex_align_items_flex_center fit_content">
                    <button style="margin-top: 20vh;" class="button_blue_medium margin_left_right_10" onclick="obliczKrok();" id="obliczKolejny">Oblicz krok ➠</button>
                </div>
            </div>
        </div>
        <div id="rozmiaryProdukcji" class="przegladElement" hidden>
            <h2 class="header_small_pink">Rozmiary produkcji i koszty operacyjne</h2>
            <div class="content">
            <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
            </div>
        </div>
        <div id="alokacjaSprzedazy" class="przegladElement" hidden>
            <h2 class="header_small_pink">Alokacja sprzedaży - macież udziałów w rynku</h2>
            <div class="content">
            <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
            </div>
        </div>
        <div id="ksiegowosc" class="przegladElement" hidden>
            <h2 class="header_small_pink">Księgowość - przychody i koszy</h2>
            <div class="content">
            <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
            </div>
        </div>
        <div id="stanyMagazynowe" class="przegladElement" hidden>
            <h2 class="header_small_pink">Stany magazynowe</h2>
            <div class="content">
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
                <div class="tile">
                    RZECZY
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    var Game = new Object();
    var DodajArkuszDruzyna;

    function Setup() { // Funkcja wstawi wszystkie elementy DOM tam gdzie trzeba
        //Odbieranie danych z URI
        string = decodeURIComponent(window.location.href);
        ustawienia = new Object();
        ustawienia = JSON.parse(string.substring(string.indexOf("=") + 1));
        //======================
        console.log("ustawienia:");
        console.log(ustawienia);

        //Obiekt gry

        Game.name = "Obiekt gry";
        Game.game_id = 1;
        Game.krok = 0;
        Game.ustawienia = ustawienia;
        Game.druzyny = new Array();

        //Dodawanie obiektów drużyn do obiektu gry
        for (var i = 0; i < ustawienia.listaDruzyn.length; i++) {
            var Druzyna = new Object();
            Druzyna.name = ustawienia.listaDruzyn[i];
            Druzyna.arkusze = new Array();
            Game.druzyny.push(Druzyna);
        }
        console.log(" Obiekt gry: ");
        console.log(Game);

        //Stworzy przyciski w nowym arkuszu
        for (var i = 0; i < ustawienia.listaDruzyn.length; i++) {

            $("#firmyArkusz").append(`<button class="button_blue_small druzynaPrzycisk" druzyna="` + ustawienia.listaDruzyn[i] + `" onclick="wybierzDruzyne('` + ustawienia.listaDruzyn[i] + `',$(this))">` + ustawienia.listaDruzyn[i] + `</button>`)
            $("#strategiaTabela tbody").append(`
                                <tr class="rynekTr" numer="` + (i + 1) + `">
                                    <td>Rynek ` + (i + 1) + `</td>
                                    <td><input class="input_standard input_arkusz ilosc" size="3" type="text"></td>
                                    <td><input class="input_standard input_arkusz cena" size="3" type="text"></td>
                                    <td><input class="input_standard input_arkusz przychod" size="3" type="text"></td>
                                </tr>`);
        }
        $("#strategiaTabela tbody").append(`  <tr class="rynekTr" numer="world">
                                    <td>World</td>
                                    <td><input class="input_standard input_arkusz ilosc" size="3" type="text"></td>
                                    <td><input class="input_standard input_arkusz cena" size="3" type="text"></td>
                                    <td><input class="input_standard input_arkusz przychod" size="3" type="text"></td>
                                </tr>
                                <tr  class="rynekLacznieTr">
                                    <td>Łącznie</td>
                                    <td><input id="iloscLacznie" class="input_standard input_arkusz ilosc" size="3" type="text" disabled></td>
                                    <td><input id="cenaLacznie" class="input_standard input_arkusz cena" size="3" type="text" disabled></td>
                                    <td><input id="przychodLacznie" class="input_standard input_arkusz przychod" size="3" type="text" disabled></td>
                                </tr>`);

    }

    function dodajArkusz() {
        //Dodawanie arkusza do drużyny
        var Arkusz = new Object();
        Arkusz.krok = Game.krok;
        Arkusz.inwestycje = $("#inwestycje_data").val();
        Arkusz.modernizacje = $("#modernizacje_data").is(":checked");
        Arkusz.reklama = $("#reklama_data").is(":checked");
        Arkusz.ochrona = $("#ochrona_data").is(":checked");
        Arkusz.fuzja = $("#fuzja_data").val();

        Arkusz.przejecie = $("#przejecie_data").val();
        Arkusz.inwestycyjny = $("#inwestycyjny_data").val();
        Arkusz.obrotowy = $("#obrotowy_data").val();
        Arkusz.produkcja = $("#produkcja_data").val();
        Arkusz.magazyn = $("#magazyn_data").val();

        Arkusz.rynki = new Array();

        $(".rynekTr").each(function() {
            var rynek = new Object();
            rynek.name = $(this).attr("numer");
            rynek.ilosc = $(this).find(".ilosc").val();
            rynek.cena = $(this).find(".cena").val();
            rynek.przychod = $(this).find(".przychod").val();
            Arkusz.rynki.push(rynek);
        });

        Game.druzyny.find(x => x.name == DodajArkuszDruzyna).arkusze.push(Arkusz);
        $(".input_arkusz").val("");
        console.log(" Obiekt gry: ");
        console.log(Game);
        console.log("DODAŁEM ARKUSZ");
        $(".druzynaPrzycisk.selected").removeClass("button_blue_small");
        $(".druzynaPrzycisk.selected").addClass("button_blue_small_disabled");
        $(".druzynaPrzycisk.selected").next().click();
        //W momencie gdy wypełnianie drużyn dojdzie do końca
        if ($('#firmyArkusz').find('.button_blue_small').length == 0) {
            console.log("KONIEC! Teraz oblicz krok!");
            $("#obliczKolejny").addClass("selected");
            $(".druzynaPrzycisk").removeClass("selected");
            $("#dodajButton").slideUp(500);
            $("#arkusz").slideUp(500);
            $("#obliczKrok").slideDown(500);

        }

        losujArkusz();
    }
    $(document).ready(function() {
        Setup();
        wybierzDruzyne($('.druzynaPrzycisk').eq(0).text(), $('.druzynaPrzycisk').eq(0));
        losujArkusz();
        nowyArkusz();
        $("#przegladMenu").slideUp(500);
    });

    //Aktualizacja ilosci łącznej
    $(".input_arkusz").change(function() {
        ilosc = 0;
        cena = 0;
        przychod = 0;

        $(".ilosc").each(function() {
            ilosc += parseInt($(this).text());
        });
        $(".cena").each(function() {
            cena += parseInt($(this).text());
        });
        $(".przychod").each(function() {
            przychod += parseInt($(this).text());
        });

        $("#iloscLacznie").text(ilosc);
        $("#cenaLacznie").text(cena);
        $("#przychodLacznie").text(przychod);

    });

    function wybierzDruzyne(nazwa_druzyny, przycisk) {
        $('.druzynaPrzycisk').removeClass('selected');
        $(przycisk).addClass('selected');
        DodajArkuszDruzyna = nazwa_druzyny;
        console.log("Drużyna wybrana do dodania arkusza " + DodajArkuszDruzyna);
    }

    function obliczKrok() {
        $(".druzynaPrzycisk").show();
        $(".druzynaPrzycisk").removeClass("button_blue_small_disabled");
        $(".druzynaPrzycisk").addClass("button_blue_small");
        $(".druzynaPrzycisk").first().click();
        $("#obliczKolejny").removeClass("selected");
        $("#dodajButton").slideDown(500);

        $("#obliczKrok").slideUp(500);
        Game.krok += 1;
        $("#krok").text("KROK: " + Game.krok);

        $("#dodajArkuszPrzycisk").slideDown(500);
        $("#przegladMenu").slideDown(500);
        $(".przegladMenuPrzycisk").eq(0).click();
    }

    function losujArkusz() {
        $(".rynekTr").each(function() {
            $(this).find(".ilosc").val(Random(1, 50));
            $(this).find(".cena").val(Random(1, 50));
            $(this).find(".przychod").val(Random(1, 50));
        });

        $("#inwestycje_data").val(Random(1, 50));
        $("#przejecie_data").val(Random(1, 50));
        $("#inwestycyjny_data").val(Random(1, 50));
        $("#obrotowy_data").val(Random(1, 50));
        $("#produkcja_data").val(Random(1, 50));
        $("#magazyn_data").val(Random(1, 50));
    }

    function nowyArkusz() {
        $("#arkusz").slideDown(500);
        $("#dodajArkuszPrzycisk").slideUp(500);
        $("#przegladMenu").slideUp(500);
        $('.przegladMenuPrzycisk').removeClass('selected');
        $(".przegladElement").slideUp();
    }

    function zmienPrzeglad(przycisk, pokaz) {
        $('.przegladMenuPrzycisk').removeClass('selected');
        $(przycisk).addClass('selected');

        console.log("zmieniam przeglad: " + przycisk + " " + pokaz);

        $(".przegladElement").slideUp();


        switch (pokaz) {
            case 'rozmiaryProdukcji':
                $("#rozmiaryProdukcji").slideDown();
                break;
            case "alokacjaSprzedazy":
                $("#alokacjaSprzedazy").slideDown();
                break;
            case "ksiegowosc":
                $("#ksiegowosc").slideDown();
                break;
            case "stanyMagazynowe":
                $("#stanyMagazynowe").slideDown();
                break;
        }


    }

    function Random(min, max) { // min and max included 
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
</script>

</html>