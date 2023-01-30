<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicslist = [
            [
            "title" => "Action Comics #1000: The Deluxe Edition",
            "description" => "a",
            "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX",
            "price" => "9.99",
            "series" => "Action Comics",
            "sale_date" => "2018-10-02",
            "type" => "comic book"
            ],
            [
                "title" => "American Vampire 1976 #1",
                "description" => "b",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01",
                "price" => "3.99",
                "series" => "American Vampire 1976",
                "sale_date" => "2020-10-06",
                "type" => "comic book"
            ],
            [
                "title" => "Aquaman Vol. 4: Underworld",
                "description" => "c",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb",
                "price" => "16.99",
                "series" => "Aquaman",
                "sale_date" => "2018-01-24",
                "type" => "graphic novel"
            ],
            [
                "title" => "Batgirl #1",
                "description" => "d",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76",
                "price" => "2.99",
                "series" => "Batgirl",
                "sale_date" => "2016-07-27",
                "type" => "comic book"
            ],
            [
                "title" => "Batman #56",
                "description" => "e",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
                "price" => "3.99",
                "series" => "Batman",
                "sale_date" => "2018-10-03",
                "type" => "comic book"
            ],
            [
                "title" => "Batman Beyond #1",
                "description" => "f",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ",
                "price" => "2.99",
                "series" => "Batman Beyond",
                "sale_date" => "2016-10-26",
                "type" => "comic book"
            ],
            [
                "title" => "Batman/Superman #1",
                "description" => "g",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8",
                "price" => "3.99",
                "series" => "Batman/Superman",
                "sale_date" => "2019-08-28",
                "type" => "comic book"
            ],
            [
                "title" => "Batman/Superman Annual #1",
                "description" => "h",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk",
                "price" => "4.99",
                "series" => "Batman/Superman Annual",
                "sale_date" => "2020-09-29",
                "type" => "comic book"
            ],
            [
                "title" => "Batman: The Joker War Zone #1",
                "description" => "i",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8",
                "price" => "5.99",
                "series" => "Batman: The Joker War Zone",
                "sale_date" => "2020-09-29",
                "type" => "comic book"
            ],
            [
                "title" => "Batman: Three Jokers #1",
                "description" => "l",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY",
                "price" => "6.99",
                "series" => "Batman: Three Jokers",
                "sale_date" => "2020-08-25",
                "type" => "comic book"
            ],
            [
                "title" => "Batman: White Knight Presents: Harley Quinn #1",
                "description" => "m",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX",
                "price" => "4.99",
                "series" => "Batman: White Knight Presents: Harley Quinn",
                "sale_date" => "2020-10-20",
                "type" => "comic book"
            ],
            [
                "title" => "Catwoman Vol. 1: Copycats",
                "description" => "n",
                "thumb" => "https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq",
                "price" => "16.99",
                "series" => "Catwoman",
                "sale_date" => "2019-04-10",
                "type" => "graphic novel"
            ]
    ];

        foreach ($comicslist as $comic) {
            Comic::create([
                'title' => $comic['title'],
                'description' => Str::words($comic['description'], 100),
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'type' => $comic['type']
            ]);
        }
    }
}
