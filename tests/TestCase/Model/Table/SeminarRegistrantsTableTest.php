<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeminarRegistrantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeminarRegistrantsTable Test Case
 */
class SeminarRegistrantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SeminarRegistrantsTable
     */
    public $SeminarRegistrants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.seminar_registrants',
        'app.seminars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SeminarRegistrants') ? [] : ['className' => 'App\Model\Table\SeminarRegistrantsTable'];
        $this->SeminarRegistrants = TableRegistry::get('SeminarRegistrants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SeminarRegistrants);

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
