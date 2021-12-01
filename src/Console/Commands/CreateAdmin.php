<?php

namespace Justsaimain\Ngapyin\Console\Commands;

use Illuminate\Console\Command;
use Justsaimain\Ngapyin\Http\Models\Admin;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create default Admin account';

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
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt('password'),
        ]);

        $this->info('Admin account created.');
        return Command::SUCCESS;
    }
}
