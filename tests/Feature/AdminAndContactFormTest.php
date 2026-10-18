<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class AdminAndContactFormTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_contact_form_validation_errors_are_in_italian(): void
    {
        $response = $this->postJson('/api/contacts', [
            'name' => '',
            'email' => 'not-an-email',
            'message' => '',
            'g-recaptcha-response' => 'token',
        ]);

        $response->assertStatus(422)
            ->assertJsonPath('errors.name.0', 'Il campo nome e cognome è obbligatorio.')
            ->assertJsonPath('errors.email.0', 'Il campo email deve essere un indirizzo email valido.')
            ->assertJsonPath('errors.message.0', 'Il campo messaggio è obbligatorio.')
            ->assertJsonPath('message', 'Il campo nome e cognome è obbligatorio. (e altri 2 errori)');
    }

    public function test_contact_form_name_is_at_most_255_characters(): void
    {
        $response = $this->postJson('/api/contacts', [
            'name' => str_repeat('a', 256),
            'email' => 'mario@example.com',
            'message' => 'Un messaggio di prova',
            'g-recaptcha-response' => 'token',
        ]);

        $response->assertStatus(422)->assertJsonValidationErrors(['name']);
    }

    public function test_admin_contacts_pages_have_their_own_titles(): void
    {
        Mail::fake();

        $user = User::factory()->create();
        $contact = Contact::create([
            'name' => 'Mario Rossi',
            'email' => 'mario@example.com',
            'message' => 'Ciao!',
        ]);

        $this->actingAs($user)->get('/admin/contacts')
            ->assertOk()
            ->assertSee('<title>Contatti</title>', false)
            ->assertDontSee('Esperienze');

        $this->actingAs($user)->get('/admin/contacts/' . $contact->id)
            ->assertOk()
            ->assertSee('<title>Messaggio</title>', false)
            ->assertDontSee('Esperienze');
    }

    public function test_admin_pages_have_a_logout_button(): void
    {
        $user = User::factory()->create();

        foreach (['/admin', '/admin/projects', '/admin/experiences', '/admin/contacts'] as $url) {
            $this->actingAs($user)->get($url)
                ->assertOk()
                ->assertSee('action="' . route('logout') . '"', false)
                ->assertSee('name="_token"', false)
                ->assertSee('Esci');
        }
    }

    public function test_logout_ends_the_session(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post('/logout')->assertRedirect('/');

        $this->assertGuest();
        $this->get('/admin')->assertRedirect('/login');
    }
}
