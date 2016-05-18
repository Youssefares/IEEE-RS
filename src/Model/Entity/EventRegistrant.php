<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventRegistrant Entity.
 *
 * @property int $ticket_number
 * @property int $event_id
 * @property \App\Model\Entity\Event $event
 * @property string $name
 * @property string $email
 * @property string $mobile_number
 * @property string $university
 * @property string $department
 * @property string $academic_year
 * @property string $membership
 * @property int $fees
 * @property string $registrer
 * @property string $ticket_type
 * @property string $lunch
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class EventRegistrant extends Entity
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
        'ticket_number' => false,
    ];
}
