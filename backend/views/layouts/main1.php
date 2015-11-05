<?php

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Web Application | todo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>
<body>
  <section class="vbox">
    <header class="header bg-black navbar navbar-inverse pull-in">
      <div class="navbar-header nav-bar aside dk">
        <a class="btn btn-link visible-xs" data-toggle="class:show" data-target=".nav-primary">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="nav-brand" data-toggle="fullscreen"><img src="images/logo.png"></a>
        <a class="btn btn-link visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-comment-o"></i>
        </a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flask  text-white"></i>
              <span class="text-white">UI kit</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">                
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="icons.html">
                  <b class="badge pull-right">302</b>Icons
                </a>
              </li>
              <li>
                <a href="grid.html">Grid</a>
              </li>
              <li>
                <a href="widgets.html">
                  <b class="badge bg-primary pull-right">8</b>Widgets
                </a>
              </li>
              <li>
                <a href="components.html">
                  <b class="badge pull-right">18</b>Components
                </a>
              </li>
              <li>
                <a href="list.html">List groups</a>
              </li>
              <li>
                <a href="table.html">Table</a>
              </li>
              <li>
                <a href="form.html">Form</a>
              </li>
              <li>
                <a href="chart.html">Chart</a>
              </li>
              <li>
                <a href="calendar.html">Fullcalendar</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-file-text text-white"></i>
              <span class="text-white">Pages</span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">                
              <li>
                <a href="dashboard.html">Dashboard</a>                    
              </li>
              <li>
                <a href="dashboard-1.html">Dashboard one</a>              
              </li>
              <li>
                <a href="gallery.html">Gallery</a>              
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="blog.html">Blog</a>              
              </li>
              <li>
                <a href="invoice.html">Invoice</a>              
              </li>                  
              <li>
                <a href="signin.html">Signin page</a>
              </li>
              <li>
                <a href="signup.html">Signup page</a>
              </li>
              <li>
                <a href="404.html">404 page</a>
              </li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left m-t-sm" role="search">
          <div class="form-group">
            <div class="input-group input-s">
              <input type="text" class="form-control input-sm no-border dk text-white" placeholder="Search">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm btn-primary btn-icon"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
              <i class="fa fa-bell-o text-white"></i>
              <span class="badge up bg-danger m-l-n-sm">2</span>
            </a>
            <section class="dropdown-menu animated fadeInUp input-s-lg">
              <section class="panel bg-white">
                <header class="panel-heading">
                  <strong>You have <span class="count-n">2</span> notifications</strong>
                </header>
                <div class="list-group">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="images/avatar.jpg" alt="John said" class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">28 Aug 13</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">27 Aug 13</small>
                    </span>
                  </a>
                </div>
                <footer class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#">See all the notifications</a>
                </footer>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle aside-sm dker" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-left m-t-n-xs m-r-xs">
                <img src="images/avatar.jpg">
              </span>
              John.Smith <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInLeft">
              <li>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  Notifications
                </a>
              </li>
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li>
                <a href="signin.html">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>
    <section>
      <section class="hbox stretch">
        <aside class="aside bg-dark dk" id="nav">
          <section class="vbox">
            <section class="scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px">
                <nav class="nav-primary hidden-xs" data-ride="collapse">
                  <ul class="nav">
                    <li>
                      <a href="index.html">
                        <i class="fa fa-eye"></i>
                        <span>Discover</span>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-toggle ">
                        <span class="pull-right auto">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <i class="fa fa-flask"></i>
                        <span>UI kit</span>
                      </a>
                      <ul class="nav none dker">                
                        <li>
                          <a href="buttons.html">Buttons</a>
                        </li>
                        <li>
                          <a href="icons.html">
                            <b class="badge pull-right">302</b>Icons
                          </a>
                        </li>
                        <li>
                          <a href="grid.html">Grid</a>
                        </li>
                        <li>
                          <a href="widgets.html">
                            <b class="badge bg-primary pull-right">8</b>Widgets
                          </a>
                        </li>
                        <li>
                          <a href="components.html">
                            <b class="badge pull-right">18</b>Components
                          </a>
                        </li>
                        <li>
                          <a href="list.html">List groups</a>
                        </li>
                        <li>
                          <a href="table.html">Table</a>
                        </li>
                        <li>
                          <a href="form.html">Form</a>
                        </li>
                        <li>
                          <a href="chart.html">Chart</a>
                        </li>
                        <li>
                          <a href="calendar.html">Fullcalendar</a>
                        </li>
                        <li>
                          <a href="portlet.html">Portlet</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="dropdown-toggle">
                        <span class="pull-right auto">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <i class="fa fa-file-text"></i>
                        <span>Pages</span>
                      </a>
                      <ul class="nav none dker">                
                        <li>
                          <a href="dashboard.html">Dashboard</a>                    
                        </li>
                        <li>
                          <a href="dashboard-1.html">Dashboard one</a>              
                        </li>
                        <li>
                          <a href="dashboard-2.html">Dashboard layout</a>
                        </li>
                        <li>
                          <a href="analysis.html">Analysis</a>
                        </li>
                        <li>
                          <a href="master.html">Master</a>
                        </li>
                        <li>
                          <a href="maps.html">Maps</a>
                        </li>
                        <li>
                          <a href="gallery.html">Gallery</a>              
                        </li>
                        <li>
                          <a href="profile.html">Profile</a>
                        </li>
                        <li>
                          <a href="blog.html">Blog</a>              
                        </li>
                        <li>
                          <a href="invoice.html">Invoice</a>              
                        </li>                  
                        <li>
                          <a href="signin.html">Signin page</a>
                        </li>
                        <li>
                          <a href="signup.html">Signup page</a>
                        </li>
                        <li>
                          <a href="404.html">404 page</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="mail.html">
                        <b class="badge bg-primary pull-right">3</b>
                        <i class="fa fa-envelope-o"></i>
                        <span>Mail</span>
                      </a>
                    </li>
                    <li>
                      <a href="tasks.html">
                        <i class="fa fa-tasks"></i>
                        <span>Tasks</span>
                      </a>
                    </li>
                    <li>
                      <a href="notes.html">
                        <i class="fa fa-pencil"></i>
                        <span>Notes</span>
                      </a>
                    </li>
                    <li>
                      <a href="timeline.html">
                        <i class="fa fa-clock-o"></i>
                        <span>Timeline</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </section>
          </section>
        </aside>
        <section>
          <div class="wrapper">
            <p class="h4">
            This dashboard layout start with a vbox.
            </p>
            <p>You can use the .hbox and .vbox to build the complicated layouts.</p>
          </div>
        </section>
        <aside class="bg-light lter b-l aside-sm">
          <div class="wrapper">aside content</div>
        </aside>
      </section>
    </section>
    <footer class="footer bg-dark">
      <p>This is a footer</p>
    </footer>
  </section>
</body>
</html>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
