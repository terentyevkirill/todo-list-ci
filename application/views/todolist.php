<!DOCTYPE HTML>
<meta charset="UTF-8">
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TODO</title>
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap-3.3.7-dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/animate-css/animate.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/hover-css/hover.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">

</head>
<body>

<div class="container" id="main-container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Список заданий</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <?php
                        if (!empty($items)) {
                            foreach ($items as $item) { ?>
                                <li>
                                    <h3>&nbsp;
                                        <a href="<?php echo site_url('todolist/todo/' . $item->id); ?>"><?php echo $item->desc; ?></a>
                                        <a href="<?php echo site_url('todolist/delete_task/' . $item->id); ?>">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </a>
                                    </h3>
                                </li>
                            <?php }
                        } else {
                            echo 'No tasks yet';
                        } ?>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-md-6" id="add_form">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Добавить новое задание</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="<?php echo site_url('todolist/add_task'); ?>">
                        <textarea rows="3" cols="35" placeholder="Задание" name="item" required ></textarea>
                        <br/><br/>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-footer">
                    <a href="web_lab11_terentiev_p.pdf">Протокол</a>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>