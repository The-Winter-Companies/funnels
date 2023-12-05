<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AllFunnelPagesTest extends DuskTestCase
{
    public $pages = [
        '/roofing/o7',
        '/roofing/f1',
        '/solar/o7',
        '/solar/f1',
        '/tubs/o7',
        '/tubs/f1',
        '/solar/',
        '/tubs/f1',
        '/roofing/f1',
    ];

    /**
     * Only the main pages should load without the EF params
     * @throws \Throwable
     */

    public function testMissingEFURLParamsRedirect(){
        foreach($this->pages as $page){
            if(!str_ends_with($page, '/')){
                $this->browse(function (Browser $browser) use ($page) {
                    $browser
                        ->visit($page)
                        ->assertUrlIs('https://foreverhomehub.com/');
                });
                $this->browse(function (Browser $browser) use ($page) {
                    $browser
                        ->visit($page . '?ef_tx_id=X&ef_aff_id=Y&ef_offer_id=Z')
                        ->assertPathIs($page);
                });
            }
        }
    }


    /**
     * Tests the normal flow - success
     */
    public function testNormalFlow(): void
    {

        //for every page -
        //test failing Zip Code
        //test failing email
        //test failing winterbot and LP submit
        //check we have trusted form and jornaya scripts on all pages and rollbar
        //Do one for the thank you page clicking on those links too to make sure they pass through the offers
        // Roofing F1 test

        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/roofing/f1?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Where would this project take place?')
                ->type("#zip_code", "55442")
                ->click("#btn-zip")
                ->pause(1000)
                ->assertSee('What type of roof or material do you need or want?')
                ->click("#mat-01")
                ->pause(1000)
                ->assertSee('Where do you live?')
                ->type("#address", "123 Main St")
                ->pause(1000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->click("#address-next")
                ->pause(1000)
                ->assertSee('Your results are ready!')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->type("#phone", '1111111111')
                ->type("#email", 'test@fail.com')
                ->click('#form_submit')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // Roofing O7 test

        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/roofing/o7?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Find Top-Rated Roofing Pros And Save!')
                ->type("#zip_code", "55442")
                ->click("#btn-zip")
                ->pause(1000)
                ->assertSee('What type of roof are you looking for?')
                ->click("#mat-01")
                ->pause(1000)
                ->assertSee('How soon do you want to begin this project?')
                ->click("#t1")
                ->pause(1000)
                ->assertSee('Where do you live?')
                ->type("#address", "123 Main St")
                ->pause(1000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->click("#address-next")
                ->pause(1000)
                ->assertSee('Congratulations!')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->type("#phone", '1111111111')
                ->type("#email", 'test@fail.com')
                ->click('#form_submit')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // Roofing Main test

        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/roofing?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Check How Much You Can Save')
                ->type("#zip_code", "55442")
                ->click("#btn-zip")
                ->pause(1000)
                ->assertSee('What is the nature of this project?')
                ->click("#sts1")
                ->pause(1000)
                ->assertSee('What type of roofing')
                ->click("#rt1")
                ->pause(1000)
                ->assertSee('What is the property type?')
                ->click('#pts1')
                ->pause(1000)
                ->assertSee('Are you the homeowner?')
                ->click('#ohs1')
                ->pause(1000)
                ->assertSee('How soon are you looking to start?')
                ->click('#ts1')
                ->pause(1000)
                ->assertSee('Where will this project')
                ->type("#address", "123 Main St")
                ->pause(1000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->click("#address-next")
                ->pause(1000)
                ->assertSee('Who are these free quotes for?')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->click("#fn-ln-next")
                ->pause(1000)
                ->assertSee('Where should your free quotes')
                ->type("#email", 'test@fail.com')
                ->click('#email-next')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click('#email-next')
                ->pause(1000)
                ->assertSee("You're almost finished!")
                ->type("#phone", '1111111111')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // SOLAR MAIN
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/solar/?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Enter your zip code')
                ->type("zip_code", "55442")
                ->click("#btn-zip")
                ->pause(1000)
                ->waitForText('Who\'s your electric utility ')
                ->assertSee('Who\'s your electric utility ')
                ->select('utility_provider', 'Dairyland Power Coop')
                ->click("#btn-utility")
                ->pause(1000)
                ->assertSee('How much is your average')
                ->select('monthly_electric_bill', '$0-$50')
                ->click("#btn-bill")
                ->pause(1000)
                ->click('#full-shade-label')
                ->pause(1000)
                ->click('#no')
                ->pause(1000)
                ->assertSee('Where will this project')
                ->type("address", "123 Main St")
                ->pause(2000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->pause(1000)
                ->click("#btn-address")
                ->pause(1000)
                ->assertSee('Who are these free quotes for?')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->click("#btn-name")
                ->pause(1000)
                ->waitForText('Where should your free quotes')
                ->assertSee('Where should your free quotes')
                ->type("#email", 'test@fail.com')
                ->click('#btn-email')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click("#btn-email")
                ->pause(1000)
                ->assertSee('What\'s the best number to reach you at if you qualify?')
                ->type("#phone", '1111111111')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // SOLAR O7
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/solar/o7?ef_tx_id=X&ef_aff_id=Y&ef_offer_id=Z')
                ->assertSee('Solar')
                ->assertSee('Are you a homeowner?')
                ->click("#pc01")
                ->pause(750)
                ->assertSee('What is your zip code?')
                ->type("zip_code", "55442")
                ->click("#btn-zip")
                ->pause(750)
                ->assertSee("Who's your electric utility provider?")
                ->select('utility_provider', 'Dairyland Power Coop')
                ->click("#utility-next")
                ->pause(750)
                ->click("#bill-next")
                ->pause(750)
                ->click("#rf1")
                ->pause(750)
                ->click("#ref-cr01")
                ->pause(750)
                ->type("#address", "123 Main St")
                ->pause(2000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->pause(750)
                ->click("#address-next")
                ->pause(750)
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->type("#phone", '1111111111')
                ->type("#email", 'test@fail.com')
                ->click("#form_submit")
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click("#form_submit")
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // SOLAR F1
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/solar/f1?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Where would this project take place?')
                ->type("zip_code", "55442")
                ->click("#btn-zip")
                ->pause(1000)
                ->waitForText('Where should we send your free quotes?')
                ->assertSee('Where should we send your free quotes?')
                ->type("#email", 'test@fail.com')
                ->click('#btn-email')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click("#btn-email")
                ->pause(1000)
                ->assertSee('Enter your name')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->click("#btn-name")
                ->pause(1000)
                ->click('#bill1-label')
                ->pause(1000)
                ->click('#full-shade-label')
                ->pause(1000)
                ->assertSee("Who is your utility provider?")
                ->select('utility_provider', 'Dairyland Power Coop')
                ->click("#btn-utility")
                ->pause(1000)
                ->assertSee('What address would this project be located at?')
                ->type("#address", '123 Main St')
                ->pause(2000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->pause(1000)
                ->click("#btn-address")
                ->pause(1000)
                ->assertSee('Enter your information and get your results - fast')
                ->type("#phone", '1111111111')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // TUBS MAIN
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/tubs/?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Enter your zip code')
                ->type("zip_code", "55442")
                ->click("#btn-zip")
                ->pause(2000)
                ->click("#rfi-cr02")
                ->pause(1000)
                ->click("#tf2")
                ->pause(1000)
                ->click("#yes")
                ->pause(1000)
                ->assertSee('Where will this project')
                ->type("#address", '123 Main St')
                ->pause(2000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->pause(1000)
                ->click("#btn-address")
                ->pause(1000)
                ->assertSee('Who are these free quotes for?')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->click("#btn-name")
                ->pause(1000)
                ->assertSee('Where should your free quotes')
                ->type("#email", 'test@fail.com')
                ->click('#btn-email')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click("#btn-email")
                ->pause(1000)
                ->assertSee('What\'s the best number to reach you at if you qualify?')
                ->type("#phone", '1111111111')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // TUBS F1
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/tubs/f1?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('Where would this project take place?')
                ->type("zip_code", "55442")
                ->click("#btn-zip")
                ->pause(2000)
                ->assertSee('Where should your free quotes be sent?')
                ->type("#email", 'test@fail.com')
                ->click('#btn-email')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click("#btn-email")
                ->pause(1000)
                ->assertSee('Who are these free quotes for?')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->click("#btn-name")
                ->pause(2000)
                ->click("#rfi-02")
                ->pause(1000)
                ->click("#t03")
                ->pause(1000)
                ->click("#yes")
                ->pause(1000)
                ->assertSee('Where do you live')
                ->type("#address", '123 Main St')
                ->pause(2000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->click("#btn-address")
                ->pause(1000)
                ->assertSee('Enter your information so our professionals can get in touch!')
                ->type("#phone", '1111111111')
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // TUBS O7
        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/tubs/o7?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
                ->assertSee('What is your zip code?')
                ->type("zip_code", "55442")
                ->click("#btn-zip")
                ->pause(2000)
                ->assertSee('Where should your free quotes be sent?')
                ->type("#email", 'test@fail.com')
                ->click('#btn-email')
                ->pause(3000)
                ->assertSee('Please provide a valid email address to proceed')
                ->clear("#email")
                ->type("#email", 'test@test.com')
                ->click("#btn-email")
                ->pause(1000)
                ->click("#rfi-02")
                ->pause(1000)
                ->click("#ptf-01")
                ->pause(1000)
                ->assertSee('Final Step!')
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->type("#phone", '1111111111')
                ->type("#address", '123 Main St')
                ->pause(2000)
                ->click("div.pac-container.pac-logo > div:nth-child(1) > span:nth-child(3)")
                ->pause(1000)
                ->click('#form_submit')
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });

        // Astrology Funnel
        $this->browse(function (Browser $browser) {

            $testUrl = 'https://signup.astrologyspark.com';
            $environment = env('APP_ENV');
            if(!empty($environment)){
                if($environment == 'local'){
                    $testUrl = 'http://signup.astrologyspark.local';
                }else if($environment == 'staging'){
                    $testUrl = 'https://staging-signup.astrologyspark.com';
                }
            }

            $browser
                ->visit($testUrl)
                ->pause(1000)
                ->assertSee('SELECT YOUR SIGN')
                ->click("#cancer-sign")
                ->pause(1000)
                ->assertSee('WHERE SHOULD WE SEND YOUR FREE HOROSCOPE?')
                ->type("#email", 'test@test.com')
                ->click('#email-next')
                ->pause(1000)
                ->assertSee('BIRTH DETAILS')
                ->click("#gender")
                ->click('#gender > option:nth-child(2)')
                ->pause(1000)
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->click('#bday-year')
                ->click('#bday-year > option:nth-child(3)')
                ->click('#birth-next')
                ->pause(1000)
                ->click("#relationship_status")
                ->click('#relationship_status > option:nth-child(4)')
                ->click('#employment_status')
                ->click('#employment_status > option:nth-child(6)')
                ->click('#greatest_wish')
                ->click('#greatest_wish > option:nth-child(4)')
                ->pause(1000)
                ->click('#form_submit');
        });
    }
}
