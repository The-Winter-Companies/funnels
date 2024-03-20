<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" onerror="this.href='{{ asset('img/favicon.png') }}'">
@if($mainDomain == "foreverhomeplus")
    @if($page !== 'o7')
        <header>
            <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/foreverhomeplus_logo.png') }}"
                         onerror="this.src='{{ asset('img/foreverhomeplus_logo.png') }}'" width="320"
                                                                                 alt="Forever Home Plus" class="img-fluid" draggable="false"></a>
				</span>
            </nav>
        </header>
    @endif
@else
    @if($mainDomain == "foreverhomequotes")
        @if($page !== 'o7')
            <header>
                <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/foreverhomequotes_logo.png') }}"
                         onerror="this.src='{{ asset('img/foreverhomequotes_logo.png') }}'" width="320"
                                                                                 alt="Forever Home Quotes" class="img-fluid" draggable="false"></a>
				</span>
                </nav>
            </header>
        @endif
    @else
        @if($mainDomain == "yourafterhome")
            @if($page !== 'o7')
                <header>
                    <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/yah-logo.png') }}" onerror="this.src='{{ asset('img/yah-logo.png') }}'" width="320"
                                                                                 alt="Your After Home" class="img-fluid" draggable="false"></a>
				</span>
                    </nav>
                </header>
            @endif
        @else
            @if($mainDomain == "homequotespro")
                @if($page !== 'o7')
                    <header>
                        <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/home-quotes-pro.png') }}" onerror="this.src='{{ asset('img/home-quotes-pro.png') }}'" width="320"
                                                                                 alt="Home Quotes Pro" class="img-fluid" draggable="false"></a>
				</span>
                        </nav>
                    </header>
                @endif
            @else
                @if($page !== 'o7')
                    <header>
                        <nav class="navbar justify-content-between mx-auto">
				<span href="https://foreverhomehub.com" class="navbar-brand mx-auto">
					<a href="https://{{$domainFullDomain}}" target="_blank"><img src="{{ asset('img/logo.png') }}" onerror="this.src='{{ asset('img/logo.png') }}'" width="320"
                                                                                 alt="Forever Home Hub" class="img-fluid" draggable="false"></a>
				</span>
                        </nav>
                    </header>
                @endif
            @endif
        @endif
    @endif
@endif

