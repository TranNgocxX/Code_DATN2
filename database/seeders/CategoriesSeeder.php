<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Chăm sóc da mặt', 'slug' => 'cham-soc-da-mat', 'logo' => 'categories/facial.png', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
                                        
            ['name' => 'Chăm sóc tóc', 'slug' => 'cham-soc-toc', 'logo' => 'categories/hair.png', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
                                        
            ['name' => 'Massage thư giãn', 'slug' => 'massage-thu-gian', 'logo' => 'categories/massage.png', 'description' => 'Các liệu pháp masssage giúp kích thích lưu thông máu, 
            xoa dịu sự căng thẳng và nhức mỏi của các thớ cơ, giúp cân bằng và giảm stress. Chúng tôi sẵn sàng điều chỉnh kỹ thuật và lực tuỳ vào nhu cầu của khách.', 'created_at' => now(), 'updated_at' => now()],
                                        
            ['name' => 'Tẩy da chết', 'slug' => 'tay-da-chet', 'logo' => 'categories/scrub.png', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
                                        
            ['name' => 'Waxing', 'slug' => 'waxing', 'logo' => 'categories/waxing.png', 'description' => 'Các liệu trình giúp thanh lọc, nuôi dưỡng và tái tạo các tế bào da toàn thân, 
            mang đến cho bạn một làn da khỏe đẹp, căng mướt và mềm mịn từ các dưỡng chất thiên nhiên thuần khiết hay mỹ phẩm cao cấp.', 'created_at' => now(), 'updated_at' => now()],
                                        
            ['name' => 'Tắm trắng thảo mộc', 'slug' => 'tam-trang-thao-moc', 'logo' => 'categories/bath.png', 'description' => null, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
