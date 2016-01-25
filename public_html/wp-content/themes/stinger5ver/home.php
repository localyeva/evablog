<?php get_header(); ?>
<div class="smanone">
<style type="text/css">
  .hide{
    display: none;
  }

  .cb {
    clear:left;
    margin-bottom: 0px !important;
  }
  
  .main-news-w{
    max-width: 978px;
    background-color: #222;    
  }

  .main-news-w .left{
    width:67.5%;
    float:left;   
    margin-bottom: 0px !important;     
  }

  .main-news-w .left img{      
    margin-bottom: 0px !important;
    /*max-height: 298px;*/
    max-height: 340px;
  }

  .main-news-w .right{
    width:32.5%;
    float: left;
  }

  .main-news-w .left .bg{
    height: 100%;
  }

  .main-news-w .row{
    margin-left: 0px;
    margin-right: 0px;
  }

  .main-news-w .desc{    
    padding-left: 10px;
    max-height: 286px;
  }

  .desc .content{
    color:#fff;    
  }
  .de {
    word-break: break-all !important;
    color:#fff;
  }

  .de a:link, .de a:visited{
    color:#fff;
  }

  /*banner*/
  .main-news-w .right .banner_wrapper{
    min-width: 300px;
  }

  .banner_wrapper .banner{
    border:none;
  }
  .banner_wrapper .banner .banner_caption{
    color: #ffffff;
    left: 0;
    position: relative;
    right: 0;
    padding:0px;
    background: url('');
  }

  .like-w{
    height: 20px;
    clear:both;
  }

  .news-link{
    color:#fff;
    text-decoration: none;
  }

  a:visited, a:link {    
    text-decoration:none !important;
  }

  .ndban{
    margin-bottom: 30px;
    text-align: center;
  }

  @media screen and (max-width: 1075px){
    #wrapper{
      /*background-color: green;*/
    }
  }


  @media screen and (max-width: 775px){    
    #wrapper{
      /*background-color: red;*/
    }
    .fnews-show{
      display: inline !important;
    }


    .main-news-w .desc{
      max-width: none !important;
      min-height: 0px !important;
    }

    .main-news-w .thumnail img{
      width:980px !important;      
      margin-bottom: 0px !important;
    }

    .main-news-w .desc{
      max-width: 100%;
      float: unset !important;
      color:#fff;     
    }

    .main-news-w .thumnail a{
      margin-bottom: 0px !important;
    }



  }
</style>
<?php $p = get_lastest_news(); ?>
<?php $t = get_the_category( $p['post_id'] ); ?>  
  <div class="main-news-w">
    <div class="left">
      <a href="<?php echo  $p['post_guid']; ?>"><img src="<?php echo $p['post_thumnail']; ?>"  alt=""></a>      
    </div>
    <div class="right">
      

      <div class="desc">
        <div class="title"><h3><a href="<?php echo  $p['post_guid']; ?>"><span class="news-link"><?php echo $p['post_title']; ?></span></a></h3></div>
        <div class="content">      
          <p>
            <i class="fa fa-clock-o"></i>
            &nbsp;<?php echo date('Y/m/d', strtotime($p['post_date'])); ?>&nbsp;
            <span class="pcone">
              <i class="fa fa-tags"></i>&nbsp;
              <a style="color:#fff;" rel="category tag" title="<?php echo $t[0]->name; ?>" href="/archives/category/<?php echo $t[0]->name; ?>"><?php echo $t[0]->name; ?></a>
            </span>
          </p>            
        </div>
        <div class="de">
          <?php echo $p['post_des']; ?>  
        </div>      
      </div>
      

    </div>
    <div class="cb"></div>
  </div>

  <div class="like-w">
    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Feva-blog.evolable.asia%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>  
  </div>
  

</div>
<div id="content" class="clearfix">
  <div id="contentInner">
    <div class="fnews hide fnews-show">
      
      <div class="main-news-w">
        <div class="thumnail">
          <a href="<?php echo  $p['post_guid']; ?>"><img class="img-mobile" src="<?php echo $p['post_thumnail']; ?>"  alt=""></a>
        </div>
        <div class="desc">
          <div class="title"><h3><a href="<?php echo  $p['post_guid']; ?>"><span class="news-link"><?php echo $p['post_title']; ?></span></a></h3></div>
          <div class="">      
            <p>
              <i class="fa fa-clock-o"></i>
              &nbsp;<?php echo date('Y/m/d', strtotime($p['post_date'])); ?>&nbsp;
              <span class="pcone">
                <i class="fa fa-tags"></i>&nbsp;
                <a style="color:#fff;" rel="category tag" title="<?php echo $t[0]->name; ?>" href="/archives/category/<?php echo $t[0]->name; ?>"><?php echo $t[0]->name; ?></a>
              </span>
            </p>            
          </div>
          <div class="de">
            <?php echo $p['post_des']; ?>  
          </div>      
        </div>
      </div>
      <div class="like-w">
        <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Feva-blog.evolable.asia%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>  
      </div>
      


    </div>
    <main>
      <article>
        <section>
          <?php get_template_part('itiran');?>
        </section>
        <!-- /section --> 
<!-- コメントアウト<?php get_template_part('sns-top'); //ソーシャルボタン読み込み ?> -->
        <!-- ページナビ -->
        <?php if (function_exists("pagination")) {
pagination($wp_query->max_num_pages);
} ?>
      </article>
<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fevolable.asia.eva%3Ffref%3Dts&amp;width=500px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=445550542212549" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:290px;" allowTransparency="true"></iframe>    </main>
  </div>
  <!-- /#contentInner -->
  <?php get_sidebar(); ?>
</div>
<!-- /#content -->
<?php get_footer(); ?>