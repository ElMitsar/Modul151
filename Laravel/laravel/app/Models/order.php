<?php

class Order extends Model
{
    use HasFactory;
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}