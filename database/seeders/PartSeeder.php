<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplierNamesBackup = [
            "lainnya",
            "PT CARLACK GERMINDO",
            "ISTANA MOTOR",
            "JAYA MAKMUR NUGRAHA PT.",
            "SARI SEMESTA UTAMA PT.",
            "MEGA MAKMUR MOTOR C.V",
            "ENAM JAYA -SUZUKI",
            "JS MOTOR",
            "TRIMINDO ABADI PT.",
            "NAWAJAYA DIRGANTARA PT.",
            "SUMBER TIMUR JAYA",
            "RAYA MOTOR PANTHER",
            "TERUS JAYA-DAIHATSU",
            "GANEFO",
            "MANTO",
            "BUANA SAKTI ANEKA MOTOR",
            "RAYA MOTOR MAZDA",
            "ERRITA MOTOR",
            "TUNAS MOTOR RADIO TAPE",
            "CHAMPION MOTOR",
            "SURYA MOTOR (HONDA)",
            "INDONESIA TUNGGAL MOTOR TOYOTA",
            "BERKAT PERDANA C.V",
            "WIJAYA MOTOR",
            "ALFA OMEGA",
            "AKAM",
            "KANA'AN",
            "PT INDO LESTARI",
            "DIRGANTARA MITRAMAHARDI",
            "MAJU MANDIRI (AHWA)",
            "CITRA NUSA WAHANA , PT",
            "GEMILANG ZETA PERKASA PT",
            "MEGA MOTOR",
            "OMEGA MOTOR",
            "SEDERHANA",
            "SINAR JAYA",
            "KARYA JAYA VARIASI",
            "DELIRAMA LANGGENG USAHA PT.",
            "PUTRA JAYA MOTOR ( TOYOTA ",
            "INDOMOBIL TRADA NAS - RENAULT",
            "DHARMA AUDIO",
            "ENAM JAYA-MAZDA",
            "HARAPAN MOTOR",
            "PRO MOTOR",
            "WAHANA AUTO (FORD)",
            "PRABU MOTOR",
            "TOYOTA MOTOR P.T",
            "GUNA KIMIA",
            "STANSDOKEN INDONESIA PT.",
            "GARUDA MOTOR",
            "AUTO 88 MOTOR",
            "FODR S. PARMAN",
            "PT.MATRA GEMILANG KENCANA",
            "INTI PRATAMA",
            "SARI MURNI",
            "ALFA",
            "NEW ERRITA",
            "PANJI RAMA OTOMOTIF.PT",
            "AKIE    ( HONDA )",
            "DAVID",
            "ROSELA INDAH MOTOR",
            "BUNGUR JAYA MOTOR",
            "AHENG",
            "MATRA GEMILANG KENCANA P.T",
            "SURYA MAS MOTOR",
            "BERDIKARI MOTOR",
            "CV TAMA JOGA RAYA",
            "JAYA PERKASA MOTOR",
            "TRIJAYA MOTOR",
            "JAYA GUNA",
            "PUTRA JAYA MOTOR (HONDA)",
            "ENAM JAYA-FORD",
            "ALFATAMA INTICIPTA",
            "SUPPLIER ASWATA",
            "TOKO 74",
            "ENAM JAYA TOYOTA",
            "MITRA SOLUSINDO",
            "PD SENANG",
            "PT SURYA HALIM CEMERLANG",
            "PRATAMA MOTOR",
            "H O Y",
            "RADIATOR AGEN TUNGGAL",
            "VKOOL INDO LESTARI",
            "SEMESTA KIMIA",
            "GOING",
            "TERUS JAYA-TOYOTA",
            "SAWAH BESAR BARU (KIA)",
            "SAWAH BESAR JAYA",
            "TRI STAR MOTOR",
            "ALUNG/TOYOTA",
            "NICHO JAYA MOTOR(HONDA/NISAN)",
            "EKA ADHI MAKMUR",
            "WARSO DHARMO UTAMA.PT",
            "KURNIA BERKAT USAHATAMA",
            "PRIMA JAYA MOTOR",
            "FORD JAKARTA BARAT",
            "SUMBER JAYA MOTOR",
            "TUNAS MOTOR",
            "CENTRAL AUTOMOTIVE INDONESIA",
            "SURYA KENCANA ABADI",
            "NUSANTARA BERLIAN MOTOR P.D",
            "PANJANG JIWO MOTOR",
            "PT.CAHAYA AGUNG LESTARI",
            "PETRA SEJATI",
            "SUMBER KARYA",
            "SRIKANDI DIAOMOND MOTORS",
            "PT SIGMA SUKSESPRATAMA",
            "SUMBER DIESEL MOTOR",
            "TIMUR JAYA",
            "RAHMAT MAS ADISONS",
            "AUTO PRIMA",
            "PT.GADING MAS MURNI UTAMA",
            "RAYA MOTOR HONDA",
            "CAKRA PANDAWA SAKTI",
            "SUZUKI MOTOR",
            "OTO CITRA SENTOSA PT",
            "JAYA SPEED MOTOR",
            "CV. SUAR KOMINDO",
            "PAFECTA",
            "CV.KARYA SUKSES MANDIRI",
            "NUSANTARA BATAVIA MOTOR PT",
            "DELTA TERUS JAYA",
            "JSW",
            "SUMBER GALERY MOTOR ( SGM )",
            "JAYA SAKTI MOTOR",
            "PT WANSA INDRA PERMANA",
            "JASALINDO MITRA BERSAMA",
            "PETA ANUGRAH",
            "PT.REABASTI SELLERO",
            "PT. PANDAWA LIMA PERKASA",
            "MAZDA SURYOPRANOTO",
            "SUMBER MUTIARA JAYA ABADI",
            "FORD JAKARTA PUSAT",
            "METRO TIGA BERLIAN MOTOR",
            "ANDALAN CHRISDECO, PT",
            "SURYA MOTOR",
            "CHERY QQ",
            "ANDALAN",
            "GELLY",
            "GEOFFREY MULYANTON",
            "SAWAH BESAR BARU (MAZDA)",
            "BINTANG JAYA MOTOR",
            "NHF",
            "DAITONA  SARUNG JOK",
            "SARINAH JAYA/MISUBISHI",
            "BERKAH MOTOR AUTO PARTS",
            "DUA SEKAWAN MOTOR (EX SINGAPUR)",
            "PT MICOSTAR FOTOCOPY",
            "BERJAYA AUTOSPARTS",
            "CANDRANUSA",
            "ENAM JAYA MITSUBISI",
            "PT.KHARISMA AGUNG LESTARI",
            "CHUNG SERVICE",
            "SAPUTRA BAN",
            "ANDALAN SUKSES",
            "SUNDA MOTOR ( PARTS SUZUKI)",
            "MAZDA S.PARMAN",
            "JS MOTOR ASIAW",
            "RAYA MOTOR MAZDA",
            "JS AUTO INDONESIA",
            "NIAGA SUKSES SEJAHTERA",
            "SAWAH BESAR BARU SUZUKI",
            "ALFA GLOSS DEMPUL",
            "MITRA MOTOR PT",
            "SUZUKI R M A",
            "PRIORITAS JAYA MOTOR",
            "SANTOSO MOTOR",
            "SAWAH BESAR BARU (TOYOTA)",
            "DWI MOTOR",
            "J S W ( TO POOSH )",
            "DUTA MOTOR",
            "ALFA JAYA ABADI ",
            "MOJI MOJI AUTOMOTIVE",
            "GARUDA MF",
            "GARUDA TOTALINDO",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            "",
            ""
        ];
        $parts = [
            [
                'name' => 'bumper',
                'car_id' => '1',
                'plate' => 'B 2050 OJK',
                'location_id' => '1',
                'supplier_id' => '1',
                'insurance_id' => '1',
                'status_id' => '1',
                'date'=> '2024-12-12',
                'description'=> ''
            ],
            [
                'name' => 'tire',
                'car_id' => '2',
                'plate' => 'C 3090 XYZ',
                'location_id' => '1',
                'supplier_id' => '2',
                'insurance_id' => '2',
                'status_id' => '1',
                'date'=> '2024-12-15',
                'description'=> ''
            ],
            [
                'name' => 'SPION KIRI',
                'car_id' => '5',
                'plate' => 'B 3022 QPW',
                'location_id' => '1',
                'supplier_id' => '2',
                'insurance_id' => '2',
                'status_id' => '1',
                'date'=> '2024-2-15',
                'description'=> ''
            ],
            [
                'name' => 'SPION KANAN',
                'car_id' => '5',
                'plate' => 'B 3022 QPW',
                'location_id' => '1',
                'supplier_id' => '2',
                'insurance_id' => '2',
                'status_id' => '1',
                'date'=> '2024-2-15',
                'description'=> ''
            ],
            [
                'name' => 'FENDER KIRI DEPAN',
                'car_id' => '22',
                'plate' => 'B 9092 POW',
                'location_id' => '1',
                'supplier_id' => '1',
                'insurance_id' => '1',
                'status_id' => '1',
                'date'=> '2024-2-15',
                'description'=> ''
            ],
            // Add more parts as needed
        ];

        DB::table('parts')->insert($parts);
    }
}
