<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait FormattedDates
{

    /**
     * Возвращает дату и время создания записи в нужном формате
     *
     * @param string $date
     * @return string
     */
    public function getCreatedAtAttribute(string $date): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y H:i:s');
    }

    /**
     * Возвращает дату и время изменения записи в нужном формате
     *
     * @param string $date
     * @return string
     */
    public function getUpdatedAtAttribute(string $date): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y H:i:s');
    }

}
