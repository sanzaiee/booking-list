<?php

namespace Database\Seeders;

use App\Models\BookingList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
                [
                  "name" => "John Doe",
                  "email" => "johndoe@example.com",
                  "address" => "123 Main St",
                  "start_time" => "2020-12-01T09:00:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-01T10:00:00Z"
                ],[
                  "name" => "Jane Smith",
                  "email" => "janesmith@example.com",
                  "address" => "456 Elm St",
                  "start_time" => "2020-12-02T14:00:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-02T16:00:00Z"
                ],[
                  "name" => "David Johnson",
                  "email" => "davidjohnson@example.com",
                  "address" => "789 Oak St",
                  "start_time" => "2020-12-03T11:30:00Z",
                  "status" => 0,
                  "end_time" => "2020-12-03T13:30:00Z"
                ],[
                  "name" => "Sarah Williams",
                  "email" => "sarahwilliams@example.com",
                  "address" => "321 Pine St",
                  "start_time" => "2020-12-04T08:45:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-04T09:45:00Z"
                ],[
                  "name" => "Michael Brown",
                  "email" => "michaelbrown@example.com",
                  "address" => "654 Cedar St",
                  "start_time" => "2020-12-05T13:15:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-05T15:15:00Z"
                ],[
                  "name" => "Emily Jones",
                  "email" => "emilyjones@example.com",
                  "address" => "987 Maple St",
                  "start_time" => "2020-12-06T10:30:00Z",
                  "status" => 0,
                  "end_time" => "2020-12-06T12:30:00Z"
                ],[
                  "name" => "Daniel Lee",
                  "email" => "daniellee@example.com",
                  "address" => "159 Birch St",
                  "start_time" => "2020-12-07T07:45:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-07T08:45:00Z"
                ],[
                  "name" => "Olivia Taylor",
                  "email" => "oliviataylor@example.com",
                  "address" => "753 Walnut St",
                  "start_time" => "2020-12-08T12:00:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-08T14:00:00Z"
                ],[
                  "name" => "Matthew Wilson",
                  "email" => "matthewwilson@example.com",
                  "address" => "246 Spruce St",
                  "start_time" => "2020-12-09T09:30:00Z",
                  "status" => 0,
                  "end_time" => "2020-12-09T11:30:00Z"
                ],[
                  "name" => "Ava Moore",
                  "email" => "avamoore@example.com",
                  "address" => "579 Sycamore St",
                  "start_time" => "2020-12-10T06:45:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-10T07:45:00Z"
                ],[
                  "name" => "James Anderson",
                  "email" => "jamesanderson@example.com",
                  "address" => "864 Poplar St",
                  "start_time" => "2020-12-11T11:00:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-11T13:00:00Z"
                ],[
                  "name" => "Sophia Clark",
                  "email" => "sophiaclark@example.com",
                  "address" => "297 Oak St",
                  "start_time" => "2020-12-12T08:15:00Z",
                  "status" => 0,
                  "end_time" => "2020-12-12T10:15:00Z"
                ],[
                  "name" => "Benjamin Rodriguez",
                  "email" => "benjaminrodriguez@example.com",
                  "address" => "630 Elm St",
                  "start_time" => "2020-12-13T05:30:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-13T06:30:00Z"
                ],[
                  "name" => "Chloe Martinez",
                  "email" => "chloemartinez@example.com",
                  "address" => "963 Pine St",
                  "start_time" => "2020-12-14T10:45:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-14T12:45:00Z"
                ],[
                  "name" => "William Hernandez",
                  "email" => "williamhernandez@example.com",
                  "address" => "396 Cedar St",
                  "start_time" => "2020-12-15T08:00:00Z",
                  "status" => 0,
                  "end_time" => "2020-12-15T10:00:00Z"
                ],[
                  "name" => "Evelyn Lopez",
                  "email" => "evelynlopez@example.com",
                  "address" => "729 Maple St",
                  "start_time" => "2020-12-16T13:00:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-16T15:00:00Z"
                ],[
                  "name" => "Liam Gonzalez",
                  "email" => "liamgonzalez@example.com",
                  "address" => "162 Birch St",
                  "start_time" => "2020-12-17T10:15:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-17T12:15:00Z"
                ],[
                  "name" => "Mia Perez",
                  "email" => "miaperez@example.com",
                  "address" => "495 Walnut St",
                  "start_time" => "2020-12-18T07:30:00Z",
                  "status" => 0,
                  "end_time" => "2020-12-18T09:30:00Z"
                ],[
                  "name" => "Sebastian Torres",
                  "email" => "sebastiantorres@example.com",
                  "address" => "828 Spruce St",
                  "start_time" => "2020-12-19T12:45:00Z",
                  "status" => 1,
                  "end_time" => "2020-12-19T14:45:00Z"
                ],
                [
                    "name" => "Sebastian Torres One",
                    "email" => "sebastiantorresone@example.com",
                    "address" => "828 Spruce St",
                    "start_time" => "2024-03-14T12:45:00Z",
                    "status" => 1,
                    "end_time" => "2024-03-14T14:45:00Z"
                ],

                [
                    "name" => "Sebastian Prajapati",
                    "email" => "prajapati@example.com",
                    "address" => "828 Spruce St",
                    "start_time" => "2024-03-15T12:45:00Z",
                    "status" => 1,
                    "end_time" => "2024-03-15T14:45:00Z"
                ],
        ];

        foreach ($data as $item) {
            BookingList::updateOrCreate(['email' => $item['email']],$item);
        }
    }
}
