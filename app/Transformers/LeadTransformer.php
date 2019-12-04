<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Lead;

/**
 * Class LeadTransformer.
 *
 * @package namespace App\Transformers;
 */
class LeadTransformer extends TransformerAbstract
{
    /**
     * Transform the Lead entity.
     *
     * @param \App\Entities\Lead $model
     *
     * @return array
     */
    public function transform(Lead $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
