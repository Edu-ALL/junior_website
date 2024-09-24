<?php

namespace App\Console\Commands;

use App\Http\Controllers\V1\Admin\BlogController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PublishArticlesCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:publish-articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically publish articles.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        (new BlogController)->checkPublish();
        
        Log::info('cron publish articles is running');
        return Command::SUCCESS;
    }
}
