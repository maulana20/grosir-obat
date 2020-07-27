<?php

namespace App\Http\Controllers\Accounting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\GroupAccount;

class BalanceSheetController extends Controller
{
    public function index(Request $request)
    {
        $activa = GroupAccount::where('type', 1)
                    ->orderBy('id', 'ASC')
                    ->get();
        
        $passiva = GroupAccount::where('type', 2)
                    ->orderBy('id', 'ASC')
                    ->get();
        
        return view('accounting.balancesheet-account.index', compact('activa', 'passiva'));
    }
}
