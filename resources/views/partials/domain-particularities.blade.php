<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" onerror="this.href='{{ asset('img/favicon.png') }}'">
@if($mainDomain == "foreverhomeplus")
    @if($page !== 'o7')
        <header>
            <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/foreverhomeplus_logo.png') }}"
                         onerror="this.src='{{ asset('img/foreverhomeplus_logo.png') }}'" width="320"
                         alt="Forever Home Plus" class="img-fluid" draggable="false">
				</span>
            </nav>
        </header>
    @endif
    <title>{{ ucfirst($vertical) }} - ForeverHomePlus</title>
@else
    @if($mainDomain == "foreverhomequotes")
        @if($page !== 'o7')
            <header>
                <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/foreverhomequotes_logo.png') }}"
                         onerror="this.src='{{ asset('img/foreverhomequotes_logo.png') }}'" width="320"
                         alt="Forever Home Quotes" class="img-fluid" draggable="false">
				</span>
                </nav>
            </header>
        @endif
        <title>{{ ucfirst($vertical) }} - ForeverHomeQuotes</title>
    @else
        @if($page !== 'o7')
            <header>
                <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="320"
                         alt="Forever Home Hub" class="img-fluid" draggable="false">
				</span>
                </nav>
            </header>
        @endif
        <title>{{ ucfirst($vertical) }} - ForeverHomeHub</title>
    @endif
@endif

