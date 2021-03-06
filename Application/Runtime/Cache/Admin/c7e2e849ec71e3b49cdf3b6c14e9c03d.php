<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <title>悬赏详情</title>
    <link href="/Mjh/Public/Admin/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/Mjh/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Mjh/Public/Admin/css/style.min.css?v=3.1.0" rel="stylesheet">
    <style>
        .droppable-active {
            background-color: #ffe !important;
        }

        .tools a {
            cursor: pointer;
            font-size: 80%;
        }

        .form-body .col-md-6,
        .form-body .col-md-12 {
            min-height: 400px;
        }

        .draggable {
            cursor: move;
        }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">

    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>悬赏详情</h5>
                </div>
                <div class="ibox-content">
                    <form method="post" action="<?php echo U('News/add_news');?>" role="form" class="form-horizontal m-t">
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏名称：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" value="请输入悬赏名称">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏开始时间：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="请输入悬赏开始时间">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏结束时间：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="请输入悬赏结束时间">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏发布者：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="请输入悬赏发布者">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏创建时间：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="悬赏创建时间">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏金额：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="悬赏金额">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏接收者：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="悬赏接收者">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏接收时间：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="悬赏接收时间">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏描述：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="悬赏描述">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏内容：</label>
                            <div class="col-sm-3">
                                <input type="text" name="" class="form-control" placeholder="悬赏内容">
                            </div>
                        </div>
                        <div class="form-group draggable">
                            <label class="col-sm-3 control-label">悬赏图片：</label>
                            <div class="col-sm-3">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group draggable">
                            <div class="col-sm-3 col-sm-offset-3">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                                <a class="btn btn-white" href="<?php echo U('Award/index');?>">取消</a>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>

</html>