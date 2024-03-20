<?php

namespace Database\Seeders;

use App\Models\Stores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $store = Stores::all();
        $category = DB::table('categories')->select('*')->get();
        DB::table('products')->insert([
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Áo sơ mi',
                'description' => '<h1>Giới thiệu Áo Sơ Mi Classic đa màu sắc</h1>

                <h2>Chào mừng bạn đến với dòng sản phẩm Áo Sơ Mi Classic của chúng tôi - một sự kết hợp hoàn hảo giữa phong cách
                    thanh
                    lịch và sự thoải mái. Với một loạt các màu sắc đa dạng, sản phẩm này sẽ chắc chắn là sự lựa chọn hoàn hảo cho
                    bất kỳ
                    dịp nào.</h2>

                <h3>Đặc điểm nổi bật:</h3>
                <strong>Thiết kế Đa Dạng:</strong> Áo Sơ Mi Classic của chúng tôi được thiết kế với sự chú ý đặc biệt vào chi tiết
                và chất liệu. Sản
                phẩm có sẵn trong ba màu sắc phổ biến: Trắng, Xanh Navy, và Đen - cung cấp cho bạn nhiều sự lựa chọn để phù hợp với
                phong cách của riêng bạn.
                <br>
                <br>
                <strong>Chất Liệu Chất Lượng Cao:</strong> Chúng tôi sử dụng các loại vải cao cấp như cotton và linen để tạo ra các
                chiếc áo sơ mi
                mềm mại, thoáng khí và dễ chịu. Bạn sẽ cảm nhận được sự thoải mái ngay từ lần đầu tiên mặc.
                <br>
                <br>

                <strong>Phong Cách Truyền Thống:</strong> Với kiểu dáng cổ điển và đường may tỉ mỉ, áo sơ mi của chúng tôi phản ánh
                sự lịch lãm và
                thanh lịch. Dù bạn đang đi làm, dự sự kiện hoặc đi chơi cùng bạn bè, sản phẩm này sẽ làm tôn lên vẻ đẹp của bạn.
                <br>
                <br>

                <strong>Dễ Kết Hợp:</strong> Áo Sơ Mi Classic của chúng tôi dễ dàng kết hợp với nhiều loại quần áo khác nhau. Kết
                hợp với quần âu,
                quần jeans hoặc chinos - bạn sẽ luôn trông lịch lãm và phong độ.
                <br>
                <br>

                <strong>Kích Thước Phù Hợp:</strong> Sản phẩm có sẵn trong nhiều kích thước khác nhau, từ XS đến XXL, giúp bạn có
                thể tìm được chiếc
                áo phù hợp với hình dáng cơ thể của mình.
                <br>
                <br>

                <i>Hãy trải nghiệm sự thoải mái và phong cách cùng Áo Sơ Mi Classic của chúng tôi. Đừng bỏ lỡ cơ hội sở hữu sản phẩm
                    chất lượng này để thêm vào tủ đồ của bạn!</i>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Quần jeans',
                'description' => '<h1>Quần Jeans Màu Xanh</h1>
                <h2>Bạn đang tìm kiếm một chiếc quần jeans vừa vặn và phong cách? Quần jeans màu xanh của chúng tôi là sự lựa chọn
                    hoàn
                    hảo cho bạn.</h2>

                <h3>Đặc Điểm Sản Phẩm:</h3>
                <strong> Màu Sắc:</strong> Xanh
                <br>
                <strong>Size:</strong> S, M, L
                <br>
                <strong>Chất Liệu:</strong> Vải jeans cao cấp, thoáng mát và thoải mái.
                <br>
                <strong>Kiểu Dáng:</strong> Slim fit, vừa vặn và thoải mái.
                <br>
                Thông Tin Kích Cỡ:<br>
                <strong>Size S:</strong> 28-30 inch (Vòng eo)<br>
                <strong>Size M:</strong> 31-33 inch (Vòng eo)<br>
                <strong>Size L:</strong> 34-36 inch (Vòng eo)<br>
                <strong>Ưu Điểm:</strong><br>
                Thiết kế đơn giản nhưng không kém phần thời trang.<br>
                Đường may chắc chắn, bền bỉ.<br>
                Dễ dàng kết hợp với nhiều loại áo phông, áo sơ mi.<br>
                <strong>Giá:</strong> Đặt hàng ngay<br>
                <i>Sở hữu ngay chiếc quần jeans màu xanh này để tạo ra những trải nghiệm thời trang thú vị và đầy phong cách!</i>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Áo thun con mèo',
                'description' => ' <h1>Áo Thun Con Mèo - Phong Cách Đáng Yêu và Thời Trang</h1>
                <h4>Bạn đang tìm kiếm một chiếc áo thun đáng yêu và phong cách? Áo thun con mèo của chúng tôi sẽ là sự lựa chọn hoàn
                    hảo
                    cho bạn! Với thiết kế độc đáo, chất liệu thoáng mát và sự thoải mái, chiếc áo thun này sẽ làm bạn nổi bật trong
                    mọi
                    dịp.</h4>

                <h3>Đặc Điểm Nổi Bật:</h3>
                <strong>Thiết Kế Con Mèo Dễ Thương:</strong> Với hình ảnh con mèo tinh nghịch được in trên ngực áo, chiếc áo thun
                mang lại vẻ đáng
                yêu và cá tính riêng biệt cho phong cách của bạn.
                <br>
                <strong>Chất Liệu Chất Lượng:</strong> Áo được làm từ chất liệu cotton cao cấp, đảm bảo cảm giác thoải mái và mềm
                mại cho da.
                <br>
                <strong>Size Đa Dạng:</strong> Áo thun con mèo của chúng tôi có sẵn trong 3 size: S, M, L, giúp bạn dễ dàng lựa chọn
                kích cỡ phù hợp
                với hình dáng cơ thể của mình.
                <br>
                <strong>Màu Sắc Phong Phú:</strong> Chọn từ ba màu sắc đa dạng: trắng tinh khôi, đen bí ẩn và hồng ngọt ngào, bạn có
                thể dễ dàng phối
                hợp với nhiều trang phục khác nhau.
                <br>
                <strong>Phù Hợp Cho Mọi Dịp:</strong> Đi làm, dạo phố cùng bạn bè, hoặc thậm chí là khi nghỉ ngơi tại nhà, chiếc áo
                thun con mèo sẽ
                làm cho phong cách của bạn trở nên nổi bật và cá tính.
                <br>
                <h3 style="color: red;">Hãy Mua Ngay!</h3>
                <i>Đừng bỏ lỡ cơ hội sở hữu chiếc áo thun con mèo phong cách này. Hãy tạo nên phong cách riêng của bạn với chiếc áo
                    thun độc đáo này. Đặt hàng ngay hôm nay và thêm nó vào bộ sưu tập thời trang của bạn!</i>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Áo croptop đáng yêu',
                'description' => ' <h3>Áo Croptop Đáng Yêu - Phong Cách Mới Mẻ và Tươi Trẻ</h3>
                <p>Bạn muốn thêm sự tươi trẻ và phong cách mới mẻ vào tủ đồ của mình? Hãy đón nhận chiếc áo croptop đáng yêu của
                    chúng tôi! Với thiết kế năng động và màu sắc tươi sáng, chiếc áo croptop này sẽ làm nổi bật phong cách của
                    bạn trong mọi dịp.</p>
                <h4>Đặc Điểm Nổi Bật:</h4>
                <ol>
                    <li>
                        <p><strong>Thiết Kế Croptop Độc Đáo:</strong> Với kiểu dáng croptop ngắn cùng với các chi tiết đáng yêu,
                            chiếc áo này sẽ giúp bạn tự tin và nổi bật ở mọi nơi.</p>
                    </li>
                    <li>
                        <p><strong>Chất Liệu Chất Lượng:</strong> Áo được làm từ chất liệu cotton cao cấp, giúp thoáng mát và
                            thoải mái cho cơ thể.</p>
                    </li>
                    <li>
                        <p><strong>Size Đa Dạng:</strong> Áo croptop của chúng tôi có sẵn trong 3 size: S, M, L, phù hợp với mọi
                            hình dáng cơ thể.</p>
                    </li>
                    <li>
                        <p><strong>Màu Sắc Phong Phú:</strong> Chọn từ ba màu sắc tươi sáng: hồng ngọt ngào, xanh aqua sôi động
                            và đen bí ẩn, để tạo điểm nhấn cho phong cách của bạn.</p>
                    </li>
                    <li>
                        <p><strong>Dễ Phối Hợp:</strong> Áo croptop dễ dàng phối hợp với nhiều loại quần áo khác nhau, từ quần
                            jeans đến chân váy hoặc quần short.</p>
                    </li>
                    <li>
                        <p><strong>Phù Hợp Cho Mọi Dịp:</strong> Từ dạo phố cùng bạn bè đến dự tiệc cuối tuần hay thậm chí là
                            một buổi hẹn hò, áo croptop sẽ là lựa chọn hoàn hảo cho bạn.</p>
                    </li>
                </ol>
                <h4>Hãy Mua Ngay!</h4>
                <p>Đừng bỏ lỡ cơ hội sở hữu chiếc áo croptop đáng yêu này. Hãy thêm sự mới mẻ và tươi trẻ vào tủ đồ của bạn với
                    chiếc áo croptop thời trang này. Đặt hàng ngay hôm nay và tạo nên phong cách riêng của bạn!</p>
                <hr>
                <p>Bạn có thể điều chỉnh và thêm bớt các điểm mạnh và đặc điểm sản phẩm tùy thuộc vào nhu cầu và phong cách của
                    sản phẩm của bạn.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Quần thể thao',
                'description' => '<h3>Quần Thể Thao - Sự Kết Hợp Hoàn Hảo Giữa Phong Cách và Sự Thoải Mái</h3>
                <p>Bạn đang tìm kiếm một chiếc quần thể thao vừa thời trang vừa thoải mái cho các hoạt động thể chất hàng ngày?
                    Quần thể thao của chúng tôi sẽ là sự lựa chọn hoàn hảo cho bạn! Với thiết kế đơn giản nhưng vẫn đầy phong
                    cách, và chất liệu thoáng mát, chiếc quần này sẽ làm bạn cảm thấy tự tin và thoải mái trong mọi tình huống.
                </p>
                <h4>Đặc Điểm Nổi Bật:</h4>
                <ol>
                    <li>
                        <p><strong>Thiết Kế Thể Thao Tiện Dụng:</strong> Với kiểu dáng thoải mái và linh hoạt, chiếc quần này là
                            sự kết hợp hoàn hảo giữa phong cách thể thao và sự thoải mái hàng ngày.</p>
                    </li>
                    <li>
                        <p><strong>Chất Liệu Chất Lượng:</strong> Quần được làm từ vải cotton cao cấp, thoáng mát và mềm mại,
                            giúp bạn cảm thấy thoải mái suốt cả ngày dài.</p>
                    </li>
                    <li>
                        <p><strong>Size Đa Dạng:</strong> Quần thể thao của chúng tôi có sẵn trong 3 size: S, M, L, phù hợp với
                            mọi hình dáng cơ thể.</p>
                    </li>
                    <li>
                        <p><strong>Màu Sắc Phong Phú:</strong> Chọn từ ba màu sắc đa dạng: hồng nữ tính, xanh aqua tươi sáng và
                            đen bí ẩn, bạn có thể dễ dàng phối hợp với các trang phục thể thao hoặc hàng ngày khác nhau.</p>
                    </li>
                    <li>
                        <p><strong>Đa Dạng Các Hoạt Động:</strong> Phù hợp cho mọi hoạt động, từ yoga và gym đến jogging và thậm
                            chí là dạo chơi cùng bạn bè.</p>
                    </li>
                </ol>
                <h4>Hãy Mua Ngay!</h4>
                <p>Đừng chần chừ! Hãy thêm chiếc quần thể thao đa năng này vào tủ đồ của bạn ngay hôm nay. Đặt hàng ngay bây giờ
                    để trải nghiệm sự thoải mái và phong cách mà sản phẩm mang lại!</p>
                <hr>
                <p>Bạn có thể tùy chỉnh và bổ sung thêm các điểm mạnh và đặc điểm của sản phẩm tùy thuộc vào nhu cầu và phong
                    cách của sản phẩm của bạn.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Asus gaming tuf f15 fx506lh',
                'description' => ' <h3>ASUS Gaming TUF F15 FX506LH: Sức Mạnh và Độ Bền Cho Trải Nghiệm Gaming Hấp Dẫn</h3>
                <h4>Thiết Kế Mạnh Mẽ và Cứng Cỏi:</h4>
                <p>ASUS Gaming TUF F15 FX506LH là một trong những dòng laptop gaming hàng đầu của ASUS, nổi bật với thiết kế
                    mạnh mẽ và cứng cỏi, đem lại trải nghiệm gaming tuyệt vời và độ bền bỉ vượt trội.</p>
                <h4>Hiệu Năng Vượt Trội:</h4>
                <p>Được trang bị bộ vi xử lý Intel Core thế hệ mới nhất cùng với card đồ họa NVIDIA GeForce GTX, ASUS Gaming TUF
                    F15 FX506LH mang đến hiệu năng vượt trội, đảm bảo bạn có thể chơi mọi tựa game yêu thích mà không gặp trở
                    ngại.</p>
                <h4>Màn Hình Chất Lượng:</h4>
                <p>Màn hình Full HD với tốc độ làm mới cao giúp tái hiện hình ảnh sắc nét, sống động, đồng thời giảm thiểu hiện
                    tượng nhòe và giật lag, mang đến trải nghiệm hình ảnh mượt mà và chân thực nhất.</p>
                <h4>Thiết Kế Ergonomic:</h4>
                <p>Với bàn phím chiếu sáng RGB và thiết kế ergonomic, ASUS Gaming TUF F15 FX506LH không chỉ giúp người dùng dễ
                    dàng thực hiện các thao tác gaming mà còn đảm bảo cảm giác thoải mái và không mỏi tay trong thời gian dài sử
                    dụng.</p>
                <h4>Khả Năng Tản Nhiệt Hiệu Quả:</h4>
                <p>Hệ thống tản nhiệt kép của ASUS với các quạt nhiệt động và các ống dẫn nhiệt đồng bộ được tối ưu hóa, giúp
                    duy trì nhiệt độ ổn định và hiệu quả, giảm nguy cơ quá nhiệt và tăng hiệu suất cho laptop.</p>
                <h4>Các Tính Năng Tiện Ích:</h4>
                <p>ASUS Gaming TUF F15 FX506LH còn được trang bị nhiều tính năng tiện ích như cổng kết nối đa dạng, hệ thống âm
                    thanh chất lượng cao, và công nghệ truyền dẫn dữ liệu nhanh chóng.</p>
                <h4>Kết Luận:</h4>
                <p>Tổng quan, ASUS Gaming TUF F15 FX506LH là sự lựa chọn lý tưởng cho những game thủ đam mê game và cần một
                    chiếc laptop mạnh mẽ, bền bỉ và đáng tin cậy.</p>
                <hr>
                <p>Thông tin trên giúp bạn hiểu rõ hơn về laptop ASUS Gaming TUF F15 FX506LH và những tính năng nổi bật của nó
                    trong trải nghiệm gaming và công việc hàng ngày.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Dell vostro 14 3000',
                'description' => '<p>Dell Vostro 14 3000 là một trong những dòng laptop doanh nhân phổ thông của Dell, được thiết kế để đáp ứng
                nhu cầu công việc hàng ngày của người dùng văn phòng và doanh nghiệp nhỏ. Dưới đây là một số điểm nổi bật và
                thông tin chính về Dell Vostro 14 3000:</p>
            <h3>1. Thiết Kế Mỏng Nhẹ và Tinh Tế:</h3>
            <p>Dell Vostro 14 3000 có thiết kế mỏng nhẹ và tinh tế, với trọng lượng nhẹ giúp bạn dễ dàng mang theo bên mình
                khi di chuyển.</p>
            <h3>2. Hiệu Năng Đáng Tin Cậy:</h3>
            <p>Với bộ vi xử lý Intel Core thế hệ mới nhất và tùy chọn card đồ họa tích hợp, Dell Vostro 14 3000 cung cấp
                hiệu suất đáng tin cậy cho các tác vụ văn phòng cơ bản và đa nhiệm hợp lý.</p>
            <h3>3. Màn Hình Chất Lượng:</h3>
            <p>Màn hình của Dell Vostro 14 3000 có kích thước 14 inch, độ phân giải cao, mang lại hình ảnh sắc nét và màu
                sắc sống động trong quá trình làm việc và giải trí.</p>
            <h3>4. Bảo Mật và An Toàn:</h3>
            <p>Dell Vostro 14 3000 đi kèm với các tính năng bảo mật như cảm biến vân tay và TPM (Trusted Platform Module),
                giúp bảo vệ dữ liệu quan trọng của bạn khỏi các mối đe dọa trực tuyến.</p>
            <h3>5. Tính Linh Hoạt và Kết Nối:</h3>
            <p>Laptop này được trang bị đầy đủ các cổng kết nối như USB, HDMI và khe cắm thẻ nhớ, giúp bạn dễ dàng kết nối
                với các thiết bị ngoại vi và máy chiếu.</p>
            <h3>6. Hiệu Quả Pin:</h3>
            <p>Pin của Dell Vostro 14 3000 cho phép sử dụng lâu dài trong một lần sạc, giúp bạn tăng cường năng suất mà
                không cần lo lắng về việc sạc pin thường xuyên.</p>
            <p>Dell Vostro 14 3000 là một lựa chọn phù hợp cho những người dùng doanh nhân và văn phòng, cung cấp hiệu suất
                ổn định, tính linh hoạt và sự đáng tin cậy trong một thiết kế mỏng nhẹ và tiện lợi.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Laptop HP VICTUS 15-fa1155TX 952R1PA',
                'description' => '<h3>Laptop HP VICTUS 15-fa1155TX 952R1PA: Sức Mạnh và Độ Bền Cho Trải Nghiệm Gaming Chuyên Nghiệp</h3>
                <h4>Hiệu Suất Mạnh Mẽ:</h4>
                <p>Laptop HP VICTUS 15-fa1155TX 952R1PA là một lựa chọn lý tưởng cho những game thủ đam mê trò chơi nặng.
                    Được trang bị bộ vi xử lý Intel Core i7 thế hệ mới nhất và card đồ họa NVIDIA GeForce RTX, máy đảm bảo
                    mang lại hiệu suất vượt trội trong mọi trò chơi.</p>
                <h4>Màn Hình Chất Lượng:</h4>
                <p>Màn hình Full HD 15.6 inch của HP VICTUS 15-fa1155TX 952R1PA tái tạo màu sắc sắc nét và chân thực, giúp
                    bạn tận hưởng trải nghiệm gaming đỉnh cao và xem phim sống động.</p>
                <h4>Thiết Kế Cứng Cỏi:</h4>
                <p>Với thiết kế cứng cỏi và chắc chắn, HP VICTUS 15-fa1155TX 952R1PA không chỉ giúp bảo vệ các linh kiện bên
                    trong mà còn tạo nên sự sang trọng và chuyên nghiệp.</p>
                <h4>Bàn Phím Gaming:</h4>
                <p>Bàn phím của máy được thiết kế dành riêng cho game thủ, với các phím bấm chắc chắn và đèn nền RGB điều
                    chỉnh được, giúp bạn dễ dàng thực hiện các thao tác trong trò chơi.</p>
                <h4>Khả Năng Tản Nhiệt Hiệu Quả:</h4>
                <p>Hệ thống tản nhiệt hiệu quả của HP VICTUS 15-fa1155TX 952R1PA giúp duy trì nhiệt độ ổn định trong suốt
                    quá trình sử dụng, đảm bảo hiệu suất cao và trải nghiệm chơi game mượt mà.</p>
                <h4>Kết Nối Đa Dạng:</h4>
                <p>Laptop này đi kèm với nhiều cổng kết nối như USB, HDMI và khe cắm thẻ nhớ, giúp bạn dễ dàng kết nối với
                    các thiết bị ngoại vi và màn hình phụ.</p>
                <h4>Kết Luận:</h4>
                <p>Tổng quan, Laptop HP VICTUS 15-fa1155TX 952R1PA là sự kết hợp hoàn hảo giữa sức mạnh, độ bền và hiệu
                    suất, là lựa chọn không thể bỏ qua cho những game thủ chuyên nghiệp và người dùng cần một chiếc laptop
                    mạnh mẽ và đa dụng.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'PC Intel i3-12100F/ VGA GTX 1650',
                'description' => '<h3>PC Intel i3-12100F / VGA GTX 1650: Sức Mạnh và Hiệu Năng Cho Trải Nghiệm Gaming và Công Việc</h3>
                <h4>Hiệu Suất Ưu Việt:</h4>
                <p>PC Intel i3-12100F với card đồ họa GTX 1650 là một giải pháp hiệu quả cho những người dùng muốn trải nghiệm
                    gaming cũng như làm việc văn phòng một cách mượt mà và hiệu quả.</p>
                <h4>Bộ Vi Xử Lý Mạnh Mẽ:</h4>
                <p>Với bộ vi xử lý Intel i3-12100F, máy tính này cung cấp hiệu suất ổn định và đáng tin cậy trong việc xử lý các
                    tác vụ hàng ngày, từ lướt web cho đến xem video và làm việc với các ứng dụng văn phòng.</p>
                <h4>Card Đồ Họa GTX 1650:</h4>
                <p>Card đồ họa GTX 1650 được biết đến với hiệu suất đồ họa tốt và khả năng xử lý game ở mức độ trung bình đến
                    cao. Với card đồ họa này, bạn có thể trải nghiệm các tựa game phổ biến và một số ứng dụng đồ họa cơ bản một
                    cách mượt mà.</p>
                <h4>Bộ Nhớ RAM:</h4>
                <p>PC này thường được trang bị một lượng RAM phù hợp, đủ để xử lý nhiều tác vụ một cách mượt mà và hiệu quả.
                    Việc nâng cấp RAM có thể được thực hiện để tăng hiệu suất cho máy tính.</p>
                <h4>Bộ Vỏ Máy Tiện Lợi:</h4>
                <p>Với thiết kế bộ vỏ máy tiện lợi và dễ dàng lắp ráp, bạn có thể dễ dàng thay đổi và nâng cấp linh kiện bên
                    trong máy tính một cách linh hoạt và thuận tiện.</p>
                <h4>Kết Luận:</h4>
                <p>PC Intel i3-12100F / VGA GTX 1650 là một lựa chọn lý tưởng cho những người dùng cần một máy tính với hiệu
                    suất đủ mạnh mẽ để xử lý các tác vụ hàng ngày và trải nghiệm gaming ở mức độ trung bình đến cao một cách
                    mượt mà và ổn định.</p>
                <hr>
                <p>Thông tin trên giúp bạn hiểu rõ hơn về PC Intel i3-12100F và card đồ họa GTX 1650, cũng như sức mạnh và tính
                    linh hoạt của nó trong các tác vụ hàng ngày và trải nghiệm gaming.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'PC AMD R5-5600X/ VGA RX 6600',
                'description' => '   <h3>PC AMD R5-5600X / VGA RX 6600: Sức Mạnh và Hiệu Năng Cho Trải Nghiệm Gaming Cao Cấp</h3>
                <h4>Hiệu Suất Đỉnh Cao:</h4>
                <p>PC AMD R5-5600X với card đồ họa RX 6600 là sự kết hợp hoàn hảo giữa bộ vi xử lý mạnh mẽ và card đồ họa hiện
                    đại, đem lại trải nghiệm gaming mượt mà và đỉnh cao.</p>
                <h4>Bộ Vi Xử Lý AMD R5-5600X:</h4>
                <p>Với bộ vi xử lý AMD Ryzen 5 5600X, máy tính này cung cấp hiệu suất đa nhiệm mạnh mẽ và xử lý đa luồng, đảm
                    bảo bạn có thể thực hiện nhiều tác vụ đồng thời một cách mượt mà và hiệu quả.</p>
                <h4>Card Đồ Họa RX 6600:</h4>
                <p>Card đồ họa RX 6600 của AMD là một lựa chọn tuyệt vời cho trải nghiệm gaming cao cấp. Với hiệu suất đồ họa
                    mạnh mẽ, bạn có thể thưởng thức các tựa game mới nhất ở độ phân giải cao và tốc độ khung hình mượt mà.</p>
                <h4>Bộ Nhớ RAM và Lưu Trữ:</h4>
                <p>PC này thường được trang bị một lượng RAM DDR4 cao cấp và ổ cứng SSD nhanh chóng, giúp bạn tải nhanh các ứng
                    dụng và trải nghiệm thời gian phản ứng nhanh chóng.</p>
                <h4>Thiết Kế Mạnh Mẽ:</h4>
                <p>Với thiết kế bộ vỏ máy chắc chắn và hiện đại, PC AMD R5-5600X / VGA RX 6600 không chỉ mang lại sự sang trọng
                    mà còn đảm bảo hệ thống linh hoạt và dễ dàng nâng cấp trong tương lai.</p>
                <h4>Tản Nhiệt Hiệu Quả:</h4>
                <p>Hệ thống tản nhiệt được cải thiện giúp duy trì nhiệt độ ổn định cho cả CPU và GPU, giảm thiểu nguy cơ quá
                    nhiệt và đảm bảo hiệu suất máy tính được duy trì ổn định trong mọi tình huống.</p>
                <h4>Kết Luận:</h4>
                <p>PC AMD R5-5600X / VGA RX 6600 là sự lựa chọn tuyệt vời cho những game thủ đòi hỏi hiệu suất cao và trải
                    nghiệm gaming đỉnh cao. Với sức mạnh và tính linh hoạt, máy tính này là một đối tác đáng tin cậy cho mọi nhu
                    cầu gaming và đa phương tiện.</p>
                <hr>
                <p>Thông tin trên giúp bạn hiểu rõ hơn về PC AMD R5-5600X và card đồ họa RX 6600, cũng như sức mạnh và tính linh
                    hoạt của nó trong các trò chơi và công việc đa nhiệm.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'PC Intel i5-12400F/ VGA RX 6600',
                'description' => '<h3>PC Intel i5-12400F / VGA RX 6600: Sức Mạnh và Hiệu Năng Cho Trải Nghiệm Gaming và Công Việc</h3>
                <h4>Hiệu Suất Mạnh Mẽ:</h4>
                <p>PC Intel i5-12400F với card đồ họa RX 6600 là một giải pháp đáng tin cậy cho trải nghiệm gaming và công việc
                    đa nhiệm hàng ngày.</p>
                <h4>Bộ Vi Xử Lý Intel i5-12400F:</h4>
                <p>Với bộ vi xử lý Intel Core i5 thế hệ mới nhất, máy tính này cung cấp hiệu suất ổn định và đáng tin cậy trong
                    xử lý các tác vụ văn phòng, đồ họa và gaming.</p>
                <h4>Card Đồ Họa RX 6600:</h4>
                <p>Card đồ họa RX 6600 của AMD là một lựa chọn tuyệt vời cho trải nghiệm gaming cao cấp. Với hiệu suất đồ họa
                    mạnh mẽ, bạn có thể thưởng thức các tựa game mới nhất ở độ phân giải cao và tốc độ khung hình mượt mà.</p>
                <h4>Bộ Nhớ RAM và Lưu Trữ:</h4>
                <p>PC này thường được trang bị một lượng RAM DDR4 cao cấp và ổ cứng SSD nhanh chóng, giúp bạn tải nhanh các ứng
                    dụng và trải nghiệm thời gian phản ứng nhanh chóng.</p>
                <h4>Thiết Kế Linh Hoạt:</h4>
                <p>Với thiết kế bộ vỏ máy tiện lợi và dễ dàng nâng cấp, bạn có thể tùy chỉnh và cải thiện hệ thống theo nhu cầu
                    và sở thích của mình.</p>
                <h4>Tản Nhiệt Hiệu Quả:</h4>
                <p>Hệ thống tản nhiệt được cải thiện giúp duy trì nhiệt độ ổn định cho cả CPU và GPU, giảm thiểu nguy cơ quá
                    nhiệt và đảm bảo hiệu suất máy tính được duy trì ổn định trong mọi tình huống.</p>
                <h4>Kết Luận:</h4>
                <p>PC Intel i5-12400F / VGA RX 6600 là một sự lựa chọn lý tưởng cho những người dùng đòi hỏi hiệu suất cao trong
                    gaming và công việc. Với sức mạnh và tính linh hoạt, máy tính này là một đối tác đáng tin cậy cho mọi nhu
                    cầu của bạn.</p>
                <hr>
                <p>Thông tin trên giúp bạn hiểu rõ hơn về PC Intel i5-12400F và card đồ họa RX 6600, cũng như sức mạnh và tính
                    linh hoạt của nó trong các trò chơi và công việc đa nhiệm.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Son 3CE',
                'description' => '  <p>3CE là một thương hiệu mỹ phẩm Hàn Quốc nổi tiếng, chuyên sản xuất các sản phẩm trang điểm chất lượng cao,
                trong đó có son môi. Dưới đây là một số điểm nổi bật và thông tin về son 3CE:</p>
            <h3>1. Chất Lượng và Đa Dạng Màu Sắc:</h3>
            <ul>
                <li>
                    <p>Son 3CE nổi tiếng với chất lượng màu sắc đậm đặc và lên màu chuẩn xác, đem lại hiệu ứng lì hoặc lấp
                        lánh tùy thuộc vào loại son bạn chọn.</p>
                </li>
                <li>
                    <p>Thương hiệu này cung cấp một loạt các gam màu phong phú, từ những màu nude tinh tế, nhẹ nhàng cho đến
                        những màu sắc táo bạo, cá tính.</p>
                </li>
            </ul>
            <h3>2. Cảm Giác Mềm Mịn:</h3>
            <ul>
                <li>
                    <p>Son 3CE thường có thành phần dưỡng ẩm cao, giúp giữ cho đôi môi luôn mềm mịn và không bị khô ráp sau
                        khi sử dụng.</p>
                </li>
                <li>
                    <p>Texture của son thường rất mịn màng và dễ dàng lướt trên môi mà không gây cảm giác nặng nề.</p>
                </li>
            </ul>
            <h3>3. Thiết Kế Bắt Mắt:</h3>
            <ul>
                <li>
                    <p>Son 3CE thường được thiết kế với bao bì độc đáo, hiện đại và sang trọng, thu hút sự chú ý của người
                        tiêu dùng.</p>
                </li>
                <li>
                    <p>Bên cạnh đó, thiết kế dạng hũ hoặc thanh son cũng rất tiện lợi và dễ dàng mang theo bên mình.</p>
                </li>
            </ul>
            <h3>4. Độ Bền Màu:</h3>
            <ul>
                <li>
                    <p>Son 3CE thường có độ bám màu tốt, giữ màu trên môi trong thời gian dài mà không cần phải tốn công sửa
                        tốn bất kỳ.</p>
                </li>
                <li>
                    <p>Nhiều phiên bản của son 3CE cũng có khả năng bền màu sau khi ăn uống hoặc tiếp xúc với nước.</p>
                </li>
            </ul>
            <h3>5. Đa Dạng Dòng Sản Phẩm:</h3>
            <ul>
                <li>3CE cung cấp nhiều dòng sản phẩm son khác nhau như Velvet Lip Tint, Matte Lip Color, Velvet Lip Stick,
                    và dòng Lip Lacquer, mỗi dòng đều có những ưu điểm và đặc tính riêng biệt.</li>
            </ul>
            <p>Son 3CE thường là sự lựa chọn yêu thích của nhiều người yêu thẩm mỹ, đặc biệt là những ai yêu thích phong
                cách trang điểm Hàn Quốc hiện đại và cá tính. Sự đa dạng về màu sắc, chất lượng và thiết kế đẹp mắt là những
                điểm mạnh giúp son 3CE luôn nằm trong tâm trí của người tiêu dùng.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Son Dior Addict Lip Tattoo 541 Natural Sienna',
                'description' => ' <p>Son Dior Addict Lip Tattoo 541 Natural Sienna là một sản phẩm trang điểm môi đẳng cấp từ thương hiệu Dior,
                một trong những nhãn hiệu mỹ phẩm cao cấp và uy tín hàng đầu trên thị trường. Dưới đây là một số điểm nổi
                bật và thông tin về sản phẩm này:</p>
            <h3>1. Chất Lượng và Độ Bền:</h3>
            <ul>
                <li>Son Dior Addict Lip Tattoo 541 Natural Sienna nổi bật với chất lượng cao cấp và độ bền màu lâu trôi.
                    Công thức của son được thiết kế để giữ màu lên môi suốt nhiều giờ liền mà không bị phai màu.</li>
            </ul>
            <h3>2. Cảm Giác Nhẹ Nhàng:</h3>
            <ul>
                <li>Son có texture mỏng nhẹ và mịn màng, tạo cảm giác thoải mái khi đánh lên môi mà không gây cảm giác khó
                    chịu hoặc nặng môi.</li>
            </ul>
            <h3>3. Màu Sắc Tự Nhiên:</h3>
            <ul>
                <li>Màu sắc Natural Sienna là một sắc màu tự nhiên, dễ dàng kết hợp với nhiều phong cách trang điểm khác
                    nhau. Sắc màu này mang lại vẻ đẹp tinh tế và gợi cảm cho đôi môi.</li>
            </ul>
            <h3>4. Thiết Kế Sang Trọng:</h3>
            <ul>
                <li>Son Dior Addict Lip Tattoo được thiết kế với hộp đựng bằng thủy tinh cao cấp và nắp son có logo Dior
                    sang trọng, tạo nên sự lịch lãm và quý phái khi sử dụng.</li>
            </ul>
            <h3>5. Dưỡng Môi:</h3>
            <ul>
                <li>Ngoài việc tạo màu cho môi, son Dior Addict Lip Tattoo còn chứa các thành phần dưỡng ẩm, giúp môi luôn
                    mềm mại và mịn màng.</li>
            </ul>
            <h3>6. Đa Dạng Ưu Đãi:</h3>
            <ul>
                <li>Sản phẩm thường được phân phối cùng với các chương trình ưu đãi, bộ sưu tập màu sắc đa dạng, giúp người
                    dùng dễ dàng lựa chọn theo sở thích cá nhân.</li>
            </ul>
            <p>Son Dior Addict Lip Tattoo 541 Natural Sienna là một lựa chọn hoàn hảo cho những ai yêu thích son môi chất
                lượng cao và mong muốn một đôi môi tự nhiên và quyến rũ. Sản phẩm này không chỉ làm hài lòng bởi chất lượng
                mà còn bởi sự sang trọng và tiện ích mà nó mang lại.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Son Gucci The Painted Veil Rouge Mat Lipstick 201',
                'description' => ' <h3>Son Gucci The Painted Veil Rouge Mat Lipstick 201: Sự Kết Hợp Hoàn Hảo Giữa Thời Trang và Mỹ Phẩm</h3>
                <h4>1. Chất Lượng và Đẳng Cấp:</h4>
                <ul>
                    <li>Son Gucci The Painted Veil Rouge Mat Lipstick 201 là biểu tượng của sự sang trọng và đẳng cấp của thương
                        hiệu Gucci. Với chất lượng vượt trội, son mang lại sự tự tin và phong cách cho người sử dụng.</li>
                </ul>
                <h4>2. Màu Sắc Tinh Tế:</h4>
                <ul>
                    <li>Màu sắc của son Rouge Mat Lipstick 201 được thiết kế tỉ mỉ, tinh tế và lôi cuốn. Tông màu The Painted
                        Veil là sự kết hợp hoàn hảo giữa sắc hồng nude và chút ánh cam, tạo nên vẻ đẹp ấn tượng và sang trọng.
                    </li>
                </ul>
                <h4>3. Độ Bền Màu:</h4>
                <ul>
                    <li>Son Gucci The Painted Veil Rouge Mat Lipstick 201 có khả năng bám màu tốt và duy trì độ lên màu trong
                        thời gian dài, giúp bạn tự tin với đôi môi tươi tắn suốt cả ngày.</li>
                </ul>
                <h4>4. Texture Mượt Mà:</h4>
                <ul>
                    <li>Với texture mềm mại và mịn màng, son dễ dàng lướt trên môi mà không gây khô hoặc bết dính, mang lại cảm
                        giác thoải mái và tự nhiên cho làn môi.</li>
                </ul>
                <h4>5. Thiết Kế Sang Trọng:</h4>
                <ul>
                    <li>Son được đựng trong hộp đựng màu vàng đặc trưng của Gucci, kèm theo logo Gucci ở phần nắp, tạo nên sự
                        lịch lãm và quý phái khi sử dụng.</li>
                </ul>
                <h4>6. Dưỡng Ẩm Cho Môi:</h4>
                <ul>
                    <li>Ngoài việc tạo màu, son còn chứa các thành phần dưỡng ẩm, giúp môi luôn mềm mại và căng tràn sức sống.
                    </li>
                </ul>
                <h4>7. Lựa Chọn Hoàn Hảo:</h4>
                <ul>
                    <li>Son Gucci The Painted Veil Rouge Mat Lipstick 201 là lựa chọn hoàn hảo cho những ai yêu thích sự sang
                        trọng và chất lượng cao cấp, đồng thời mong muốn sở hữu đôi môi quyến rũ và cuốn hút.</li>
                </ul>
                <hr>
                <p>Son Gucci The Painted Veil Rouge Mat Lipstick 201 không chỉ là một sản phẩm trang điểm môi mà còn là biểu
                    tượng của phong cách và cái đẹp đẳng cấp. Sự kết hợp hoàn hảo giữa chất lượng, màu sắc và thiết kế đã làm
                    nên sức hút và danh tiếng của dòng son Gucci này.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Phấn Má Hồng 3CE Màu Pure Cake - Hồng Đào Cực Baby',
                'description' => '<h3>Phấn Má Hồng 3CE Màu Pure Cake - Hồng Đào Cực Baby: Sắc Hồng Tươi Sáng Cho Làn Da Tươi Tắn</h3>
                <h4>1. Màu Sắc Tươi Sáng:</h4>
                <ul>
                    <li>Phấn má hồng 3CE màu Pure Cake - Hồng Đào mang đến sắc hồng tươi sáng, nhẹ nhàng và cực kỳ tự nhiên. Màu
                        sắc này phản ánh ánh sáng tốt, tạo nên hiệu ứng tươi mới và tươi tắn cho làn da.</li>
                </ul>
                <h4>2. Texture Mịn Màng:</h4>
                <ul>
                    <li>Với texture mịn màng và dễ tán, phấn má hồng 3CE tạo nên lớp màu mềm mịn trên da mà không gây bết dính
                        hay vón cục. Điều này giúp việc tán phấn trở nên dễ dàng và tự nhiên.</li>
                </ul>
                <h4>3. Hiệu Ứng Tự Nhiên:</h4>
                <ul>
                    <li>Phấn má hồng Pure Cake của 3CE không chỉ tạo nên màu sắc tự nhiên mà còn giúp tạo điểm nhấn cho khuôn
                        mặt, tạo cảm giác sức khỏe và tươi mới mà không quá nổi bật.</li>
                </ul>
                <h4>4. Độ Bền Màu:</h4>
                <ul>
                    <li>Sản phẩm có độ bám màu tốt, giữ màu trên da suốt thời gian dài mà không cần phải tán lại. Điều này giúp
                        bạn giữ được vẻ tươi tắn suốt cả ngày dài.</li>
                </ul>
                <h4>5. Thiết Kế Gọn Nhẹ:</h4>
                <ul>
                    <li>Với thiết kế gọn nhẹ và tiện lợi, phấn má hồng 3CE dễ dàng mang theo bên mình và sử dụng bất cứ lúc nào,
                        bất kỳ nơi đâu.</li>
                </ul>
                <h4>6. Thích Hợp Với Mọi Tông Da:</h4>
                <ul>
                    <li>Màu hồng đào của sản phẩm phù hợp với nhiều tông da khác nhau, từ da sáng cho đến da ngăm, tạo nên sự
                        phù hợp và đa dạng trong việc trang điểm.</li>
                </ul>
                <h4>7. Thương Hiệu Uy Tín:</h4>
                <ul>
                    <li>3CE là một thương hiệu mỹ phẩm nổi tiếng đến từ Hàn Quốc, được biết đến với chất lượng sản phẩm cao cấp
                        và thiết kế hiện đại.</li>
                </ul>
                <p>Phấn Má Hồng 3CE Màu Pure Cake - Hồng Đào Cực Baby không chỉ là một sản phẩm trang điểm mà còn là một vật
                    dụng làm đẹp không thể thiếu trong bộ sưu tập của bất kỳ ai yêu thích sự tươi mới và tự nhiên cho làn da. Sự
                    kết hợp hoàn hảo giữa màu sắc, texture và độ bền màu đã tạo nên sức hút đặc biệt của sản phẩm này trong cộng
                    đồng làm đẹp.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Phấn Má Hồng Dior Rouge Blush 219 Rose Montaigne',
                'description' => ' <h3>Phấn Má Hồng Dior Rouge Blush 219 Rose Montaigne: Sắc Hồng Tinh Tế Cho Làn Da Lên Màu Tự Nhiên</h3>
                <p>Phấn Má Hồng Dior Rouge Blush 219 Rose Montaigne là một sản phẩm trang điểm mang đậm dấu ấn của thương hiệu
                    Dior, mang đến sự tươi tắn và sắc hồng tinh tế cho làn da. Được thiết kế với sự tinh tế và chất lượng cao
                    cấp, sản phẩm này là lựa chọn lý tưởng cho những ai yêu thích sự tự tin và quyến rũ.</p>
                <h4>Sắc Hồng Tinh Tế:</h4>
                <p>Phấn má hồng Dior Rouge Blush 219 Rose Montaigne mang đến một tông màu hồng tinh tế, vừa đủ sáng để tạo điểm
                    nhấn cho khuôn mặt mà không gây quá chói chang. Màu sắc này phản ánh ánh sáng một cách tự nhiên, tạo nên vẻ
                    đẹp mềm mại và rạng rỡ cho làn da.</p>
                <h4>Texture Mịn Màng:</h4>
                <p>Với texture mịn màng và dễ tán, phấn má hồng Dior Rouge Blush tạo nên lớp màu mềm mại trên da mà không gây
                    bết dính hay vón cục. Điều này giúp việc tán phấn trở nên dễ dàng và tự nhiên, tạo nên hiệu ứng mềm mại và
                    tự nhiên cho khuôn mặt.</p>
                <h4>Độ Bền Màu:</h4>
                <p>Sản phẩm có độ bám màu tốt, giữ màu trên da suốt thời gian dài mà không cần phải tán lại. Điều này giúp bạn
                    giữ được vẻ tươi tắn và rạng rỡ suốt cả ngày dài, từ buổi sáng cho đến cuối ngày.</p>
                <h4>Thiết Kế Sang Trọng:</h4>
                <p>Với thiết kế sang trọng và đẳng cấp, phấn má hồng Dior Rouge Blush không chỉ là sản phẩm trang điểm mà còn là
                    một vật dụng làm đẹp lưu niệm. Hộp đựng màu đen cổ điển kết hợp với logo Dior ấn tượng tạo nên sự đẳng cấp
                    và quý phái.</p>
                <h4>Thích Hợp Với Mọi Tông Da:</h4>
                <p>Màu hồng tinh tế của sản phẩm phù hợp với nhiều tông da khác nhau, từ da sáng cho đến da ngăm, tạo nên sự phù
                    hợp và đa dạng trong việc trang điểm.</p>
                <p>Phấn Má Hồng Dior Rouge Blush 219 Rose Montaigne không chỉ là một sản phẩm trang điểm mà còn là biểu tượng
                    của sự đẳng cấp và phong cách. Sự kết hợp hoàn hảo giữa màu sắc, texture và độ bền màu đã tạo nên sức hút và
                    danh tiếng của dòng sản phẩm này trong cộng đồng làm đẹp.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Phấn Má Hồng Dior Rouge Blush 028 Actrice',
                'description' => '<h3>Phấn Má Hồng Dior Rouge Blush 028 Actrice: Sắc Hồng Nữ Tính Cho Làn Da Sống Động</h3>
                <p>Phấn Má Hồng Dior Rouge Blush 028 Actrice là một sản phẩm trang điểm vô cùng tinh tế từ thương hiệu mỹ phẩm
                    danh tiếng Dior. Với sắc hồng nữ tính, sản phẩm này không chỉ làm cho làn da trở nên sáng sủa mà còn giúp
                    tôn lên vẻ đẹp tự nhiên và quyến rũ.</p>
                <h4>Sắc Hồng Nữ Tính:</h4>
                <p>Phấn má hồng Dior Rouge Blush 028 Actrice mang đến một tông màu hồng nữ tính, dịu dàng và rất phù hợp cho
                    những cô nàng mong muốn có được vẻ đẹp nhẹ nhàng nhưng vẫn đầy sức sống.</p>
                <h4>Texture Mềm Mại:</h4>
                <p>Với texture mềm mại và dễ tán, phấn má hồng Dior Rouge Blush tạo nên lớp màu mịn màng trên da mà không gây
                    khô ráp hay nặng nề. Điều này giúp việc trang điểm trở nên dễ dàng hơn và cho kết quả tự nhiên.</p>
                <h4>Độ Bền Màu:</h4>
                <p>Sản phẩm có độ bám màu tốt, giữ màu trên da suốt thời gian dài mà không cần phải tán lại. Điều này giúp bạn
                    giữ được vẻ tươi tắn và rạng rỡ suốt cả ngày, từ buổi sáng cho đến cuối ngày làm việc.</p>
                <h4>Thiết Kế Sang Trọng:</h4>
                <p>Với thiết kế sang trọng và đẳng cấp, phấn má hồng Dior Rouge Blush 028 Actrice không chỉ là sản phẩm trang
                    điểm mà còn là một phần của phong cách sống độc đáo của bạn. Thiết kế đơn giản nhưng tinh tế của hộp phấn
                    cùng với logo Dior nổi bật tạo nên sự thanh lịch và quý phái.</p>
                <h4>Thích Hợp Với Mọi Tông Da:</h4>
                <p>Màu hồng dịu dàng của sản phẩm phù hợp với nhiều tông da khác nhau, từ da sáng cho đến da ngăm, tạo nên sự
                    phù hợp và đa dạng trong việc trang điểm.</p>
                <p>Phấn Má Hồng Dior Rouge Blush 028 Actrice là một sản phẩm không thể thiếu trong bộ sưu tập trang điểm của bất
                    kỳ ai yêu thích sự nữ tính và tinh tế. Sự kết hợp hoàn hảo giữa màu sắc, texture và độ bền màu đã tạo nên
                    sức hút và danh tiếng của dòng sản phẩm này trong cộng đồng làm đẹp.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Quần thun đá banh',
                'description' => '<h3>Quần Thun Đá Banh: Sự Lựa Chọn Hoàn Hảo Cho Các Hoạt Động Thể Thao</h3>
                <p>Quần thun đá banh là một sản phẩm quan trọng không thể thiếu đối với những người yêu thích hoạt động thể
                    thao đá banh. Với thiết kế chuyên biệt và chất liệu cao cấp, quần thun đá banh không chỉ mang lại sự
                    thoải mái và linh hoạt trong mỗi động tác mà còn đảm bảo sự bảo vệ cho cơ thể của người mặc.</p>
                <h4>1. Chất Liệu Chất Lượng:</h4>
                <p>Quần thun đá banh thường được làm từ các loại vải co giãn, như polyester hoặc spandex, giúp tạo sự thoải
                    mái và linh hoạt trong khi vận động. Chất liệu này cũng giúp thoát mồ hôi hiệu quả, giữ cho cơ thể luôn
                    khô ráo và thoải mái trong suốt quá trình hoạt động.</p>
                <h4>2. Thiết Kế Đặc Biệt:</h4>
                <p>Thiết kế của quần thun đá banh thường đi kèm với độ co giãn tốt và đường may chắc chắn, tạo nên sự thoải
                    mái và linh hoạt cho người mặc trong mọi tình huống. Các phần đường chỉ may được tối ưu hóa để giảm
                    thiểu cảm giác không thoải mái hoặc gò bó.</p>
                <h4>3. Bảo Vệ và An Toàn:</h4>
                <p>Quần thun đá banh thường được thiết kế để cung cấp sự hỗ trợ cho các cơ bắp chủ chốt như đùi và háng,
                    giúp giảm thiểu nguy cơ chấn thương trong quá trình tham gia các hoạt động thể thao.</p>
                <h4>4. Đa Dạng Mẫu Mã:</h4>
                <p>Với sự phát triển của ngành công nghiệp thể thao, người dùng có thể dễ dàng tìm thấy quần thun đá banh
                    với nhiều mẫu mã và kiểu dáng đa dạng, từ những mẫu đơn giản với màu sắc cơ bản đến những mẫu thời trang
                    với họa tiết và logo của các thương hiệu nổi tiếng.</p>
                <h4>5. Linh Hoạt Trong Sử Dụng:</h4>
                <p>Quần thun đá banh không chỉ dành cho các buổi tập luyện và thi đấu mà còn phù hợp cho mọi hoạt động thể
                    thao khác như chạy bộ, tập gym, yoga, và các hoạt động ngoài trời khác.</p>
                <p>Với những ưu điểm vượt trội về chất liệu, thiết kế và tính linh hoạt, quần thun đá banh là sự lựa chọn
                    hàng đầu cho những người yêu thích hoạt động thể thao và muốn đảm bảo sự thoải mái và an toàn cho cơ thể
                    trong mọi tình huống.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Quần âu dự tiệc',
                'description' => '<h3>Quần Âu Dự Tiệc: Phong Cách Lịch Lãm và Sang Trọng</h3>
                <p>Quần âu dự tiệc là một phần không thể thiếu trong tủ đồ của mọi quý ông khi họ cần diện trang phục lịch lãm
                    và sang trọng cho các dịp đặc biệt như dự tiệc, tiệc cưới, hoặc sự kiện quan trọng. Với thiết kế đẳng cấp và
                    chất liệu cao cấp, quần âu dự tiệc không chỉ là biểu tượng của phong cách mà còn là sự tự tin và đẳng cấp
                    của người mặc.</p>
                <h4>1. Chất Liệu Chất Lượng:</h4>
                <p>Quần âu dự tiệc thường được làm từ các loại vải cao cấp như len, kate, hoặc lụa, tạo nên sự mềm mại và thoải
                    mái cho người mặc. Chất liệu này cũng giữ cho quần luôn giữ được form dáng và không nhăn nhúm sau mỗi lần
                    mặc.</p>
                <h4>2. Thiết Kế Lịch Lãm:</h4>
                <p>Thiết kế của quần âu dự tiệc thường mang đậm phong cách lịch lãm và tinh tế, với các đường may chắc chắn và
                    cẩn thận. Đặc biệt, quần âu thường có cắt cúp tinh tế, giúp tôn lên vẻ đẳng cấp và phong cách cho người mặc.
                </p>
                <h4>3. Phong Cách Đa Dạng:</h4>
                <p>Quần âu dự tiệc đa dạng về kiểu dáng và màu sắc, từ quần âu cổ điển đến quần âu cách điệu hiện đại. Người mặc
                    có thể chọn lựa giữa các màu sắc truyền thống như đen, xám, và navy, hoặc thử nghiệm với những gam màu sáng
                    hơn như trắng, kem, hoặc pastel.</p>
                <h4>4. Linh Hoạt Trong Sử Dụng:</h4>
                <p>Mặc dù được thiết kế cho các dịp dự tiệc và sự kiện đặc biệt, nhưng quần âu cũng có thể phối hợp linh hoạt
                    với nhiều loại áo sơ mi, áo vest, hoặc áo thun để tạo nên phong cách ấn tượng trong các buổi gặp gỡ, công
                    việc, hoặc du lịch.</p>
                <h4>5. Biểu Tượng Của Phong Cách Đàn Ông:</h4>
                <p>Quần âu dự tiệc không chỉ là biểu tượng của sự lịch lãm và sang trọng mà còn là một phần không thể thiếu của
                    phong cách đàn ông hiện đại. Sự tự tin và phong cách của người mặc sẽ được nâng cao đáng kể khi diện một
                    chiếc quần âu dự tiệc đẳng cấp.</p>
                <p>Với những đặc điểm vượt trội về chất liệu, thiết kế và phong cách, quần âu dự tiệc là sự lựa chọn hoàn hảo
                    cho mọi quý ông muốn tỏa sáng và ghi điểm trong mọi dịp tiệc tùng và sự kiện đặc biệt.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_store' => $store->random()->id,
                'id_category' =>  $category->random()->id,
                'name' => 'Áo khoác uniqlo',
                'description' => '<h3>Áo Khoác Uniqlo: Sự Kết Hợp Hoàn Hảo Giữa Phong Cách và Tiện Ích</h3>
                <p>Áo khoác Uniqlo là biểu tượng của sự đơn giản, tiện dụng và phong cách hiện đại. Với chất liệu chất lượng,
                    thiết kế tinh tế và đa dạng về kiểu dáng, áo khoác Uniqlo không chỉ là một lựa chọn thời trang mà còn là một
                    phần không thể thiếu trong tủ đồ của mọi người.</p>
                <h4>1. Chất Liệu Chất Lượng:</h4>
                <p>Áo khoác Uniqlo được làm từ các loại vải cao cấp như nylon, polyester, hoặc vải dù, tạo nên sự thoải mái và
                    bền bỉ trong mọi điều kiện thời tiết. Chất liệu này giúp giữ ấm vào mùa đông và thoát mồ hôi vào mùa hè,
                    mang lại cảm giác thoải mái suốt cả ngày.</p>
                <h4>2. Thiết Kế Đa Dạng:</h4>
                <p>Uniqlo cung cấp một loạt các kiểu dáng áo khoác phong phú từ áo khoác gió, áo khoác dù, áo khoác len cho đến
                    áo khoác da và áo khoác nỉ. Đồng thời, các màu sắc và họa tiết cũng được đa dạng, từ màu trơn tối giản đến
                    những họa tiết sáng tạo và trẻ trung.</p>
                <h4>3. Tiện Ích và Phong Cách:</h4>
                <p>Áo khoác Uniqlo không chỉ mang đến sự ấm áp và bảo vệ trong mọi hoàn cảnh mà còn là biểu tượng của phong cách
                    cá nhân. Với thiết kế đơn giản nhưng tinh tế, áo khoác Uniqlo dễ dàng kết hợp với nhiều trang phục khác
                    nhau, từ trang phục công sở đến trang phục thể thao và dạo phố.</p>
                <h4>4. Độ Bền Vững:</h4>
                <p>Sản phẩm của Uniqlo nổi tiếng với độ bền cao và khả năng chống rách tuyệt vời. Điều này đảm bảo rằng áo khoác
                    Uniqlo sẽ là một người bạn đồng hành đáng tin cậy trong nhiều mùa và nhiều năm sử dụng.</p>
                <h4>5. Giá Cả Hợp Lý:</h4>
                <p>Mặc dù được biết đến với chất lượng cao, áo khoác Uniqlo vẫn mang lại giá cả hợp lý và phù hợp với nhiều đối
                    tượng khách hàng. Điều này giúp Uniqlo trở thành một trong những thương hiệu thời trang phổ biến và được ưa
                    chuộng trên toàn thế giới.</p>
                <p>Với sự kết hợp hoàn hảo giữa phong cách và tiện ích, áo khoác Uniqlo không chỉ là một sản phẩm thời trang mà
                    còn là một biểu tượng của phong cách và sự thoải mái trong cuộc sống hàng ngày.</p>',
                'status' => true,
                'create_date' => '2024-02-23 08:10:00',
                'update_date' => null,
                'banner' => '/storage/images/banner/cc.png',
                'image_arr' =>  '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'view_count' => rand(1000, 999000),
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ]
        ]);
    }
}
