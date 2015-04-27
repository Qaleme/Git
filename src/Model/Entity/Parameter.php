<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parameter Entity.
 */
class Parameter extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'pkey' => true,
        'pvalue' => true,
        'pdescription' => true,
    ];
}
