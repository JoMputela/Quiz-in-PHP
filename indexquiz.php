<!DOCTYPE html>
<html>
<head>
  <title>phpquiz</title>
  <link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower|Patrick+Hand|Righteous" rel="stylesheet">
<style type="text/css">
  #wrapper {
    width: 950px;
    height: auto;
    padding: 12px;
    margin-left: auto;
    margin-right: auto;
    background-color: #fff;
    font-family: 'Acme', sans-serif;
  }
#subbutton {
  background-color: #4CAF50; /* Green */
  border: solid;
  border-radius: 20px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: 'Righteous', cursive;
  margin-left: 35px;

</style>

</head>
<body bgcolor="elelel">
<center><h1>The best Quiz ever</h1></center>
<h2 align="center">About the Human Body  and Food - yeaaaah!!!</h2>

<div id="wrapper">
<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

<?php

    $questions = array(array(

      "Question 1:    How many hairs does the average person have on their head?",
      "Question 2:    How many bones make up our whole skeleton?",
      "Question 3:    Which type of blood cells help our bodies to fight infection?",
      "Question 4:    Approximately how many times does your heart beat every 24 hours?",
      "Question 5:    Your liver is your largest (solid) organ and is extremely important for your well-being. How many   different functions does your liver perform to keep you fit and healthy?",
      "Question 6:    The 'taste buds' on your tongue detect five different tastes (salty, sweet, bitter, sour and umami). How many taste buds do you have on your tongue?",
      "Question 7:    Your 'rotator cuff' is a group of muscles and tendons found in your .....?",
      "Question 8:    On average, women's noses are bigger than men's noses.",
      "Question 9:    Our bodies cannot make the minerals they require (such as iron, calcium, copper and zinc), so all of our minerals are obtained from our food and drink.",
      "Question 10:   The average adult human brain weighs about ......?",
      "Question 11:    The word 'coconut' comes from a 16th century Portuguese word 'cocos' meaning .....?",
      "Question 12:    In which year was Ben & Jerry's ice cream company established?",
      "Question 13:    Up until about 400 years ago the majority of carrots eaten in Europe were white.",
      "Question 14:    A tomato is a .....?",
      "Question 15:    A calzone (sounds like kal-zone-ay) is a type of .....",
      "Question 16:    A dried plum is properly known as a .....?",
      "Question 17:    Strawberries, raspberries, peaches and cherries are all related to which type of flower?",
      "Question 18:    The odd coloured fruits from a plant whose latin name is Musa Velutina are .....?",
      "Question 19:    The first breakfast cereal (invented in 1863) was not popular because ....?",
      "Question 20:   From which country do potatoes originate?"
                            ),
          

            array("QOne", "QTwo", "QThree", "Qfour", "Qfive", "Qsix", "Qseven", "Qeight", "Qnine", "Qten", "Qeleven", "QTwelve", "Qthirteen", "Qfourteen", "Qfifteen", "Qsixteen", "Qseventeen", "Qeighteen", "Qnineteen", "Qtwenty"),

 		array(array("(a)Approximately 25,000", "(b) Approx. 125,000", "(c) Approx. 1,125,000", "(d)none of the above"),
                array("(a) 206", "(b) 306", "(c) 406", "(d)none of the above"),
                array("(a) White blood cells", "(b) Red blood cells", "(c) Both red and white blood cells", "(d)none of the above"),
                array("(a) 1000 times", "(b) 10,000 times", "(c) 100,000 times", "(d)none of the above" ),
                array("(a) Around 5 functions", "(b) Around 50 functions", "(c) Around 500 functions", "(d)none of the above"),
                array("(a) About 5000", "(b) About 50,000", "(c) About 500,000", "(d)none of the above"),
                array("(a) Knee", "(b) Shoulder", "(c) Hand", "(d)none of the above" ),
                array("TRUE", "FALSE ?", "some what", "none of the above" ),
                array("TRUE", "FALSE ?","some what", "(d)none of the above" ),
                array("(a) 1.5kg", "(b) 2.5kg", "(c) 3.5kg", "(d)none of the above"),
                array("(a) angry face", "(b) weeping face",     "(c) grinnning face", "(d)none of the above"),
                array("(a) 1958", "(b) 1978", "(c) 1998" , "(d)none of the above"),
                array("TRUE", "FALSE?","some what", "(d)none of the above" ),
                array("(a) fruit", "(b) vegetable", "(c) herb", "(d)none of the above" ),
                array("(a) potato", "(b) peach", "(c) pizza", "(d)none of the above"),
                array("(a) prune", "(b) raisin", "(c) date" , "(d)none of the above"),
                array("(a) The rose", "(b) The daffodil", "(c) The lily", "(d)none of the above" ),
                array("(a) pink bananas", "(b) pink oranges", "(c) pink pineapples", "(d)none of the above" ),
                array("(a) it was green", "(b) it was very expensive", "(c) it had to be soaked overnight", "(d)none of the above" ),
                array("(a) Ireland", "(b) South America", "(c) Greenland", "(d)none of the above" ),
         
               )
          );
          
            //print_r($question);

//this loop here is for display = to display the quiz
/*for ($x=0; $x<count($questions[0]); ++$x) { 
        echo "\n" . $questions [0][$x]. "<br>";
        for ($z=0; $z<=3; ++$z){  
            echo "<input type=\"radio\" name=\"" . $questions[0][$x] . "\" value=\"" . $questions[1][$x][$z]. "\">".$questions[2][$x][$z]. "<br>";
        }
     };*/

  /*  $answers = array("3", "7", "10");
    $total = "0";

    foreach ($_post as $key => $value) {
      switch ($value) {
        case '$answers[0]': $total++;
          break;
        case '$answers[1]': $total++;
          break;
        case '$answers[2]': $total++:
          break;
      };
    }*/

?>

<?php for ($x=0; $x<count($questions[0]); ++$x): ?>
        <h3> <?php echo $questions [0][$x]; ?> </h3>
        <ul>
            <?php for ($z=0; $z<=3; ++$z): ?>
                    <li>
                        <input type='radio' name='<?php echo $questions[0][$x]; ?>' value="<?php echo $questions[2][$x][$z]; ?>" />
                        <?php echo $questions[2][$x][$z];?>
                    </li>
            <?php endfor; ?>
        </ul>
<?php endfor; ?>



<input type="submit" name="submit" id="subbutton">
<center><font face="andalus" size="5">That's the end of this human body and all the feasts Quiz</font></center>
<br />
<br /><br />
</form>



<?php
//this here is for the post and to return post with the correct answers
$answers = array(
	 "(b) Approximately 125,000", "(a) 206", "(a) White blood cells", "(c) 100,000 times", "(c) Around 500 functions", "(a) About 5000", "(b) Shoulder", "FALSE", "TRUE", "(a) 1.5kg", "(c) grinnning face","(b) 1978", "TRUE", "(a) fruit", "(c) pizza", "(a) prune", "(a) The rose", "(a) pink bananas", "(c) it had to be soaked overnight", "(b) South America" 
);

//print_r($_POST);

$total = "0";

if ($_POST) {
  foreach ($_POST as $key => $value) {
      switch ($value) {
        case $answers[0]: $total++;
          break;
        case $answers[1]: $total++;
          break;
        case $answers[2]: $total++;
          break;
        case $answers[3]: $total++;
          break;
        case $answers[4]: $total++;
          break;
        case $answers[5]: $total++;
          break;
        case $answers[6]: $total++;
          break;
        case $answers[7]: $total++;
          break;
        case $answers[8]: $total++;
          break;
        case $answers[9]: $total++;
          break;
        case $answers[10]: $total++;
          break;
        case $answers[11]: $total++;
          break;
        case $answers[12]: $total++;
          break;
        case $answers[13]: $total++;
          break;
        case $answers[14]: $total++;
          break;
        case $answers[15]: $total++;
          break;
        case $answers[16]: $total++;
          break;
        case $answers[17]: $total++;
          break;
        case $answers[18]: $total++;
          break;
        case $answers[19]: $total++;
          break;

 
      }
}};
 
 //echo "you score is " . $total; "/20"


if (isset($_POST['submit'])) {
  echo "<center>your score is $total <br> $total/20</center><br><br>";

if ($total>15) {
    echo "<center>you are actualy Good, Well done</center>";
  }elseif ($total>10) {
    echo "<center>Not bad but you can do better</center";
  }else{
    echo "<center>Please try again, you can do it</center>";
  }
          

}
?>

<br><br><br>

<center><p>Thanks for trying my human body quiz... Did you learn anything new?, <br>Well hope you enjoyed my feast of food quiz questions... Feeling hungry hey?</p><center>
</body>
</html>