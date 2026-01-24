<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\Response;

class Say extends Controller
{
    public function __invoke(): Response
    {
        return $this->response->setJSON(['message' => 'From Class Invoke method']);
    }
}
