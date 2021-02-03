<?php
declare(strict_types=1);

namespace App\Tenant;


use App\Models\Company;

class TenantManager
{
    private $tenant;

    /**
     * @return mixed
     */
    public function getTenant() : ?Company
    {
        return $this->tenant;
    }


    /**
     * @param mixed $tenant
     */
    public function setTenant($tenant): void
    {
        $this->tenant = $tenant;
    }

}
