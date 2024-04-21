
<?php get_header();?>

        <div class="container col-xxl-8 px-4 py-5">
           
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5"> 
            <div class="col-10 col-sm-8 col-lg-6">
                <img id="profile-picture" src=<?php echo get_theme_file_uri('/assets/images/mia3.png'); ?> alt="picture of Mia"/>
              </div>
            <div class="col-lg-6" >
                <h1 class="display-5 fw-bold lh-1 mb-3 " id="title">I'm Mia.</h1>
                <p class="lead">A junior web developer. My favorite flavor is JavaScript.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <a href="<?php echo site_url('/about'); ?>" class="btn btn-mine btn-lg px-4">More about me</a>
                </div>
              </div>
              
            </div> 
            
          </div>
          <div>
            <div class=" my-4 px-5">
                <h1 class="fw-bold ">Projects</h1>
                <p>I am working on new projects everyday, but these are my favorites that demonstrate some of what I've learned.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 px-5">
                <a href="https://mia-q.github.io/recipe-search-app/" target="_blank" rel="noopener noreferrer" style="color: #9c742a"><img class="bd-placeholder-img rounded my-3" width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" style="border: 1px solid black;" src=<?php echo get_theme_file_uri('/assets/images/recipe-search.png');?>><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img><h2 class="fw-normal purple">Recipe Search App</h2></a>
                <p>Built in collaboration with a friend from my coding bootcamp (thanks, Evan), this recipe search app was made from scratch with only Vanilla Javascript. It is imperfect and our styling choices are questionable (thanks again, Evan), but this project solidified basic JS concepts for me. Utilizes spoonacular API.</p>
                </div>
                <!-- <div class="col-lg-6 px-5">
                  <a href="" target="_blank" rel="noopener noreferrer" style="color: #9c742a"><img class="bd-placeholder-img rounded my-3" width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" style="border: 1px solid black;" src=""><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img><h2 class="fw-normal purple">My Fiance's Professional Website</h2></a>
                  
                  <p>This is a wordpress site made with lots of love. While creating this project (and my own website), I learned all about using wordpress to create custom themes, custom blocks, and more.</p>
                  </div> -->
                <div class="col-lg-6 px-5">
                  <a href="https://mia-q.github.io/ContactKeeper/index.html" target="_blank" rel="noopener noreferrer" style="color: #9c742a"><img class="bd-placeholder-img rounded my-3" width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" src=<?php echo get_theme_file_uri('/assets/images/contact.png');?> style="border: 1px solid black;"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img> <h2 class="fw-normal">ContactKeeper</h2></a>
                    <p>I enjoyed learning React and wanted to create something without a tutorial or guide. Though not an uncommon project, I chose a contact book because I wanted to be able to create something using what I had learned through other, smaller React projects I had completed. The process for creating a contact book was straightforward enough for me to complete on my own. This is the result.<p>
                </div>
                  <div class="col-lg-6 px-5">
                  <a href="https://github.com/mia-q/nucampsite-server" target="_blank" rel="noopener noreferrer" style="color: #9c742a"><img class="bd-placeholder-img rounded my-3" width="250" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" style="border: 1px solid black;" src=<?php echo get_theme_file_uri('/assets/images/express-server.png');?>><rect width="100%" height="100%" fill="var(--bs-secondary-color)" ></rect></img><h2 class="fw-normal purple">Express Server Practice</h2></a>
                  <p> Not a project I created on my own, but demonstrative of the extent of my knowledge related to backend development. This project was a major part of the coursework during my bootcamp and introduced me to express, mongoose, mongoDB, and related web technologies. My current focus is front-end development but I am familiar with backend basics.</p>
                  </div>
              

            
          </div>

<?php get_footer(); ?>

