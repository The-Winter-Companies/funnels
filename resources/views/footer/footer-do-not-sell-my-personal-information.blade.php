<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" onerror="this.href='{{ asset('img/favicon.png') }}'">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="#">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">



    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap-v4.0.0.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-funnels-footer.css')}}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link href="{{ asset('css/funnels-footer.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: Arial, serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Align items in a column */
            align-items: center; /* Center items horizontally */
        }

        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            width: 100%; /* Make sure the form takes the full width of the section */
            place-items: center; /* Center items both horizontally and vertically */

            /* Add a new grid row for the button */
            grid-template-rows: repeat(3, auto); /* Adjust the number based on your form elements */
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            grid-column: span 2; /* Make the button span both columns */
            width: auto; /* Set width to auto so it takes the necessary space */
        }

    </style>

</head>
<body>

@if($mainDomain == "foreverhomeplus")
    <header>
        <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/foreverhomeplus_logo.png') }}"
                         onerror="this.src='{{ asset('img/foreverhomeplus_logo.png') }}'" width="320"
                         alt="Forever Home Plus" class="img-fluid" draggable="false">
				</span>
        </nav>
    </header>
    <title>Forever Home Plus | Contact</title>
@else
    @if($mainDomain == "smartconsumerinsights")
        <header>
            <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="320"
                         alt="Smart Consumer Insights" class="img-fluid" draggable="false">
				</span>
            </nav>
        </header>
        <title>Smart Consumer Insights | Contact</title>
    @endif
@endif


<main>

    <article class="container">
        <div class="heading text-center">
            <h1 class="text-center">DO NOT SELL MY PERSONAL INFORMATION</h1>
        </div>
        <div class="content">
            <section>
                <p>
                    {{$domainTitle}}, and its brands, and related entities may share, lease, or sell your data. You have the right to direct us to opt-out of the sale of your personal information below, or contact us by email at {{$domainInfoEmail}}. For additional information regarding how we utilize your data as well as your rights, please review our Privacy Policy and any brand specific Terms and Conditions.
                </p>

                <form id="optOutForm">
                    <input type="hidden" id="domain" value="{{$mainDomain}}">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>

                    <label for="lastName">Last Name:</label>
                    <input type="text" id="lastName" name="lastName" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="country">Country of Residence:</label>
                    <select id="country" name="country" required>
                    </select>

                    <label for="requestType">Request Type:</label>
                    <input type="text" id="requestType" name="requestType" required>

                    <label for="requestDescription">Request Description:</label>
                    <input type="text" id="requestDescription" name="requestDescription">
                    <button id="submit_form" type="submit">Submit</button>
                </form>
                <div id="message" style="display: none;">
                    <p>Your request has been received. Thank you.</p>
                </div>

            </section>
        </div>

    </article>

</main>
<script src="{{ asset('js/jquery/jquery-3.4.1.min.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var countryDropdown = document.getElementById('country');

        // Fetch countries from Restcountries API
        fetch('https://restcountries.com/v3.1/all')
            .then(response => response.json())
            .then(data => {
                // Sort countries alphabetically
                data.sort((a, b) => a.name.common.localeCompare(b.name.common));

                // Populate the dropdown with countries
                data.forEach(function (country) {
                    var option = document.createElement('option');
                    option.value = country.name.common;
                    option.text = country.name.common;
                    countryDropdown.add(option);
                });

                // Set default value to "United States"
                countryDropdown.value = 'United States';
            })
            .catch(error => console.error('Error fetching countries:', error));
    });



    function submitForm() {
        var optOutForm = document.getElementById('optOutForm');

        var isValid = true;
        var formElements = optOutForm.elements;

        for (var i = 0; i < formElements.length; i++) {
            if (formElements[i].required && !formElements[i].value.trim()) {
                isValid = false;
                break;
            }
        }
        return isValid;
    }

    $('form').submit(function (e) {
        e.preventDefault();
        if(submitForm()){
            $.ajax({
                type: 'POST',
                url: 'https://hook.us1.make.com/vvi288sjnug8dwyjvg5lnqoa52k6s9cy',
                data: {
                    'firstName': document.getElementById('firstName').value,
                    'lastName': document.getElementById('lastName').value,
                    'email': document.getElementById('email').value,
                    'domain': document.getElementById('domain').value,
                    'country': document.getElementById('country').value,
                    'requestType': document.getElementById('requestType').value,
                    'requestDescription': document.getElementById('requestDescription').value
                },
                async: false,
                dataType: "json",
                success: function (response) {
                    if(response.result === true){
                        var optOutForm = document.getElementById('optOutForm');
                        var messageDiv = document.getElementById('message');
                        optOutForm.style.display = 'none';
                        messageDiv.style.display = 'block';
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    console.log('Response Text:', jqXHR.responseText);
                },
            });
        }
    });

</script>
@include('partials/footer', ['mainDomain' => $mainDomain])

</body>
</html>
