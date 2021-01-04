<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;
use App\Http\Livewire\Situations\Create;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SituationsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_a_situation()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

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
