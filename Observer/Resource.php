<?php

namespace Observer;



class Resource implements \SplSubject
{
    private \splObjectStorage $applicants;
    protected array $vacancies;

    public function __construct()
    {
        $this->applicants = new \SplObjectStorage();
    }

    public function createVacancy($vacancy){
        $this->vacancies[] = $vacancy;
        $this->notify();
    }

    public function attach(\SplObserver $observer)
    {
        $this->applicants->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->applicants->detach($observer);
    }

    public function notify()
    {
        foreach ($this->applicants as $applicant){
            $applicant->update($this);
        }
    }
}