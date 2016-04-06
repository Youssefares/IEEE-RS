<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;
/**
 * Registrant Entity.
 *
 * @property int $No
 * @property int $course_id
 * @property \App\Model\Entity\Course $course
 * @property string $Name
 * @property string $Mobile_Number
 * @property string $Email
 * @property string $Department
 * @property string $Academic_Year
 * @property string $membership_status
 * @property int $fees
 * @property int $Ticket_Number
 * @property string $Registrer
 * @property string $Notes
 */
class Registrant extends Entity
{
    protected function _setCourse_id($value){
      $courses = TableRegistry::get('courses');
      $course = $courses
             ->find()
             ->where(['id' => $value])
             ->first();
      $seats = $course->remaining_seats;
      $c = $courses->query();
      $c->update()
       ->set(['remaining_seats' => $seats-1 ])
       ->where(['id' => $value])
       ->execute();
      return $value;
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'No' => false,
    ];
}
