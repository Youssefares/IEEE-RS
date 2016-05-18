<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity.
 *
 * @property int $id
 * @property string $name
 * @property string $mobile_no
 * @property string $home_no
 * @property string $email
 * @property string $university
 * @property string $academic_year
 * @property string $department
 * @property string $address
 * @property string $socities
 * @property string $fees
 * @property string $mgm
 * @property string $register_name
 * @property string $date
 * @property \App\Model\Entity\Recruiter $recruiter
 */
class Member extends Entity
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
        'id' => false,
    ];
}
