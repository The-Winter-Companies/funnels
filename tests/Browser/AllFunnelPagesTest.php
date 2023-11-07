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
                        ->visit($page . '?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
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

        $this->browse(function (Browser $browser) {
            $browser
                ->visit('/solar/o7?ef_tx_id=x&ef_aff_id=y&ef_offer_id=z')
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
                ->pause(750)
                ->click("#pac-container_address > div:nth-child(1)")
                ->click("#address-next")
                ->pause(750)
                ->type("#first_name", 'test')
                ->type("#last_name", 'test')
                ->type("#phone", '1111111111')
                ->type("#email", 'test@test.com')
                ->click("#btn-continue")
                ->pause(2000)
                ->assertPathIs('/thank-you');
        });
    }



}
