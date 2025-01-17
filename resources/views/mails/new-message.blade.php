<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Message</title>

    <style>
        *::before,
        *::after,
        * {
            margin: 0;
            padding: 0,
                box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            color: #334155;
        }

        main {
            margin-block: 80px;
            width: 100%;
            max-width: 600px;
            margin-inline: 20px;
            background-color: #f1f5f9;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            border-radius: 4px;
        }

        .mail-header {
            padding: 16px;
            border-bottom: 1px solid #cbd5e1;
        }

        .logo-wrapper {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .logo {
            border: 1px solid #d4d4d8;
            width: fit-content;
            font-weight: 600;
            padding: 6px;
        }

        .mail-body {
            padding: 20px;
        }

        .mail-body .title {
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 4px;
        }

        .mail-body .email {
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 8px;
            color: #475569;
        }

        .mail-body .message {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <main class="">
        <div class="mail-header">
            <div class="logo-wrapper">
                <div class="logo">
                    JW
                </div>
                <span>jonahdevs.co.ke</span>
            </div>
        </div>

        <div class="mail-body">

            <p class="title">New message from {{ $firstName . ' ' . $lastName }}</p>
            <p class="email">Email: {{ $email }}</p>

            <p class="message">{{ $mailMessage }}</p>
        </div>
    </main>
</body>

</html>
