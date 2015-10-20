<?php
namespace App\Test\TestCase\Controller;

use App\Controller\SessionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SessionsController Test Case
 */
class SessionsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sessions',
        'app.users',
        'app.assets',
        'app.contacts',
        'app.countries',
        'app.testimonials',
        'app.events',
        'app.users_events',
        'app.groups',
        'app.users_groups',
        'app.hobbies',
        'app.users_hobbies',
        'app.notification_types',
        'app.users_notification_types',
        'app.roles',
        'app.permissions',
        'app.roles_permissions',
        'app.users_roles'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
