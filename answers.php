<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Answers</title>
</head>
<body>
    <form action="/index.php" method="post">

    <?php
        if (!empty($_POST)) {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            $q8 = $_POST['q8'];
            $q9 = $_POST['q9'];
            $q10 = $_POST['q10'];
            $q11 = $_POST['q11'];
            $q12 = $_POST['q12'];
            $q13 = $_POST['q13'];
            $q14 = $_POST['q14'];
            $q15 = $_POST['q15'];
            $q16 = $_POST['q16'];
            $q17 = $_POST['q17'];
            $q18 = $_POST['q18'];
            $q19 = $_POST['q19'];
            $q20 = $_POST['q20'];

        

            $correct = 0;
            if ($q1 == '1') {
                $correct++;
            }

            if ($q2 == '1') {
                $correct++;
            }

            if ($q3 == '3') {
                $correct++;
            }

            if ($q4 == '1') {
                $correct++;
            }

            if ($q5 == '4') {
                $correct++;
            }

            if ($q6 == '3') {
                $correct++;
            }

            if ($q7 == '1') {
                $correct++;
            }

            if ($q8 == '2') {
                $correct++;
            }

            if ($q9 == '4') {
                $correct++;
            }

            if ($q10 == '4') {
                $correct++;
            }


            if ($q11 == '1') {
                $correct++;
            }


            if ($q12 == '1') {
                $correct++;
            }


            if ($q13 == '4') {
                $correct++;
            }


            if ($q14 == '2') {
                $correct++;
            }


            if ($q15 == '3') {
                $correct++;
            }


            if ($q16 == '1') {
                $correct++;
            }

            if ($q17 == '2') {
                $correct++;
            }


            if ($q18 == '2') {
                $correct++;
            }


            if ($q19 == '4') {
                $correct++;
            }


            if ($q20 == '1') {
                $correct++;
            }


            echo "<p>You got $correct correct!</p>";


            $correct = 0;

            if ($correct == 0) {
                echo "<p>Better luck next time 'bud</p>";
            }
            elseif ($correct == 1) {
                echo "<p>atleast you got 1 correct fam</p>";
            }
            elseif ($correct == 2) {
                echo "<p>atleast you got 2 correct fam</p>";
            }
            elseif ($correct == 3) {
                echo "<p>atleast you got 3 correct</p>";
            }
            elseif ($correct == 4) {
                echo "<p>only 4?</p>";
            }
            elseif ($correct == 5) {
                echo "<p>look on the bright side...you've got 25%</p>";
            }
            elseif ($correct == 6) {
                echo "<p>6 correct, human</p>";
            }
            elseif ($correct == 7) {
                echo "<p>only 7, gotta do better!</p>";
            }
            elseif ($correct == 8) {
                echo "<p>8</p>";
            }
            elseif ($correct == 9) {
                echo "<p>almost 50%! still a fail bro</p>";
            }
            elseif ($correct == 10) {
                echo "<p>You actually got 50% ... im proud of you</p>";
            }
            elseif ($correct == 11) {
                echo "<p>11 is okay, right?</p>";
            }
            elseif ($correct == 12) {
                echo "<p>12 atleast</p>";
            }
            elseif ($correct == 13) {
                echo "<p>if you got this far, you CAN do better</p>";
            }
            elseif ($correct == 14) {
                echo "<p>14 correct</p>" ;
            }
            elseif ($correct == 15) {
                echo "<p>15!</p>";
            }
            elseif ($correct == 16) {
                echo "<p>WOW, 16!</p>";
            }
            elseif ($correct == 17) {
                echo "<p>almost full marks</p>";
            }
            elseif ($correct == 18) {
                echo "<p>i salute you</p>";
            }
            elseif ($correct == 19) {
                echo "<p>Dope!!</p>";
            }
            elseif ($correct == 20) {
                echo "<p>Don't brag bruh, with my next project you won't get to this mark</p>";
            }
        } 

        else {
            echo "<p>Knowledge is vital aiya. Upgrade the mental!</p>";
        }

    ?>

    <?php
        $q1 = array(
            "q1 => 'Complete the sentence, Who let the dogs out....?'
            'Who, who, who, who'
            'Woof, woof, woof, woof'
            'Mahatma Gandhi',
            'Whoopie Goldberg'"
        );

        $q2 = array(
            "q2 => 'What was the weather like on the 3rd August 2018?',
            'Heavy rain',
            'Cool',
            '30% rain',
            'HOT'"
        );
        
        $q3 = array(
            "q3 => 'The oldest game to date?',
            'Snake on Nokia 3310',
            'Contra',
            'Tetris',
            'Battlefield'"
        );

        $q4 = array(
            "q4 =>'Where was fortune cookies first made?',
            'America',
            'China',
            'Canada',
            'England'"
        );

        $q5 = array(
            "q5 => 'What is a group of crows called?',
            'A gaggle',
            'A pot',
            'A flock',
            'A murder'"
        );

        $q6 = array(
            "q6 => 'What is the size of  newly born kangaroo?',
            'A newly born babys size',
            '15 inches',
            '1 inch',
            'the size of a human hand'"
        );

        $q7 = array(
            "q7 => 'Who made the first car?',
            'Karl Benz',
            'Henry Ford',
            'Ferdinand Porsche',
            'Enzo Ferrari'"
        );

        $q8 = array(
            "q8 => 'What is Hanover Park famous 4?',
            'Murders',
            'Gang violence',
            'Their integrity',
            'Ladies'"
        );

        $q9 = array(
            "q9 => 'What can speak without a tongue and listen without ears?',
            'Butterfly',
            'Whatsapp',
            'A cup',
            'Telephone'"
        );

        $q10 = array(
            "q10 => 'When was the Hanover Park clinic shut down due to gang violence?',
            'Earlier this year',
            '2017',
            '2016',
            '2015'"
        );

        $q11 = array(
            "q11 => 'What was the population of Hanover Park in 2011?',
            '34,625',
            '60,345',
            '29,992',
            'None of the above'"
        );

        $q12 = array(
            "q12 => 'I speak without a mouth and hear without ears. I have no body, but I come alive with wind. What am I?',
            'An echo',
            'Ears',
            'Mouth',
            'Vuvuzela'"
        );

        $q13 = array(
            "q13 => 'You see a boat filled with people. It has not sunk, but when you look again you don’t see a single person on the boat. Why?',
            'They went below deck',
            'They jumped overboard',
            'They hid away',
            'They are all married (choose this answer for R100 cash)'"
        );

        $q14 = array(
            "q14 => 'I come from a mine and get surrounded by wood always. Everyone uses me. What am I?',
            'A wooden table',
            'pencil lead',
            'A tree',
            'A swing'"
        );

        $q15 = array(
            "q15 => 'A girl has as many brothers as sisters, but each brother has only half as many brothers as sisters. How many brothers and sistes are there in the family?',
            '1 brother and 5 sisters',
            '2 brothers and 4 sisters',
            '4 sisters and 3 brothers',
            'None of the above'"
        );

        $q16 = array(
            "q16 => 'I have keys, but no locks and space, and no rooms. You can enter, but you can’t go outside. What am I?',
            'Keyboard',
            'A door',
            'A treehouse',
            'A padlock'"
        );

        $q17 = array(
            "q17 => 'What is the most used weapon in Hanover Park?',
            'A belt',
            'A sloffie',
            'A wooden spoon',
            'A knife'"
        );

        $q18 = array(
            "q18 => 'The Godfathers - Into the forest, is what?',
            'A kwaito song',
            'Deep House track',
            'Trance music',
            'An opera song (choose this answer for R200)'"
        );

        $q19 = array(
            "q19 => 'If I press ctrl+w while im on a webpage, what does it do?',
            'Opens a new tab',
            'A shortcut for screen brightness',
            'Opens the settings',
            'Closes that tab'"
        );

        $q20 = array(
            "q20 => 'What is the most common nickname in Hanover Park?',
            'Pang',
            'Lange',
            'Earbud',
            'Koppe'"
        );
    
    ?>
    </form>


</body>
</html>