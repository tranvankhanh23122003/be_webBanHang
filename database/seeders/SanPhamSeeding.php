<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->delete();
        DB::table('san_phams')->insert([
            [
                'id'    => 1,
                'ten_san_pham' => 'Điện thoại Samsung Galaxy S24+ 5G 256GB',
                'slug_san_pham' => 'dien-thoai-samsung-galaxy-s24',
                'so_luong'  => rand(15,500),
                'hinh_anh'  => 'https://cdn.tgdd.vn/Products/Images/42/307172/Slider/samsung-galaxy-s24-plus-5g-thumb-youtube-1020x570.jpg',
                'tinh_trang' => '1',
                'mo_ta_ngan' => 'Dynamic AMOLED 2X6.7"Quad HD+ (2K+)',
                'mo_ta_chi_tiet' => 'Samsung đã cho ra mắt Samsung Galaxy S24+ 5G 256GB, chiếc điện thoại đẳng cấp của họ tại sự kiện hàng năm diễn ra vào ngày 18/01 tại Mỹ. Điểm độc đáo của sản phẩm nằm ở chip mới của Samsung, đi kèm với sự phát triển trong việc bổ sung nhiều tính năng thông minh có tích hợp AI và tăng cường khả năng chụp ảnh ở phần camera.',
                'gia_ban' => '23490000',
                'gia_khuyen_mai' => '21999000'
            ],
            [
                'id'    => 2,
                'ten_san_pham' => 'Laptop Lenovo Ideapad Slim 3 15IRH8 i7 13620H/16GB/1TB/Win11 (83EM003FVN)',
                'slug_san_pham' => 'laptop-lenovo-ideapad-slim-3',
                'so_luong'  => rand(79,400),
                'hinh_anh'  => 'https://i.pinimg.com/originals/d6/8d/09/d68d09bb7e40501019f5516aaad36cbc.jpg',
                'tinh_trang' => '1',
                'mo_ta_ngan' => 'Chơi Valorant GTA V Hỗ trợ Gập 180 độ 15,6 inch Bảo hành 2 năm',
                'mo_ta_chi_tiet' => 'Không thể bỏ lỡ mẫu laptop Lenovo Ideapad Slim 3 15IRH8 i7 13620H (83EM003FVN) bởi cấu hình vô cùng phù hợp với con chip Intel i7 Gen 13, RAM 16 GB, SSD 1 TB,... sẽ là trợ thủ đắc lực cho những sinh viên thuộc nhiều khối ngành, dân văn phòng hay kinh doanh.',
                'gia_ban' => '21270000',
                'gia_khuyen_mai' => '19980000'
            ],
            [
                'id'    => 3,
                'ten_san_pham' => 'Laptop Acer Aspire Lite 15 51M 55NB i5 1155G7/8GB/512GB/Win11 (NX.KRSSV.001)',
                'slug_san_pham' => 'laptop-acer-aspire-lite-15',
                'so_luong'  => rand(102,900),
                'hinh_anh'  => 'https://cdn.tgdd.vn/Products/Images/44/324735/acer-aspire-lite-15-51m-55nb-i5-nxkrssv001-1.jpg',
                'tinh_trang' => '0',
                'mo_ta_ngan' => '512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)',
                'mo_ta_chi_tiet' => 'Laptop Acer Aspire Lite 15 51M 55NB i5 1155G7 (NX.KRSSV.001) đem đến sự hòa quyện giữa thiết kế tinh tế và hiệu suất ổn định. Mẫu laptop này thực sự là một biểu tượng của sự tiện lợi và đa năng, với màn hình rộng, bàn phím tiện ích và hiệu suất ổn định.',
                'gia_ban' => '15270000',
                'gia_khuyen_mai' => '13280000'
            ],
            [
                'id'    => 4,
                'ten_san_pham' => 'Điện thoại iPhone 15 Pro Max 256GB ',
                'slug_san_pham' => 'dien-thoai-iphone-15-pro-max-256gb',
                'so_luong'  => rand(7,100),
                'hinh_anh'  => 'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-2-1.jpg',
                'tinh_trang' => '1',
                'mo_ta_ngan' => 'Nâng cấp dễ dàng, chuyển đổi đơn giản. Sang trong và Quý phái.',
                'mo_ta_chi_tiet' => 'iPhone 15 Pro Max là một chiếc điện thoại thông minh cao cấp được mong đợi nhất năm 2023. Với nhiều tính năng mới và cải tiến, iPhone 15 Pro Max chắc chắn sẽ là một lựa chọn tuyệt vời cho những người dùng đang tìm kiếm một chiếc điện thoại có hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng',
                'gia_ban' => '34990000',
                'gia_khuyen_mai' => '29590000'
            ],
        ]);
    }
}
