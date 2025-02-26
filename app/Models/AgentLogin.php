<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgentLogin extends Model
{
    protected $fillable = ['agent_code', 'agent_password'];
}
