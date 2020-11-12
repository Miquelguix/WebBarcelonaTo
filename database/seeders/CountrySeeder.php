<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $africa = ['Angola','Argelia','Benín','Botsuana','Burkina Faso','Burundi','Cabo Verde','Camerún','Chad','Comoras y Mayotte','Costa de Marfil','Egipto','Eritrea','Etiopía','Gabón','Gambia','Ghana','Guinea Ecuatorial','Guinea','Guinea-Bissau','Kenia','Lesoto','Liberia','Libia','Madagascar','Malí','Malaui','Marruecos','Mauricio','Mauritania','Mozambique','Níger','Namibia','Nigeria','República Centroafricana','República Democrática del Congo','República del Congo','Ruanda','Santo Tomé y Príncipe','Senegal','Seychelles','Sierra Leona','Somalia y Somalilandia','Suazilandia','Sudáfrica','Sudán del Sur','Sudán','Túnez','Tanzania','Togo','Uganda','Yibuti','Zambia','Zimbabue'];
        $continent = 'África';
        foreach($africa as $country) {
             Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
            ]);
        }


        $americaDelNorte = ['Anguila','Antigua y Barbuda','Aruba, Bonaire y Curazao','Bahamas','Barbados','Belice','Bermudas','Canadá','Costa Rica','Cuba','Dominica','El Salvador','Estados Unidos','Granada','Guadalupe','Guatemala','Haití','Honduras','Islas Caimán','Islas Vírgenes, de los EE UU y Británicas','Jamaica','México','Martinica','Nicaragua','Panamá','Puerto Rico','República Dominicana','San Cristóbal y Nieves','San Vicente y las Granadinas','Santa Lucía','Trinidad y Tobago'];
        $continent = 'América del Norte';
        foreach($americaDelNorte as $country) {
             Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
            ]);
        }


        $americaDelSur = ['Argentina','Bolivia','Brasil','Chile','Colombia','Ecuador','Guayana Francesa','Guyana','Islas Malvinas','Paraguay','Perú','Surinam','Uruguay','Venezuela'];
        $continent = 'América del Sur';
        foreach($americaDelSur as $country) {
             Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
            ]);
        }


        $asia = ['Afganistán','Arabia Saudí','Armenia','Azerbaiyán','Bahréin','Bangladés','Brunéi','Bután','Camboya','China','Corea del Norte','Corea del Sur','Emiratos Árabes Unidos','Filipinas','Hong Kong','India','Indonesia','Irán','Iraq','Israel y los Territorios Palestinos','Japón','Jordania','Kazajistán','Kirguistán','Kuwait','Líbano','Laos','Macao','Malasia','Maldivas','Mongolia','Myanmar','Nepal','Omán','Pakistán','Qatar','Singapur','Siria','Sri Lanka','Tíbet','Tailandia','Taiwán','Tayikistán','Timor Oriental','Turkmenistán','Turquía','Uzbekistán','Vietnam','Yemen'];
        $continent = 'Ásia';
        foreach($asia as $country) {
             Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
            ]);
        }


        $europa = ['Albania','Alemania','Andorra','Austria','Bélgica','Bielorrusia','Bosnia y Herzegovina','Bulgaria','Chipre','Ciudad del Vaticano','Croacia','Dinamarca','Escocia','Eslovaquia','Eslovenia','España','Estonia','Finlandia','Francia','Gales','Georgia','Grecia','Groenlandia','Hungría','Inglaterra','Irlanda del Norte','Irlanda','Islandia','Italia','Kosovo','Letonia','Liechtenstein','Lituania','Luxemburgo','Mónaco','Macedonia','Malta','Moldavia','Montenegro','Noruega','Países Bajos','Polonia','Portugal','República Checa','Rumanía','Rusia','San Marino','Serbia','Suecia','Suiza','Ucrania'];
        $continent = 'Europa';
        foreach($europa as $country) {
             Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
            ]);
        }


        $oceania = ['Australia','Fiyi','Guam','Isla Pitcairn','Islas Cook','Islas Marianas del Norte','Islas Marshall','Islas Salomón','Kiribati','Micronesia','Nauru','Nueva Caledonia','Nueva Zelanda','Palaos','Papúa Nueva Guinea','Samoa','Tahití y la Polinesia Francesa','Tonga','Tuvalu','Vanuatu'];
        $continent = 'Oceania';
        foreach($oceania as $country) {
             Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
            ]);
        }
       
        
        $country = 'Antartida';
        
        Country::create([
            'name' => $country,
            'countrySlug' => Str::slug($country),
            'continent' => $continent,
            'continentSlug' => Str::slug($continent),
        ]);
       
    }
}
