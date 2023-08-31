<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cpf',
        'birthdate'
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn () => now()->diffInYears(Carbon::parse($this->attributes["birthdate"]))
        );
    }

    protected function formattedBirthdate(): Attribute
    {
        return Attribute::make(
            get: fn () => Carbon::parse($this->birthdate)->format('d/m/Y')
        );
    }
}
