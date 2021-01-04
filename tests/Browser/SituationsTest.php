<?php

namespace Tests\Browser;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Tests\Browser\Pages\CreateSituation;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SituationsTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_see_create_situation_form()
    {
        $user = User::factory()->create();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->login()
                    ->visit(new CreateSituation)
                    ->assertSee('Create Situation');
        });
    }
}
