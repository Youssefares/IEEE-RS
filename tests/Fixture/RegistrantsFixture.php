<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistrantsFixture
 *
 */
class RegistrantsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'No' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'course_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Name' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Mobile_Number' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Email' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Department' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Academic_Year' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'membership_status' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'fees' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Registrer' => ['type' => 'string', 'length' => 300, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'Notes' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'course_key' => ['type' => 'index', 'columns' => ['course_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['No'], 'length' => []],
            'registrants_ibfk_1' => ['type' => 'foreign', 'columns' => ['course_id'], 'references' => ['courses', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'No' => 1,
            'course_id' => 1,
            'Name' => 'Lorem ipsum dolor sit amet',
            'Mobile_Number' => 'Lorem ipsum dolor ',
            'Email' => 'Lorem ipsum dolor sit amet',
            'Department' => 'Lorem ipsum dolor sit amet',
            'Academic_Year' => 'Lorem ipsum dolor sit amet',
            'membership_status' => 'Lorem ipsum dolor sit amet',
            'fees' => 1,
            'Registrer' => 'Lorem ipsum dolor sit amet',
            'Notes' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
