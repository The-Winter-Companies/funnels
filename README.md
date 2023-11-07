Setup Local Instructions

1. Start Docker (We use ports 81/3307)
2. Run: ./vendor/bin/sail up
3. Access at http://quotes.foreverhomehub.local:81
   1. Add to your hosts file to access at this domain:
   2. 127.0.0.1 quotes.foreverhomehub.local

Alternatively (if too slow)
1. Run php artisan serve
2. Access at: http://127.0.0.1:8000

When developing on localhost, make sure that Winterbot is running and accessbile at: 
http://localhost

Pages Example:
http://127.0.0.1:8000/solar/f1?ef_aff_id=test&ef_tx_id=test

When making changes to PHP files -
composer dump-autoload

dummyData 
Pass &dummyTest=true 

populateDummyData
&populateDummyData=true

@if(!empty($_GET['dummyTest']) && $_GET['dummyTest'] == 'true')
    dummyTest();
@endif

@if(!empty($_GET['populateDummyData']) && $_GET['populateDummyData'] == 'true')
    populateFormWithDummyData();
@endif


To run tests: 
1. Install Dusk
2. Make sure the .env APP_URL is correct for your local
3. run laravel dusk

Docs: https://laravel.com/docs/10.x/dusk
