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
        <div class="col-md-12" id="edit_form">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Задание</h3>
                </div>
                <div class="panel-body">
                    <form method="POST"
                          action="<?php echo site_url('todolist/edit_task/' . $item->id); ?>">

                        <textarea rows="3" cols="35" name="item" required><?php echo $item->desc; ?></textarea>
                        <br>
                        <?php echo 'Created at: ' . $item->created_at; ?>
                        <?php if ($item->updated_at != '0000-00-00 00:00:00') { ?>
                            <br><?php echo 'Updated at: ' . $item->updated_at;
                        } ?>
                        <br/><br/>
                        <button class="btn btn-secondary" id="back_but" type="button"
                                onclick="location.href='http://localhost/todo-list/todolist'">Назад
                        </button>
                        <button class="btn btn-primary" id="edit_but" type="submit">Сохранить</button>
                    </form>
                    <br>
                    <form method="POST" action="<?php echo site_url('todolist/delete_task/' . $item->id); ?>">
                        <button class="btn btn-danger" id="delete_but" type="submit">Удалить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>