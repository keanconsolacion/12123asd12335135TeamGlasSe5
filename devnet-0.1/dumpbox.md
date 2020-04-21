$(document).ready(function(){

      $("#notStud").click(function(){


        $(".register-border").fadeIn("");

        // $(".register-border").show() // try to hide google navigation bar

      });



    });


    //js dumpbox




    session_start();
         if (isset($_SESSION['your_form']) && !empty($_SESSION['your_form'])) {
             $form_data = $_SESSION['your_form'];
             unset($_SESSION['your_form']);
         }
         <?=$form_data['your_form']['txt1']?>
