<?php

namespace App\Policies;
use App\Model\Painel\Product;
use App\User;



class ProductPolicy
{
    
    public function __construct()
    {
        
    }
    /**
     * Create a new policy instance.
     *
         */

    public function update(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }
}
