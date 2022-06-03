<?php

namespace Packagit\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Laravel\Package\Exceptions\FileAlreadyExistException;

class CustomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'customize packagit namespace or others by config/packagit.php';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $to = config_path('packagit.php');
        throw_if(file_exists($to), new FileAlreadyExistException('config/packagit.php is already existing'));

        $from = dirname(__DIR__, 2) . '/config/config.php';
        copy($from, $to);
        $this->line('<info>Config file copied to </info> <comment>['.$to.']</comment>');
        return 0;
    }
}
