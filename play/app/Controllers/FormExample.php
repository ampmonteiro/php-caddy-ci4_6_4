<?php

namespace App\Controllers;

use CodeIgniter\Router\RouteCollection;

class FormExample extends BaseController
{

    public static function setRoutes(RouteCollection $routes): void
    {
        $routes->get(
            '',
            [static::class, 'index'],
            ['as' => 'form_index']
        );

        $routes->post(
            '',
            [static::class, 'create'],
            ['as' => 'form_submit']
        );
    }



    public function index(): string
    {
        return view('pages/form-example');
    }

    public function create(): string|\CodeIgniter\HTTP\RedirectResponse
    {

        $table_interception = [
            [
                'date_from' => '2026-02-20',
                'date_to' => '2026-02-23',
                'type' => 'test'
            ],
            [
                'date_from' => '2026-02-24',
                'date_to' => '2026-02-26',
                'type' => 'test_2'
            ]
        ];


        // Checks whether the submitted data passed the validation rules.
        //using recommended way, validateData methdod of the Validation library
        $rules = [
            'name' => [
                'label' => 'Name',
                'rules' => [
                    'required',
                    'min_length[3]',
                    'max_length[255]',
                    "date_interception[date_from, date_to,tabela: ok, tipo:test]"
                ],
            ],
            'date_from' => [
                'label' => 'Date From',
                'rules' => [
                    'required',
                    'valid_date[Y-m-d]'
                ]
            ],
            'date_to' => [
                'label' => 'Date To',
                'rules' => [
                    'required',
                    'valid_date[Y-m-d]',
                    'date_after[date_from]'
                ],
                'errors' => [
                    'date_after' => 'The {field} field must be a date after the {param} field.'
                ]
            ],


        ];

        $data = $this->request->getPost();

        if (! $this->validateData($data, $rules)) {
            //no need getErrors() method, the validation errors are automatically flashed to the session
            return redirect()
                ->back()
                ->withInput();
        }


        return redirect()
            ->route('form_index')
            ->with('OK', "Form submitted successfully!");
    }
}
