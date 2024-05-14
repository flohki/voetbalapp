<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            padding: 20px;
            margin: 0 auto;
        }

        .header {
            background: #008000;
            color: #FFD700;
            padding: 10px;
            text-align: center;
        }

        .content {
            margin: 20px 0;
        }

        .footer {
            text-align: center;
            color: #999;
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Contact Form Submission</h2>
        </div>
        <div class="content">
            <p><strong>Voornaam:</strong> {{ $contactData['first_name'] }}</p>
            <p><strong>Achternaam:</strong> {{ $contactData['last_name'] }}</p>
            <p><strong>E-mail:</strong> {{ $contactData['email'] }}</p>
            <p><strong>Telefoonnummer:</strong> {{ $contactData['phone'] }}</p>
            <p><strong>Onderwerp:</strong> {{ $contactData['subject'] }}</p>
            <p><strong>Bericht:</strong></p>
            <p>{{ $contactData['message'] }}</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} KVV Heusden-Zolder.</p>
        </div>
    </div>
</body>

</html>
