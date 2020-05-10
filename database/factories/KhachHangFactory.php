<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KhachHang;
use Faker\Generator as Faker;
$factory->define(KhachHang::class, function (Faker $faker) {
    $gender = $faker->randomElement(['Nam', 'Nữ']);
    return [
        'ho_ten' => generateName($gender, $faker), 
        'tuoi' => $faker->numberBetween(12, 73),
        'gioi_tinh' => $gender,
        'dia_chi' => generateAddress($faker),
    ];
});
function generateAddress($faker){
    $address = ['Hà Nội','Hà Nam', 'Hải Dương', 'Hải Phòng', 'Vĩnh Phúc', 'Quảng Ninh', 'Lào Cai',
    'Cao Bằng', 'Phú Yên', 'Ninh Bình', 'Ninh Thuận', 'Thái Bình', 'Nam Định', 'Hưng Yên', 'Hòa Bình',
    'Bắc Ninh', 'Hồ Chí Minh', 'Đà Nẵng', 'Quảng Trị', 'Quảng Ngãi', 'Cà Mau', 'Tiền Giang', 'Vĩnh Long',
    'Cần Thơ', 'Bình Dương','Thanh Hóa', 'Nghệ An', 'Hà Tĩnh'];

    return $faker->randomElement($address);
}

function generateName($gender, $faker){
    if($gender == 'Nam'){
        return generateMaleName($faker);
    }
    else {
        return generateFemaleName($faker);
    }
}

function generateMaleName($faker){
    $firstName = ['Trường', 'Minh', 'Tùng', 'Nam', 'An', 'Tuấn', 'Anh', 'Việt', 'Sơn',
                    'Dũng', 'Đạt', 'Triều', 'Toàn', 'Cường', 'Nhật', 'Long', 'Luân', 
                    'Mạnh', 'Thiện', 'Huân', 'Thắng', 'Bách', 'Thế', 'Sỹ', 'Hiếu', 'Lâm',
                    'Hoàng', 'Nhất', 'Hùng', 'Hưng', 'Bảo', 'Tôn', 'Duy'];
    $lastName = ['Lê', 'Vũ', 'Phạm', 'Nguyễn', 'Trần', 'Kiều', 'Tạ', 'Đinh', 'Cao', 'Phùng',
                    'Bùi', 'Đồng', 'Đỗ'];
    $middleName = ['Văn', 'Trọng', 'Nhật', 'Dương', 'Hữu', 'Phú', 'Công', 'Mạnh', 'Tiến', 
                'Minh', 'Tuấn', 'Huy', 'Duy' ];
    $middleNameSelected = $faker->randomElement($middleName);
    while(true){
        $firstNameSelected = $faker->randomElement($firstName);
        if($middleNameSelected != $firstNameSelected){
            return $faker->randomElement($lastName) . " " .
                    $middleNameSelected . " " .
                    $firstNameSelected;
        }
    }
}

function generateFemaleName($faker){
    $firstName = ['Linh', 'Hà', 'Quỳnh', 'Hằng', 'Mai', 'Thảo', 'Ngọc', 'Anh', 'Mai Hương',
                'Nhung', 'Hồng', 'Huyền', 'Hương', 'Hiền', 'My', 'Trà My', 'Nhật Mai', 'Thanh',
                'Hòa', 'Vân', 'Yến', 'Khánh', 'Hường', 'Huế', 'Thùy', 'Hoài'
             ];
    $lastName = ['Lê', 'Vũ', 'Phạm', 'Nguyễn', 'Trần', 'Kiều', 'Tạ', 'Đinh', 'Cao', 'Phùng',
                    'Bùi', 'Đồng', 'Đỗ'];
    $middleName = ['Thị', 'Thu', 'Diễm','Thị', 'Thu', 'Diễm', 'Phương', 'Thanh', 'Thùy' ];
    $middleNameSelected = $faker->randomElement($middleName);
    while(true){
        $firstNameSelected = $faker->randomElement($firstName);
        if($middleNameSelected != $firstNameSelected){
            return $faker->randomElement($lastName) . " " .
                    $middleNameSelected . " " .
                    $firstNameSelected;
        }
    }
}



