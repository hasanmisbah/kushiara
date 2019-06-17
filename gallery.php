<?php

$title = 'Gallery';
$slogan = 'Kushiara Seeds';
include('header.php');
$data = json_decode(file_get_contents('database.json'), true);
$images = $data['gallery'];
?>
      <!-- Breadcumb Area Start -->
	  <section class="breadcumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<h4>Gallery</h4>
					<ul>
						<li><a href="">home /</a></li>
						<li><a href="">Gallery</a></li>
					</ul>
				</div>
			</div>
		</div>
	  </section>
      <!-- Breadcumb Area End -->
      
      <!-- Contact Us Area End -->
      <section class="contact-area pb-100 pt-100" id="contact">
         <div class="container">
            <div class="row section-title white-section">
               <div class="col-md-6 text-right">
                  <h3><span>ছবি গ্যালারী</span> কুশিয়ারা সীডস</h3>
               </div>
               <div class="col-md-6">
                  <p>ফ্রান্সের বিশ্ববিখ্যাত Technisem কোম্পানির এক্সক্লোসিভ ডিস্ট্রিবিউটর। এছাড়া পৃথিবীর বিভিন্ন
                        নামকরা কোম্পানি হতে বীজ আমদানী করে থাকে। </p>
               </div>
            </div>
            <div class="row">
               <?php foreach ($images as $image):?>
                   <div class="col-xl-4">
                       <div class="single-portfolio">
                           <img src="./assets/img/gallery/<?= $image['images']; ?>" alt="">
                           <div class="portfolio-hover">
                               <div class="portfolio-content">
                                   <h3><a href="./assets/img/gallery/<?= $image['images']; ?>" class="gallery"><i class="fa fa-plus"></i> <?= $image['name']; ?> </a></h3>
                               </div>
                           </div>
                       </div>
                   </div>
                <?php endforeach;?>
            </div>
         </div>
      </section>
      <!-- Contact Us Area End -->
      <?php include('footer.php');?>