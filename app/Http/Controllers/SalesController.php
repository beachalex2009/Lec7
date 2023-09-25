<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class SalesController extends Controller

{
    public function target()
    {
        $sales = [
            'sales1' => ['January' => 50, 'Feb' => 100, 'March' => 90],
            'sales2' => ['January' => 30, 'Feb' => 40, 'March' => 50],
            'sales3' => ['January' => 20, 'Feb' => 10, 'March' => 50],
            'sales4' => ['January' => 20, 'Feb' => 60, 'March' => 90],
            'sales5' => ['January' => 70, 'Feb' => 80, 'March' => 100]
        ];

        return view('page1', compact('sales'));
    }
}
