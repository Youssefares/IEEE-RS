<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

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
 * @property string $Registrer
 * @property string $Notes
 */
class Registrant extends Entity
{

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
