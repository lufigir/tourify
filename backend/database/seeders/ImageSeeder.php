<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $base = "https://images.unsplash.com/photo-";
        $q = "?auto=format&fit=crop&q=80&w=800";

        $images = [
            // ── Places ──────────────────────────────────────────────────────────────────
            // 1 – Andrés Carne de Res (restaurant, festive, decorated)
            [
                "imageable_id" => 1,
                "imageable_type" => "place",
                "url" =>
                    "https://d3fphkxyf5o5bm.cloudfront.net/image-resize/format=webp,w=1200/1DB1XKShcfF1xmTnkcFiznxhD2ZSoczp",
            ],

            // 2 – Museo del Oro (museum, artifacts, gold, culture)
            [
                "imageable_id" => 2,
                "imageable_type" => "place",
                "url" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC29BBeRbzTTwa4bsCKbdDYC0QFIsqW9Czeg&s",
            ],

            // 3 – Casa de Nariño (palace, government, Bogotá architecture)
            [
                "imageable_id" => 3,
                "imageable_type" => "place",
                "url" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNur8UQ07E58YfvrQa5Xjur50D4F2SKgO4vg&s",
            ],

            // 4 – Centro Histórico de Cartagena (walled city, colorful, UNESCO)
            [
                "imageable_id" => 4,
                "imageable_type" => "place",
                "url" =>
                    "https://colombia.travel/sites/default/files/Cartagena-48-Foto-ProColombia.jpg",
            ],

            // 5 – Playa El Laguito (Caribbean beach, turquoise)
            [
                "imageable_id" => 5,
                "imageable_type" => "place",
                "url" =>
                    "https://www.tierrabombacartagena.com/wp-content/uploads/2018/04/preview_playas_del_laguito_1.jpg",
            ],

            // 6 – El Celler (fine dining, elegant, restaurant)
            [
                "imageable_id" => 6,
                "imageable_type" => "place",
                "url" =>
                    "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2f/20/69/e4/el-celler-es-una-cocina.jpg?w=900&h=500&s=1",
            ],

            // 7 – Bazurto Social Club (nightlife, club, dancing, Caribbean)
            [
                "imageable_id" => 7,
                "imageable_type" => "place",
                "url" =>
                    "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/19/4d/89/9d/sala-principal.jpg?w=900&h=500&s=1",
            ],

            // 8 – Playa Grande de Taganga (crystal beach, tropical)
            [
                "imageable_id" => 8,
                "imageable_type" => "place",
                "url" =>
                    "https://laplayademajo.com/wp-content/uploads/2024/11/Playa-Grande-Taganga-1.webp",
            ],

            // 9 – La Casa de los Mariscos (seafood, restaurant, Caribbean)
            [
                "imageable_id" => 9,
                "imageable_type" => "place",
                "url" =>
                    "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/83/84/bb/nuevo-salon-mirramana.jpg?w=900&h=-1&s=1",
            ],

            // 10 – Ciudad Perdida (ancient, ruins, jungle, archaeological)
            [
                "imageable_id" => 10,
                "imageable_type" => "place",
                "url" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKHM3xTXvg20sdbSksPijonw1lJnq8GceuqA&s",
            ],

            // 11 – Comuna 13 (street art, murals, colorful, urban art)
            [
                "imageable_id" => 11,
                "imageable_type" => "place",
                "url" =>
                    "https://s3.amazonaws.com/rtvc-assets-senalcolombia.gov.co/s3fs-public/styles/imagen_noticia/public/field/image/comuna-13-historia-turismo-portada.jpg?itok=2Cz4pfZP",
            ],

            // 12 – Parque Arví (cloud forest, nature, mountains)
            [
                "imageable_id" => 12,
                "imageable_type" => "place",
                "url" =>
                    "https://www.sacredtreks.com/wp-content/uploads/2026/03/medellin-from-parque-arvi.jpg",
            ],

            // 13 – Parque Nacional Tayrona (tropical, jungle, beach)
            [
                "imageable_id" => 13,
                "imageable_type" => "place",
                "url" =>
                    "https://upload.wikimedia.org/wikipedia/commons/7/76/Cabo_San_Juan%2C_Colombia.jpg",
            ],

            // 14 – Valle de Cocora (wax palms, valley, scenic)
            [
                "imageable_id" => 14,
                "imageable_type" => "place",
                "url" =>
                    "https://colombia.travel/sites/default/files/styles/imagen_650x450_escala_y_recorte/public/actividades/valle_del_cocora_0.jpg.webp?itok=JaGCIthZ",
            ],

            // 15 – Café Jesús Martín (coffee shop, coffee, Colombian coffee)
            [
                "imageable_id" => 15,
                "imageable_type" => "place",
                "url" =>
                    "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/64/28/e3/cafe-jesus-martin.jpg?w=600&h=400&s=1",
            ],

            // 16 – Mirador Alto de la Cruz (viewpoint, mountain, scenic view)
            [
                "imageable_id" => 16,
                "imageable_type" => "place",
                "url" =>
                    "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/24/8a/2f/1b/caption.jpg?w=900&h=500&s=1",
            ],

            // ── Events ──────────────────────────────────────────────────────────────────
            // 1 – Festival Internacional de Música del Caribe (music, concert, Caribbean)
            [
                "imageable_id" => 1,
                "imageable_type" => "event",
                "url" =>
                    "https://aceraizquierda.wordpress.com/wp-content/uploads/2015/01/n710040516_2482030_3605.jpg?w=640",
            ],

            // 2 – Concierto al Atardecer en Taganga (beach, concert, sunset, music)
            [
                "imageable_id" => 2,
                "imageable_type" => "event",
                "url" =>
                    "https://walksantamarta.com/img/atardecer_en_taganga.jpg",
            ],

            // 3 – Feria de las Flores de Medellín (flowers, festival, colorful)
            [
                "imageable_id" => 3,
                "imageable_type" => "event",
                "url" =>
                    "https://www.gaytravel4u.com/wp-content/uploads/2022/02/Festival-of-the-Flowers-Medellin-Feria-de-las-Flores-1.jpg",
            ],

            // 4 – Maratón de Bogotá 42K (marathon, running, race)
            [
                "imageable_id" => 4,
                "imageable_type" => "event",
                "url" =>
                    "https://bogota.gov.co/sites/default/files/2025-07/mas-de-42.000-deportistas-participaron-en-la-media-maraton-bogota-2025_0.png",
            ],

            // 5 – Festival del Café Colombiano (coffee, festival, culture)
            [
                "imageable_id" => 5,
                "imageable_type" => "event",
                "url" =>
                    "https://colombia.travel/sites/default/files/desfile-del-yipao.jpg",
            ],

            // 6 – Expedición a Ciudad Perdida (trek, hiking, jungle, adventure)
            [
                "imageable_id" => 6,
                "imageable_type" => "event",
                "url" =>
                    "https://wiwatour.com/wp-content/uploads/2025/12/ciudad-perdida-mamo-romualdo.webp",
            ],

            // 7 – Noche Caribeña en la Ciudad Amurallada (Caribbean, celebration, night)
            [
                "imageable_id" => 7,
                "imageable_type" => "event",
                "url" =>
                    "https://lavueltaalmundo.net/upload/blog/20121005101432-im1-cartagena_1.jpg",
            ],

            // 8 – Tour Gastronómico Nocturno por Bogotá (food, gastronomy, dining)
            [
                "imageable_id" => 8,
                "imageable_type" => "event",
                "url" =>
                    "https://hansatours.com/images/a37-bogota-zona-rosa.jpg",
            ],

            // 9 – Amanecer en Cabo San Juan del Guía (sunrise, beach, dawn, tropical)
            [
                "imageable_id" => 9,
                "imageable_type" => "event",
                "url" =>
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7A3IB25KjlsK0lJLGbrCTBkHNVD4Dp9TarA&s",
            ],

            // 10 – Festival Vallenato de la Leyenda (music, accordion, culture, festival)
            [
                "imageable_id" => 10,
                "imageable_type" => "event",
                "url" =>
                    "https://ortizo.com.co/cdn/shop/articles/festival_vallenato_2019_2_0.jpg?v=1743108558",
            ],

            // ── Cities ──────────────────────────────────────────────────────────────────
            // 1 – Bogotá (urban, skyline, high altitude, Andes)
            [
                "imageable_id" => 1,
                "imageable_type" => "city",
                "url" =>
                    "https://mir-s3-cdn-cf.behance.net/project_modules/hd_webp/3bd50a83828201.5d48d9c54b4a6.jpg",
            ],

            // 2 – Cartagena (colonial, walled city, colorful, Caribbean)
            [
                "imageable_id" => 2,
                "imageable_type" => "city",
                "url" =>
                    "https://discovercartagena.com.co/wp-content/uploads/2023/01/CARTAGENA-CITY-TOUR_03-e1717777018757.jpg",
            ],

            // 3 – Santa Marta (Caribbean coast, Sierra Nevada, tropical)
            [
                "imageable_id" => 3,
                "imageable_type" => "city",
                "url" =>
                    "https://blogdesarrolladores.lahaus.com/hubfs/santa-marta-invesion.jpg",
            ],

            // 4 – Medellín (innovation, transformation, mountains, urban)
            [
                "imageable_id" => 4,
                "imageable_type" => "city",
                "url" =>
                    "https://colombia.co/sites/default/files/articles/banner-medellin-colombia.webp",
            ],

            // 5 – Tayrona (tropical, jungle, Caribbean sea, nature)
            [
                "imageable_id" => 5,
                "imageable_type" => "city",
                "url" =>
                    "https://upload.wikimedia.org/wikipedia/commons/7/76/Cabo_San_Juan%2C_Colombia.jpg",
            ],

            // 6 – Salento (coffee region, colorful, wax palms, mountains)
            [
                "imageable_id" => 6,
                "imageable_type" => "city",
                "url" =>
                    "https://www.triviantes.com/wp-content/uploads/2022/12/top-3-mejores-planes-en-Salento-2.jpg",
            ],
        ];

        foreach ($images as $image) {
            Image::create(
                array_merge($image, [
                    "created_at" => now(),
                    "updated_at" => now(),
                ]),
            );
        }
    }
}
