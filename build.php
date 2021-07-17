<?php
    include 'createDB.php';
    include './back-end/CreateTableUser.php';
    include './back-end/CreateTableCredential.php';
    include './back-end/CreateTableSession.php';
    include './back-end/CreateTableActivity.php';
    include './back-end/CreateTableResult.php';
    include './back-end/CreateTableQuestion.php';
    include './back-end/InsertQuestion.php';
    include './back-end/Constraints.php';
    include './back-end/ForeignKeys.php';
    include './back-end/CreateTriggerAddActivity.php';
    include './back-end/CreateProcedureUpdateActivity.php';
    include './back-end/CreateTriggerInsertResult.php';
    include './back-end/CreateProcedureUpdateResult.php';
?>