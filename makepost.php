<?php
if(!(isset($_POST["message"]))){die("An error occured");}
$msg = $_POST["message"];
$retstr = <<< EOF

        <div class="container">
            <div class="row">
                <div class="col-xs-offset-1 col-xs-10 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                    <div class="alert alert-message-outer">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-1 col-lg-1 col-md-1 col-xs-12">
                                    <img src="http://yurippe.net/images/user.jpg" class="img-circle img-responsive" width="100%" />                                     
                                </div>
                                <div class="col-md-8 col-lg-8 col-xs-11 col-sm-8">
                                    <div class="alert alert-message-inner">
EOF;
$retstr .= $msg;
$laststr = <<< EOE
</div>                                     
                                </div>
                                <div class="col-lg-1 col-sm-1 col-xs-1 col-md-1">
                                    <span class="glyphicon glyphicon-envelope pull-right"></span>
                                    <br />
                                    <span class="glyphicon glyphicon-star pull-right"></span>
                                    <br />
                                    <span class="glyphicon glyphicon-paperclip pull-right"></span>
                                    <br />
                                    <span class="glyphicon glyphicon-hand-right pull-right"></span>
                                </div>
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
EOE;
$retstr .= $laststr;
echo $retstr;
?>