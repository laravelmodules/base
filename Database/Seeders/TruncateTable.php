<?php

namespace Modules\Base\Database\Seeders;

use Illuminate\Support\Facades\DB;

/**
 * Class TruncateTable.
 */
trait TruncateTable
{
    /**
     * @param $table
     *
     * @return bool
     */
    protected function truncate($table)
    {
        switch (DB::getDriverName()) {
            case 'mysql':
                return DB::table($table)->truncate();

            case 'postgres':
                return  DB::statement('TRUNCATE TABLE '.$table.' CASCADE');

            case 'sqlite':
                return DB::statement('DELETE FROM '.$table);
        }

        return false;
    }

    /**
     * @param array $tables
     */
    protected function truncateMultiple(array $tables)
    {
        foreach ($tables as $table) {
            $this->truncate($table);
        }
    }
}