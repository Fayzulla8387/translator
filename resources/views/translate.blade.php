<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tarjimon</title>
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
        input[type="text"] {
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
    <h1>Matnni tarjima qilish</h1>
    <form id="translateForm">
        <div class="mb-3">
            <label for="text" class="form-label">Kiritiladigan matn</label>
            <input type="text" id="text" name="text" class="form-control" placeholder="Matnni kiriting" required>
        </div>
    </form>
    <div>
        <h3 class="mt-4">Tarjima qilingan matn:</h3>
        <textarea id="translatedText" class="form-control" rows="3" readonly hidden></textarea>
    </div>

    <!-- Yangi sahifaga o'tish tugmasi -->
    <div class="text-center mt-4">
        <a href="{{ route('multiTranslatePage') }}" class="btn btn-primary">Istalgan tildan tarjima qilish</a>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#text').on('input', function () {
            var text = $(this).val();

            if (text.length > 0) {  // Matn kiritilgan bo'lsa
                $.ajax({
                    url: '{{ route("translate") }}',
                    method: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        text: text
                    },
                    success: function (response) {
                        $('#translatedText').val(response.translatedText).removeAttr('hidden');
                    }
                });
            } else {
                $('#translatedText').val('').attr('hidden', true); // Matn bo'sh bo'lsa textareani yashirish
            }
        });
    });
</script>
</body>
</html>
