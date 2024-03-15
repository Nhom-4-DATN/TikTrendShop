<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chào mừng</title>
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>

    <body>
        <section class="home">
            <div class="description">
                <h1 class="title">
                    <span class="gradient-text">Chào mừng các bạn đến với</span> TikTrendShop
                </h1>
                <p class="paragraph">
                    Chào mừng bạn đến với nền tảng thương mại điện tử đỉnh cao! Ở đây, bạn có thể mở cửa hàng trực tuyến của
                    riêng mình chỉ trong vài bước đơn giản. Tận dụng công cụ linh hoạt, hỗ trợ chuyên nghiệp và một môi
                    trường an toàn để bắt đầu kinh doanh của bạn ngay hôm nay. Đăng ký ngay để chiếm ưu thế trong thế giới
                    thương mại điện tử!
                </p>
                <div id="form">
                    <a href="{{ route('register') }}">
                        <button type="submit" class="btn" aria-label="submit">
                            <span>Đăng Ký</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </a>
                    <br>
                    <a href="{{ route('login') }}">
                        <button type="submit" class="btn" aria-label="submit">
                            <span>Đăng Nhập</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </a>
                </div>
            </div>

            <div class="users-color-container">
                <span class="item" style="--i: 1"></span>
                <img class="item" {{-- src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/274f29ce-0d3f-4ac2-a2aa-f9b7bd188b2a" --}} src="{{ asset('images/jinchill.jpg') }}" style="--i: 2" alt="" />
                <span class="item" style="--i: 3"></span>
                <img class="item" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/b8a14493-3d9f-4b9b-b93a-56d0bc7243e9" style="--i: 4" alt="" />

                <img class="item" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/03e51e1e-9750-45a5-b75e-a1e341d4562a" style="--i: 10" alt="" />
                <span class="item" style="--i: 11"></span>
                <img class="item" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/5eb50f89-3e5a-480e-860c-8d40d3ba9ffe" style="--i: 12" alt="" />
                <span class="item" style="--i: 5"></span>

                <span class="item" style="--i: 9"></span>
                <img class="item" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/86c71a79-2efe-4567-8665-b1e5a1fd9735" style="--i: 8" alt="" />
                <span class="item" style="--i: 7"></span>
                <img class="item" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/97ef9643-5202-41aa-80f0-ceeabccdd099" style="--i: 6" alt="" />
            </div>
        </section>
    </body>

</html>
