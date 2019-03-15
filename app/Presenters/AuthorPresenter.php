<?php

namespace App\Presenters;

use App\Transformers\AuthorTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AuthorPresenter.
 *
 * @package namespace App\Presenters;
 */
class AuthorPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AuthorTransformer();
    }
}
