<?php
//Какая-то прикольная штука
// $str = "Банан, Апельсин, Груша, Мандарин, Яблоко, Арбуз";
//
// /* Вместо $arr = []; напишите ваш код */
// $arr = explode(", "$str);
//
// foreach($arr as $key => $value) {
//     echo $value.'<br>';
// }


// class Human{
//   private $words;
//
//   public function setWords($words){
//     $this->words=$words;
//   }
//
//   public function getWords(){
//     return $this->words;
//   }
//
//   public function sayIt(){
//     return $this->getWords();
//   }
// }
//
// $human = new Human();
// $human->setWords("Hi!");
// echo $human->sayIt();// вывод Hi!


//наследование

//   class Human{
//     private $name;
//
//     public function __construct($name/*, $name2, ...*/){//конструктор
//       $this->name = $name;
//     }
//
//     public function say(){
//       echo "Меня зовут ".$this->name." и ";
//     }
//   }
//
//   class Man extends Human{
//     public function beard() {
//       echo "у меня растет борода";
//     }
//   }
//
//   class Women extends Human{
//
//   public function bearChildren(){
//     echo "я девушка";
//   }
//   }
//
//   $man = new Man("Sergey");
//   $man->say();
//   $man->beard();
// echo "<br>";
//   $women = new Women("Maria");
//   $women->say();
//   $women->bearChildren();

//полиморфизм->интерфейсы

//   interface Say /*, Say2, ...*/{ //имплементировтать нужно все методы интерфейса
//     public function say();
//   }
//
//   class Human implements Say{
//     public function say(){
//       echo "sgsd";
//     }
//   }
//
// $human = new Human;
// $human->say();

//полиморфизм->абстрактные классы
  interface Say /*, Say2, ...*/{ //имплементировтать нужно все методы интерфейса
     public function say();
   }
/*абстрактные классы как интерфейсы, но можно реализовывать не все методы*/
  abstract class Human implements Say {//можно только наследовать
    private $name;

    public function __construct($name){
    $this->name = $name;
    }

    public function getName(){
      return $this->name;
    }
  }

  class Man extends Human
  {

  public function __construct($name){
    parent::__construct($name);
  }

  public function beard(){
    echo "у меня растет борода";
  }

    public function say(){
      echo "у меня мужской голос, меня зовут ".$this->getName()." и ";
    }
  }

  class Women extends Human{
    public function __construct($name){
      parent::__construct($name);
    }

    public function bearChildren(){
      echo "у меня не растет борода";
    }

    public function Say($value=''){
      echo "у меня женский голос, меня зовут ".$this->getName()." и ";
    }
  }

  $man = new Man("Сергей");
  $man->say();
  $man->beard();

  echo "<br>";

  $women = new Women("Елена");
  $women->say();
  $women->bearChildren();

?>
