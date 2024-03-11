<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('blogs')->insert([
            [
                'id_blog' => 1,
                'id_store' => 1,
                'id_categories_blog' => 1,
                'title' => 'Chọn áo croptop như thế nào cho phù hợp',
                'content' => '<h1>Để chọn áo croptop phù hợp, bạn có thể xem xét các yếu tố sau đây:</h1>
                <strong>Phù hợp với dáng vóc:</strong> Đầu tiên, hãy xem xét hình dáng cơ thể của bạn. Áo croptop có thể phù hợp với
                nhiều
                hình dáng
                cơ thể khác nhau, nhưng bạn nên chọn một kiểu mà bạn cảm thấy tự tin và thoải mái khi mặc.
                <br>
                <br>
            
                <strong>Chiều dài:</strong> Độ dài của áo croptop có thể khác nhau từ kiểu ngắn gọn đến dài hơn. Nếu bạn thoải mái
                với một phong cách
                gợi cảm, bạn có thể chọn áo croptop ngắn. Tuy nhiên, nếu bạn muốn một phong cách năng động và thoải mái hơn, bạn có
                thể chọn một chiếc áo croptop dài hơn, giúp phần bụng không quá trần lộ.
                <br>
                <br>
            
                <strong>Kiểu dáng:</strong> Có nhiều loại kiểu dáng áo croptop, từ các kiểu cổ tròn đến cổ V, từ kiểu áo thụng đến
                áo cánh tiên, và
                nhiều kiểu dáng khác nhau. Hãy chọn kiểu dáng phản ánh phong cách và cá nhân của bạn.
                <br>
                <br>
            
                <strong>Phối hợp trang phục:</strong> Xem xét cách bạn sẽ kết hợp áo croptop với quần, chân váy hoặc quần áo dưới
                khác. Áo croptop
                thường kết hợp tốt với quần jeans, quần short, chân váy bút chì, hoặc chân váy maxi.
                <br>
                <br>
            
                <strong>Chất liệu và màu sắc:</strong> Chọn chất liệu và màu sắc phù hợp với mùa, sở thích cá nhân và sự kiện bạn
                muốn tham gia. Chất
                liệu như cotton, lụa nhẹ, hoặc ren thường là lựa chọn phổ biến. Đối với màu sắc, bạn có thể chọn giữa các tông màu
                tươi sáng hoặc màu sắc trầm.
                <br>
                <br>
            
                <strong>Thoải mái:</strong> Quan trọng nhất, hãy chắc chắn rằng bạn cảm thấy thoải mái và tự tin khi mặc áo croptop.
                Điều này là chìa
                khóa quan trọng nhất để thể hiện phong cách của bạn một cách tự tin và tự nhiên nhất.',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 2,
                'id_store' => 1,
                'id_categories_blog' => 2,
                'title' => 'Chọn quần jeans như thế nào cho phù hợp',
                'content' => '<h1>Để chọn quần jeans phù hợp, dưới đây là một số yếu tố bạn có thể xem xét:</h1>
                <strong>Kiểu dáng và cắt may:</strong> Có nhiều kiểu dáng quần jeans khác nhau như quần skinny, quần cạp cao, quần
                bootcut, quần
                boyfriend, và quần mom jeans. Chọn kiểu dáng phù hợp với hình dáng cơ thể của bạn và phong cách cá nhân.
                <br>
                <br>
                <strong>Kích cỡ:</strong> Đảm bảo bạn chọn kích cỡ phù hợp với cơ thể của mình. Quần jeans quá chật có thể gây cảm
                giác không thoải
                mái và hạn chế sự linh hoạt, trong khi quần quá rộng sẽ không giữ dáng và không thể tạo nên vẻ ngoài gọn gàng.
                <br>
                <br>
            
                <strong>Chất liệu:</strong> Chất liệu denim là lựa chọn phổ biến cho quần jeans, nhưng có các loại denim khác nhau
                về độ dày, độ co
                giãn và cảm giác mềm mại. Chọn chất liệu mà bạn cảm thấy thoải mái và phù hợp với môi trường bạn sẽ mặc quần jeans.
                <br>
                <br>
            
                <strong>Màu sắc:</strong> Quần jeans có thể có nhiều màu sắc khác nhau từ màu xanh đậm, xanh nhạt đến màu đen, màu
                xám và các màu
                khác. Chọn màu sắc phù hợp với sở thích cá nhân và có thể dễ dàng phối hợp với các trang phục khác.
                <br>
                <br>
            
                <strong>Phong cách:</strong> Xem xét phong cách bạn muốn thể hiện khi mặc quần jeans. Đối với một phong cách casual,
                bạn có thể chọn
                quần jeans với các chi tiết đơn giản và không quá phức tạp. Đối với một phong cách năng động và cá tính, bạn có thể
                chọn các kiểu jeans có các chi tiết như rách, xước, hoặc wash out.
                <br>
                <br>
            
                <strong>Sự thoải mái:</strong> Quan trọng nhất, hãy chắc chắn rằng quần jeans mà bạn chọn mang lại sự thoải mái khi
                vận động và không
                gây cảm giác khó chịu trong suốt thời gian dài sử dụng.',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 3,
                'id_store' => 1,
                'id_categories_blog' => 3,
                'title' => 'Chọn áo sơ mi như thế nào cho phù hợp',
                'content' => '<h1> Để chọn áo sơ mi phù hợp, dưới đây là một số yếu tố bạn có thể xem xét:</h1>
                <strong>Kích cỡ và dáng áo:</strong> Đảm bảo chọn kích cỡ và dáng áo phù hợp với hình dáng cơ thể của bạn. Áo sơ mi
                nên vừa vặn nhưng
                không quá chật hoặc quá rộng. Dáng áo cũng nên phản ánh phong cách cá nhân của bạn, có thể là slim fit, regular fit,
                hoặc relaxed fit.
                <br>
                <br>
            
                <strong>Chất liệu:</strong> Chất liệu của áo sơ mi cũng rất quan trọng. Các lựa chọn phổ biến bao gồm cotton, linen,
                và các loại vải
                tổng hợp. Chọn chất liệu phù hợp với mùa và môi trường mà bạn sẽ mặc áo.
                <br>
                <br>
            
                <strong>Màu sắc và hoa văn:</strong> Chọn màu sắc và hoa văn phù hợp với sở thích cá nhân và dịp sự kiện. Màu sắc
                truyền thống như
                trắng, xanh dương, và hồng nhạt thường dễ dàng kết hợp với nhiều loại trang phục khác.
                <br>
                <br>
            
                <strong>Phong cách:</strong> Xác định phong cách mà bạn muốn thể hiện qua áo sơ mi. Áo sơ mi có thể phù hợp với
                nhiều phong cách khác
                nhau từ casual đến formal. Hãy chọn một áo sơ mi phản ánh phong cách của bạn và phù hợp với dịp sự kiện.
                <br>
                <br>
            
                <strong>Chi tiết thiết kế:</strong> Chi tiết thiết kế như cổ áo, cổ tay, và nút cài cũng đóng vai trò quan trọng
                trong việc chọn áo
                sơ mi. Hãy chắc chắn rằng các chi tiết này phù hợp với phong cách và mục đích sử dụng của bạn.
                <br>
                <br>
            
                <strong>Sự thoải mái:</strong> Cuối cùng, hãy chọn áo sơ mi mà bạn cảm thấy thoải mái khi mặc. Sự thoải mái là yếu
                tố quan trọng giúp
                bạn tự tin và thoải mái trong suốt thời gian mặc áo.',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 4,
                'id_store' => 2,
                'id_categories_blog' => 4,
                'title' => 'Chọn son như thế nào cho phù hợp với màu da',
                'content' => ' <h1>Khi chọn son phù hợp với màu da của bạn, có một số nguyên tắc bạn nên xem xét:</h1>

                <strong>Màu sắc da:</strong> Màu da của mỗi người có thể khác nhau, từ da trắng, da ngăm đến da nâu và màu da trung
                tính. Màu da của
                bạn sẽ quyết định xem loại son nào sẽ phù hợp nhất với bạn.
            <br>
            <br>
                <strong>Tông màu da:</strong> Xác định tông màu da của bạn là ấm hay lạnh. Người có tông màu da ấm thường hợp với
                các gam màu ấm như
                cam, đỏ nâu, và hồng có tông vàng. Trong khi đó, người có tông màu da lạnh thường phù hợp với các gam màu lạnh như
                hồng phớt, đỏ ruby, và các gam màu nude có tông hồng hoặc xanh.
                <br>
                <br>
            
                <strong>Mục đích sử dụng:</strong> Xác định dịp mà bạn sử dụng son để chọn màu sắc phù hợp. Son màu nude thường phù
                hợp cho mọi dịp,
                trong khi son màu đậm hoặc sắc nét thường thích hợp cho các buổi tiệc tùng hoặc dịp đặc biệt.
                <br>
                <br>
            
                <strong>Phong cách cá nhân:</strong> Nếu bạn có phong cách cá nhân riêng, hãy chọn màu son phản ánh phong cách và cá
                tính của bạn. Có
                thể bạn thích những gam màu nổi bật và sắc nét, hoặc bạn thích những gam màu nhẹ nhàng và tự nhiên hơn.
                <br>
                <br>
            
                <strong>Thử nghiệm màu sắc:</strong> Trước khi mua son, thử nghiệm màu sắc trên da của bạn để xem chúng hiển thị như
                thế nào trên môi
                và làm thế nào chúng phản ánh với màu da của bạn.
                <br>
                <br>
            
                <strong>Sự thoải mái:</strong> Cuối cùng, hãy chọn loại son mà bạn cảm thấy thoải mái khi sử dụng. Son không chỉ là
                một sản phẩm
                trang điểm, mà còn là một phần của cảm giác tự tin và thoải mái của bạn.',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 5,
                'id_store' => 2,
                'id_categories_blog' => 5,
                'title' => 'Chọn phấn mà hồng như thế nào cho phù hợp với màu da',
                'content' => ' <h1>Khi chọn phấn má hồng phù hợp với màu da của bạn, có một số nguyên tắc và gợi ý dưới đây:</h1>
                <strong>Tông màu da:</strong> Xác định tông màu da của bạn là ấm hay lạnh. Điều này sẽ giúp bạn chọn được màu hồng
                phấn má phù hợp
                nhất với da của mình.
                <br>
                <br>
                <strong>Da ấm (warm undertones):</strong> Nếu bạn có tông màu da ấm, các gam hồng nâu, cam, đào sẽ rất phù hợp. Hồng
                cam và hồng đào
                thường là lựa chọn tốt cho da ấm.
                <br>
                <br>
            
                <strong>Da lạnh (cool undertones):</strong> Nếu bạn có tông màu da lạnh, hồng baby, hồng phớt và hồng dâu sẽ là
                những lựa chọn tốt.
                Những gam màu hồng nhẹ nhàng và có chút xanh lá cây thường phù hợp với da lạnh.
                <br>
                <br>
            
                <strong>Da trung tính (neutral undertones):</strong> Nếu da của bạn có tông màu trung tính, bạn có thể dễ dàng hòa
                trộn giữa các gam
                màu hồng và cam. Hồng hạt dẻ và hồng phớt là hai lựa chọn phổ biến cho da trung tính.
                <br>
                <br>
            
                <strong>Màu sắc tự nhiên:</strong> Chọn phấn má hồng có màu sắc tự nhiên và gần giống màu của làn da tự nhiên của
                bạn. Điều này giúp
                tạo nên vẻ ngoài tự nhiên và không quá cầu kỳ.
                <br>
                <br>
            
                <strong>Kiểu dạng sản phẩm:</strong> Ngoài màu sắc, bạn cũng cần xem xét kiểu dạng sản phẩm. Phấn má hồng có thể là
                dạng bột, dạng
                kem, hoặc dạng gel. Chọn sản phẩm phù hợp với loại da của bạn và phong cách trang điểm của bạn.
                <br>
                <br>
            
                <strong>Thử nghiệm trước khi mua:</strong> Trước khi mua, hãy thử nghiệm màu sắc trên da của bạn để đảm bảo rằng nó
                phản ánh đúng màu
                da và phong cách trang điểm của bạn.
                <br>
                <br>
            
                <i>*Lưu ý*: Hãy nhớ rằng mục đích của phấn má hồng không chỉ là tạo màu sắc cho má, mà còn là tạo điểm nhấn tự nhiên
                    và sức sống
                    cho
                    khuôn mặt của bạn.</i>',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 6,
                'id_store' => 2,
                'id_categories_blog' => 6,
                'title' => 'Chọn sơn móng tay như thế nào cho phù hợp với màu da tay',
                'content' => '<h1>Khi chọn sơn móng tay phù hợp với màu da tay của bạn, có một số yếu tố cần xem xét:</h1>

                <strong>Tông da:</strong> Xác định tông da của bạn có phải là ấm, lạnh hay trung tính. Điều này sẽ giúp bạn chọn
                được màu sơn móng
                tay phù hợp nhất.
                <br>
                <br>
            
                <strong>Da ấm (warm undertones):</strong> Nếu bạn có tông da ấm, những gam màu nâu, cam, vàng hoặc đỏ nâu sẽ rất phù
                hợp. Các màu như
                camel, terracotta, và các gam nâu ấm sẽ là lựa chọn tốt.
                <br>
                <br>
            
                <strong>Da lạnh (cool undertones):</strong> Nếu bạn có tông da lạnh, những gam màu hồng, tím, xanh dương, hoặc xám
                sẽ phù hợp. Các
                màu như baby pink, lavender, và các gam xanh dương nhạt sẽ là sự lựa chọn thích hợp.
                <br>
                <br>
            
                <strong>Da trung tính (neutral undertones):</strong> Nếu da của bạn có tông màu trung tính, bạn có thể lựa chọn giữa
                các gam màu ấm
                và lạnh. Các màu như nude, hồng nhạt, hoặc sáng sẽ phù hợp với tất cả các loại da.
                <br>
                <br>
            
                <strong>Màu sắc phù hợp:</strong> Chọn màu sơn móng tay phù hợp với sở thích cá nhân và tình trạng tâm trạng của
                bạn. Màu sáng như
                pastel hoặc nude thường là sự lựa chọn an toàn và dễ phối hợp. Tuy nhiên, đôi khi một chút màu sắc sẽ làm tôn lên cá
                tính của bạn.
                <br>
                <br>
            
                <strong>Dịp sử dụng:</strong> Xem xét dịp bạn sử dụng sơn móng tay. Các màu sáng như nude hoặc pastel thích hợp cho
                các buổi gặp gỡ
                chính thống, trong khi các màu sắc táo bạo như đỏ hoặc đen thích hợp cho các dịp đặc biệt hoặc tiệc tùng.
                <br>
                <br>
            
                <strong>Thử nghiệm trước khi mua:</strong> Trước khi mua, hãy thử nghiệm màu sơn trên một phần nhỏ của móng tay hoặc
                trên da của bạn
                để xem màu sắc thực sự phản ánh như thế nào trên da của bạn.
                <br>
                <br>
            
                <i>*Lưu ý*: Nhớ rằng, điều quan trọng nhất khi chọn sơn móng tay là sự tự tin và thoải mái với màu sắc bạn chọn.</i>',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 7,
                'id_store' => 3,
                'id_categories_blog' => 7,
                'title' => 'Chọn Laptop phù hợp với ngành đang học',
                'content' => '<h1>Khi chọn laptop phù hợp với ngành đang học, bạn cần xem xét các yếu tố sau:</h1>

                <strong>Yêu cầu của ngành học:</strong> Đầu tiên, nắm rõ yêu cầu cụ thể của ngành học bạn đang theo học. Một số
                ngành yêu cầu sử dụng
                các phần mềm đặc biệt, yêu cầu cấu hình cao, trong khi một số ngành khác chỉ cần các chức năng cơ bản của máy tính.
                <br>
                <br>
                <strong>Hiệu suất và cấu hình:</strong> Dựa trên yêu cầu của ngành học và các phần mềm bạn sẽ sử dụng, chọn một
                laptop với cấu hình
                phù hợp. Đối với các ngành như Thiết kế đồ họa, Kỹ thuật, hay Lập trình, bạn cần một máy tính có CPU mạnh mẽ, RAM đủ
                lớn và dung lượng ổ cứng đủ lớn để xử lý các tác vụ nặng.
                <br>
                <br>
            
                <strong> Trọng lượng và di động:</strong> Nếu bạn thường xuyên di chuyển hoặc cần mang theo laptop, hãy chọn một
                laptop nhẹ và di
                động. Cân nhắc kích thước màn hình và trọng lượng để đảm bảo sự thuận tiện khi mang theo.
                <br>
                <br>
            
                <strong>Thời lượng pin:</strong> Thời lượng pin quan trọng đối với việc di chuyển và làm việc từ xa. Chọn một laptop
                có thời lượng
                pin đủ lâu để bạn có thể làm việc mà không cần sạc pin liên tục.
                <br>
                <br>
            
                <strong>Độ bền và chất lượng:</strong> Đảm bảo chọn một thương hiệu laptop có độ bền tốt và được đánh giá cao về
                chất lượng. Điều này
                giúp bạn tránh được các sự cố kỹ thuật và tiết kiệm thời gian và chi phí sửa chữa.
                <br>
                <br>
            
                <strong>Giá cả:</strong> Xác định ngân sách của bạn và chọn một laptop phù hợp. Hãy tìm kiếm các dòng sản phẩm có
                giá cả hợp lý nhưng
                vẫn đáp ứng được nhu cầu của bạn.
                <br>
                <br>
            
                <strong>Tính linh hoạt:</strong> Chọn một laptop có các cổng kết nối đa dạng và hỗ trợ các công nghệ mới nhất để bạn
                có thể kết nối
                với các thiết bị khác và sử dụng các phần mềm mới nhất.
            
                <i>*Lưu ý*: Cuối cùng, trước khi mua, hãy tham khảo ý kiến của giáo viên hoặc các chuyên gia trong ngành về các yêu
                    cầu cụ thể
                    và mẫu laptop nên chọn. </i>',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 8,
                'id_store' => 3,
                'id_categories_blog' => 8,
                'title' => 'Chọn PC phù hợp với công việc',
                'content' => '<h1>Khi chọn một PC phù hợp với công việc, có một số yếu tố quan trọng mà bạn nên xem xét:</h1>

                <strong>Yêu cầu công việc:</strong> Đầu tiên, xác định rõ những yêu cầu cụ thể của công việc bạn đang làm hoặc sẽ
                làm. Nếu bạn làm
                việc với các ứng dụng đồ họa nặng, chơi game, hoặc cần xử lý dữ liệu lớn, bạn sẽ cần một PC có cấu hình cao hơn.
                <br>
                <br>
            
                <strong>Cấu hình phần cứng:</strong> Chọn một PC với cấu hình phần cứng phù hợp với công việc của bạn. Điều này bao
                gồm CPU, RAM,
                dung lượng ổ cứng, và card đồ họa. Đối với các công việc đòi hỏi hiệu suất cao, bạn cần chọn một PC có CPU mạnh mẽ,
                RAM đủ lớn và card đồ họa tốt.
                <br>
                <br>
            
                <strong>Hệ điều hành:</strong> Chọn hệ điều hành phù hợp với nhu cầu của bạn. Windows là hệ điều hành phổ biến nhất
                và phù hợp với
                hầu hết các nhu cầu công việc. Tuy nhiên, nếu bạn làm việc trong lĩnh vực như thiết kế đồ họa, bạn cũng có thể cần
                xem xét các hệ điều hành khác như MacOS hoặc Linux.
                <br>
                <br>
            
                <strong>Màn hình:</strong> Chọn một PC với màn hình chất lượng và kích thước phù hợp với nhu cầu công việc của bạn.
                Màn hình lớn hơn
                có thể giúp bạn làm việc hiệu quả hơn với các ứng dụng đa nhiệm hoặc xem nội dung đồ họa.
                <br>
                <br>
            
                <strong>Dung lượng lưu trữ:</strong> Xác định dung lượng lưu trữ cần thiết cho công việc của bạn. Nếu bạn làm việc
                với các tập tin
                lớn hoặc cần lưu trữ dữ liệu nhiều, bạn sẽ cần một PC có dung lượng ổ cứng lớn.
                <br>
                <br>
            
                <strong>Tính di động:</strong> Nếu bạn cần di chuyển hoặc làm việc từ xa thường xuyên, bạn có thể muốn xem xét các
                PC di động như
                laptop hoặc máy tính bảng để thuận tiện cho việc di chuyển.
                <br>
                <br>
            
                <strong>Ngân sách:</strong> Cuối cùng, xác định ngân sách của bạn và chọn một PC có giá cả phù hợp với khả năng chi
                trả của bạn,
                nhưng vẫn đảm bảo đáp ứng được nhu cầu công việc.
                <br>
                <br>
                <i>*Lưu ý*: Trước khi quyết định mua, hãy nghiên cứu và thảo luận với các chuyên gia hoặc người có kinh nghiệm trong
                    lĩnh vực
                    công việc của bạn để đảm bảo bạn chọn được PC phù hợp nhất.</i>',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
            [
                'id_blog' => 9,
                'id_store' => 3,
                'id_categories_blog' => 9,
                'title' => 'Chọn keo tản nhiệt phù hợp với CPU',
                'content' => '<h1>Khi chọn keo tản nhiệt cho CPU của bạn, có một số yếu tố mà bạn nên xem xét:</h1>

                <strong>Loại CPU:</strong> Một số loại CPU có yêu cầu cụ thể về keo tản nhiệt. Ví dụ, các CPU Intel và AMD có thể
                yêu cầu các loại
                keo tản nhiệt khác nhau.
            
                <strong>Cấu trúc và kích thước của case:</strong> Kích thước của keo tản nhiệt cần phải phù hợp với cấu trúc và kích
                thước của case
                máy tính của bạn. Đảm bảo rằng keo tản nhiệt bạn chọn có thể lắp đặt vào case một cách thoải mái và không gây cản
                trở cho các linh kiện khác.
            
                <strong>Hiệu suất tản nhiệt:</strong> Đánh giá hiệu suất tản nhiệt của keo dựa trên nhu cầu của CPU của bạn. Nếu bạn
                sử dụng CPU với
                yêu cầu cao, như làm việc đồ họa hoặc chơi game, bạn cần một keo có khả năng tản nhiệt tốt và hiệu quả.
            
                <strong>Tiếng ồn:</strong> Một yếu tố quan trọng khác là mức độ tiếng ồn của keo tản nhiệt. Một số keo có thể phát
                ra tiếng ồn đáng
                kể khi hoạt động, điều này có thể làm giảm trải nghiệm làm việc hoặc giải trí của bạn. Hãy chọn một keo tản nhiệt có
                cấu trúc và thiết kế để giảm tiếng ồn.
            
                <strong>Ngân sách:</strong> Cuối cùng, xem xét ngân sách của bạn. Keo tản nhiệt có thể có mức giá khác nhau tùy
                thuộc vào thương
                hiệu, hiệu suất, và tính năng bổ sung như đèn LED.
            
                <strong>Đánh giá và đánh giá từ người dùng:</strong> Trước khi mua, nên đọc các đánh giá và đánh giá từ người dùng
                khác để hiểu rõ
                hơn về hiệu suất, độ tin cậy và tính năng của keo tản nhiệt.
            
                <strong>Thương hiệu và chất lượng:</strong> Chọn các thương hiệu nổi tiếng và được tin cậy trong lĩnh vực keo tản
                nhiệt. Các thương
                hiệu như Noctua, Cooler Master, Corsair, và Arctic đều là những lựa chọn phổ biến với nhiều mô hình và tính năng
                khác nhau.
            
                <i>*Lưu ý*: Nhớ kiểm tra sự tương thích của keo tản nhiệt với CPU của bạn trước khi mua để đảm bảo rằng nó sẽ hoạt
                    động hiệu quả
                    và không gây hỏng hóc cho hệ thống của bạn.</i>',
                'status' => true,
                'image_arr' => '"images": [
                    "image1.jpg",
                    "image2.jpg",
                    "image3.jpg"
                ]',
                'created_at' => '2024-02-23 08:10:00',
                'updated_at' => null
            ],
        ]);
    }
}
