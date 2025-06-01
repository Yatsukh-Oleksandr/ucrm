<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $primaryKey = 'docs_id';
    public $timestamps = false;

    protected $fillable = [
        'docs_name', 'docs_type_id', 'docs_status_id',
        'access_id', 'priority_id', 'parent_docs_id',
        'Deadline', 'date_created', 'date_updated',
        'docs_hash', 'abstract'
    ];
}

