<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-admin-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $user = User::make([
            'name' => 'ClubHouse Admin',
            'email' => 'admin@clubhouse.local',
            'password' => '1234',
        ]);
        $user->id = '01912491-cea1-73cb-8b98-f203ed0a687f';
        $user->save();

        return self::SUCCESS;
    }
}
