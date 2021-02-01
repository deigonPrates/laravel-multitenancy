<?php
namespace App\Tenant;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return void
     */

    public function apply(Builder $builder, Model $model)
    {
        $companyId = \Auth::user()->company_id;
        $builder->where('company_id', $companyId);
    }
}