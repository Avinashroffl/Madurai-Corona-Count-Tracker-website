<!DOCTYPE html>
<html>
  <head>
    <meta name="google-site-verification" content="9lvNeQdWNm6q6cNXX7dE2HkaBua5jgL5D266ysYNojE" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CORONA TRACKER MADURAI</title>
    <meta name="description" content="CORONA MADURAI DISTRICT COUNT TRACKER WEBSITE BY AVINASH R, TCE MADURAI">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow" />
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
    <meta name="google-site-verification" content="9lvNeQdWNm6q6cNXX7dE2HkaBua5jgL5D266ysYNojE" />
    <meta name="robots" content="index, follow" />
  </head>

<!--ini_set('memory_limit', '102400M'); -->
<?php
// error_reporting(0);
// ini_set('memory_limit', '102400M');

// if (!file_get_contents("https://data.covid19india.org/state_district_wise.json")) {
          
//     die("FAILED TO GET CONTENT TRY AGAIN");
     
// } else{
    
// $covidcases=file_get_contents("https://data.covid19india.org/state_district_wise.json");

//         $position = strpos($covidcases,'Madurai');
//         // $cases = substr($covidcases,$position+32,97);
//         $cases = substr($covidcases,$position+40,97);

//         $Arraycases = explode(',', $cases);

//         for($i=0; $i < count($Arraycases); $i++){
        
//             $key_value = explode(':', $Arraycases[$i]);
//             $end_array[$key_value [0]] = $key_value [1];

//         }

//         $madurai = array_values($end_array);
        
//         // $arrlength = count($madurai);
//         // for($x = 0; $x < $arrlength; $x++) {
//         //  echo $madurai[$x];
//         //  echo "<br>";
//         // }
        
//         $Activecases = (int)$madurai[0];
//         $Deathcases = (int)$madurai[3];
//         $Totalcases = (int)$madurai[1];
//         $Recoveredcases =(int)($Totalcases - ($Deathcases + $Activecases));
       

//         $ActivePercent = round(($Activecases / $Totalcases)*100,2);
//         $RecoveryPercent = round(($Recoveredcases / $Totalcases)*100,2);
//         $deathPercent = round(($Deathcases / $Totalcases)*100,2);

//         $RecoveryPercent1=$RecoveryPercent*10;
//         $ActivePercent1=$ActivePercent*10;
//         $deathPercent1=$deathPercent;
        
//         if (!file_get_contents("https://data.covid19india.org/data.json")) {
          
//             die("FAILED TO GET CONTENT TRY AGAIN");
     
//         } else {
        
//         $MaduraiDailyCases=file_get_contents("http://data.covid19india.org/v4/data-all.json");
//         $MduArray=json_decode($MaduraiDailyCases,true);

//         $date = date("Y-m-d");
//         $PreviousdayWithYear=date('Y-m-d',strtotime("-1 days"));
//         $PreviousdayWithYear2=date('Y-m-d',strtotime("-2 days"));
       
//     //   if (array_key_exists ($date,$MduArray)){
         
//     //             if(isset($MduArray[$date]['TN']['districts']['Madurai']['delta'])){
                    
                   
//     //                 $MduArray2 = $MduArray["$date"]['TN']['districts']['Madurai']['delta'];
//     //                 $TodayRecovered= $MduArray2['recovered']; 
//     //                 $TodayConfirmed = $MduArray2['confirmed'];
//     //                 if (isset($MduArray2['deceased']))
//     //                     if (($MduArray2['deceased'])<0)
//     //                         $TodayDeath=0;
//     //                     else
//     //                         $TodayDeath= $MduArray2['deceased'];
//     //                  else
//     //                      $TodayDeath=0;
                        
                    
//     //             }else{
                    
//     //                 $MduArray2 = $MduArray[$PreviousdayWithYear]['TN']['districts']['Madurai']['delta'];    
//     //                 $TodayConfirmed = $MduArray2['confirmed'];
//     //                 $TodayRecovered= $MduArray2['recovered'];
//     //                 if (isset($MduArray2['deceased']))
//     //                     if (($MduArray2['deceased'])<0)
//     //                         $TodayDeath=0;
//     //                     else
//     //                         $TodayDeath= $MduArray2['deceased'];
//     //                  else
//     //                      $TodayDeath=0;
            
//     //               }
         
//     //   }else{
                    
//     //                 $MduArray2 = $MduArray[$PreviousdayWithYear]['TN']['districts']['Madurai']['delta'];    
//     //                 $TodayConfirmed = $MduArray2['confirmed'];
//     //                 $TodayRecovered= $MduArray2['recovered'];
//     //                 if (isset($MduArray2['deceased']))
//     //                     if (($MduArray2['deceased'])<0)
//     //                         $TodayDeath=0;
//     //                     else
//     //                         $TodayDeath= $MduArray2['deceased'];
//     //                 else
//     //                      $TodayDeath=0;
//     //                 #$TodayDeath = isset($MduArray2['deceased']) ? $MduArray2['deceased'] : 0;
//     //           }
// if (is_array($MduArray) && array_key_exists ($date,$MduArray)){
         
//                 if(isset($MduArray[$date]['TN']['districts']['Madurai']['delta'])){
                    
//                     $MduArray2 = $MduArray["$date"]['TN']['districts']['Madurai']['delta'];
//                     $TodayConfirmed = $MduArray2['confirmed'];
//                     $TodayDeath = $MduArray2['deceased'];
//                     $TodayRecovered= $MduArray2['recovered']; 
                   
//                 }else{
                    
//                     $MduArray2 = $MduArray[$PreviousdayWithYear]['TN']['districts']['Madurai']['delta'];    
//                     $TodayConfirmed = $MduArray2['confirmed'];
//                     $TodayDeath = isset($MduArray2['deceased']) ? $MduArray2['deceased'] : 0;
//                     $TodayRecovered= $MduArray2['recovered'];
            
//                   }
         
//       }elseif(is_array($MduArray) && array_key_exists ($PreviousdayWithYear,$MduArray)){
//                     $MduArray2 = $MduArray[$PreviousdayWithYear]['TN']['districts']['Madurai']['delta'];    
//                     $TodayConfirmed = $MduArray2['confirmed'];
//                     $TodayDeath = isset($MduArray2['deceased']) ? $MduArray2['deceased'] : 0;
//                     $TodayRecovered= $MduArray2['recovered'];
//               }
//         elseif(is_array($MduArray) && array_key_exists ($PreviousdayWithYear2,$MduArray)){
//                     $MduArray2 = $MduArray[$PreviousdayWithYear2]['TN']['districts']['Madurai']['delta'];    
//                     $TodayConfirmed = $MduArray2['confirmed'];
//                     $TodayDeath = isset($MduArray2['deceased']) ? $MduArray2['deceased'] : 0;
//                     $TodayRecovered= $MduArray2['recovered'];
//         }
//         else{
//             $TodayConfirmed ="NA";
//             $TodayDeath = "NA";
//             $TodayRecovered="NA";
//         }

// }}
?>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand -->
                  <div class="brand-text d-none d-lg-inline-block"><span>Coronatracker </span><strong>Madurai</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>coronatracker</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><a href="http://avinashroffl.github.io/"><img src="img/avatar-1.jpeg" alt="..." class="img-fluid rounded-circle"></a></div>
            <div class="title">
              <h1 class="h4">Avinash R</h1>
              <p>Web Developer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Contents</span>
          <ul class="list-unstyled">
            <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Data </a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Corona risk checker</a></li>
          </ul><span class="heading">Contact info</span>
          <ul class="list-unstyled">
            <li> <a href="dev.html"> <i class="icon-mail"></i>Developer info </a></li>
			<li> <a href="tweets.html"> <i class="icon-mail"></i>Tweets from TN Govt. </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Madurai District Corona Data</h2>
            </div>
          </header>
       
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>Total<br>Cases</span>
                    </div>
                    <div class="number"><h4><strong>89799</strong></h4></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Total<br>Deceased</span>
                    </div>
                    <div class="number"><h4><strong>1215</strong></h4></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Total<br>Recovered</span>
                    </div>
                    <div class="number"><h4><strong>84801</strong></h4></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Total<br>Active </span>
                    </div>
                    <div class="number"><h4><strong>3783</strong></h4></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>0</strong><br><small>Today Dead</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong>577</strong><br><small>Today Recovered</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>291</strong><br><small>New cases</small></div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
                <div class="chart col-lg-3 col-12">
                  <!-- Bar Chart   -->
                  <div class="bar-chart has-shadow bg-white">
                    <div class="title" style="text-align:center"><strong class="text-violet">1.3 %</strong><br><small>Death rate</small></div>
                    
                  </div>
                  <!-- Numbers-->
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                    <div class="text"><strong>94.4 %</strong><br><small>Recovery Rate</small></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
   
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Avinash.R</p>
                </div>
                <div class="col-sm-6 text-right">
                 
                </div>
              </div>
            </div>
          </footer>
          
        <!-- Site operational status-->
        <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4" >After 16 months of daily updates(Jul-2020 to Oct-2021) <br /><br /> Our data source <a href="https://covid19india.org" target="_blank">covid19india.org</a> stopped it's operations on 31st October 2021.<br /><br />And information in this site are as on 2-2-22 </h3>
                    </div>
					<br>
                    </div>
                  </div>
                </div>
              </div>
          </section>
          
          
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
