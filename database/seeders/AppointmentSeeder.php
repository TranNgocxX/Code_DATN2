<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentSeeder extends Seeder
{
    public function run(): void
    {
        // Danh sách các lịch hẹn mẫu
        $appointments = [
            [
                'user_id' => 4, // Nguyễn Minh Anh
                'service_id' => 1, // Tẩy tế bào chết kim cương
                'employee_id' => 1,
                'start_time' => Carbon::now()->addDays(1)->setTime(9, 0),
                'status' => 'confirmed',
                'price' => 2600000,
                'total_price' => 2600000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Nguyễn Minh Anh',
                    'phone' => '0911111111',
                    'health_status' => 'Da nhạy cảm, hơi khô',
                    'notes' => 'Khách muốn dùng phòng riêng'
                ]
            ],
            [
                'user_id' => 5, // Trần  Ngọc
                'service_id' => 5, // Gội đầu truyền thống
                'employee_id' => 3,
                'start_time' => Carbon::now()->subDays(2)->setTime(14, 30),
                'status' => 'completed',
                'price' => 550000,
                'total_price' => 550000,
                'payment_method' => 'qr',
                'payment_status' => 'paid',
                'details' => [
                    'customer_name' => 'Trần Thị Ngọc',
                    'phone' => '0922222222',
                    'health_status' => 'Bình thường',
                    'notes' => 'Gội kỹ phần gáy'
                ]
            ],
            [
                'user_id' => 6, // Lê Nga
                'service_id' => 8, // Massage Body&Soul
                'employee_id' => 6,
                'start_time' => Carbon::now()->addHours(5),
                'status' => 'confirmed',
                'price' => 1609000,
                'total_price' => 1609000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Lê Nga',
                    'phone' => '0933333333',
                    'health_status' => 'Đau mỏi vai gáy nặng',
                    'notes' => 'Cần nhân viên tay nghề cao'
                ]
            ],
            [
                'user_id' => 7,
                'service_id' => 18, //tắm trắng sữa dê
                'employee_id' => null,
                'start_time' => Carbon::now()->addDays(3)->setTime(8, 0),
                'status' => 'pending',
                'price' => 950000,
                'total_price' => 950000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Phạm Thị Dung',
                    'phone' => '0944444444',
                    'health_status' => 'Bình thường',
                    'notes' => 'Khách lần đầu đến Spa'
                ]
            ],
            [
                'user_id' => 8,
                'service_id' => 11,
                'employee_id' => null,
                'start_time' => Carbon::now()->addDays(3)->setTime(10, 0),
                'status' => 'pending',
                'price' => 710000,
                'total_price' => 710000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Khách Lan',
                    'phone' => '0944444444',
                    'health_status' => 'Bình thường',
                    'notes' => 'Khách lần đầu đến Spa'
                ]
            ],
            [
                'user_id' => 9,
                'service_id' => 14,
                'employee_id' => null,
                'start_time' => Carbon::now()->addDays(2)->setTime(10, 0),
                'status' => 'pending',
                'price' => 249000,
                'total_price' => 249000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Khách Mai',
                    'phone' => '0944444444',
                    'health_status' => 'Bình thường',
                    'notes' => 'Khách lần đầu đến Spa'
                ]
            ],
            [
                'user_id' => 16,
                'service_id' => 1,
                'employee_id' => 1,
                'start_time' => Carbon::now()->subMonth(1)->setTime(3, 0),
                'status' => 'completed',
                'price' => 2600000,
                'total_price' => 2600000,
                'payment_method' => 'qr',
                'payment_status' => 'paid',
                'details' => [
                    'customer_name' => 'Nguyễn Minh Anh',
                    'phone' => '0911111111',
                    'health_status' => 'Da nhạy cảm, hơi khô',
                    'notes' => 'Khách muốn dùng phòng riêng'
                ],
            ],
            [
                'user_id' => 17,
                'service_id' => 5,
                'employee_id' => 3,
                'start_time' => Carbon::now()->subMonth(2)->setTime(4, 30),
                'status' => 'completed',
                'price' => 550000,
                'total_price' => 550000,
                'payment_method' => 'qr',
                'payment_status' => 'paid',
                'details' => [
                    'customer_name' => 'Trần Thị Ngọc',
                    'phone' => '0922222222',
                    'health_status' => 'Bình thường',
                    'notes' => 'Gội kỹ phần gáy'
                ]
            ],
            [
                'user_id' => 19,
                'service_id' => 18,
                'employee_id' => 7,
                'start_time' => Carbon::now()->subDays(2)->setTime(10, 0),
                'status' => 'completed',
                'price' => 950000,
                'total_price' => 950000,
                'payment_method' => 'cash',
                'payment_status' => 'paid',
                'details' => [
                    'customer_name' => 'Phạm Thị Dung',
                    'phone' => '0944444444',
                    'health_status' => 'Bình thường',
                    'notes' => 'Khách lần đầu đến Spa'
                ]
            ],
            [
                'user_id' => 17,
                'service_id' => 11,
                'employee_id' => 7,
                'start_time' => Carbon::now()->subDays(1)->setTime(3, 0),
                'status' => 'completed',
                'price' => 710000,
                'total_price' => 710000,
                'payment_method' => 'qr',
                'payment_status' => 'paid',
                'details' => [
                    'customer_name' => 'Khách Lan',
                    'phone' => '0944444444',
                    'health_status' => 'Bình thường',
                    'notes' => 'Khách lần đầu đến Spa'
                ]
            ],
            [
                'user_id' => 20,
                'service_id' => 14,
                'employee_id' => 2,
                'start_time' => Carbon::now()->subDays(2)->setTime(5, 0),
                'status' => 'completed',
                'price' => 249000,
                'total_price' => 249000,
                'payment_method' => 'qr',
                'payment_status' => 'paid',
                'details' => [
                    'customer_name' => 'Khách Mai',
                    'phone' => '0944444444',
                    'health_status' => 'Bình thường',
                    'notes' => 'Khách lần đầu đến Spa'
                ]
            ],
            [
                'user_id' => 23, // Ly
                'service_id' => 4, // Chăm sóc da mặt nhanh (max_slot=2)
                'employee_id' => null,
                'start_time' => Carbon::now()->addHours(1),
                'status' => 'pending',
                'price' => 800000,
                'total_price' => 800000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Ly',
                    'phone' => '0933333333',
                    'health_status' => 'Mặt đang dị ứng',
                    'notes' => 'Cần nhân viên tay nghề cao'
                ]
            ],

            [
                'user_id' => 24, // Oanh
                'service_id' => 4, // Chăm sóc da mặt nhanh (max_slot=2)
                'employee_id' => null,
                'start_time' => Carbon::now()->addHours(1),
                'status' => 'pending',
                'price' => 800000,
                'total_price' => 800000,
                'payment_method' => 'cash',
                'payment_status' => 'unpaid',
                'details' => [
                    'customer_name' => 'Oanh',
                    'phone' => '0933333333',
                    'health_status' => 'Bình thường',
                    'notes' => 'Muốn xoa bóp nhẹ nhàng'
                ]
            ],
        ];

        foreach ($appointments as $item) {
            // Lấy thông tin dịch vụ để tính End Time tự động (dựa trên duration)
            $service = DB::table('services')->where('id', $item['service_id'])->first();
            $endTime = Carbon::parse($item['start_time'])->addMinutes($service->duration ?? 60);

            // 1. Chèn vào bảng appointments
            $appointmentId = DB::table('appointments')->insertGetId([
                'user_id'        => $item['user_id'],
                'service_id'     => $item['service_id'],
                'employee_id'    => $item['employee_id'],
                'start_time'     => $item['start_time'],
                'end_time'       => $endTime,
                'status'         => $item['status'],
                'price'          => $item['price'],
                'total_price'    => $item['total_price'],
                'payment_method' => $item['payment_method'],
                'payment_status' => $item['payment_status'],
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);

            // 2. Chèn vào bảng appointment_details
            DB::table('appointment_details')->insert([
                'appointment_id' => $appointmentId,
                'customer_name'  => $item['details']['customer_name'],
                'email'          => $item['details']['customer_name'] . '@example.com', // Tạo email giả dựa trên tên khách
                'phone'          => $item['details']['phone'],
                'health_status'  => $item['details']['health_status'],
                'notes'          => $item['details']['notes'],
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}
