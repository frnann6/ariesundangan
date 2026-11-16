<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Catalogs extends BaseController
{
    private const TEMPLATES = [
        'undangan-1',
    ];

    public function show(string $template)
    {
        if (!in_array($template, self::TEMPLATES, true)) {
            throw PageNotFoundException::forPageNotFound();
        }

        $view = 'catalogs/' . $template;
        if (! is_file(APPPATH . 'Views/' . $view . '.php')) {
            throw PageNotFoundException::forPageNotFound();
        }

        return view($view);
    }
}
