<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') ?></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
<body>
  
<?php get_header()?>

  <div class="container">
  <div class="row">
  <div class="main1">
 <?php if (have_posts()) : ?>
      <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a><br>
        Writen By:    <?php the_author_posts_link(); ?>
        Date <?php the_date(); ?><br>
        <!-- category <?php the_category();?><br> -->
       <span><?php the_tags();?> <br>
        
        <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail();
            else : echo "NOT FOUND";
            endif
            ?>
        <div class="main">
          <p><?php the_excerpt(); ?></p>
        </div>

      <?php endwhile; ?>
    <?php endif; ?>
    <a class="btn btn-primary" href="<?php the_permalink(); ?>">More Info</a>
    
 </div>
 <div class="side">
 <?php 

if(is_active_sidebar('sidebar')):
    dynamic_sidebar('sidebar');
endif;

?>
  </div>
    </div>
    <div class="footer">
      <?php get_footer();?>
    </div>
  </div>
</body>
</html>

-----------------------------
<!DOCTYPE html>
<html lang="en" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Leaning CMS Advance</title>
    <link rel="stylesheet" href="http://52.73.217.114/virakran/wp-content/themes/wigetpro/style.css">
    <link rel="stylesheet" type="text/css" href="http://website.com/css/custom-style.css?ver=553">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <br>
        <h1 class="ml-5"> Leaning CMS Advance</h1>
    </header>
    <div class="menu-home-container">
      <ul id="menu-home" class="menu">
        <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-33"><a href="http://52.73.217.114/virakran/">Home</a></li>
        <li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-34 current_page_item current_page_parent menu-item-36"><a href="http://52.73.217.114/virakran/blog/" aria-current="page">Blog</a></li>
        <li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="http://52.73.217.114/virakran/report/">Report</a></li>
        <li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="http://52.73.217.114/virakran/about/">About</a></li>
        <li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"><a href="http://52.73.217.114/virakran/first-level-of-page/second-level-of-page/third-level-of-page/four-level-of-page/">Four level of page</a></li>
    </ul>
  </div>   
 <div class="container">
        <div class="row">
        <div class="main">
                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                    <img width="100%" height="auto" src=<img width="400" height="266" src="http://52.73.217.114/virakran/wp-content/uploads/2020/04/00-400x266.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://52.73.217.114/virakran/wp-content/uploads/2020/04/00-400x266.jpg 400w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/00-300x200.jpg 300w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/00-768x511.jpg 768w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/00.jpg 970w" sizes="(max-width: 400px) 100vw, 400px" />                                                            </div>
                            <div class="col-sm-8">
                                <a href="http://52.73.217.114/virakran/2020/04/24/lexus-%e1%9e%85%e1%9f%81%e1%9e%89%e1%9e%a1%e1%9e%b6%e1%9e%93-gs-%e1%9e%98%e1%9f%89%e1%9e%bc%e1%9e%8a%e1%9f%82%e1%9e%9b%e1%9e%96%e1%9e%b7%e1%9e%9f%e1%9f%81%e1%9e%9f%e1%9e%85%e1%9e%bb%e1%9e%84%e1%9e%80/"><h6>Lexus ចេញឡាន GS ម៉ូដែលពិសេសចុងក្រោយ មុនឈប់ផលិត</h6></a>
                                <hr>
                                <p><p>Lexus បានបញ្ចេញរថយន្ត GS ម៉ូដែលពិសេសហៅថា Eternal Touring ដែលជាម៉ូដែលចុងក្រោយបង្អស់របស់ត្រកូលមួយនេះ</p>
</p>
                                Category: 
                                <a href="http://52.73.217.114/virakran/category/uncategorized/">Uncategorized</a>                                <br><br>
                            </div>
                                                                                        <div class="col-sm-4">
                                                                    <img width="100%" height="auto" src=<img width="400" height="267" src="http://52.73.217.114/virakran/wp-content/uploads/2020/04/09-400x267.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://52.73.217.114/virakran/wp-content/uploads/2020/04/09-400x267.jpg 400w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/09-300x200.jpg 300w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/09-768x512.jpg 768w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/09.jpg 970w" sizes="(max-width: 400px) 100vw, 400px" />                                                            </div>
                            <div class="col-sm-8">
                                <a href="http://52.73.217.114/virakran/2020/04/24/%e1%9e%8f%e1%9f%82%e1%9e%98%e1%9e%bd%e1%9e%99%e1%9e%82%e1%9e%8f%e1%9f%8b%e1%9e%93%e1%9f%85%e1%9e%80%e1%9e%98%e1%9f%92%e1%9e%96%e1%9e%bb%e1%9e%87%e1%9e%b6-%e1%9e%80%e1%9e%89%e1%9f%92%e1%9e%85%e1%9e%94/"><h6>តែមួយគត់នៅកម្ពុជា! កញ្ចប់សេវាធានារ៉ាប់រងសុខភាពកុមារ របស់ក្រុមហ៊ុនមួយ ហ៊ានផ្ដល់ទឹកប្រាក់ធានាដល់ទៅ ២,៥ម៉ឺន ដុល្លារអាមេរិក</h6></a>
                                <hr>
                                <p><p>សុខភាព និងសុខុមាលភាពរបស់ប្រជាជនកម្ពុជា មិនថាទាំងអាណាព្យាបាល ឬកូនៗនោះទេ សុទ្ធតែសំខាន់ ហើយប្រសិនបើមាននណា</p>
</p>
                                Category: 
                                <a href="http://52.73.217.114/virakran/category/sport/">sport</a>                                <br><br>
                            </div>
                                                                                        <div class="col-sm-4">
                                                                    <img width="100%" height="auto" src=<img width="400" height="225" src="http://52.73.217.114/virakran/wp-content/uploads/2020/04/6-400x225.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://52.73.217.114/virakran/wp-content/uploads/2020/04/6-400x225.jpg 400w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/6-300x169.jpg 300w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/6.jpg 640w" sizes="(max-width: 400px) 100vw, 400px" />                                                            </div>
                            <div class="col-sm-8">
                                <a href="http://52.73.217.114/virakran/2020/04/24/%e1%9e%9c%e1%9e%b8%e1%9e%9a%e1%9e%94%e1%9e%bb%e1%9e%9a%e1%9e%9f%e2%80%8b%e1%9e%a2%e1%9e%84%e1%9f%8b%e1%9e%82%e1%9f%92%e1%9e%9b%e1%9f%81%e1%9e%9f%e2%80%8b%e1%9e%90%e1%9e%b6%e2%80%8b-%e2%80%8b%e1%9e%80/"><h6>វីរបុរស​អង់គ្លេស​ថា​ ​កីឡាករ​មិន​មែន​អាជីព​ រក​ការងារ​ផ្សេង​ទៅ</h6></a>
                                <hr>
                                <p><p>លោក​ Gary Neville អតីត​គ្រូ​បង្គោល​ក្លឹប​ Valencia បាន​និយាយ​ផ្ដល់​យោបល់​ទៅ​កាន់​កីឡាករ​មិន​អាជីព​នៅ​លីគ​អង់គ្លេស</p>
</p>
                                Category: 
                                <a href="http://52.73.217.114/virakran/category/uncategorized/">Uncategorized</a>                                <br><br>
                            </div>
                                                                                        <div class="col-sm-4">
                                                                    <img width="100%" height="auto" src=<img width="400" height="256" src="http://52.73.217.114/virakran/wp-content/uploads/2020/04/5-400x256.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://52.73.217.114/virakran/wp-content/uploads/2020/04/5-400x256.jpg 400w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/5-300x192.jpg 300w, http://52.73.217.114/virakran/wp-content/uploads/2020/04/5.jpg 640w" sizes="(max-width: 400px) 100vw, 400px" />                                                            </div>
                            <div class="col-sm-8">
                                <a href="http://52.73.217.114/virakran/2020/04/24/%e1%9e%9b%e1%9e%b8%e1%9e%82%e2%80%8b%e1%9e%80%e1%9f%86%e1%9e%96%e1%9e%bc%e1%9e%9b%e2%80%8b%e1%9e%a2%e1%9e%b6%e1%9e%9b%e1%9f%92%e1%9e%9b%e1%9e%ba%e1%9e%98%e1%9f%89%e1%9e%84%e1%9f%8b%e2%80%8b-bundesliga/"><h6>លីគ​កំពូល​អាល្លឺម៉ង់​ Bundesliga នឹង​ចាប់​ផ្ដើម​ឡើង​វិញ​នៅ​ខែ​ក្រោយ​នេះ</h6></a>
                                <hr>
                                <p><p>ក្រោយ​ជាប់​គាំង​មួយ​រយៈ​ដោយ​ជំងឺ​រាតត្បាត​កូរ៉ូណា លីគកំពូល​បាល់ទាត់​អាល្លឺម៉ង់</p>
</p>
                                Category: 
                                <a href="http://52.73.217.114/virakran/category/uncategorized/">Uncategorized</a>                                <br><br>
                            </div>
                                                                                </div>
                </div>
                <div class="sidebar ml-3 p-3">
                                                <form role="search" method="get" id="searchform" class="searchform" action="http://52.73.217.114/virakran/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
			</form>				<h4 style="color:red">Recent Posts</h4>		<ul>
											<li>
					<a href="http://52.73.217.114/virakran/2020/04/24/%e1%9e%8f%e1%9f%82%e1%9e%98%e1%9e%bd%e1%9e%99%e1%9e%82%e1%9e%8f%e1%9f%8b%e1%9e%93%e1%9f%85%e1%9e%80%e1%9e%98%e1%9f%92%e1%9e%96%e1%9e%bb%e1%9e%87%e1%9e%b6-%e1%9e%80%e1%9e%89%e1%9f%92%e1%9e%85%e1%9e%94/">តែមួយគត់នៅកម្ពុជា! កញ្ចប់សេវាធានារ៉ាប់រងសុខភាពកុមារ របស់ក្រុមហ៊ុនមួយ ហ៊ានផ្ដល់ទឹកប្រាក់ធានាដល់ទៅ ២,៥ម៉ឺន ដុល្លារអាមេរិក</a>
									</li>
											<li>
					<a href="http://52.73.217.114/virakran/2020/04/24/lexus-%e1%9e%85%e1%9f%81%e1%9e%89%e1%9e%a1%e1%9e%b6%e1%9e%93-gs-%e1%9e%98%e1%9f%89%e1%9e%bc%e1%9e%8a%e1%9f%82%e1%9e%9b%e1%9e%96%e1%9e%b7%e1%9e%9f%e1%9f%81%e1%9e%9f%e1%9e%85%e1%9e%bb%e1%9e%84%e1%9e%80/">Lexus ចេញឡាន GS ម៉ូដែលពិសេសចុងក្រោយ មុនឈប់ផលិត</a>
									</li>
											<li>
					<a href="http://52.73.217.114/virakran/2020/04/24/%e1%9e%9c%e1%9e%b8%e1%9e%9a%e1%9e%94%e1%9e%bb%e1%9e%9a%e1%9e%9f%e2%80%8b%e1%9e%a2%e1%9e%84%e1%9f%8b%e1%9e%82%e1%9f%92%e1%9e%9b%e1%9f%81%e1%9e%9f%e2%80%8b%e1%9e%90%e1%9e%b6%e2%80%8b-%e2%80%8b%e1%9e%80/">វីរបុរស​អង់គ្លេស​ថា​ ​កីឡាករ​មិន​មែន​អាជីព​ រក​ការងារ​ផ្សេង​ទៅ</a>
									</li>
											<li>
					<a href="http://52.73.217.114/virakran/2020/04/24/%e1%9e%9b%e1%9e%b8%e1%9e%82%e2%80%8b%e1%9e%80%e1%9f%86%e1%9e%96%e1%9e%bc%e1%9e%9b%e2%80%8b%e1%9e%a2%e1%9e%b6%e1%9e%9b%e1%9f%92%e1%9e%9b%e1%9e%ba%e1%9e%98%e1%9f%89%e1%9e%84%e1%9f%8b%e2%80%8b-bundesliga/">លីគ​កំពូល​អាល្លឺម៉ង់​ Bundesliga នឹង​ចាប់​ផ្ដើម​ឡើង​វិញ​នៅ​ខែ​ក្រោយ​នេះ</a>
									</li>
					</ul>
		<h4 style="color:red">Archives</h4>		<ul>
				<li><a href='http://52.73.217.114/virakran/2020/04/'>April 2020</a></li>
		</ul>
			                                    </div>
        </div>
        </div> 
    </div>
</body>
</html>
