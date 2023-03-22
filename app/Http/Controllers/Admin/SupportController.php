<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected object $support;

    public function __construct(Support $support)
    {
        $this->support = $support;
    }

    public function index() :?object
    {
        $supports = $this->support->all();

        return view('admin.supports.index',compact('supports'));
    }
}
