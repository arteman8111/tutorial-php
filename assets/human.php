<?php
// Создать класс для формирования данных работника
// - Имя Фамилия Очество
// - Рост
// - Вес
// - Возраст
// - Национальность
// - Год рождения
// - Город
// - Страна
// - Номер паспорта
// - Серия паспорта
// - Фактическое место жительства
// - Прописка
// - Место работы
// - Должность
// - Оклад
// - Машина
// - Бренд машины
// - Год машины
// - Положение в семье
// - Хобби
// - ИНН
// - Снилс

interface AbstractHuman {
    public function getName();
    public function getSurname();
    public function getHeight();
    public function getWeight();
    public function getAge();
}

interface AbstractMashine {
    public function getMashineInfo();
}

interface AbstractWork {
    public function getWorkInfo();
}

interface AbstractDocs {
    public function getDocsInfo();
}

interface AbstractPassport {
    public function getPassportInfo();
}

class Person implements AbstractHuman {
    public $name;
    public $surname;
    public $height;
    public $weight;
    public $nationality;
    public $age;
    public $town;
    public $number_passport;
    public $seria_passport;
    public $fact_residence;
    public $real_residence;
    public $work_residence;
    public $work_post;
    public $cash;
    public $car;
    public $car_brand;
    public $car_year;
    public $family_post;
    public $hobby;
    public $inn;
    public $snyls;

    function __construct($name,$surname,$height,$weight,$nationality,
    $age,$town,$number_passport,$seria_passport,$fact_residence,
    $work_residence,$real_residence,$work_post,$cash,$car,$car_brand,$car_year,
    $family_post,$hobby,$inn,$snyls){
        $this->name=$name;
        $this->surname=$surname;
        $this->height=$height;
        $this->weight=$weight;
        $this->nationality=$nationality;
        $this->age=$age;
        $this->town=$town;
        $this->number_passport=$number_passport;
        $this->seria_passport=$seria_passport;
        $this->fact_residence=$fact_residence;
        $this->real_residence=$real_residence;
        $this->work_residence=$work_residence;
        $this->work_post=$work_post;
        $this->cash=$cash;
        $this->car=$car;
        $this->car_brand=$car_brand;
        $this->car_year=$car_year;
        $this->family_post=$family_post;
        $this->hobby=$hobby;
        $this->inn=$inn;
        $this->snyls=$snyls;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getAge(){
        return $this->age;
    }
}

class Passport extends Person implements AbstractPassport {
    public function getPassportInfo(){
        return "<ul>
                    <li>Национальность: $this->nationality</li>
                    <li>г.Рождения: $this->town</li>
                    <li>Номер и серия паспорта: $this->number_passport $this->seria_passport</li>
                    <li>Адрес фактического проживания: $this->fact_residence</li>
                    <li>Адрес прописки: $this->real_residence</li>
                </ul>
        ";
    }
}

class Work extends Person implements AbstractWork {
    public function getWorkInfo(){
        return "<ul>
                    <li></li>
                    <li></li>
                    <li></li>
        ";
    }
}
class Mashine extends Person implements AbstractMashine {
    public function getMashineInfo(){
        return "1";
    }
}
class Docs extends Person implements AbstractDocs {
    public function getDocsInfo(){
        return "2";
    }
}

$vladimir = new Person("Владимир", "Бабенко", "189", "80", "Славянин", "25", "Москва", "345123", "4545", "ул.Мамино д.17 кв.34","ул.Игрино д.1","ул.Авиамоторная д.1", "Инженер", "150000", "Грузовик", "BMW", "2024", "Холост", "Фильмы", "14334242343", "3433-4312-1242-5313");
$vladimir_passport = new Passport("Владимир", "Бабенко", "189", "80", "Славянин", "25", "Москва", "345123", "4545", "ул.Мамино д.17 кв.34","ул.Игрино д.1","ул.Авиамоторная д.1", "Инженер", "150000", "Грузовик", "BMW", "2024", "Холост", "Фильмы", "14334242343", "3433-4312-1242-5313");
return $vladimir_passport;