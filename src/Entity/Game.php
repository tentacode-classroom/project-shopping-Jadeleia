class game
{
  private $id;
  private $name;
  private $console;
  private $type;
  private $date;
  private $price

  public function setId(int $id)
  {
    $this->id = $id;
  }
  public function getId()
   {
       return $this->id;
   }
   public function setName(string $name)
   {
     $this->name = $name;
   }
   public function getName()
   {
     return $this->name;
   }
   public function setConsole(string $console)
   {
     $this->console = $console;
   }
   public function getConsole()
   {
     return $this->console;
   }
   public function setType(string $type)
   {
     $this->type = $type;
   }
   public function getType()
   {
     return $this->type;
   }
   public function setDate(int $date)
   {
     $this->date = $date;
   }
   public function getDate()
   {
     return $this->date;
   }
   public function setPrice(int $price)
   {
     $this->price = $price;
   }
   public function getPrice()
   {
     return $this->price;
   }

}
