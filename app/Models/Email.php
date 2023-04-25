<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Email extends Model implements Sortable
{
    use HasBlocks, HasFiles, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'customer_email',
        'position',
    ];
    
}
