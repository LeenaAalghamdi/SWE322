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
  return "course code:".$this->courseCode."<br>course Name:".$this->courseName<br>course Description:".$this=>courseDescription."<br>Grade:".$this->grade<br>
  }
  }
  $course1= new course();
  $course1->setCourseCode("SWE322");
  $course1->setCourseName("Advanced web");
  $course1->setCourseDescription("Advanced");
  $course1->setCourseGrdae("A");
  $course2= new course();
  $course2->setCourseCode("CIS202");
  $course2->setCourseName("Data structure");
  $course2->setCourseDescription("introduction");
  $course2->setCourseGrade("B+");
  $courses= array($course1,$course2);
  echo"<table>";
  echo "<tr><th>Course Code</th><th>Course Name</th><th>Course Description</th><th>Course Grade</th></tr>";
  foreach ($courses as $course){
  if ($course->is A()){
  echo "<tr> style='background-color: yallow'>";
  }else {
  echo"<tr>";
  }
  echo "<td>.$course->getCourseCode()."</td><td>".$course->getCourseName()."</td><td>".$course->getCourseDescription()."</td><td>".$course->getCourseGrade()."</td></tr>";
}
echo "</table>";
  ?>
  </body>
</html>
