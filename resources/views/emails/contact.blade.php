<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Kontak</title>
</head>
<body>
    <h1>Pesan Kontak Dari {{ $name }}</h1>
    <p>Email Pengirim: {{ $email }}</p>
    <p>Isi Pesan:</p>
    <p>{{ $messageContent }}</p> <!-- Ganti dari $message menjadi $messageContent -->
</body>
</html>