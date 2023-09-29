<?php

namespace Tests\Unit\Models;

use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_belongs_to_one_user(): void
    {
        $contact = Contact::factory()->create();
        $this->assertTrue($contact->user()->exists());
    }
}
