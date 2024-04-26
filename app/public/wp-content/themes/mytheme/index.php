
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
    <div class="row flex-lg-row align-items-center g-5 py-5 m-0">
      <div class="col-10 col-lg-4 gallery-item container" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/studying.png'); ?>');">
      <p class="lora caption">This text will come up on hover</p>
      </div>
      <div class="col-10 col-lg-4 center gallery-item" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/pensive.jpg'); ?>');">
        <p class="lora caption">This text will come up on hover</p>
      </div>
      <div class="col-10 col-lg-4 center gallery-item" style="background-image: url('<?php echo get_theme_file_uri('/assets/images/cool-pic.png'); ?>');">
        <p class="lora caption">This text will come up on hover</p>
      </div>
    </div>
  </div>


  <div class="container col-xxl-8" id ="latest-project">
    <h1 class="fw-bold italiana-regular my-2 center">Latest Project</h1>
    <div class=" row flex-lg-row align-items-center g-5 m-0" >
      <div class="col-lg-6 px-5 right">
        <h3 class=" italiana-regular fw-bold my-2">My Sister's Website</h3>
        <p class="lora">A WordPress site made with lots of love.</p>
        <a href="<?php echo site_url('/projects'); ?>">View More Projects</a>
      </div>

      <div class="col-lg-6 px-5 center"> 
        <a href="" target="_blank" rel="noopener noreferrer"><img class="bd-placeholder-img my-3" width="350" height="240" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src="<?php echo get_theme_file_uri('assets/images/keboard.png')?>"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img></a>
      </div>
    </div>
  </div>
                <!-- <div class="col-lg-6 px-5">
                <a href="https://mia-q.github.io/recipe-search-app/" target="_blank" rel="noopener noreferrer"><img class="bd-placeholder-img rounded my-3 " width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" style="border: 1px solid black;" src=<?php echo get_theme_file_uri('/assets/images/recipe-search.png');?>><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img><h2 class="italiana-regular fw-bold">Recipe Search App</h2></a>
                <p class="lora">Built in collaboration with a friend from my coding bootcamp (thanks, Evan), this recipe search app was made from scratch with only Vanilla Javascript. It is imperfect and our styling choices are questionable (thanks again, Evan), but this project solidified basic JS concepts for me. Utilizes spoonacular API.</p>
                </div> -->
                <!-- <div class="col-lg-6 px-5">
                  <a href="https://mia-q.github.io/ContactKeeper/index.html" target="_blank" rel="noopener noreferrer"><img class="bd-placeholder-img rounded my-3" width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src=<?php echo get_theme_file_uri('/assets/images/contact.png');?> style="border: 1px solid black;"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img> <h2 class="fw-bold italiana-regular">ContactKeeper</h2></a>
                    <p class="lora">I enjoyed learning React and wanted to create something without a tutorial or guide. Though not an uncommon project, I chose a contact book because I wanted to be able to create something using what I had learned through other, smaller React projects I had completed. The process for creating a contact book was straightforward enough for me to complete on my own. This is the result.<p>
                </div>
                  <div class="col-lg-6 px-5">
                  <a href="https://github.com/mia-q/nucampsite-server" target="_blank" rel="noopener noreferrer" ><img class="bd-placeholder-img rounded my-3" width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" style="border: 1px solid black;" src=<?php echo get_theme_file_uri('/assets/images/express-server.png');?>><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img><h2 class="fw-bold italiana-regular">Express Server Practice</h2></a>
                  <p class="lora"> Not a project I created on my own, but demonstrative of the extent of my knowledge related to backend development. This project was a major part of the coursework during my bootcamp and introduced me to express, mongoose, mongoDB, and related web technologies. My current focus is front-end development but I am familiar with backend basics.</p>
                  </div>
               -->

            
          

          

<?php get_footer(); ?>

