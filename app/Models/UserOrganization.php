<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrganization extends Model
{
    use HasFactory;

    protected $table = 'users_organizations';

    protected $fillable = [
        'user_id',
        'organization_id',
        'role_id',
    ];

    /**
     * Get the user that owns the user organization.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the organization that owns the user organization.
     */ 
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Get the role that owns the user organization.
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
