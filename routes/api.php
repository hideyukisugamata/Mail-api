<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailsendController;


Route::post('/mail', [MailsendController::class, 'send']);