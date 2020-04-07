@extends('layouts.app')

@section('content')

  <div id="menu-page">

    <!-- FOOD PREVIEW -->
    <section id="food-preview">
      <h2>We have everything you need to kill your hunger</h2>
      <div class="button-rounded">View Our Menu</div>
      <div class="container">
        {{-- LEFT BTN --}}
        <div class="left-btn">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        {{-- RIGHT BTN --}}
        <div class="right-btn">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        {{-- SLIDES --}}
        <div class="food-slider">
          <div class="sliding-system">
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Starters
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img src="img/starter.png">
                </div>
              </div>

            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Burgers
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img src="img/burger.png">
                </div>
              </div>

            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Entrees
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img src="img/entree.png">
                </div>
              </div>

            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Sides
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img src="img/side.png">
                </div>
              </div>

            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Deserts
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img
                    src="img/desert.png">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Beers
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img
                    src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Drinks
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                  architecto
                  officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                  repellendus natus nihil?
                </p>
                <div class="food-image">
                  <img
                    src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>

@endsection