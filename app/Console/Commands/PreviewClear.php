<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PreviewClear extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'preview:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears the folder with temporary preview files';

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
     * @return mixed
     */
    public function handle()
    {
        $files = \Storage::allFiles('preview');
        \Storage::delete($files);
    }

}
