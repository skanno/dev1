<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Airticle extends Entity
{
    protected $_accessble = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}
