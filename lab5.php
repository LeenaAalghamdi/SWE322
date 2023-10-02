<html>
  <body>
    <?php
class courses{
  public $name;
  public $courses;
  public $grade;
  public $courseDescription;
  function set_name($name){
    $this->name=$name;
  }
  function get_name(){
    return $this->name;
  }
  function set_grade(){
    $this->grade=$grade;
}
  function get_grade(){
    return $this->grade;
  }
public function isA(){
if($this->grade=="A"){
  return true;}
else{
  return false;}
}
}
pubic function getCourseDetails(){
  return "course code:".$this->courseCode."<br>course Name:".$this->courseName<br>course Discription:".$this=>courseDescription."<br>Grade:".$this->grade<br>
  }
$courses= array ($course1, $course2);
$swe322 =new course();
$cis =new curse();
$swe322->set_name('advanced web');
$cis->set_name('programming');
echo $swe322->get_name();
echo "<br>";
echo $cis->get_name():
  ?>
  </body>
</html>
