<?php

namespace App\Http\Controllers\Api;

// use Illuminate\Http\Request;
use App\Signature;
use App\Http\Controllers\Controller;

class ReportSignature extends Controller
{
    /**
     * Flag the given signature.
     *
     * When we retrieve the signature using Laravel Model Binding feature we call a flag
     *  method on it which simply sets the flagged_at column value to the current datetime,
     *  same way Laravel Soft Delete works. You can add this functionality by defining
     *  this method in your Signature Model
     * 
     * @param Signature $signature
     * @return Signature
     */
    public function update(Signature $signature)
    {
        $signature->flag();

        return $signature;
    }
}
