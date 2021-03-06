<?php /** @noinspection PhpUnusedParameterInspection */


namespace ZM\Event\SwooleEvent;


use Swoole\Server;
use Swoole\Timer;
use ZM\Annotation\Swoole\SwooleHandler;
use ZM\Console\Console;
use ZM\Event\SwooleEvent;

/**
 * Class OnWorkerExit
 * @package ZM\Event\SwooleEvent
 * @SwooleHandler("WorkerExit")
 */
class OnWorkerExit implements SwooleEvent
{
    public function onCall(Server $server, $worker_id) {
        Timer::clearAll();
        Console::info("正在结束 Worker #".$worker_id."，进程内可能有事务在运行...");
    }
}