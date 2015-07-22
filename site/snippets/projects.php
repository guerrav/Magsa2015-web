<div class="pure-g">
  <div class="pure-u-1">

    <div class="big-demo" data-js-module="hero-demo">
      
      <div class="separacion filters"><li class="tag morado"><a href="#" data-filter="*">Mostrar todos</a></li></div>
      
      <div class="grid">

        
        <?php foreach(page('projects')->children()->visible()->flip() as $project): ?>
          <div class="project grid-item <?php
              $count = 0;
              foreach ($tags = explode(",", $project->tags()) as $tag) {
              $count++;
              echo "$tag "; }?>">

            <!-- DATE -->
            <p class="date"><?php echo $project->date('M j') ?></p>
            
            <!-- PROJECT FIRST IMAGE -->
            <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
            <a href="<?php echo $project->url() ?>">
              <img class="thumb" src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
              <p class="title-thumb"><?php echo $project->title()->html() ?></p>
            </a>
            <?php endif ?>


            <!-- TAG LIST -->
            <ul id="tags" class="tags filters">

              <?php
              $count = 0;
              foreach ($tags = explode(",", $project->tags()) as $tag) {
              $count++;
              echo '<li><a href="#" data-filter=".'.$tag.'">'.$tag.'</a></li>';

              }
              ?>
            </ul>

          </div>
        <?php endforeach ?>
        
      </div>
    </div>
  </div>
</div>


