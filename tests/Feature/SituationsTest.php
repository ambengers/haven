<?php

namespace Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Situation;
use App\Http\Livewire\Situations\Index;
use App\Http\Livewire\Situations\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SituationsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp() : void
    {
        parent::setUp();

        $this->login();
    }

    /** @test */
    public function can_list_all_situations()
    {
        $situations = Situation::factory(2)->create();

        Livewire::test(Index::class)
            ->assertViewIs('livewire.situations.index')
            ->assertSee($situations->first()->title);
    }

    /** @test */
    public function can_create_a_situation()
    {
        Livewire::test(Create::class)
            ->set('title', $title = 'Typhoon Yolanda')
            ->set('type', $type = 'flood')
            ->set('donationInformation', $donationInformation = 'Donation info test..')
            ->call('create');

        $this->assertDatabaseHas('situations', [
            'title'                => $title,
            'type'                 => $type,
            'donation_information' => $donationInformation,
        ]);
    }
}
