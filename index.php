<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>phpquiz</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    </head>
    <body>

        <div class="hero-image">
            <div class="hero-text">
                <h1>THE QUIZ-ONATOR 3000</h1>
                <a href="#questions"><button>START QUIZ</button></a>
            </div>
        </div>
        
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        

        <form action="answers.php" method="post">    

        <h2 id="questions">You ready for the most random quiz on the planet ??</h2>

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

            // for ($x=0; $x <= 1; $x++) { 
            //     echo $q1[$x];
            echo $q20[0];
            
        ?>

        <a href="answers.php"><button>SUBMIT</button></a>

        </form>

    </body>
</html>