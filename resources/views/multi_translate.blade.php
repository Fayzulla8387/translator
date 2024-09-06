<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Istalgan tildan tarjima qilish</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
            padding: 30px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
            color: #333333;
        }

        label {
            font-weight: 600;
            color: #555555;
        }

        select, input[type="text"] {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dddddd;
            font-size: 16px;
        }

        textarea {
            margin-top: 20px;
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #dddddd;
            font-size: 16px;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Istalgan tildan tarjima qilish</h1>
    <form id="multiTranslateForm">
        <div class="mb-3">
            <label for="sourceLang" class="form-label">Asosiy til</label>
            <select id="sourceLang" name="sourceLang" class="form-select">
                <option value="af">Afrikans</option>
                <option value="sq">Albaniya</option>
                <option value="ar">Arabcha</option>
                <option value="hy">Armeniya</option>
                <option value="bn">Bengalcha</option>
                <option value="bs">Bosniya</option>
                <option value="ca">Katalancha</option>
                <option value="hr">Xorvatcha</option>
                <option value="cs">Chexcha</option>
                <option value="da">Danishcha</option>
                <option value="nl">Gollandcha</option>
                <option value="en">Inglizcha</option>
                <option value="eo">Esperanto</option>
                <option value="et">Estoncha</option>
                <option value="fi">Fincha</option>
                <option value="fr">Fransuzcha</option>
                <option value="de">Nemischa</option>
                <option value="el">Grechcha</option>
                <option value="gu">Gujaratcha</option>
                <option value="ht">Gaiti</option>
                <option value="ha">Xausa</option>
                <option value="he">Ibroniy</option>
                <option value="hi">Hindcha</option>
                <option value="hu">Vengriya</option>
                <option value="is">Islanch</option>
                <option value="id">Indoneziya</option>
                <option value="it">Italiya</option>
                <option value="ja">Yaponcha</option>
                <option value="jw">Javancha</option>
                <option value="kn">Kannada</option>
                <option value="km">Kmer</option>
                <option value="ko">Koreyscha</option>
                <option value="la">Lotincha</option>
                <option value="lv">Latviya</option>
                <option value="lt">Litva</option>
                <option value="lu">Luganda</option>
                <option value="mk">Makedoniya</option>
                <option value="ml">Malayalam</option>
                <option value="mi">Maori</option>
                <option value="mr">Marathi</option>
                <option value="my">Birma</option>
                <option value="ne">Nepal</option>
                <option value="no">Norveg</option>
                <option value="or">Oriya</option>
                <option value="pl">Polsha</option>
                <option value="pt">Portugaliya</option>
                <option value="pa">Panjobi</option>
                <option value="ro">Ruminiya</option>
                <option value="ru">Ruscha</option>
                <option value="si">Singhal</option>
                <option value="sk">Slovak</option>
                <option value="sl">Sloveniya</option>
                <option value="es">Ispancha</option>
                <option value="su">Sundan</option>
                <option value="sw">Svahili</option>
                <option value="sv">Shvedcha</option>
                <option value="ta">Tamil</option>
                <option value="te">Telugu</option>
                <option value="th">Tay</option>
                <option value="tr">Turkcha</option>
                <option value="uk">Ukraina</option>
                <option value="ur">Urdu</option>
                <option value="uz">O'zbekcha</option>
                <option value="vi">Vyetnam</option>
                <option value="cy">Uels</option>
                <option value="xh">Xhosa</option>
                <option value="yi">Yiddish</option>
                <option value="yo">Yoruba</option>
                <option value="zu">Zulu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="targetLang" class="form-label">Tarjima tili</label>
            <select id="targetLang" name="targetLang" class="form-select">
                <option value="af">Afrikans</option>
                <option value="sq">Albaniya</option>
                <option value="ar">Arabcha</option>
                <option value="hy">Armeniya</option>
                <option value="bn">Bengalcha</option>
                <option value="bs">Bosniya</option>
                <option value="ca">Katalancha</option>
                <option value="hr">Xorvatcha</option>
                <option value="cs">Chexcha</option>
                <option value="da">Danishcha</option>
                <option value="nl">Gollandcha</option>
                <option value="en">Inglizcha</option>
                <option value="eo">Esperanto</option>
                <option value="et">Estoncha</option>
                <option value="fi">Fincha</option>
                <option value="fr">Fransuzcha</option>
                <option value="de">Nemischa</option>
                <option value="el">Grechcha</option>
                <option value="gu">Gujaratcha</option>
                <option value="ht">Gaiti</option>
                <option value="ha">Xausa</option>
                <option value="he">Ibroniy</option>
                <option value="hi">Hindcha</option>
                <option value="hu">Vengriya</option>
                <option value="is">Islanch</option>
                <option value="id">Indoneziya</option>
                <option value="it">Italiya</option>
                <option value="ja">Yaponcha</option>
                <option value="jw">Javancha</option>
                <option value="kn">Kannada</option>
                <option value="km">Kmer</option>
                <option value="ko">Koreyscha</option>
                <option value="la">Lotincha</option>
                <option value="lv">Latviya</option>
                <option value="lt">Litva</option>
                <option value="lu">Luganda</option>
                <option value="mk">Makedoniya</option>
                <option value="ml">Malayalam</option>
                <option value="mi">Maori</option>
                <option value="mr">Marathi</option>
                <option value="my">Birma</option>
                <option value="ne">Nepal</option>
                <option value="no">Norveg</option>
                <option value="or">Oriya</option>
                <option value="pl">Polsha</option>
                <option value="pt">Portugaliya</option>
                <option value="pa">Panjobi</option>
                <option value="ro">Ruminiya</option>
                <option value="ru">Ruscha</option>
                <option value="si">Singhal</option>
                <option value="sk">Slovak</option>
                <option value="sl">Sloveniya</option>
                <option value="es">Ispancha</option>
                <option value="su">Sundan</option>
                <option value="sw">Svahili</option>
                <option value="sv">Shvedcha</option>
                <option value="ta">Tamil</option>
                <option value="te">Telugu</option>
                <option value="th">Tay</option>
                <option value="tr">Turkcha</option>
                <option value="uk">Ukraina</option>
                <option value="ur">Urdu</option>
                <option value="uz">O'zbekcha</option>
                <option value="vi">Vyetnam</option>
                <option value="cy">Uels</option>
                <option value="xh">Xhosa</option>
                <option value="yi">Yiddish</option>
                <option value="yo">Yoruba</option>
                <option value="zu">Zulu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Kiritiladigan matn</label>
            <input type="text" id="text" name="text" class="form-control" placeholder="Matnni kiriting" required>
        </div>
    </form>
    <div>
        <h3 class="mt-4">Tarjima qilingan matn:</h3>
        <textarea id="multiTranslatedText" class="form-control" rows="3" readonly hidden></textarea>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        function translateText() {
            var text = $('#text').val();
            var sourceLang = $('#sourceLang').val();
            var targetLang = $('#targetLang').val();

            if (text.length > 0) {
                $.ajax({
                    url: '{{ route("multiTranslate") }}',
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        text: text,
                        sourceLang: sourceLang,
                        targetLang: targetLang
                    },
                    success: function (response) {
                        if (response.translatedText) {
                            $('#multiTranslatedText').val(response.translatedText).removeAttr('hidden');
                        }
                    },
                    error: function () {
                        $('#multiTranslatedText').val('Tarjima qilishda xatolik yuz berdi.').removeAttr('hidden');
                    }
                });
            } else {
                $('#multiTranslatedText').val('').attr('hidden', true);
            }
        }

        // Debounce funksiyasini aniqlash
        function debounce(func, delay) {
            let timer;
            return function () {
                const context = this;
                const args = arguments;
                clearTimeout(timer);
                timer = setTimeout(() => func.apply(context, args), delay);
            };
        }

        // Debounce funksiyasidan foydalanish
        $('#text, #sourceLang, #targetLang').on('input change', debounce(translateText, 500));
    });
</script>
</body>
</html>
