<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solar</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    <style>
        body {
            font-family: Raleway, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content {
            display: flex;
            align-items: center;
        }

        .text {
            flex: 1;
            padding-right: 20px;
        }

        .image {
            flex: 1;
            text-align: center;
        }

        .image img {
            max-width: 100%;
            height: auto;
        }

        .button {
            text-align: right;
            margin-top: 20px;
            position: relative;
        }

        .button button {
            background-color: #FFA500;
            color: #fff;
            padding: 10px 0;
            font-size: 16px;
            border: 1px solid #000;
            cursor: pointer;
            width: 100%;
        }

        .text a {
            text-decoration: none;
            color: #137ee7;
        }

        .text h2 {
            margin-top: 0;
            font-size: 28px;
        }

        .text p {
            color: #777;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <div class="text">
            <h2>Website Connects Homeowners to Local Solar Installers - Efficiently.</h2>
            <a href="https://quotes.foreverhomehub.com/solar">Looking to harness solar power for your home?</a>
            <p>Just enter your zip code and a few clicks will bring you closer to sustainable energy!</p>
            <p>Discover the ease of finding trusted solar panel installers near you with our cutting-edge solar comparison platform. Make the smart switch to clean energy and potentially save on your energy bills.</p>
            <p>Tap the "Receive Your Free Quote" button to begin your solar journey!</p>
        </div>
        <div class="image">
            <img src="{{asset('img/sci-hp1.png')}}" alt="Solar Panel Image">
            <div class="button">
                <a href="https://quotes.foreverhomehub.com/solar"><button>Receive Your Free Quote</button></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
