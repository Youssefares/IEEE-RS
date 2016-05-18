<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventRegistrantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventRegistrantsTable Test Case
 */
class EventRegistrantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventRegistrantsTable
     */
    public $EventRegistrants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.event_registrants',
        'app.events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EventRegistrants') ? [] : ['className' => 'App\Model\Table\EventRegistrantsTable'];
        $this->EventRegistrants = TableRegistry::get('EventRegistrants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventRegistrants);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
