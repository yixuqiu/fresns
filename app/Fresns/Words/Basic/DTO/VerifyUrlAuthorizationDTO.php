<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Words\Basic\DTO;

use Fresns\DTO\DTO;

/**
 * Class VerifyUrlAuthorizationDTO.
 */
class VerifyUrlAuthorizationDTO extends DTO
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'urlAuthorization' => ['string', 'required'],
            'accountLogin' => ['boolean', 'nullable'],
            'userLogin' => ['boolean', 'nullable'],
        ];
    }
}