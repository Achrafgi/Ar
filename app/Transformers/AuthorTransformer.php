<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Author;

/**
 * Class AuthorTransformer.
 *
 * @package namespace App\Transformers;
 */
class AuthorTransformer extends TransformerAbstract
{
    /**
     * Transform the Author entity.
     *
     * @param \App\Entities\Author $model
     *
     * @return array
     */
    public function transform(Author $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
