<?php
$title = 'Our Products';
$slogan = 'Kushiara Seeds';
include('header.php');
    $data = json_decode(file_get_contents('database.json'), true);
    $products = $data['products'];
?>
    <!-- Breadcumb Area Start -->
    <section class="breadcumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="">home /</a></li>
                        <li><a href="">Products</a></li>
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
                    <h3><span>আমাদের বীজ সমুহ</span> কুশিয়ারা সীডস</h3>
                </div>
                <div class="col-md-6">
                    <p>ফ্রান্সের বিশ্ববিখ্যাত Technisem কোম্পানির এক্সক্লোসিভ ডিস্ট্রিবিউটর। এছাড়া পৃথিবীর বিভিন্ন
                        নামকরা কোম্পানি হতে বীজ আমদানী করে থাকে।</p>
                </div>
            </div>

            <div class="row" id="jpage">
                <!-- Future navigation panel -->
                    <?php foreach ($products as $product): ?>
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card">
                                <img class="card-img img-fluid"
                                     src="<?= $product['images']?>"
                                     alt="Vans">
                                <div class="card-body">
                                    <h4 class="card-title text-center"><?= $product['name'] ?></h4>
                                    <p class="card-text"><?= $product['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <div class="holder mx-auto text-center"></div>
            </div>

        </div>

    </section>
    <!-- Contact Us Area End -->
<?php include('footer.php'); ?>