<?php

namespace App\Models\Traits;

trait JsonEncode
{

    /**
     * Encode the given value as JSON.
     *
     * @param mixed $value
     * @return string
     * @throws \Exception
     */
    protected function asJson($value): string
    {
        $result = json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if (json_last_error()) {
            throw new \Exception(json_last_error_msg());
        }
        return $result;
    }

}
