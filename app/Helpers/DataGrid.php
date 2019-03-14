<?php

namespace App\Helpers;

use App\Constract\Helpers\DataGridInterface;

class DataGrid implements DataGridInterface
{

    /**
     * @return array
     */
    public function getBtnDeleteOptions()
    {
        return [
            'onclick' => sprintf('return confirm("%s")', __('Are you sure?')),
            'class' => 'btn btn-xs btn-danger text-white',
            'type' => 'submit',
            'title' => __('Delete')
        ];
    }
}