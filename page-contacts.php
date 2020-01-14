<?php
/*
Template Name: Контакты
*/
get_header();
?>

    <?php require('inc/posthead.php'); ?>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Свяжитесь с нами</h2>
          <p>Вы можете отправить нам сообщение, и мы свяжемся с вами в ближайшее время!</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="Имя">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Фамилия">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Email адрес">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="" id="" class="form-control" placeholder="Напишите свое сообщение" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Отправить сообщение">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="bg-white p-3 p-md-5">
              <h3 class="text-black mb-4">Контактная информация</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block mb-3">
                  <span class="d-block text-black">Адрес:</span>
                  <span>Україна, м. Вишгород, Дніпровська 1</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Телефон:</span><span>+380 73 500 50 88</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>veselka-mriy@i.ua</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Отзывы</span>
            <h2 class="text-black">Что говорят о нашем садике</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="testimonial-3-wrap">


              <div class="owl-carousel nonloop-block-13">
                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="<?php echo get_template_directory_uri() . '/images/person_1.jpg' ?>" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Джон Смит</h3>
                    <p class="position">Директор</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                  </div>
                </div>

                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="<?php echo get_template_directory_uri() . '/images/person_1.jpg' ?>" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Джон Смит</h3>
                    <p class="position">Директор</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                  </div>
                </div>

                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="<?php echo get_template_directory_uri() . '/images/person_1.jpg' ?>" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Джон Смит</h3>
                    <p class="position">Директор</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>