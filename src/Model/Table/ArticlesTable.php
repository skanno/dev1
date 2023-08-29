<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function iniitialize() : void
    {
        $this->addBehavior('Timestamp');
    }
}