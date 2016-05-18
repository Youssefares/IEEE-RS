<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitRegistrantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitRegistrantsTable Test Case
 */
class VisitRegistrantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitRegistrantsTable
     */
    public $VisitRegistrants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.visit_registrants',
        'app.visits'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VisitRegistrants') ? [] : ['className' => 'App\Model\Table\VisitRegistrantsTable'];
        $this->VisitRegistrants = TableRegistry::get('VisitRegistrants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VisitRegistrants);

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
