
<!-- MUST FINISH IMAGE HOVER/LINKS FOR HIGHLIGHT SECTION -->

<?php get_header();?>

<div class="banner" style ="background-image: url('<?php echo get_theme_file_uri('/assets/images/cool-background.png'); ?>');">
    <h1 class="italiana-regular fw-bold">Mia Quintana</h1>
    <p class="lora">Web Developer</p>
</div>


  <div class="container col-xxl-8">
    <div class="row flex-lg-row align-items-center g-5 py-5 m-0"> 
      <div class="col-10 col-lg-6 center">
        <img id="profile-picture" src=<?php echo get_theme_file_uri('/assets/images/melook.jpg'); ?> alt="picture of Mia"/>
      </div>
      <div class="col-lg-6" >
        <h1 class="display-5 fw-bold mb-3 italiana-regular " id="title">Hi, I'm Mia.</h1>
        <p class="lead lora">A new web developer with project experience in front-end and back-end development as well as experience building websites using WordPress.</p>
        <a href="<?php echo site_url('/about'); ?>" class="btn-mine italiana-regular fw-bold">More about Mia</a>
      </div>
    </div> 
  </div>


  <div class="container gallery">
    <div class="row flex-lg-row align-items-center g-5 py-5 m-0 wrapper">
      <div class="col-10 col-lg-4 gallery-item center" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/studying.png'); ?>');">
        <div class="caption">
          <p class="lora px-5">Constantly studying to stay up-to-date with trends in web development.</p>
          <a href="<?php echo site_url('/projects'); ?>">View Projects</a>
        </div>
      </div>
      <div class="col-10 col-lg-4 center gallery-item" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/pensive.jpg'); ?>');">
        <div class="caption">
          <p class="lora px-5">Highly motivated and focused on improvement.</p>
          <a href="<?php echo site_url('/resume'); ?>">View Resume</a>
        </div>
      </div>
      <div class="col-10 col-lg-4 center gallery-item" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/cool-pic.png'); ?>');">
        <div class="caption">
          <p class="lora px-5">Gaining experinece building aesthetically pleasing and intuitive web pages.</p>
          <a href="">Latest Project</a>
        </div>
      </div>
    </div>
  </div>


  <div class="container col-xxl-8" id ="latest-project">
    <h1 class="fw-bold italiana-regular my-2 center">Latest Project</h1>
    <div class="row flex-lg-row g-5 m-0" >
      <div class="col-lg-6 px-5 right">
        <div class="row-6 py-4">
          <a href="" target="_blank" rel="noopener noreferrer"><h3 class=" italiana-regular fw-bold my-2 btn-mine">My Fiance's Website</h3></a>
          <p class="lora">A prototype for a WordPress site made with lots of love.</p>
        </div>
        <div class="row-6 py-5">
          <a href="<?php echo site_url('/projects'); ?>" class="btn-mine" >View More Projects</a> 
        </div>
        
      </div>

      <div class="col-lg-6 px-5 center"> 
        <a href="" target="_blank" rel="noopener noreferrer"><img class="bd-placeholder-img my-3" width="350" height="240" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="<?php echo get_theme_file_uri('assets/images/keboard.png')?>"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img></a>
      </div>
    </div>
</div>
          

<?php get_footer(); ?>

