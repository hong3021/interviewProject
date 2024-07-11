<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new view file';

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
        $name = $this->argument('name');
        $path = resource_path("views/{$name}.blade.php");

        if (File::exists($path)) {
            $this->error("View {$name} already exists!");
            return 1;
        }

        File::put($path, "<!-- View: {$name} -->");
        $this->info("View {$name} created successfully.");
        return 0;
    }
}
