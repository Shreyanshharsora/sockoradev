<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{margin-top:20px;
    background:#eee;
}

.file-box {
  float: left;
  width: 220px;
}
.file-manager h5 {
  text-transform: uppercase;
}
.file-manager {
  list-style: none outside none;
  margin: 0;
  padding: 0;
}
.folder-list li a {
  color: #666666;
  display: block;
  padding: 5px 0;
}
.folder-list li {
  border-bottom: 1px solid #e7eaec;
  display: block;
}
.folder-list li i {
  margin-right: 8px;
  color: #3d4d5d;
}
.category-list li a {
  color: #666666;
  display: block;
  padding: 5px 0;
}
.category-list li {
  display: block;
}
.category-list li i {
  margin-right: 8px;
  color: #3d4d5d;
}
.category-list li a .text-navy {
  color: #1ab394;
}
.category-list li a .text-primary {
  color: #1c84c6;
}
.category-list li a .text-info {
  color: #23c6c8;
}
.category-list li a .text-danger {
  color: #EF5352;
}
.category-list li a .text-warning {
  color: #F8AC59;
}
.file-manager h5.tag-title {
  margin-top: 20px;
}
.tag-list li {
  float: left;
}
.tag-list li a {
  font-size: 10px;
  background-color: #f3f3f4;
  padding: 5px 12px;
  color: inherit;
  border-radius: 2px;
  border: 1px solid #e7eaec;
  margin-right: 5px;
  margin-top: 5px;
  display: block;
}
.file {
  border: 1px solid #e7eaec;
  padding: 0;
  background-color: #ffffff;
  position: relative;
  margin-bottom: 20px;
  margin-right: 20px;
}
.file-manager .hr-line-dashed {
  margin: 15px 0;
}
.file .icon,
.file .image {
  height: 100px;
  overflow: hidden;
}
.file .icon {
  padding: 15px 10px;
  text-align: center;
}
.file-control {
  color: inherit;
  font-size: 11px;
  margin-right: 10px;
}
.file-control.active {
  text-decoration: underline;
}
.file .icon i {
  font-size: 70px;
  color: #dadada;
}
.file .file-name {
  padding: 10px;
  background-color: #f8f8f8;
  border-top: 1px solid #e7eaec;
}
.file-name small {
  color: #676a6c;
}
ul.tag-list li {
  list-style: none;
}
.corner {
  position: absolute;
  display: inline-block;
  width: 0;
  height: 0;
  line-height: 0;
  border: 0.6em solid transparent;
  border-right: 0.6em solid #f1f1f1;
  border-bottom: 0.6em solid #f1f1f1;
  right: 0em;
  bottom: 0em;
}
a.compose-mail {
  padding: 8px 10px;
}
.mail-search {
  max-width: 300px;
}
.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox.collapsed .fa.fa-chevron-up:before {
  content: "\f078";
}
.ibox.collapsed .fa.fa-chevron-down:before {
  content: "\f077";
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}
a:hover{
text-decoration:none;    
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-md-3">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class="file-manager">
                    <h5>Show:</h5>
                    <a href="#" class="file-control active">Ale</a>
                    <a href="#" class="file-control">Documents</a>
                    <a href="#" class="file-control">Audio</a>
                    <a href="#" class="file-control">Images</a>
                    <div class="hr-line-dashed"></div>
                    <h5>Folders</h5>
                    <ul class="folder-list" style="padding: 0">
                        <li><a href=""><i class="fa fa-folder"></i> Files</a></li>
                        <li><a href=""><i class="fa fa-folder"></i> Pictures</a></li>
                        <li><a href=""><i class="fa fa-folder"></i> Web pages</a></li>
                        <li><a href=""><i class="fa fa-folder"></i> Illustrations</a></li>
                        <li><a href=""><i class="fa fa-folder"></i> Films</a></li>
                        <li><a href=""><i class="fa fa-folder"></i> Books</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Jan 11, 2014</small>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/1">
                            </div>
                            <div class="file-name">
                                Italy street.jpg
                                <br>
                                <small>Added: Jan 6, 2014</small>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/2">
                            </div>
                            <div class="file-name">
                                My feel.png
                                <br>
                                <small>Added: Jan 7, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-music"></i>
                            </div>
                            <div class="file-name">
                                Michal Jackson.mp3
                                <br>
                                <small>Added: Jan 22, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/3">
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Fab 11, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="img-responsive fa fa-film"></i>
                            </div>
                            <div class="file-name">
                                Monica's birthday.mpg4
                                <br>
                                <small>Added: Fab 18, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <a href="#">
                        <div class="file">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="file-name">
                                Annual report 2014.xls
                                <br>
                                <small>Added: Fab 22, 2014</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Jan 11, 2014</small>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/4">
                            </div>
                            <div class="file-name">
                                Italy street.jpg
                                <br>
                                <small>Added: Jan 6, 2014</small>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/5">
                            </div>
                            <div class="file-name">
                                My feel.png
                                <br>
                                <small>Added: Jan 7, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-music"></i>
                            </div>
                            <div class="file-name">
                                Michal Jackson.mp3
                                <br>
                                <small>Added: Jan 22, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/6">
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Fab 11, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="img-responsive fa fa-film"></i>
                            </div>
                            <div class="file-name">
                                Monica's birthday.mpg4
                                <br>
                                <small>Added: Fab 18, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <a href="#">
                        <div class="file">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="file-name">
                                Annual report 2014.xls
                                <br>
                                <small>Added: Fab 22, 2014</small>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Jan 11, 2014</small>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/1">
                            </div>
                            <div class="file-name">
                                Italy street.jpg
                                <br>
                                <small>Added: Jan 6, 2014</small>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/2">
                            </div>
                            <div class="file-name">
                                My feel.png
                                <br>
                                <small>Added: Jan 7, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-music"></i>
                            </div>
                            <div class="file-name">
                                Michal Jackson.mp3
                                <br>
                                <small>Added: Jan 22, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="image">
                                <img alt="image" class="img-responsive" src="https://lorempixel.com/400/300/nature/3">
                            </div>
                            <div class="file-name">
                                Document_2014.doc
                                <br>
                                <small>Added: Fab 11, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <div class="file">
                        <a href="#">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="img-responsive fa fa-film"></i>
                            </div>
                            <div class="file-name">
                                Monica's birthday.mpg4
                                <br>
                                <small>Added: Fab 18, 2014</small>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="file-box">
                    <a href="#">
                        <div class="file">
                            <span class="corner"></span>

                            <div class="icon">
                                <i class="fa fa-bar-chart-o"></i>
                            </div>
                            <div class="file-name">
                                Annual report 2014.xls
                                <br>
                                <small>Added: Fab 22, 2014</small>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        </div>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body></html>