<div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Проекти</h3>
  </div>

  <div class="w3-row-padding">
  </div>
  <div class="w3-row-padding w3-original">
<?php

$projects = array(
  array ('name' =>'Лектна Куќа',
         'image' => './w3images/house5.jpeg',
         'img_alt' => 'House',
         'style' => 'width:100%'
        ),
  array ('name' =>'Дом / Живеалиште',
         'image' => './w3images/house2.jpeg',
         'img_alt' => 'House',
         'style' => 'width:100%'
        ),
  array ('name' =>'Викендица',
         'image' => './w3images/house3.jpeg',
         'img_alt' => 'House',
         'style' => 'width:100%'
        ),
  array ('name' =>'Хала',
         'image' => './w3images/house4.jpeg',
         'img_alt' => 'House',
         'style' => 'width:100%'
        ),
);

foreach ($projects as $project) {?>

  <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><?php echo $project['name'];?></div>
        <img src=<?php echo $project['image'];?> alt=<?php echo $project['img_alt'];?> style=<?php echo $project['style'];?>>
      </div>
    </div>
  
<?php } ?>



