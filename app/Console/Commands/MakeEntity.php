<?php

namespace App\Console\Commands;

use Doctrine\Inflector\Inflector;
use Doctrine\Inflector\InflectorFactory;
use Illuminate\Console\Command;
use Illuminate\Foundation\Console\ModelMakeCommand;
use Illuminate\Foundation\Console\ViewMakeCommand;
use Livewire\Features\SupportConsoleCommands\Commands\FormCommand;
use Livewire\Features\SupportConsoleCommands\Commands\MakeLivewireCommand;

class MakeEntity extends Command
{
    private readonly Inflector $inflector;
    public function __construct()
    {
        parent::__construct();
        $this->inflector = InflectorFactory::create()->build();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-entity {entityName*}';

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
        $entityNames = $this->argument('entityName');
        foreach ($entityNames as $entityKey => $entityName) {
            $this->call(
                ModelMakeCommand::class,
                [
                    'name' => $entityName,
                    '--all' => true
                ]
            );

            $viewDir = $this->inflector->tableize($entityName);
            $viewDir = str_replace('_', '-', $viewDir);
            foreach ($this->getCrudOperations() as $operation) {
                $this->call(
                    ViewMakeCommand::class,
                    [
                        'name' => "{$viewDir}/{$operation}",
                    ]
                );
            }

            $this->call(
                MakeLivewireCommand::class,
                [
                    'name' => "CreateEdit{$entityName}",
                    '--test' => true,
                ]
            );

            $this->call(
                FormCommand::class,
                [
                    'name' => "{$entityName}Form",
                ]
            );


            if (!$entityKey === array_key_last($entityNames)) {
                $this->output->info("Sleeping for a second to make migrations order right");
                sleep(1);
            }
        }

        return self::SUCCESS;
    }


    private function getCrudOperations(): array
    {
        return [
            'create',
            'edit',
            'index',
            'show',
        ];
    }
}
