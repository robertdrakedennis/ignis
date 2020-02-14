<?php

SESSION_START();

ob_start();

$page = 'home';
$page_title = 'Home';

require_once('inc/functions.php');

if(isset($_GET['newlicense'])) {
    cache::clear();

    if (!prometheus::lkcheck()) {
        setSetting($_GET['newlicense'], 'api_key', 'value', false);

        cache::clear();
    }
}

if (!prometheus::loggedin())
    include('inc/login.php');
else
    $UID = $_SESSION['uid'];

if (getSetting('installed', 'value2') == 0) {
    cache::clear();
    util::redirect('install.php');
}

if (prometheus::loggedin() && !actions::delivered() && $page != 'required')
    util::redirect('store.php?page=required');

if (prometheus::loggedin() && is_numeric(actions::delivered('customjob', $_SESSION['uid'])) && $_GET['page'] != 'customjob')
    util::redirect('store.php?page=customjob&pid=' . actions::delivered('customjob', $_SESSION['uid']));

ob_end_clean();
?>

<?php include('inc/header.php'); ?>

<?php if (getSetting('installed', 'value2') == 1) { ?>
    <div class="content">
    <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php if (isset($_GET['installed']) && $_GET['installed'] == true) { ?>
                <p class="bs-callout bs-callout-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    Installation successfull! Please delete install.php if it didn't do it itself. The first
                    user who signs in gets admin access!<br>
                </p>
            <?php } ?>
        </div>
    </div>

    <div class="content">
	    <?php require_once "ignis/layouts/layout_$layout.php"; ?>
    </div>
    <?php include('inc/footer.php'); ?>
<?php } ?>
