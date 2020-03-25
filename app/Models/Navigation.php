<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Navigation
 *
 * @package App\Models
 */
class Navigation extends Model
{
    protected $table = 'navigation';

    protected $fillable = ['parent_id', 'name', 'icon', 'uri', 'is_link', 'guard_name', 'type', 'permission_name', 'sequence'];
}
