<?php

namespace App\Validations;

class DateRules
{
    /**
     * Check that $value date is greater than the date in $fields (other field name).
     *
     * Usage in rules: 'end_date' => 'required|valid_date[Y-m-d]|after[start_date]'
     */
    public function date_after(string $current_field_value, string $compare_field, array $data): bool
    {
        if (! isset($data[$compare_field])) {
            return false;
        }

        $other = $data[$compare_field];

        $t1 = strtotime($current_field_value);
        $t2 = strtotime($other);

        if ($t1 === false || $t2 === false) {
            return false;
        }

        return $t1 > $t2;
    }

    public function date_interception(string $current_field_value, $fields, array $data): bool
    {

        $vals = array_map('trim', explode(',', $fields));

        [$di, $df] = $vals;

        $others = null;

        if (count($vals) >= 3) {
            $others = array_slice($vals, 2);

            $others = array_map(
                function ($i) {
                    [$k, $v] = explode(':', trim($i));
                    return [$k => $v];
                },
                $others
            )
            |> (fn($arr) => array_column($arr, null))
            |> (fn($flat) => array_merge(...$flat));
        }

        dd(
            $current_field_value,
            $fields,
            $data[$di],
            $data[$df],
            $others
        );
        return false;
    }
}
