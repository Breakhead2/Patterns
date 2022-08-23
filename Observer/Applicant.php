<?php

namespace Observer;


class Applicant implements \SplObserver
{
    protected string $name;
    protected string $mail;
    protected  int $experience;

    public function __construct($name, $mail, $experience)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->experience = $experience;
    }

    public function subscribe(){
        (new Resource())->attach($this);
        echo "Отслеживать вакансии";
    }

    public function unsubscribe(){
        (new Resource())->detach($this);
        echo "Перестать отслеживать вакансии";
    }

    public function update(\SplSubject $subject)
    {
        mail($this->mail, "Новая вакансия", "test");
    }
}