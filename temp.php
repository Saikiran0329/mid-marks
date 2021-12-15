    
	//echo $message ;
	echo $year;
	echo $month;
	echo $day;
    
    echo $cur_year ."<br>";
    echo $cur_month ."<br>";
    echo $cur_day ."<br>";

   define("January","1");
   define("February","2");
   define("March","3");
   define("April","4");
   define("May","5");
   define("June","6");
   define("July","7");
   define("August","8");
   define("September","9");
   define("October","10");
   define("November","11");
   define("December","12");

   //echo constant("December") .<br>.;

   //echo constant($month);


    if($year <= $cur_year && constant($month) < constant($cur_month))
  {
    echo "<script>alert('please select correct date!!');</script>";
    echo("<script>window.location = 'messages.php';</script>");
  }
  else if( constant($month) <= constant($cur_month) && $day < ($cur_day))
  {
    echo "<script>alert('please select correct date!!');</script>";
    echo("<script>window.location = 'messages.php';</script>");
  }

else
{