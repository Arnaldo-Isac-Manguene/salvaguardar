<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    use HasFactory;
    protected $table = 'relatorio';

    protected $fillable = [
        'refProjecto',
        'descricao',
        'relatorio',
        'printedSite',
        'codeConduct',
        'updateSite',
        'workSchedule',
        'chartOrgan',
        'number',
        'totalSub',
        'delivery',
        'report',
        'analytical',
        'totalSub1',
        'printedSiteStatus',
        'codeConductStatus',
        'updateSiteStatus',
        'workScheduleStatus',
        'chartOrganStatus',
        'numberStatus',
        'totalSubStatus',
        'deliveryStatus',
        'reportStatus',
        'analyticalStatus',
        'totalSub1Status'
    ];
}
