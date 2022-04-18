<?php

namespace App\Controllers;

class kamar extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'kamar'
        ];
        return view('\kamar\index', $data);
    }
}
