<?php

namespace App\Logging;

use Illuminate\Support\Facades\DB;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class MySQLLoggingHandler extends AbstractProcessingHandler
{
    /**
     *
     * Reference:
     * https://github.com/markhilton/monolog-mysql/blob/master/src/Logger/Monolog/Handler/MysqlHandler.php
     */
    public function __construct($level = Logger::INFO, $bubble = true)
    {
        $this->table = 'logs';
        parent::__construct($level, $bubble);
    }
    protected function write(array $record): void
    {
        $data = array(
            'message'       => $record['message'],
            'context'       => json_encode($record['context']),
            'level'         => $record['level'],
            'level_name'    => $record['level_name'],
            'extra'         => json_encode($record['extra']),
            'remote_addr'   => $_SERVER['REMOTE_ADDR'],
            'user_agent'    => $_SERVER['HTTP_USER_AGENT'],
            'formatted'     => $record['formatted'],
            'created_at'    => date("Y-m-d H:i:s"),
        );
        DB::connection()->table($this->table)->insert($data);
    }
}
