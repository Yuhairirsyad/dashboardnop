<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pilihan PDF</title>
</head>

<body>
    <h2>Pilih Opsi untuk Dicetak dalam PDF</h2>

    <form action="/generate-pdf" method="POST">
        @csrf
        <label for="selected_option">Pilih Opsi:</label>
        <select name="selected_option" id="selected_option" required>
            <option value="">--Pilih Opsi--</option>
            @foreach($options as $key => $value)
            <option value="{{ $value }}">{{ $value }}</option>
            @endforeach
        </select>

        <button type="submit">Cetak PDF</button>
    </form>
</body>

</html>
