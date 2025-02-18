<?php

    namespace Database\Seeders;

    use App\Models\Project;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class FirstSeed extends Seeder {
        /**
         * Run the database seeds.
         */
        public function run(): void {
            // thanshoes.vn bấn giày
            Project::create([
                'name' => 'Thanshoes.vn',
                'description' => "
                    Thanshoes.vn is a website that sells shoes online.
                    The website is built with Laravel 8, Bootstrap 4, and MySQL.
                ",
                'url' => 'https://thanshoes.vn',
                'image' => 'thanshoes.jpg',
            ]);
            // https://daohanthetindungcantho.com dáo hạn tín dụng
            Project::create([
                'name' => 'Daohanthetindungcantho.com',
                'description' => "
                    Daohanthetindungcantho.com is a website that provides information about debt settlement.
                    The website is built with Laravel 8, Bootstrap 4, and MySQL.
                ",
                'url' => 'https://daohanthetindungcantho.com',
                'image' => 'daohanthetindungcantho.jpg',
            ]);
            // https://quettheuytincantho.com/ đáo han tin dung
            Project::create([
                'name' => 'Quettheuytincantho.com',
                'description' => "
                    Quettheuytincantho.com is a website that provides information about debt settlement.
                    The website is built with Laravel 8, Bootstrap 4, and MySQL.
                ",
                'url' => 'https://quettheuytincantho.com',
                'image' => 'quettheuytincantho.jpg',
            ]);
            // https://thietbiytemientay.com trang thiết bị y tế giâ đình
            Project::create([
                'name' => 'Thietbiytemientay.com',
                'description' => "
                    Thietbiytemientay.com is a website that sells medical equipment online.
                    The website is built with Laravel 8, Bootstrap 4, and MySQL.
                ",
                'url' => 'https://thietbiytemientay.com',
                'image' => 'thietbiytemientay.jpg',
            ]);
            // https://vitrasau.info.vn/aladin/ booking giáu mặt
            Project::create([
                'name' => 'https://vitrasau.info.vn/aladin',
                'description' => "
                    Vitrasau.info.vn is a website that provides information about booking hotels.
                    The website is built with Laravel 8, Bootstrap 4, and MySQL.
                ",
                'url' => 'https://vitrasau.info.vn',
                'image' => 'vitrasau.jpg',
            ]);
            // https://vitrasau.info.vn/GlassTry/ thương mại điện tử bấn mắt kính tích hợp đeo kính realtime
            Project::create([
                'name' => 'https://vitrasau.info.vn/GlassTry',
                'description' => "
                    Vitrasau.info.vn is a website that sells glasses online.
                    The website is built with Laravel 8, Bootstrap 4, and MySQL.
                ",
                'url' => 'https://vitrasau.info.vn',
                'image' => 'vitrasau.jpg',
            ]);

        }
    }
