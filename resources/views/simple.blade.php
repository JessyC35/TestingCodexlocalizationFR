<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Laravel Simple</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: grid;
            place-items: center;
            min-height: 100vh;
            background: #f4f6fb;
            color: #1f2937;
        }

        .card {
            background: white;
            padding: 2rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
            text-align: center;
        }

        h1 {
            margin: 0 0 .5rem;
            font-size: 1.75rem;
        }

        p {
            margin: 0;
            color: #4b5563;
        }
    </style>
</head>
<body>
<div class="card">
    <h1>Bonjour depuis Laravel 👋</h1>
    <p>Cette page très simple est servie via <code>routes/web.php</code> et une vue Blade.</p>
</div>
</body>
</html>
