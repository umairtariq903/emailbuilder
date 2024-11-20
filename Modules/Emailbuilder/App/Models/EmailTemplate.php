<?php

namespace Modules\Emailbuilder\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Emailbuilder\Database\factories\EmailTemplateFactory;

class EmailTemplate extends Model
{
    use HasFactory;
    protected $table = 'email_templates';
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'content'];

    protected static function newFactory(): EmailTemplateFactory
    {
        //return EmailTemplateFactory::new();
    }
}
