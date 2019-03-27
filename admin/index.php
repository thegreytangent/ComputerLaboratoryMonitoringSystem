<?php require_once '../core/init.php'; ?>
<?php  $page = new Page(Input::get('page')); ?>


<?php

if (Session::exists('admin')) {
    $id = $_SESSION['admin'];
    $userLogin = Users::find_by_id($id);
}elseif(Session::exists('assistant')){
   $id = $_SESSION['assistant'];
   $userLogin = StudentAssistance::find_by_id($id);
} else {
    Redirect::to('login/');
}
?>

<?php require_once 'pages/header.php'; ?>


    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <?php require_once 'pages/navbar.php'; ?>
            <!-- Laboratory COMLAB 4PC-->
            <section class="statistic statistic2">
               <?php echo $page->getContent(); ?>
           </section>
           <!-- END Laboratory PC-->
           <?php require_once 'pages/footer.php'; ?>
       </div>
   </div>
</body>
<?php require_once 'pages/script.php'; ?>
</html>
