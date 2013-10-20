<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">
    <title>ænima</title>
    <script type="text/javascript" language="javascript" src="js/loader.js"></script>
    <link href="api/lib/css/bootstrap.css" rel="stylesheet" type="text/css">    
    <link href="api/lib/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
    <link href='css/style.css' rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <?php
      include('view/templates/item_list.php');
      include('view/templates/item_modal.php');
    ?>    
  </head>
  <body onload="var app = new aenima('aenima');"> 
    <?php
      print $_SESSION['api']->aenima;
    ?>   
<div id="facebox_overlay">
    <div id="loaderImage"></div>
</div>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"/>
         <span class="icon-bar"/>
         <span class="icon-bar"/>
         </button>
         <a class="navbar-brand" href="#"><img src="ico/logo.png"></img></a>
      </div>
         <div class="collapse navbar-collapse navbar-ex2-collapse">
        <?php
          if (isset($_SESSION['client_google']))
             {
             print $_SESSION['google_sign_in'];   
             }
        ?>  
      </div>
    </nav>
   <?php
     include('view/'.$_SESSION['api']->module."/".$_SESSION['api']->action.".php");
   ?>    
    <div class="modal fade" style="color:gray;" id="mymodal_add">
      <div class="modal-dialog">
        <div class="modal-content">
           <form id='form_tweets' class="form-horizontal" role="form">
             <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title" id="myModalLabel"><i class=" icon-twitter icon-pencil"></i> Tweet Manager</h4>
             </div>
             <div class="modal-body">
                <p>Order</p>
                <input id="order" name="order"  class="form-control input-xlarge focused" maxlength="100" type="text" placeholder="Order">
                <br>
                <p>Handle</p>
                <input id="handle"  name="handle" class="form-control input-xlarge focused" maxlength="100" type="text" placeholder="Handle">
                <br>
                <p>Status</p>
                <textarea id="status" label="status" class="form-control" name="status" style="width: 100%; height: 100px;" maxlength="120" placeholder="Status.."></textarea>
             </div>
              <div class="modal-footer">
                <button id="update_action" type="button" class="btn btn-success"><i class="icon-send icon-large"></i> Send</button>
              </div>    

            </form> 
        </div>
      </div>
    </div>
      <div id='item_modal'></div>
      <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
          <div class="col-xs-8 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            sidebar
          </div>     
        <div class="col-xs-12 col-sm-9" >           
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">  
            <div id='item_list' class="table-responsive"></div>        
          </div><!--/row-->
          <div class="row">
              <a style="width:100%;" href="#mymodal_add" data-toggle="modal"class="btn btn-info  btn-large"> <i class="icon-twitter icon-large"></i> Add</a>
          </div>
         </div>
        <footer><p>&copy; ænima 2013</p></footer>         
        </div>
      </div>        
      <script type="text/javascript" language="javascript" src="api/lib/js/class.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/log.js"></script> 
      <script type="text/javascript" language="javascript" src="api/lib/js/jquery-2.0.3.min.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/underscore-min.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/bootstrap.min.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/dataTables.bootstrap.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/handlebars.js"></script>
      <script type="text/javascript" language="javascript" src="api/lib/js/helpers.js"></script>    
      <script type="text/javascript" language="javascript" src="js/render.js"></script> 
      <script type="text/javascript" language="javascript" src="js/aenima.js"></script>
  </body>
</html>