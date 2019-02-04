

<!DOCTYPE html> 
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstraper Drag & Drop Builder</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/default.min.css">



      <link rel="stylesheet" href="{{asset('buildersource/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/default.min.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/ace/1.2.0/min/ace.js"></script> 
      <script src="http://tinymce.cachefly.net/4.2/tinymce.min.js"></script> 
      <script src="https://code.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> 
      

      <script src="{{asset('buildersource/js/bootstrap-colorselector.js')}}"></script> 
      <script type="text/javascript">var path='';</script> 
      <script  src="{{asset('buildersource/js/app.js')}}"></script> 
      <style> .lyrow{ margin-bottom:10px; } </style>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <style type="text/css">
         body {
   padding-top:50px;
   padding-bottom: 40px;
   margin-left:200px;
   -webkit-transition: margin 500ms ease;
   -moz-transition: margin 500ms ease;
   -ms-transition: margin 500ms ease;
   -o-transition: margin 500ms ease;
   transition: margin 500ms ease;
}
 

@media (max-width: 980px) {
   /* Enable use of floated navbar text */
   .navbar-text.pull-right {
      float: none;
      padding-left: 5px;
      padding-right: 5px;
   }
}
@media (max-width: 979px) {
   .navbar-fixed-top { position:fixed; }
}
#menu-bootstraper { float : right;}

.custo {
   background: none;
   border: none ;
}

.edit .htmlpage { margin-left:0px; margin-top:10px; padding:30px 15px 15px; border: 1px solid #DDDDDD; border-radius: 4px; position:relative; word-wrap: break-word;}
.edit .htmlpage:after {
   background-color: #F5F5F5;
   border: 1px solid #DDDDDD;
   border-radius: 4px 0 4px 0;
   color: #9DA0A4;
   content: "Container";
   font-size: 12px;
   font-weight: bold;
   font-family: 'Montserrat';
   left: -1px;
   padding: 3px 7px;
   position: absolute;
   top: -1px;
}
.container { width:auto; margin:0 0px;}
.sidebar-nav {
   position:fixed;
   width:190px;
   left:0px;
   bottom:0;
   top:0px;
   background:#DDDDDD;
   padding: 10px; z-index:10;
   -webkit-transition: all 500ms ease;
   -moz-transition: all 500ms ease;
   -ms-transition: all 500ms ease;
   -o-transition: all 500ms ease;
   transition: all 500ms ease;
}
.sidebar-nav .nav-header { cursor:pointer; font-size:14px; color:#579; text-transform:uppercase; font-weight:bold; font-family: 'Montserrat';}
.sidebar-nav .nav-header span.label { font-size:10px; /*padding-bottom:0;*/ position:relative; top:-1px; font-family: 'Montserrat';}
.sidebar-nav .nav-header { color:#000; text-shadow:0 1px 0 #ddd;}

.sidebar-nav .accordion-group { border:none; }
.boxes {}
.sidebar-nav li { line-height:18px; margin-bottom:3px; }
.sidebar-nav li .lyrow { margin-bottom:5px;}
.sidebar-nav .box { /*line-height:26px; width:160px; height:26px;*/ display: inline-block; width: 50px; padding:3px; text-align: center; border : 1px solid #bbb; border-radius: 4px; margin-top: 2px; }
.sidebar-nav .preview .element-desc { margin: 0px; padding: 1px; text-align: center; font-family: 'Montserrat'; line-height: 8px;font-size: 9px; cursor: move  }

.sidebar-nav .preview { display: block; color:#666; font-size:13px; line-height:30px; font-family: 'Montserrat';}
.sidebar-nav .preview input { width:130px; padding:0 10px; background:#bbb; font-size:10px; color:#999; line-height:20px; height:20px; position:relative; top:-1px; font-family: 'Montserrat'; }
.sidebar-nav .view { display: none; }
.sidebar-nav .remove,
.sidebar-nav .clone {display: none;}
.sidebar-nav .configuration { display: none; }
.sidebar-nav .box .drag {display: none;}


.htmlpage .preview { display: none; }
.htmlpage .box .view { display: block; padding-top:30px;}


.ui-draggable-dragging .view { display:block;}
/*.htmlpage .ui-sortable-placeholder { outline: 5px dotted #ddd; visibility: visible!Important; border-radius: 4px; }*/
.ui-sortable-placeholder { outline: 1px dashed #578 ;visibility: visible!Important; border-radius: 4px;}
.edit .drag { position: absolute; top: 0;right: 0; cursor: pointer; }
.edit .clone { position: absolute; top: 0;right: 0; cursor: pointer; } 

.box,.lyrow { position:relative;}

.edit .htmlpage .lyrow .clone { top:5px; right:56px; z-index:10; }
.edit .htmlpage .lyrow .drag { top:5px; right:28px; z-index:10; }
.edit .htmlpage .column .box .drag { top:5px; }
.edit .htmlpage .column .box .configuration {position: absolute; top: 5px; line-height: 8px; right: 56px;white-space:nowrap; }
.edit .htmlpage .column .box .configuration:hover { z-index:1001;}

.edit .htmlpage .column .navbar-fixed-top {top: 33px; left: 180px;}
.htmlpage .column .navbar-fixed-top {top: 33px;}
.edit .htmlpage .column .navbar-fixed-bottom { left: 180px;}

.edit .htmlpage .remove { position: absolute; top: 5px; right: 5px; z-index:10; }
.htmlpage .configuration {
   filter: alpha(opacity=0);
   opacity: 0;
   -webkit-transition: all 500ms ease;
   -moz-transition: all 500ms ease;
   -ms-transition: all 500ms ease;
   -o-transition: all 500ms ease;
   transition: all 500ms ease;
}
.htmlpage .drag, .htmlpage .remove, .htmlpage .clone {
   filter: alpha(opacity=20); opacity: 0.2;
   -webkit-transition: all 500ms ease;
   -moz-transition: all 500ms ease;
   -ms-transition: all 500ms ease;
   -o-transition: all 500ms ease;
   transition: all 500ms ease;
}
.htmlpage .box:hover { border : 2px dashed #89BDFF}
.htmlpage .active { border : 2px dashed #89BDFF } 
.htmlpage .lyrow:hover > .drag, 
.htmlpage .lyrow:hover > .clone, 
.htmlpage .lyrow:hover > .configuration, 
.htmlpage .lyrow:hover > .remove,
.htmlpage .box:hover .drag, 
.htmlpage .box:hover .configuration, 
.htmlpage .box:hover .remove { filter: alpha(opacity=100); opacity: 1; }
.edit .htmlpage .row:before {
   background-color: #F5F5F5;
   border: 1px solid #DDDDDD;
   border-radius: 4px 0 4px 0;
   color: #9DA0A4;
   content: "Row";
   font-size: 12px;
   font-weight: bold;
   left: -1px;
   line-height:2;
   padding: 3px 7px;
   position: absolute;
   top: -1px;
}
.htmlpage .row {
   ///background-color: #F5F5F5;
// -webkit-box-sizing: border-box;
// -moz-box-sizing: border-box;
   box-sizing: border-box;
// -webkit-box-shadow: inset 0 1px 13px rgba(0, 0, 0, 0.1);
// -moz-box-shadow: inset 0 1px 13px rgba(0, 0, 0, 0.1);
// box-shadow: inset 0 1px 13px rgba(0, 0, 0, 0.1);
   border: 1px solid #DDDDDD;
   //border-radius: 4px 4px 4px 4px;
   //margin: 15px 0;
   position: relative;
   //padding: 25px  14px 0;
}
.edit .column:after {
   ///background-color: #F5F5F5;
   border: 1px solid #DDDDDD;
   border-radius: 4px 0 4px 0;
   color: #9DA0A4;
   content: "Column";
   font-size: 12px;
   font-weight: bold;
   left: -1px;
   padding: 3px 7px;
   position: absolute;
   top: -1px;
}
.column {
   ///background-color: #FFFFFF;
   border: 1px dashed #DDDDDD;
   border-radius: 4px 4px 4px 4px;
   //margin: 15px 0;
   padding: 39px 19px 24px;
   position: relative;
}

/* preview */
body.mobile { max-width: 380px; border-right: 2px dashed gray; }
body.tablet { max-width: 980px; border-right: 2px dashed gray; }

body.devpreview { margin-left:0px;}
.devpreview .sidebar-nav { 
   left:-200px;
   -webkit-transition: all 0ms ease;
   -moz-transition: all 0ms ease;
   -ms-transition: all 0ms ease;
   -o-transition: all 0ms ease;
   transition: all 0ms ease;
}
.devpreview .drag, .devpreview .configuration, .devpreview .remove, .devpreview .clone { display:none !Important; }
.sourcepreview .column, .sourcepreview .row, .sourcepreview .htmlpage .box {
   margin:0px 0;
   padding:0px;
   background:none;
   border:none;
   -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.00);
   -moz-box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.00);
   box-shadow: inset 0 0px 0px rgba(0, 0, 0, 0.00);
}
.devpreview .htmlpage .box, .devpreview .htmlpage .row { padding-top:0; background:none; }
.devpreview .htmlpage .column { padding-top:19px; padding-bottom:19px; }





#download-layout { display: none }
#feedbackModal textarea,
#downloadModal textarea { width:100%;height:280px;resize: none;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;box-sizing: border-box; }
#feedbackModal input { width:515px; }
#feedbackModal input.modal-error-field, #feedbackModal textarea.modal-error-field { border: 1px solid red; }
a.language-selected { font-style: italic; font-weight: bold; }


#src { width: 100%; border: 0px; }

.topbtn {
   margin-top: 12px;
   float: none;
   border-radius: 2px;

}
 
  
      </style>
   </head>
   <body class="edit">
      <div class="navbar navbar-inverse navbar-fixed-top navbar-bootstraper custo">
         <div class="collapse navbar-collapse">
            <ul class="nav" id="menu-bootstraper">
               <li>
                  <div class="btn-group topbtn" data-toggle="buttons-radio">
                     <button type="button" id="edit" class="active btn btn-primary"><i class="glyphicon glyphicon-edit "></i> Edit</button> <button type="button" class="btn btn-primary" id="sourcepreview"><i class="glyphicon-eye-open glyphicon"></i> Preview</button> 
                     <button type="button" id="save" class="btn btn-warning float-right"><i class="fa fa-save"></i>&nbsp;save</button> 
                  </div>
                  &nbsp; 
                  <div class="btn-group topbtn" data-toggle="buttons-radio" id='add' style='display: none;'> 
                     <button type="button" class="active btn btn-default" id="pc"><i class="fa fa-laptop"></i> Desktop</button> 
                     <button type="button" class="btn btn-default" id="tablet"><i class="fa fa-tablet"></i> Tablet</button> 
                     <button type="button" class="btn btn-default" id="mobile"><i class="fa fa-mobile"></i> Mobile</button> 
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <div class="container">
      <div class="row">
         <div class="">
            <div class="sidebar-nav">
               <ul class="nav nav-list ">
                  <li class="nav-header"> 
                     <i class="fa fa fa-th"> </i>&nbsp; Grid System 
                  </li>
                  <li class="rows" id="estRows">
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs">
                        <i class="glyphicon-remove glyphicon"></i></a> 
                        <a class="drag btn btn-default btn-xs">
                        <i class="glyphicon glyphicon-move"></i></a> 
                        <a href="#" class="btn btn-info btn-xs clone">
                        <i class="fa fa-clone"></i></a>
                        <div class="preview"><input type="text" value="12" class="form-control"></div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-12 column"></div>
                           </div>
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> 
                        <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> 
                        <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="6 6" class="form-control">
                        </div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-6 column">
                              </div>
                              <div class="col-md-6 column"></div>
                           </div>
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="8 4" class="form-control">
                        </div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-8 column"></div>
                              <div class="col-md-4 column"></div>
                           </div>
                           <br> 
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="4 8" class="form-control"></div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-4 column"></div>
                              <div class="col-md-8 column"></div>
                           </div>
                           <br> 
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="3 9" class="form-control"></div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-3 column"></div>
                              <div class="col-md-9 column"></div>
                           </div>
                           <br> 
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="9 3" class="form-control"></div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-9 column"></div>
                              <div class="col-md-3 column"></div>
                           </div>
                           <br> 
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="4 4 4" class="form-control"></div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-4 column"></div>
                              <div class="col-md-4 column"></div>
                              <div class="col-md-4 column"></div>
                           </div>
                           <br> 
                        </div>
                     </div>
                     <div class="lyrow">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon-remove glyphicon"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <a href="#" class="btn btn-info btn-xs clone"><i class="fa fa-clone"></i></a> 
                        <div class="preview"><input type="text" value="3 3 3 3" class="form-control"></div>
                        <div class="view">
                           <div class="row clearfix">
                              <div class="col-md-3 column"></div>
                              <div class="col-md-3 column"></div>
                              <div class="col-md-3 column"></div>
                              <div class="col-md-3 column"></div>
                           </div>
                           <br> 
                        </div>
                     </div>
                  </li>
               </ul>
             

  <br> 
               <form action="{{url('imageupload')}}" method="POST" enctype="multipart/form-data">
                  <input type="hidden" class="form-control" id="pwd" name="_token" value='{{csrf_token()}}'>
                    <input type="hidden" class="form-control" id="pwd" name="news_id" value=''>

                  <label for="pwd">Image:</label>
                  <input type="file" class="form-control" id="pwd" name="image">
                  <button type="submit" class="btn btn-default">Upload</button>
               </form>

               <ul class="nav nav-list">
                  <li class="nav-header"><i class="fa fa-html5"></i>&nbsp;  Html Elements </li>
                  <li class="boxes" id="elmBase">
                  <div class="box box-element" data-type="header"> <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> <div class="preview"> <i class="fa fa-header fa-2x"></i> <div class="element-desc">header</div> </div> <div class="view"> <h2>HEADER TITLE</h2> </div> </div> 


                <div class="box box-element" data-type="button">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> 
                        <div class="preview">
                           <i class="fa  fa-hand-pointer-o fa-2x"></i> 
                           <div class="element-desc">Button</div>
                        </div>
                        <div class="view"> <a class="btn btn-default" href="#">Click Me !</a> </div>
                     </div>
                     <div class="box box-element" data-type="youtube">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> 
                        <div class="preview">
                           <i class="fa  fa fa-youtube-play  fa-2x"></i> 
                           <div class="element-desc">Youtube</div>
                        </div>
                        <div class="view"> <iframe class="img-responsive" src="https://www.youtube.com/embed/WIJaD623dy0" frameborder="0" allowfullscreen data-url=""></iframe> </div>
                     </div>
                    
                     <div class="box box-element" data-type="youtube">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> 
                        <div class="preview">
                           <i class="fa  fa-vimeo-square fa-2x"></i> 
                           <div class="element-desc">Vimeo</div>
                        </div>
                        <div class="view"> <iframe class="img-responsive" src="https://player.vimeo.com/video/137463767?byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> </div>
                     </div>
                     <div class="box box-element" data-type="map">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings"  href="#" ><i class="fa fa-gear"></i></a> </span> 
                        <div class="preview">
                           <i class="fa  fa-map-o fa-2x"></i> 
                           <div class="element-desc">Map</div>
                        </div>
                        <div class="view"> <iframe class="img-responsive" src="http://maps.google.com/maps?q=12.927923,77.627108&amp;z=15&amp;output=embed"  frameborder="0" allowfullscreen data-url=""></iframe> </div>
                     </div>
                     <div class="box box-element" data-type="code">
                        <a href="#close" class="remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></a> <a class="drag btn btn-default btn-xs"><i class="glyphicon glyphicon-move"></i></a> <span class="configuration"> <a class="btn btn-xs btn-warning settings" href="#" ><i class="fa fa-gear"></i></a> </span> 
                        <div class="preview">
                           <i class="fa">< ></i> 
                           <div class="element-desc">Code</div>
                        </div>
                        <div class="view"> i'm html code, change me </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="htmlpage"> </div>
      </div>
      <div class="modal fade" id="download" tabindex="-1" role="dialog" aria-labelledby="download" aria-hidden="true">

         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                  <h4 class="modal-title"><i class='fa fa-save'></i>&nbsp;Save as </h4>
               </div>
               <div class="modal-body" id='sourceCode'> 





                <textarea id="src" rows="10" name="content"></textarea> 

                <textarea id="model" rows="10" class="form-control" name="raw_content"></textarea> 
              </div>

               <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><i class='fa fa-close'></i>&nbsp;Close</button> 

                <button type="submit" class="btn btn-success" id="srcSave"><i class='fa fa-save'></i>&nbsp;Save</button> </div>
            </div>
         </div>

      </div>
      <div class="modal fade" id="preferences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                  <h4 class="modal-title" id="preferencesTitle"></h4>
               </div>
               <div class="modal-body" id="preferencesContent">
                  <iframe src="media-popup.php" style="width:100%; height:300px ; display:none;" frameborder="0" ></iframe>--> 
                  <div  id="mediagallery"  style="overflow:auto;height:400px; display:none" >
                     <input type="text" name="nome" value="" placeholder="name of images"><input class="btn btn-info" type="submit" value="search">  --> 
                     <div id="contenutoimmagini"></div>
                     <form enctype="multipart/form-data" id="form-id"> <input name="nomefile" type="file" /> <input class="button" type="button" value="Upload" /> </form>
                     <progress value="0"></progress> <br> <script type="text/javascript">$(document).ready(function(){$('.button').click(function(){var formx=document.getElementById('form-id');var formData=new FormData(formx);$.ajax({url:'media-popup.php?op=newfile',type:'POST',xhr:function(){var myXhr=$.ajaxSettings.xhr();if(myXhr.upload){myXhr.upload.addEventListener('progress',progressHandlingFunction,false);}
                        return myXhr;},success:completeHandler,error:errorHandler,data:formData,cache:false,contentType:false,processData:false});function completeHandler(){loadimages();}
                        function errorHandler(){alert('errore caricamento');}
                        function progressHandlingFunction(e){if(e.lengthComputable){$('progress').attr({value:e.loaded,max:e.total});}}});loadimages();});function inserisci(elemento){var link=$(elemento);var image=link.data('image');$('#img-url').val(image);$('#imgContent').children('img').attr('src',image);$('#mediagallery').slideUp();$('#thepref').slideDown();}
                        function loadimages(){var request=$.ajax({url:"media-popup.php?immagini=1",method:"POST",data:{nome:''},dataType:"html"});request.done(function(msg){$("#contenutoimmagini").html(msg);});}
                     </script> <a class="btn btn-info" href="javascript:;" onclick="$('#mediagallery').hide();$('#thepref').show();">Return to image settings</a> 
                  </div>
                  <div id="thepref">
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Settings" aria-controls="Settings" role="tab" data-toggle="tab">Settings</a></li>
                        <li role="presentation"><a href="#CellSettings" aria-controls="profile" role="tab" data-toggle="tab">Cell settings</a></li>
                        <li role="presentation"><a href="#RowSettings" aria-controls="messages" role="tab" data-toggle="tab">Row settings</a></li>
                     </ul>
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="Settings">
                           <div class="panel panel-body">
                              <div id="ht" style="display: none;"> <textarea id="html5editorLite"></textarea> </div>
                              <!-- fine header --> 
                              <div id="text" style="display: none;"> <textarea id="html5editor"></textarea> </div>
                              <div id="image" style="display:none">
                                 <div class="row">
                                    <div class="col-md-5" >
                                       <div id="imgContent"> </div>
                                       <a class="btn btn-default form-control" href="#" id="gallery"><i class="icon-upload-alt"></i>&nbsp;Browse ...</a> 
                                    </div>
                                    <div class="col-md-7">
                                       <div class="form-group"> <label for="img-url">Url :</label> <input type="text" value="" id="img-url" class="form-control" /> </div>
                                       <div class="form-group"> <label for="img-url">Click Url:</label> <input type="text" value="" id="img-clickurl" class="form-control" /> </div> --> 
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group"> <label for="img-width">Width :</label> <input type="text" value="" id="img-width" class="form-control"/> </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group"> <label for="img-height">Height :</label> <input type="text" value="" id="img-height" class="form-control"/> </div>
                                          </div>
                                       </div>
                                       <div class="form-group"> <label for="img-title">Title : </label> <input type="text" value="" id="img-title" class="form-control"/> </div>
                                       <div class="form-group"> <label for="img-rel">Rel :</label> <input type="text" value="" id="img-rel" class="form-control"/> </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- fine settaggi immagine --> 
                              <div id="youtube"  style="display:none">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div id="youtube-video"> </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <form>
                                          <div class="form-group"> <label for="video-url">Video id :</label> <input type="text" value="" id="video-url" class="form-control" /> </div>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group"> <label for="video-width">Width :</label> <input type="text" value="" id="video-width" class="form-control"/> </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group"> <label for="video-height">Height :</label> <input type="text" value="" id="video-height" class="form-control"/> </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <!-- fine settagio youtube --> 
                              <div id="map" style="display:none">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div id="map-content"> </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <form>
                                          <div class="form-group"> <label for="address">Latitude :</label> <input type="text" value="" id="latitude" class="form-control" /> </div>
                                          <div class="form-group"> <label for="address">Longitude :</label> <input type="text" value="" id="longitude" class="form-control" /> </div>
                                          <div class="form-group"> <label for="address">Zoom :</label> <input type="text" value="" id="zoom" class="form-control" /> </div>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group"> <label for="img-width">Width :</label> <input type="text" value="" id="map-width" class="form-control"/> </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group"> <label for="img-height">Height :</label> <input type="text" value="" id="map-height" class="form-control"/> </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <div id="buttons" style="display:none">
                                 <div id="buttonContainer"></div>
                                 <br> 
                                 <div class="form-group"> <label> Label :  </label> <input type="text" class="form-control" id="buttonLabel"/> </div>
                                 <div class="form-group"> <label> Href :  </label> <input type="text" class="form-control" id="buttonHref"/> </div>
                                 <span class="btn-group btn-group-xs">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a> 
                                    <ul class="dropdown-menu">
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-default">Default</a></li>
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-primary">Primary</a></li>
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-success">Success</a></li>
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-info">Info</a></li>
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-warning">Warning</a></li>
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-danger">Danger</a></li>
                                       <li class="" ><a href="#" class="btnpropa" rel="btn-link">Link</a></li>
                                    </ul>
                                 </span>
                                 <span class="btn-group btn-group-xs">
                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span></a> 
                                    <ul class="dropdown-menu">
                                       <li class="" ><a href="#" class="btnpropb" rel="btn-lg">Large</a></li>
                                       <li class="" ><a href="#" class="btnpropb" rel="btn-default">Default</a></li>
                                       <li class="" ><a href="#" class="btnpropb" rel="btn-sm">Small</a></li>
                                       <li class="" ><a href="#" class="btnpropb" rel="btn-xs">Mini</a></li>
                                    </ul>
                                 </span>
                                 <span class="btn-group btn-group-xs"> <a class="btn btn-xs btn-default btnprop" href="#" rel="btn-block">Block</a> <a class="btn btn-xs btn-default btnprop" href="#" rel="active">Active</a> <a class="btn btn-xs btn-default btnprop" href="#" rel="disabled">Disabled</a> </span> <br><br> 
                                 <div class="form-group"> <label> Custom width / height / font-size / padding top :  </label> <br> <span class="btn-group"> <input type="text"  id="custombtnwidth" style="width:20%"/> <input type="text"  id="custombtnheight" style="width:20%"/> <input type="text"  id="custombtnfont" style="width:20%"/> <input type="text"  id="custombtnpaddingtop" style="width:20%"/> </span> </div>
                                 <div class="form-group"> <label> Align:  </label> <br> <span class="btn-group"> <select id="btnalign"> <option value="center">center</option> <option value="left">left</option> <option value="right">right</option> </select> </span> </div>
                                 <div class="form-group">
                                    <label>Custom background color :</label> <input type="text" class="form-control" id="colbtn" /> 
                                    <select id="colorselectorbtn">
                                       <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                       <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                       <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                       <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                       <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                       <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                       <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                       <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                       <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                       <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                       <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                       <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                       <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                       <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                       <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                       <option value="16" data-value="16" data-color="#000000">black</option>
                                       <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                       <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                       <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                       <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                       <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                       <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                       <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                    </select>
                                    <script type="text/javascript">$('#colorselectorbtn').colorselector({callback:function(value,color,title){$("#colbtn").val(color);}});</script> 
                                 </div>
                                 <div class="form-group">
                                    <label>Custom text color :</label> <input type="text" class="form-control" id="colbtncol" /> 
                                    <select id="colorselectorbtncol">
                                       <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                       <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                       <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                       <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                       <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                       <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                       <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                       <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                       <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                       <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                       <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                       <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                       <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                       <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                       <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                       <option value="16" data-value="16" data-color="#000000">black</option>
                                       <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                       <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                       <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                       <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                       <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                       <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                       <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                    </select>
                                    <script type="text/javascript">$('#colorselectorbtncol').colorselector({callback:function(value,color,title){$("#colbtncol").val(color);}});</script> 
                                 </div>
                              </div>
                              <!-- fine bottone--> 
                              <div id="code"  style="display:none"> </div>
                              <!-- fine code --> 
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group"> <label> ID :  </label> <input type="text" readonly class="form-control" id="id"/> </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group"> <label for="class"> Css class :  </label> <input type="text" name="class" id="class" class="form-control" /> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="CellSettings">
                           <div class="panel panel-body">
                              <table width="100%" cellpadding="5" cellspacing="0" style="border:1px solid #cccccc" id="tabCol">
                                 <tr>
                                    <td>&nbsp;Margin</td>
                                    <td></td>
                                    <td><input type="text" size="4" class="form-control text-center" data-ref="margin-top" /></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td bgcolor="#f2f2f2">Padding</td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-top" /></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td><input type="text" size="4" class="form-control text-center" data-ref="margin-left"></td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-left"></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-right"></td>
                                    <td><input type="text" size="4" class="form-control text-center" data-ref="margin-right"></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-bottom"></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td><input type="text" size="4"  class="form-control text-center" data-ref="margin-bottom"></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                              </table>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Background color :</label> <input type="text" class="form-control" id="colbg" /> 
                                       <select id="colorselectorbg">
                                          <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                          <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                          <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                          <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                          <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                          <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                          <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                          <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                          <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                          <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                          <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                          <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                          <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                          <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                          <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                          <option value="16" data-value="16" data-color="#000000">black</option>
                                          <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                          <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                          <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                          <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                          <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                          <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                          <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                       </select>
                                       <script type="text/javascript">$('#colorselectorbg').colorselector({callback:function(value,color,title){$("#colbg").val(color);}});</script> 
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <!-- <div class="form-group"> <label>Css class :</label> <input type="text" class="form-control" id="colcss" /> </div> --> 
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="RowSettings">
                           <div class="panel panel-body">
                              <table width="100%" cellpadding="5" cellspacing="0" style="border:1px solid #cccccc" id="tabRow">
                                 <tr>
                                    <td>&nbsp;Margin</td>
                                    <td></td>
                                    <td><input type="text" size="4" class="form-control text-center" data-ref="margin-top" /></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td bgcolor="#f2f2f2">Padding</td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-top" /></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td><input type="text" size="4" class="form-control text-center" data-ref="margin-left"></td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-left"></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-right"></td>
                                    <td><input type="text" size="4" class="form-control text-center" data-ref="margin-right"></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td bgcolor="#f2f2f2"><input type="text" size="4"  class="form-control text-center" data-ref="padding-bottom"></td>
                                    <td bgcolor="#f2f2f2"></td>
                                    <td></td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td><input type="text" size="4"  class="form-control text-center" data-ref="margin-bottom"></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                              </table>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Background color :</label> <input type="text" class="form-control" id="rowbg" /> 
                                       <select id="colorselectorrowbg">
                                          <option value="1" data-value="1" data-color="#A0522D">sienna</option>
                                          <option value="2" data-value="2" data-color="#CD5C5C">indianred</option>
                                          <option value="3" data-value="3" data-color="#FF4500">orangered</option>
                                          <option value="4" data-value="4" data-color="#008B8B">darkcyan</option>
                                          <option value="5" data-value="5" data-color="#B8860B">darkgoldenrod</option>
                                          <option value="6" data-value="6" data-color="#32CD32">limegreen</option>
                                          <option value="7" data-value="7" data-color="#FFD700">gold</option>
                                          <option value="8" data-value="8" data-color="#48D1CC">mediumturquoise</option>
                                          <option value="9" data-value="9" data-color="#87CEEB">skyblue</option>
                                          <option value="10" data-value="10" data-color="#FF69B4">hotpink</option>
                                          <option value="11" data-value="11" data-color="#87CEFA">lightskyblue</option>
                                          <option value="12" data-value="12" data-color="#6495ED">cornflowerblue</option>
                                          <option value="13" data-value="13" data-color="#DC143C">crimson</option>
                                          <option value="14" data-value="14" data-color="#FF8C00">darkorange</option>
                                          <option value="15" data-value="15" data-color="#C71585">mediumvioletred</option>
                                          <option value="16" data-value="16" data-color="#000000">black</option>
                                          <option value="17" data-value="17" data-color="#575757">grigio scuro</option>
                                          <option value="18" data-value="18" data-color="#f2f2f2">grigio chiaro</option>
                                          <option value="19" data-value="19" data-color="#efefef">marroncino</option>
                                          <option value="20" data-value="20" data-color="#e7e0d8">marrone</option>
                                          <option value="21" data-value="21" data-color="#d7d0c6">marrone scuro</option>
                                          <option value="22" data-value="22" data-color="#263459">blu scuro</option>
                                          <option value="23" data-value="23" data-color="#ffffff">bianco</option>
                                       </select>
                                       <script type="text/javascript">$('#colorselectorrowbg').colorselector({callback:function(value,color,title){$("#rowbg").val(color);}});</script> 
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group"> <label>Css class :</label> <input type="text" class="form-control" id="rowcss" /> </div>
                                 </div>
                              </div>
                              <div class="form-group"> <label>Background image :</label> <input type="text" class="form-control" id="rowbgimage" /> </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal"><i class='fa fa-close'></i>&nbsp;Close</button> <button type="button" class="btn btn-primary" id="applyChanges"><i class='fa fa-check'></i>&nbsp;Apply changes</button> </div>
               </div>
            </div>
         </div>
         <div id="download-layout">
            <div class="container"></div>
         </div>
      </div>

      <script type="text/javascript">
         /*! bootstraper app.js
 * ================

 * @Author  Antonio Reina

 * @Email   <paoloantonioreina@gmail.com>
 * @version 0.0.2
 * @license MIT <http://opensource.org/licenses/MIT>
 */
/* global path */

$.cssHooks.backgroundColor = {
    get: function (elem) {
        if (elem.currentStyle)
            var bg = elem.currentStyle["background-color"];
        else if (window.getComputedStyle)
            var bg = document.defaultView.getComputedStyle(elem,
                    null).getPropertyValue("background-color");
        if (bg.search("rgb") == -1)
            return bg;
        else {
            bg = bg.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
            function hex(x) {
                return ("0" + parseInt(x).toString(16)).slice(-2);
            }

        }
    }
}

'use strict';
//Make sure jQuery has been loaded before app.js
if (typeof jQuery === "undefined") {
    throw new Error("bootstraper requires jQuery");
}


$(function () {
    //Set up the object
    _init();
});

/* ----------------------------------
 * ----------------------------------
 * All bootstraper functions are implemented below.
 */


function _init() {

    $(window).resize(function () {
        $("body").css("min-height", $(window).height() - 90);
        $(".htmlpage").css("min-height", $(window).height() - 160)
    });



    tinymce.init({
        menubar: false,
        force_p_newlines: true,
        extended_valid_elements : "*[*]",
        valid_elements: "*[*]",
        selector: "#html5editor",
        plugins: [
            "advlist autolink lists link charmap anchor",
            "visualblocks code ",
            "insertdatetime  table contextmenu paste textcolor colorpicker"
        ],
        toolbar: "styleselect | bold italic |  forecolor backcolor |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code",
    });

    tinymce.init({
        menubar: false,
        force_br_newlines: false,
        force_p_newlines: false,
        forced_root_block: '',
        extended_valid_elements : "*[*]",
    valid_elements: "*[*]",
        selector: "#html5editorLite",
        plugins: [
        ],
        toolbar: "forecolor backcolor | alignleft aligncenter alignright alignjustify code",
    });

    $("body").css("min-height", $(window).height() - 90);
    $(".htmlpage").css("min-height", $(window).height() - 160);
    // $(".htmlpage").sortable({connectWith: ".lyrow", opacity: .35, handle: ".drag"});
    $(".htmlpage, .htmlpage .column").sortable({connectWith: ".column", opacity: .35, handle: ".drag"});
    $(".sidebar-nav .lyrow").draggable({connectToSortable: ".htmlpage", helper: "clone", handle: ".drag", drag: function (e, t) {
            t.helper.width(400)
        }, stop: function (e, t) {
            $(".htmlpage .column").sortable({opacity: .35, connectWith: ".column"})
        }});

    $(".sidebar-nav .box").draggable({connectToSortable: ".column", helper: "clone", handle: ".preview", drag: function (e, t) {
            t.helper.width(400)
        }, stop: function (e, t) {
            /* if ( t.helper.data('type')==="map"|| t.helper.data('type')==="youtube" ) {
             var iframe = t.helper.find('div.view > iframe');

             var iframeId = iframe.assignId();
             $('#'+iframeId).attr('src',iframe.data('url'));
             }
             */

        }});

    $(document).on('click', 'a.clone', function (e) {
        e.preventDefault();
        var _s = $(this);

        var _row = _s.parent().clone();
        _row.hide();
        _row.insertAfter(_s.parent());
        _row.slideDown();

    });

    $(document).on('click', 'a.settings', function (e) {
        e.preventDefault();
        var _s = $(this);

        var part_id = _s.parent().parent().assignId();

        var part = _s.parent().parent();
        var column = _s.parent().parent().parent('.column');
        var row = _s.parent().parent().parent().parent('.row');

        prepareEditor(part, row, column);
    });


    $('a.btnpropa').on('click', function () {
        var rel = $(this).attr('rel');
        $('#buttonContainer a.btn').removeClass('btn-default')
                .removeClass('btn-success')
                .removeClass('btn-info')
                .removeClass('btn-danger')
                .removeClass('btn-info')
                .removeClass('btn-primary')
                .removeClass('btn-link')
                .addClass(rel);

    });
    $('a.btnpropb').on('click', function () {
        var rel = $(this).attr('rel');
        $('#buttonContainer a.btn').removeClass('btn-lg')
                .removeClass('btn-md')
                .removeClass('btn-sm')
                .removeClass('btn-xs')
                .addClass(rel);

    });

    $('a.btnprop').on('click', function () {
        var rel = $(this).attr('rel');
        $('#buttonContainer a.btn').toggleClass(rel);

    });

    $('#preferences').on('hidden.bs.modal', function () {
        $('#youtube').hide();
        $('#map').hide();
        $('#image').hide();
        $('#text').hide();
        $('#code').hide();
        $('#buttons').hide();
        // $('.active').removeClass('active');
    });

    $("#save").click(function (e) {
        downloadLayoutSrc();
    });


    $("#clear").click(function (e) {
        e.preventDefault();
        clearDemo()
    });
    $("#devpreview").click(function () {
        $("body").removeClass("edit sourcepreview");
        $("body").addClass("devpreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });


    $("#edit").click(function () {
        $('#add').hide();
        $("body").removeClass("devpreview sourcepreview");
        $("body").removeClass("tablet mobile");
        $("body").addClass("edit");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });


    $('#gallery').click(function(){
        $('#thepref').slideUp();
        $('#mediagallery').slideDown();
    });


    $("#sourcepreview").click(function () {
        $('#pc').addClass('active');
        $('#add').show();
        $("body").removeClass("edit");
        $("body").addClass("devpreview sourcepreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });



    $('#pc').click(function () {
        $("body").removeClass("tablet mobile");
        $('#app button').removeClass('active');
        $(this).addClass('active');
    });


    $('#mobile').click(function () {
        $("body").removeClass("tablet");
        $('#app button').removeClass('active');
        $(this).addClass('active');
        $("body").addClass("mobile");
    });


    $('#tablet').click(function () {
        $("body").removeClass("mobile");
        $('#app button').removeClass('active');
        $(this).addClass('active');
        $("body").addClass("tablet");
    });

    $(".nav-header").click(function () {
        $(".sidebar-nav .boxes, .sidebar-nav .rows").hide();
        $(this).next().slideDown()
    });


    removeElm();
    gridSystemGenerator();

}

function loadRowSettings(row) {
    //RowSettings
    // paddings
    $('#tabRow input[data-ref="padding-top"]').val(row.css('padding-top'));
    $('#tabRow input[data-ref="padding-left"]').val(row.css('padding-left'));
    $('#tabRow input[data-ref="padding-right"]').val(row.css('padding-right'));
    $('#tabRow input[data-ref="padding-bottom"]').val(row.css('padding-bottom'));
    // margin
    $('#tabRow input[data-ref="margin-top"]').val(row.css('margin-top'));
    $('#tabRow input[data-ref="margin-left"]').val(row.css('margin-left'));
    $('#tabRow input[data-ref="margin-right"]').val(row.css('margin-right'));
    $('#tabRow input[data-ref="margin-bottom"]').val(row.css('margin-bottom'));
    // backgroundColor
    $('#rowbg').val(row.css('background-color'));
    // image
    $('#rowbgimage').val(row.css('background-image').replace(/^url\(['"]?/,'').replace(/['"]?\)$/,''));
    // css class
    $('#rowcss').val(row.attr('class'));
}

function saveRowSettings(row) {
    //RowSettings
    //padding
    row.css('padding-top', $('#tabRow input[data-ref="padding-top"]').val());
    row.css('padding-left', $('#tabRow input[data-ref="padding-left"]').val());
    row.css('padding-right', $('#tabRow input[data-ref="padding-right"]').val());
    row.css('padding-bottom', $('#tabRow input[data-ref="padding-bottom"]').val());
    // margin
    row.css('margin-top', $('#tabRow input[data-ref="margin-top"]').val());
    row.css('margin-left', $('#tabRow input[data-ref="margin-left"]').val());
    row.css('margin-right', $('#tabRow input[data-ref="margin-right"]').val());
    row.css('margin-bottom', $('#tabRow input[data-ref="margin-bottom"]').val());
    // backgroundColor
    row.css('background-color', $('#rowbg').val());
    // image
    if($("#rowbgimage").val()!="none")
    row.css('background-image',  'url("'+$("#rowbgimage").val()+'")');
    // css class
    row.removeClass();
    row.addClass($('#rowcss').val());
    //row.attr('css', $('#rowcss').val());
}

function loadColumnSettings(column) {
    // paddings
    $('#tabCol input[data-ref="padding-top"]').val(column.css('padding-top'));
    $('#tabCol input[data-ref="padding-left"]').val(column.css('padding-left'));
    $('#tabCol input[data-ref="padding-right"]').val(column.css('padding-right'));
    $('#tabCol input[data-ref="padding-bottom"]').val(column.css('padding-bottom'));
    // margin
    $('#tabCol input[data-ref="margin-top"]').val(column.css('margin-top'));
    $('#tabCol input[data-ref="margin-left"]').val(column.css('margin-left'));
    $('#tabCol input[data-ref="margin-right"]').val(column.css('margin-right'));
    $('#tabCol input[data-ref="margin-bottom"]').val(column.css('margin-bottom'));
    // backgroundColor
    $('#colbg').val(column.css('background-color'));
    // css class
    $('#colcss').val(column.attr('class'));
}
function saveColumnSettings(column) {
    //CellSettings
    //padding
    column.css('padding-top', $('#tabCol input[data-ref="padding-top"]').val());
    column.css('padding-left', $('#tabCol input[data-ref="padding-left"]').val());
    column.css('padding-right', $('#tabCol input[data-ref="padding-right"]').val());
    column.css('padding-bottom', $('#tabCol input[data-ref="padding-bottom"]').val());
    // margin
    column.css('margin-top', $('#tabCol input[data-ref="margin-top"]').val());
    column.css('margin-left', $('#tabCol input[data-ref="margin-left"]').val());
    column.css('margin-right', $('#tabCol input[data-ref="margin-right"]').val());
    column.css('margin-bottom', $('#tabCol input[data-ref="margin-bottom"]').val());
    // backgroundColor
    column.css('background-color', $('#colbg').val());
    // css class
    column.attr('class', $('#colcss').val());
}

function prepareEditor(part, row, column) {
    var clone = part.clone();
    var confirm = $('#applyChanges');
    $('#preferencesTitle').html(part.data('type'));

    $('.column .box').removeClass('active');
    part.addClass('active');
    confirm.unbind('click');

    var clonedPart = clone.find('div.view').html();
    var type = part.data('type');
    var panel = $('#Settings');

    loadRowSettings(row);
    loadColumnSettings(column);

    var o = part.find('div.view').children();
    var oid = o.assignId();
    $('#id').val(oid);
    $('#class').val(o.parent().parent().css('class'));
    $('#class').parent().show();
    $('#id').parent().show();
    switch (type) {

        /*
        case 'header':
            var editor = tinyMCE.get('html5editor');
            editor.setContent(clonedPart);
            $('#text').show();

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                o.html(editor.getContent());
                o.attr('id', $('#id').val());
                o.attr('class', $('#class').val());
            });
            break;
        */
        case 'paragraph':

            var editor = tinyMCE.get('html5editor');
            editor.setContent(clonedPart);
            $('#text').show();

            var o = part.find('div.view');
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                o.html(editor.getContent());
                o.attr('id', $('#id').val());
                //o.attr('class', $('#class').val());
            });

            break;

        case 'image':
            var img = part.find('img');

            $('#imgContent').html(img.clone().attr('width', '200'));
            $('#img-url').val(img.attr('src'));
            $('#img-width').val(img.innerWidth());
            $('#img-height').val(img.innerHeight());
            $('#img-title').val(img.attr('title'));
            $('#class').val(img.attr('class'));
            $('#img-rel').val(img.attr('rel'));
            $('#img-title').val(img.attr('title'));
            // $('#img-clickurl').val(img.attr('onClick'));
            $('#image').show();

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                img.attr('title', $('#img-title').val());
                img.attr('src', $('#img-url').val());
                img.css('width', $('#img-width').val());
                img.css('height', $('#img-height').val());
                img.attr('class', $('#class').val());
                img.attr('rel', $('#img-rel').val());
                //    img.attr('onClick', $('#img-clickurl').val());
                o.attr('id', $('#id').val());
                o.removeClass();
                o.addClass($('#class').val());
            });

            break;
        case 'youtube' :
            var iframe = part.find('iframe');
            $('#youtube-video').html(iframe.clone().css('width', '100%'));
            $('#video-url').val(iframe.attr('src'));
            $('#video-width').val(iframe.innerWidth());
            $('#video-height').val(iframe.innerHeight());
            $('#youtube').show();

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                o.attr('src', $('#video-url').val());
                o.css('width', $('#video-width').val());
                o.css('height', $('#video-height').val());
                o.attr('id', $('#id').val());
                o.attr('class', $('#class').val());
            });
            break;
        case 'map' :
            var iframe = part.find('iframe');
            var c = iframe.clone();
            $('#map-content').html(c.attr('width', '100%'));
            $('#address');
            $('#map').show();
            $('#map-width').val(iframe.innerWidth());
            $('#map-height').val(iframe.innerHeight());
            var url = iframe.attr('src');
            var latlon = gup('q', url).split(',');
            var z = gup('z', url);

            $('#latitude').val(latlon[0]);
            $('#longitude').val(latlon[1]);
            $('#zoom').val(z);

            //http://maps.google.com/maps?q=12.927923,77.627108&z=15&output=embed
            $('#latitude, #longitude, #zoom').change(function () {
                c.attr('src', 'http://maps.google.com/maps?q=' + $('#latitude').val() + ',' + $('#longitude').val() + '&z=' + $('#zoom').val() + '&output=embed');
            });

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                iframe.css('width', $('#map-width').val());
                iframe.css('height', $('#map-height').val());
                iframe.attr('src', 'http://maps.google.com/maps?q=' + $('#latitude').val() + ',' + $('#longitude').val() + '&z=' + $('#zoom').val() + '&output=embed');
                o.attr('id', $('#id').val());
                o.attr('class', $('#class').val());
            });


            break;
        case 'code':
            $('#class').parent().hide();
            $('#id').parent().hide();


            var txt = $('#code');
            $('#codeeditor').remove();
            txt.append('<textarea id="codeeditor" style="min-height:150px;width:100%; display:block;">'+style_html(part.find('div.view').html())+'</textarea>');
            txt.show();


            /*

            var code = part.find('div.code');
            var txt = $('#code');
            $('#codeeditor').remove();
            txt.append('<textarea id="codeeditor" style="min-height:150px;width:100%; display:block;">'+style_html(code.data('code'))+'</textarea>');
            txt.show();

            txt.append('<div id="codeeditor" style="min-height:150px;width:100%; display:block;">' + code.data('code') + '</div>');
            var editor = ace.edit("codeeditor");
            editor.setTheme("ace/theme/monokai");
            editor.getSession().setMode("ace/mode/html");
            txt.show();
            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                code.data('code', editor.getValue());
                code.html(editor.getValue());
            });
            */



            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                //code.data('code', $('#codeeditor').val());
                part.find('div.view').html($('#codeeditor').val());

            });
            break;
        case 'button' :

            var btn = part.find('.view > a.btn');
            var btn_id = btn.assignId();
            var clone = btn.clone();
            $('#buttonContainer').html(clone);
            $('#buttonId').val(btn_id);
            $('#buttonLabel').val(btn.text());
            $('#buttonHref').val(btn.attr('href'));
            $('#buttons').show();

            confirm.bind('click', function (e) {
                e.preventDefault();
                saveRowSettings(row);
                saveColumnSettings(column);
                btn.text($('#buttonLabel').val());
                btn.attr('href', $('#buttonHref').val());
                btn.css('background', $('#colbtn').val());
                btn.css('width', $('#custombtnwidth').val());
                btn.css('height', $('#custombtnheight').val());
                btn.css('font-size', $('#custombtnfont').val());
                btn.css('padding-top', $('#custombtnpaddingtop').val());
                btn.css('color', $('#colbtncol').val());
                //btn.css('align', $('#btnalign').val());

                o.attr('id', $('#id').val());
                btn.attr('class', $('#buttonContainer > a.btn').attr('class'));
                o.attr('class', $('#class').val());
            });


            break;
    }
    $('#preferences').modal('show').draggable();
}

$(document).on('focusin', function(e) {
    if ($(event.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});



function handleSaveLayout() {
    var e = $(".htmlpage").html();
    if (e != window.htmlpageHtml) {
        saveLayout();
        window.htmlpageHtml = e
    }
}

function gridSystemGenerator() {
    $(".lyrow .preview input").bind("keyup", function () {
        var e = 0;
        var t = "";
        var n = false;
        var r = $(this).val().split(" ", 12);
        $.each(r, function (r, i) {
            if (!n) {
                if (parseInt(i) <= 0)
                    n = true;
                e = e + parseInt(i);
                t += '<div class="col-md-' + i + ' column"></div>'
            }
        });
        if (e == 12 && !n) {
            $(this).parent().next().children().html(t);
            $(this).parent().find('.drag').show()
        } else {
            $(this).parent().find('.drag').hide()
        }
    })
}
function removeElm() {
    $(".htmlpage").delegate(".remove", "click", function (e) {
        var b = $(this).parent().css('border');
        $(this).parent().css('border', '2px solid red');

        if (confirm("Are you sure you want to remove this ?")) {
            e.preventDefault();
            $(this).parent().remove();

            if (!$(".htmlpage .lyrow").length > 0) {
                clearDemo();
            }
        } else {
            $(this).parent().css('border', b);
        }
    })
}
function clearDemo() {
    $(".htmlpage").empty()
}
function removeMenuClasses() {
    $("#menu-bootstraper li button").removeClass("active")
}
function changeStructure(e, t) {
    $("#download-layout ." + e).removeClass(e).addClass(t)
}
function cleanHtml(e) {
    $(e).parent().append($(e).children().html());
}

function cleanRow(row) {

    row.children('.remove , .drag, .preview').remove();
    row.find('div.ui-sortable').removeClass('ui-sortable');

    row.children('.view').find('br').remove();

    row.children('.view').children('.row').children('.column').each(function () {
        // se ci dovessero essere righe nella colonna allora :
        var col = $(this);

        col.removeClass('column');
        col.children('.lyrow').each(function () {
            cleanRow($(this));
        });
        col.children('.box-element').each(function () {
            var element = $(this);
            element.children('.remove , .drag, .configuration, .preview').remove();
            element.parent().append(element.children('.view').html());
            element.remove();
        });
    });
    row.parent().append(row.children('.view').html());
    row.remove();
}

function downloadLayoutSrc() {
    //  var e = "";
    $("#download-layout").children().html($(".htmlpage").html());

    // var t = $("#download-layout").children();
    $("#download-layout").children('.container').each(function (i) {
        var container = $(this);
        container.children('.lyrow').each(function (i) {
            var row = $(this);
            cleanRow(row);
        });
    });
    $('textarea#model').val($(".htmlpage").html());
    $('textarea#src').val(style_html($("#download-layout").html()));
    $('#download').modal('show');

}

$('#srcSave').click(function () {
    ///   $.post(path + '/save.php', {html: style_html($("#download-layout").html())}, function (data) {       }, 'html');
});


function getIndent(level) {
    var result = '',
            i = level * 4;
    if (level < 0) {
        throw "Level is below 0";
    }
    while (i--) {
        result += ' ';
    }
    return result;
}

function style_html(html) {
    html = html.trim();
    var result = '',
            indentLevel = 0,
            tokens = html.split(/</);
    for (var i = 0, l = tokens.length; i < l; i++) {
        var parts = tokens[i].split(/>/);
        if (parts.length === 2) {
            if (tokens[i][0] === '/') {
                indentLevel--;
            }
            result += getIndent(indentLevel);
            if (tokens[i][0] !== '/') {
                indentLevel++;
            }

            if (i > 0) {
                result += '<';
            }

            result += parts[0].trim() + ">\n";
            if (parts[1].trim() !== '') {
                result += getIndent(indentLevel) + parts[1].trim().replace(/\s+/g, ' ') + "\n";
            }

            if (parts[0].match(/^(img|hr|br)/)) {
                indentLevel--;
            }
        } else {
            result += getIndent(indentLevel) + parts[0] + "\n";
        }
    }
    return result;
}

function s4() {
    return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
}

function gup(name, url) {
    if (!url)
        url = location.href;
    name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
    var regexS = "[\\?&]" + name + "=([^&#]*)";
    var regex = new RegExp(regexS);
    var results = regex.exec(url);
    return results == null ? null : results[1];
}


(function ($) {

    $.fn.assignId = function () {
        var _self = $(this);
        var id = _self.attr('id');
        if (typeof id === typeof undefined || id === false) {

            id = s4() + '-' + s4() + '-' + s4() + '-' + s4();
            _self.attr('id', id);

        }
        return id;
    };

})(jQuery);

      </script>
      <script type="text/javascript">
         /*
 * A colorselector for Twitter Bootstrap which lets you select a color from a predefined set of colors only.
 * https://github.com/flaute/bootstrap-colorselector
 *
 * Copyright (C) 2014 Flaute
 *
 * Licensed under the MIT license
 */

(function($) {
  "use strict";

  var ColorSelector = function(select, options) {
    this.options = options;
    this.$select = $(select);
    this._init();
  };

  ColorSelector.prototype = {

    constructor : ColorSelector,

    _init : function() {

      var callback = this.options.callback;

      var selectValue = this.$select.val();
      var selectColor = this.$select.find("option:selected").data("color");

      var $markupUl = $("<ul>").addClass("dropdown-menu").addClass("dropdown-caret");
      var $markupDiv = $("<div>").addClass("dropdown").addClass("dropdown-colorselector");
      var $markupSpan = $("<span>").addClass("btn-colorselector").css("background-color", selectColor);
      var $markupA = $("<a>").attr("data-toggle", "dropdown").addClass("dropdown-toggle").attr("href", "#").append($markupSpan);

      // create an li-tag for every option of the select
      $("option", this.$select).each(function() {

        var option = $(this);
        var value = option.attr("value");
        var color = option.data("color");
        var title = option.text();

        // create a-tag
        var $markupA = $("<a>").addClass("color-btn");
        if (option.prop("selected") === true || selectValue === color) {
          $markupA.addClass("selected");
        }
        $markupA.css("background-color", color);
        $markupA.attr("href", "#").attr("data-color", color).attr("data-value", value).attr("title", title);

        // create li-tag
        $markupUl.append($("<li>").append($markupA));
      });

      // append the colorselector
      $markupDiv.append($markupA);
      // append the colorselector-dropdown
      $markupDiv.append($markupUl);

      // hide the select
      this.$select.hide();
      
      // insert the colorselector
      this.$selector = $($markupDiv).insertAfter(this.$select);

      // register change handler
      this.$select.on("change", function() {

        var value = $(this).val();
        var color = $(this).find("option[value='" + value + "']").data("color");
        var title = $(this).find("option[value='" + value + "']").text();

        // remove old and set new selected color
        $(this).next().find("ul").find("li").find(".selected").removeClass("selected");
        $(this).next().find("ul").find("li").find("a[data-color='" + color + "']").addClass("selected");

        $(this).next().find(".btn-colorselector").css("background-color", color);
        
        callback(value, color, title);
      });

      // register click handler
      $markupUl.on('click.colorselector', $.proxy(this._clickColor, this));
    },

    _clickColor : function(e) {

      var a = $(e.target);

      if (!a.is(".color-btn")) {
        return false;
      }

      this.$select.val(a.data("value")).change();

      e.preventDefault();
      return true;
    },

    setColor : function(color) {
      // find value for color
      var value = $(this.$selector).find("li").find("a[data-color='" + color + "']").data("value");
      this.setValue(value);
    },

    setValue : function(value) {
      this.$select.val(value).change();
    },

  };

  $.fn.colorselector = function(option) {
    var args = Array.apply(null, arguments);
    args.shift();

    return this.each(function() {

      var $this = $(this), data = $this.data("colorselector"), options = $.extend({}, $.fn.colorselector.defaults, $this.data(), typeof option == "object" && option);

      if (!data) {
        $this.data("colorselector", (data = new ColorSelector(this, options)));
      }
      if (typeof option == "string") {
        data[option].apply(data, args);
      }
    });
  };

  $.fn.colorselector.defaults = {
    callback : function(value, color, title) {
    },
    colorsPerRow : 8
  };

  $.fn.colorselector.Constructor = ColorSelector;

})(jQuery, window, document);

      </script>
   </body>
</html>

