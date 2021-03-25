<?php

class User extends Model
{
    use HasFactory;

    public function orders() {
        return $this->hasMany(\App\Models\Order::class);
    }
}