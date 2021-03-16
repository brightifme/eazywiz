<?php
namespace App\Domains\Competition\Jobs;

use Lucid\Foundation\Job;

use App\Data\Contracts\CompetitionRepositoryInterface;

class CreateCompetitionJob extends Job
{
    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(CompetitionRepositoryInterface $competition)
    {
        return $competition->create($this->data);
    }
}
