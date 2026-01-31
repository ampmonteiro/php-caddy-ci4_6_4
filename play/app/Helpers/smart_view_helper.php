<?php

if (!function_exists('smart_view')) {

    /**
     * 
     * 
     * Custom and extended built-in CI4 view function to support slot rendering
     *
     * @param string $view The name of the view to render.
     * @param mixed ...$data Additional data to pass to the view (usin variadic parameters)
     * 
     * @param array $data['options'] Optional view options from codeigniter 4.
     * @param string $data['slot'] Optional name of the slot view to render.
     * @param array $data['slotData'] Optional data to pass to the slot view.
     * @return string The rendered view as a string.
     * 
     * 
     */
    function smart_view(string $view, mixed ...$data): string
    {
        $options = array_key_exists('options', $data)
            ? [...['saveData' => false], ...$data['options']]
            :  ['saveData' => false];

        unset($data['options']);

        if (count($data) > 0 && !array_key_exists('slot', $data)) {
            $data['slot'] = null;
            return view($view, $data, $options);
        }

        $data['slot'] = view(
            $data['slot'],
            $data['slotData'] ?? [],
            $options
        );

        unset($data['slotData']);

        return view($view, $data, $options);
    }
}
