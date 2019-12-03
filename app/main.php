<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <LINK REL=StyleSheet HREF="styles.css" TYPE="text/css">
</head>
<div id="transition" class="transition"></div>

<body class="background_gradient_1">

    <div class="nowaGra margin_center flex flex_column padding_15" style="width:800px">
        <h2 class="text_center header_big_blue padding_30 margin_bottom_30">Nowa gra - ustawienia parametrów</h2>
        <div class="flex flex_column flex_align_items_flex_end fit_content">
            <label for="liczbaDruzyn">Liczba drużyn:
                <button class="button_blue_medium" onclick="chlonnoscRynkuUpdate(3);">3</button>
                <button class="button_blue_medium" onclick="chlonnoscRynkuUpdate(4);">4</button>
                <button class="button_blue_medium" onclick="chlonnoscRynkuUpdate(5);">5</button>
                <button class="button_blue_medium" onclick="chlonnoscRynkuUpdate(6);">6</button>
                <button class="button_blue_medium" onclick="chlonnoscRynkuUpdate(7);">7</button>
            </label>
            <label class="margin_10" for="chlonnoscRynku">Chłonność rynku światowego WORLD:
                <input class="input_standard input_text_center padding_10" type="text" id="chlonnoscRynku" name="chlonnoscRynku" size="10" value="50">
            </label>
            <label class="margin_10" for="kapitalStartowy">Kapitał startowy do dyspozycji drużyn:
                <input class="input_standard input_text_center padding_10" type="text" id="kapitalStartowy" name="kapitalStartowy" size="10" placeholder="70-100 profitów">
            </label>
            <label class="margin_10" for="oprocentowanieKredytuInwestycyjnego">Oprocentowanie kredytu inwestycyjnego:
                <input class="input_standard input_text_center padding_10" type="text" id="oprocentowanieKredytuInwestycyjnego" name="oprocentowanieKredytuInwestycyjnego" size="10" placeholder="3-10 proc.">
            </label>
            <label class="margin_10" for="oprocentowanieKredytuObrotowego">Oprocentowanie kredytu obrotowego:
                <input class="input_standard input_text_center padding_10" type="text" id="oprocentowanieKredytuObrotowego" name="oprocentowanieKredytuObrotowego" size="10" placeholder="2-4 proc.">
            </label>
        </div>
        <div class="nazwyDruzyn margin_center fit_content">
            <table id="nazwyDruzynTabela">
                <tr>
                    <th colspan="3">Nazwy drużyn</th>
                </tr>
                <tr>
                    <th>Lp.</th>
                    <th style="min-width: 400px;">Nazwa firmy</th>
                </tr>
            </table>
        </div>
        <button class="button_big_pink margin_20">Rozpocznij Grę</button>
    </div>
</body>

</html>
<script>
    //Ustalanie chłonności rynku
    function chlonnoscRynkuUpdate(liczbaDruzyn) {
        $("#chlonnoscRynku").val(liczbaDruzyn * 20 - 10);
        nazwyDruzynUpdate(liczbaDruzyn);
    }

    function nazwyDruzynUpdate(liczbaDruzyn) {

        nazwyDruzynTabela = $("#nazwyDruzynTabela");

        $(".nazwaDruzynyTr").remove();

        for (i = 0; i < liczbaDruzyn; i++) {
            nazwyDruzynTr = `
            <tr class="nazwaDruzynyTr">
                <td>Firma: ` + (i + 1) + `</td>
                <td>
                <select class="input_standard padding_5">
                    <option value="">Cośtam 1</option>
                    <option value="">Cośtam 2</option>
                    <option value="">Cośtam 3</option>
                    <option value="">Cośtam 4</option>
                    <option value="">Cośtam 5</option>
                </select>
                </td>
            </tr>
            `;
            $(nazwyDruzynTabela).append(nazwyDruzynTr);
        }
    }
    $(document).ready(function() {
        chlonnoscRynkuUpdate(3);

        $("#transition").addClass("translate_x_right");
    });

    function PageTransition(href) {
        $("#transition").removeClass("translate_x_right");
        setTimeout(() => {
            location.href = href;
        }, 1200);
    }
</script>