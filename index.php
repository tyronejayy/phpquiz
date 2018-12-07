<?php
$q = array (
        "Complete the sentence, Who let the dogs out....?" => array (
                'Who, who, who, who' => 'A',
                'Woof, woof, woof, woof' =>'A',
                'Mahatma Gandhi' => 'A',
                'Whoopie Goldberg' => 'A',
                
        ),

        "What was the weather like on the 3rd August 2018?" => array (
                'Heavy rain' => 'B',
                'Cool' => 'B',
                '30% rain' => 'B',
                'HOT' => 'B',
        ),

        "The oldest game to date?" => array (
                'Snake on Nokia 3310' => 'C',
                'Contra' => 'C',
                'Tetris' => 'C',
                'Battlefield' => 'C',
        ),

        "Where was fortune cookies first made?" => array (
                'America' => 'D',
                'China' => 'D',
                'Canada' => 'D',
                'England' => 'D',
        ),

        "What is a group of crows called?" => array (
                'A gaggle' => 'E',
                'A pot' => 'E',
                'A flock' => 'E',
                'A murder' => 'E',
        ),

        "What is the size of newly born kangaroo?" => array (
                'A newly born babys size'  => 'F',
                '15 inches' => 'F',
                '1 inch' => 'F',
                'The size of a human hand' => 'F',
        ),

        "Who made the first car?" => array (
                'Karl Benz' => 'G',
                'Henry Ford' => 'G',
                'Ferdinand Porsche' => 'G',
                'Enzo Ferrari' => 'G',
        ),

        "What is Hanover Park famous for?" => array (
                'Murders' => 'H',
                'Gang violence' => 'H',
                'Their integrity' => 'H',
                'Ladies' => 'H',
        ),

        "What can speak without a tongue and listen without ears?" => array (
                'Butterfly' => 'I',
                'Whatsapp' => 'I',
                'A cup' => 'I',
                'Telephone' => 'I',
        ),

        "In what year was the Hanover Park clinic shut down due to gang violence?" => array (
                'Earlier this year' => 'J',
                '2017' => 'J',
                '2016' => 'J',
                '2015' => 'J',
        ),

        "What was the population of Hanover Park in 2011?" => array (
                '34,625' => 'K',
                '60,345' => 'K',
                '29,992' => 'K',
                'None of the above' => 'K',
        ),

        "I speak without a mouth and hear without ears. I have no body, but I come alive with wind. What am I?" => array (
                'An echo' => 'L',
                'Ears' => 'L',
                'Mouth' => 'L',
                'Vuvuzela' => 'L',
        ),

        "You see a boat filled with people. It has not sunk, but when you look again you dont see a single person on the boat. Why?" => array (
                'They went below deck' => 'M',
                'They jumped overboard' => 'M',
                'They hid away' => 'M',
                'They are all married (choose this answer for R100 cash)' => 'M',
        ),

        "I come from a mine and get surrounded by wood always. Everyone uses me. What am I?" => array (
                'A wooden table' => 'N',
                'pencil lead' => 'N',
                'A tree' => 'N',
                'A swing' => 'N',
        ),

        "A girl has as many brothers as sisters, but each brother has only half as many brothers as sisters. How many brothers and sisters are there in the family?" => array (
                '1 brother and 5 sisters' => 'O',
                '2 brothers and 4 sisters' => 'O',
                '4 sisters and 3 brothers' => 'O',
                'None of the above' => 'O',
        ),

        "I have keys, but no locks and space, and no rooms. You can enter, but you cant go outside. What am I?" => array (
                'Keyboard' => 'P',
                'A door' => 'P',
                'A treehouse' => 'P',
                'A padlock' => 'P',
        ),

        "What is the most used weapon in Hanover Park?" => array (
                'A belt' => 'Q',
                'A sloffie' => 'Q',
                'A wooden spoon' => 'Q',
                'A knife' => 'Q',
        ),

        "The Godfathers - Into the forest, is what?" => array (
                'A kwaito song' => 'R',
                'Deep House track' => 'R',
                'Trance music' => 'R',
                'An opera song (choose this answer for R200)' => 'R',
        ),

        "If I press ctrl+w while im on a webpage, what does it do?" => array (
                'Opens a new tab' => 'S',
                'A shortcut for screen brightness' => 'S',
                'Opens the settings' => 'S',
                'Closes that tab' => 'S',
        ),

        "What is the most common nickname in Hanover Park?" => array (
                'Pang' => 'T',
                'Lange' => 'T',
                'Earbud' => 'T',
                'Koppe' => 'T',
        ),
);

?>






    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <script src="main.js"></script>
    </head>
    <body>
    <div>
        <form action="index.php" method="post">
            <?php foreach ($q as $question => $value):?>
                <p><?php echo $question; ?></p>
                <p><?php foreach ($value as $answer => $no):?>

                    <?php echo "<input type='radio' name='{$no}' value='{$answer}' required>" ?>
                    <?php echo $answer; ?> <br>

                    <?php endforeach; ?>
                    
                </p>

            <?php endforeach; ?>
            <center><button>SUBMIT</button></center>
        </form>
    </div>
    <div>
        <?php
                $correct = 0;
                if (isset($_POST['answers'])){
                $answers = $_POST['answers']; 
  

                foreach ($q as $no => $value){
        
                if ($answers[$no] != $value[$answer]){
                
                $correct = $correct;
                        } else {
                        $correct++;  
                        }
                }
        ?>

        <?php } ?>
    </div>

    </body>
    </html>