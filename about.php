
 <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">За нас</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p>
  </div>
  <div class="w3-row-padding w3-grayscale">

<?php
$about_info = array(
    array(
      'img'=>'./w3images/team2.jpeg',
      'img_alt'=>'John',
      'name'=>'John Doe',
      'title'=>'CEO & founder',
      'desc'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
      'link'=>'w3-button w3-light-grey w3-block'
    ),
    array(
      'img'=>'./w3images/team1.jpeg',
      'img_alt'=>'Marie',
      'name'=>'Marie John',
      'title'=>'Coder',
      'desc'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
      'link'=>'w3-button w3-light-grey w3-block'
    ),
    array(
      'img'=>'./w3images/team2.jpeg',
      'img_alt'=>'John',
      'name'=>'John Doe',
      'title'=>'CEO & founder',
      'desc'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
      'link'=>'w3-button w3-light-grey w3-block'
    ),
  );
?>
<?php foreach($about_info as $about) {?>
  <div class="w3-col l3 m6 w3-margin-bottom">
    <img src="<?php echo $about['img'];?>" alt="<?php echo $about['img_alt'];?>" style="width: 100%">
    <h3><?php echo $about['name'];?></h3>
    <p class="w3-opacity"><?php echo $about['title'];?></p>
    <p><?php echo $about['desc'];?>.</p>
    <p><a class="w3-button w3-light-grey w3-block" >Контактирај</a></p>
  </div>
<?php } ?>
</div>       
     
    
