<? $page_title = "ContactPage";
$page = "page5";
include("header.php"); ?>


    <link href="assettsForm/main.css" rel="stylesheet">


       <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<header class="ccheader">
    <h1>צרו קשר</h1>
</header>
<div class="wrapper">
    <form id="contact_form" method="post" action="assettsForm/process_form.php" class="ccform">

    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Full Name - שם" required name='your_name'>
    </div>

    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" type="email" placeholder="Email - אי-מייל" required name='your_email'>
    </div>

    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Phone - סלולרי" name='your_phone'>
    </div>

     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Subject - נושא" name='your_subject'>
    </div>

    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="ccformfield" name="comments" rows="8" placeholder="Message - הודעה" name='your_message' class="body"></textarea>
    </div>

    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" value="שלח">
    </div>
    </form>
</div>
<div class="credit">


</div>





        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="assettsForm/main.js"></script>




<? include("footer.html"); ?>

