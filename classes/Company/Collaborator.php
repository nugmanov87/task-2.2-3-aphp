<?php

namespace Company;


class Collaborator implements \ApplicationCreatorInterface, \LeadInterface, \WebinarSpeakerInterface
{
    public string $name;
    public string $lastName;
    public string $position;
    public int $salary;
    public static int $allSalary = 0;
    public static int $allCollaborators = 0;
    private $role;

    public function __construct(string $name, string $lastName, string $position, int $salary)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->salary = $salary;
        self::$allSalary += $this->salary;
        self::$allCollaborators++;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getHtml()
    {
        return "<p>{$this->name} {$this->lastName}, позиция: {$this->position}, зарплата: {$this->salary} попугаев, может заниматься разработкой приложения: " . $this->getRole() . "</p>";
    }

    public static function getInfo()
    {
        echo 'Общее количество сотрудников: ' . self::$allCollaborators . '.<br>' . 'Общая сумма зарплат: ' . self::$allSalary . ' попугаев.';
    }
}