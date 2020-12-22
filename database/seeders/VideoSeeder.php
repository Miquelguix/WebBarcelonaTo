<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $name = "PRESENTACIÓN BARCELONA TO";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 163,
        'excerpt' => 'A los 17 años organicé mi primer viaje con la ayuda de una guía “El trotamundos” de la colección de mi padre. Sin internet ni GPS había que bajar la ventanilla y preguntar.',
        'body' => 'Aunque ahora es bastante más fácil, cuando organizas un viaje te asaltan un millón de dudas, sobre todo cuando tu tiempo es limitado y quieres que esos pocos días de que dispones rindan al máximo... Qué debo visitar? Cuanto tiempo me llevará ver ese lugar? Como organizo la ruta?<br><br>

        El objetivo de este canal es facilitar el camino a otros viajeros con mis experiencias y recomendaciones. Pequeños tips que pueden hacer que ahorres tiempo y dinero, y consejos que no encontrarás en las guías oficiales.<br><br>
        
        Y como no, espero contagiar a todo el que me vea de mi amor  por viajar y por sentir eso sin lo que ya no puedo vivir:<br><br> 
        
        La sensación de estar por primera vez en un lugar.<br><br>
        
        Gracias por visitar este canal.<br><br>
        
        Susana.
        ',
        'link' => 'G2ZE0O6LCTc',
        'img'   => '',
        'date'  => Carbon::parse('22-12-2018')->format('Y-m-d'),
        'duration'=>'3:46',
        'visual' => '6782',
        'lat'       => 41.387072, 
        'lon'       => 2.170049
    ]);

        $name = "Guía Dublin 2019, qué ver y hacer - IRLANDA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 174,
        'excerpt' => 'En este video te muestro mis primeras impresiones de Dublín, en mi viaje de una semana por Irlanda.',
        'body' => 'Todo lo que hay que visitar como las Catedrales, el Trinity college con su biblioteca, la Old Library, o la fábrica de la cerveza Guinness, la Guinness Storehouse. Con esta ruta de un día a pie por Dublín podrás conocer los imprescindibles de la ciudad. Un tour por el barrio de Temple Bar o el puente Ha’Penny Bridge donde te cuento anécdotas y curiosidades. 
        Viaje realizado en noviembre de 2018.',
        'link' => 'o-lgr7B2kqI',
        'img'   => '',
        'date'  => Carbon::parse('2-1-2019')->format('Y-m-d'),
        'duration'=>'14:59',
        'visual' => '34.383',
        'lat'       => 53.345655, 
        'lon'       => -6.264157
    ]);

        $name = "Rock of cashel, conduciendo por la izquierda - IRLANDA 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 174,
        'excerpt' => 'En este video visitamos el Museo Nacional de Arqueología y el Castillo de Dublín y damos un relajado paseo por las calles más comerciales, Grafton Street y Dame Street, para acabar en el parque Saint Stephen’s Green. Al día siguiente empezamos la ruta de 5 días por Irlanda en coche. ',
        'body' => 'Visitamos el pueblo de Kilkenny en el que no te puedes perder la subida a la torre de la Catedral de Saint Canice y Rock of Cashel donde se encuentra la famosa Cruz de San Patricio. Aunque lo más auténtico de este día es la experiencia de conducir por el lado izquierdo!
        Viaje realizado en noviembre de 2018.',
        'link' => 'Gr0GUEuA_ow',
        'img'   => '',
        'date'  => Carbon::parse('10-1-2019')->format('Y-m-d'),        
        'duration'=>'13:52',
        'visual' => '10.487',
        'lat'       => 52.520174, 
        'lon'       => -7.890409
    ]);

        $name = "Ruta por el Anillo de Kerry - IRLANDA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 174,
        'excerpt' => 'En este video nos adentramos en la Irlanda más rural y encantadora para conocer el condado de Kerry y disfrutar de la famosísima Ruta del Anillo de Kerry.',
        'body' => 'La lluvia nos acompaña durante todo el recorrido pero eso no nos impide disfrutar de uno de los días más especiales de nuestro viaje de una semana a Irlanda. El clima de Irlanda es muy lluvioso por eso creo que quien tenga la “suerte” de no ver la lluvia durante su estancia, en realidad se está perdiendo una parte imprescindible de la belleza de la isla esmeralda. ¿Queréis saber cual es la media de días lluviosos al año en esta zona de Irlanda? ¡Aquí os lo cuento! ¿Sois de los que os ha tocado lluvia en vuestro viaje? ¿Os enamorasteis del anillo tanto como yo o creéis que no es para tanto? ¡Estoy deseando conocer vuestras experiencias!!!!
        Viaje realizado en noviembre de 2018.',
        'link' => '1muDN6SwZqQ',
        'img'   => '',
        'date'  => Carbon::parse('16-1-2019')->format('Y-m-d'),        
        'duration'=>'15:08',
        'visual' => '6900',
        'lat'       => 52.060644, 
        'lon'       => -9.508973
    ]);

        $name = "Acantilados de Moher - IRLANDA 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 174,
        'excerpt' => 'Todos hemos visto miles de imágenes de los acantilados de Moher, sin embargo ni el mejor fotógrafo puede plasmar en una imagen lo que se siente al estar allí y verlo con tus propios ojos. ',
        'body' => 'Por algo es el top de Irlanda. Y por algo inspira a escritores, poetas, músicos y artistas. ¿Vas a ir pronto? Te cuento como ahorrar dinero en la visita a los Acantilados de Moher.
        Con el sueño cumplido en el bolsillo continuamos con la ruta de 5 días por Irlanda en coche hacia Galway parando en el impresionante Parque Nacional de El Burren y visitando el Poulnabrune Dolmen. 
        ¿Os emociona la naturaleza o sois más de ciudades? ¡¡Contadme todo!!
        Viaje realizado en noviembre de 2018.',
        'link' => 'uiEEFjT60G0',
        'img'   => '',
        'date'  => Carbon::parse('23-1-2019')->format('Y-m-d'),
        'duration'=>'10:59',
        'visual' => '5498',
        'lat'       => 52.9721044, 
        'lon'       => -9.430882
    ]);

        $name = "Belfast, tour político y museo Titanic - IRLANDA 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 174,
        'excerpt' => 'En este vídeo visitamos Belfast, la capital de Irlanda del Norte, en el que fue el día que nos tocó más la fibra de nuestro viaje de una semana por Irlanda. ',
        'body' => 'Por la mañana conocemos la situación económica de Belfast a principios del siglo XX a través de la visita al Museo Titanic, situado justo en el astillero de Harland and Wolff donde fue construido.
        Por la tarde, saltamos hasta finales del siglo XX. 
        Hace tan solo 20 años no era seguro visitar Belfast. 
        Conocemos uno de los mayores conflictos en la historia reciente de Europa: The Troubles. Recorremos el muro que separa católicos y protestantes por Falls Road y Shankill Road de la mano de dos exprisioneros que nos cuentan las dos caras de la historia. 
        El turista visita los lugares. El viajero además necesita entenderlos para hacerlos un poco más suyos y llevarse un pedacito de ellos en su corazón. 
        ¿Os parece interesante este tour? ¡Me encantaría conocer vuestras opiniones!',
        'link' => 'aIyENsHfFkY',
        'img'   => '',
        'date'  => Carbon::parse('30-1-2019')->format('Y-m-d'),
        'duration'=>'12:33',
        'visual' => '5466',
        'lat'       => 54.609233, 
        'lon'       => -5.909812
    ]);

        $name = "Calzada del Gigante - IRLANDA 6";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 174,
        'excerpt' => 'En este vídeo nos centramos en la Costa Norte de Irlanda y visitamos la Calzada del Gigante, una impresionante formación geológica con más de 60 millones de años de antigüedad. ¿Conocéis la historia del gigante Finn? ¿Queréis saber cómo ahorrar dinero en vuestra visita a la Calzada del Gigante?',
        'body' => 'El último día de nuestra ruta de 5 días en coche por Irlanda se completa con la visita a una de las localizaciones de la serie Juego de Tronos, The Dark Hedges y un puente colgante con unas vistas impresionantes, el Carrick-a-rede rope bridge.
        Hasta aquí la lista de reproducción de Irlanda, ¿Os ha gustado? ¿Os ha entrado el gusanillo por visitar este país? Podéis comentar, sugerir ideas o darme consejos para que pueda ir mejorando cosas con cada vídeo.
        ¡Gracias por estar ahí y ver mis vídeos! ¡Nos vemos en el próximo viaje!
        ',
        'link' => 'qk1S0kr1R2M',
        'img'   => '',
        'date'  => Carbon::parse('6-2-2019')->format('Y-m-d'),
        'duration'=>'14:02',
        'visual' => '6055',
        'lat'       => 55.240855, 
        'lon'       => -6.511454
    ]);

        $name = "El Zoco de Marrakech 2019 - MARRUECOS 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'En este vídeo llegamos a Marrakech, la ciudad más turística de Marruecos. Te cuento cómo ir del aeropuerto al centro de Marrakech. ',
        'body' => 'Además, en la primera toma de contacto con Marruecos y Marrakech visitamos la medina y la Plaza Jemaa el Fna, declarada patrimonio intangible por la Unesco por ser un espectáculo de tradición y cultura. Puedes ver ese espectáculo tranquilamente desde cualquiera de las terrazas que rodean la plaza como la del Café de France donde tendrás una espectacular vista de la plaza Jemaa el Fna con la mezquita de la Koutubia de fondo. Más tarde recorremos el famoso zoco de Marrakech, el lugar de los olores, colores y sabores es un auténtico estímulo para los sentidos.
        Conocemos la elaboración del auténtico aceite de argán y de las alfombras bereberes. 
        Ah, y mucho cuidado con los guías improvisados!
        Viaje realizado en enero de 2019.',
        'link' => 'adrUNrmU8xc',
        'img'   => '',
        'date'  => Carbon::parse('13-2-2019')->format('Y-m-d'),
        'duration'=>'13:34',
        'visual' => '6277',
        'lat'       => 31.6258533, 
        'lon'       => -7.989121
    ]);

        $name = "Guía Marrakech 2019 - MARRUECOS 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'En este vídeo recorremos los lugares más imprescindibles de Marrakech para mostrarte qué ver y hacer en 1 día en una ruta a pie por Marrakech. ',
        'body' => 'Recorremos el palacio Badi, las tumbas Sadíes, el palacio Bahía, el museo Dar Si Said, y la espectacular Mezquita de la Koutubia con su minarete. A través de la muralla y la puerta Bab Agnou, conocemos la entrada de las antiguas caravanas del desierto. Acabamos la ruta en la céntrica plaza Jemaa el Fna, el lugar más imprevisible de Marrakech donde cualquier cosa puede pasar. Y hasta me atrevo con una serpiente!! Al ponerse el sol la plaza se convierte en un centro gastronómico con sus cocinas ambulantes donde podrás probar los platos típicos de marruecos: la tajine, el couscous, la harira, el pan khubz, la maakouda, acompañado de un té con menta ideal para las dulces pastas marroquíes.
        Viaje realizado en enero de 2019.',
        'link' => 'BVWM6LCPKfI',
        'img'   => '',
        'date'  => Carbon::parse('20-2-2019')->format('Y-m-d'),
        'duration'=>'18:37',
        'visual' => '10.388',
        'lat'       => 31.6239686, 
        'lon'       => -7.993714
    ]);

        $name = "Ruta de las Kasbahs, Ait Ben Haddou - MARRUECOS 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'En nuestro tercer día en Marruecos iniciamos la ruta de tres días hacia el desierto Erg Chebbi, en Merzouga, pasando por la ruta de los castillos y visitando la espectacular kasbah Ait Ben Haddou y los estudios de cine Atlas, en Ouarzazate. ',
        'body' => 'Para ello deberemos cruzar el Atlas lo que nos llevará a ver algunas de las mejores vistas panorámicas de Marruecos, llegando al punto más alto de la ruta, el puerto de Tizi-N-Tichka. Llegamos cansados pero contentos al pequeño pueblo bereber de Ibrrahne donde se encuentra nuestro Riad Tazawa, en pleno valle de las rosas.
        Viaje realizado en enero de 2019.',
        'link' => 'tQPTklAL4R0',
        'img'   => '',
        'date'  => Carbon::parse('27-2-2019')->format('Y-m-d'),
        'duration'=>'15:51',
        'visual' => '5417',
        'lat'       => 31.047593, 
        'lon'       => -7.130168
    ]);

        $name = "Ruta pueblos bereberes - MARRUECOS 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'En nuestro cuarto día en Marruecos seguimos con la ruta y llegamos al desierto Erg Chebbi, en Merzouga, pasando por la ruta de los castillos y conocemos la cultura bereber a través de Hassan, nuestro guía.',
        'body' => 'Saliendo del Valle del Dades, en la ciudad de las rosas nos muestran el proceso de fabricación del agua de rosas y el aceite de rosas. Llegamos a la espectacular Garganta del Todra, lugar visitado por muchos escaladores y amantes del trekking. Siguiendo la ruta de 3 días por el desierto de Marruecos conocemos los pozos o Khettaras de Tafilalet y finalmente subimos a los camellos que nos llevarán hasta el campamento bereber en mitad de las dunas del desierto Erg Chebbi, en Merzouga. ',
        'link' => 'FkGkqIu5A8E',
        'img'   => '',
        'date'  => Carbon::parse('6-3-2019')->format('Y-m-d'),
        'duration'=>'15:24',
        'visual' => '9396',
        'lat'       => 31.4523493, 
        'lon'       => -5.968386
    ]);

        $name = "Desierto del Sáhara - MARRUECOS 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'Vivir la experiencia de dormir una noche en el desierto es algo que te enriquece como persona. Ver el atardecer a lomos de un camello, dormir en una jaima en pleno mes de enero y subir a lo alto de una duna muy temprano para ver salir el sol son de esas cosas que todos deberíamos hacer al menos una vez en la vida. ',
        'body' => 'No te lo pienses más y apúntate a un tour en 4x4 por el desierto del Sáhara, Erg Chebbi, en Merzouga, donde además de vivir todo eso podrás conocer más sobre la cultura bereber, tocar sus tambores alrededor de una hoguera, realizar salidas en quad o incluso hacer sandboard (el snowboard del desierto).  
        Viaje realizado en enero de 2019.',
        'link' => 'UFyVtROgx0k',
        'img'   => '',
        'date'  => Carbon::parse('13-3-2019')->format('Y-m-d'),
        'duration'=>'14:05',
        'visual' => '8929',
        'lat'       => 31.0789607, 
        'lon'       => -4.008795
    ]);

        $name = "Valle del Ziz con Miquel Silvestre - MARRUECOS 6";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'En este video os muestro la ruta des del desierto Erg Chebbi hasta Fez, a través del Valle de Ziz, cruzando el medio atlas y pasando por el bosque de los cedros y Ifrane o la Suiza de Marruecos.',
        'body' => 'Viaje realizado en enero de 2019. ',
        'link' => 'Y_nZWZbqHFg',
        'img'   => '',
        'date'  => Carbon::parse('19-3-2019')->format('Y-m-d'),
        'duration'=>'9:33',
        'visual' => '4022',
        'lat'       => 32.0907155, 
        'lon'       => -4.375917
    ]);

        $name = "Guía Fez 2019 - MARRUECOS 7";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 28,
        'excerpt' => 'En este video nos adentramos en la fascinante ciudad de Fez.',
        'body' => 'Una ruta de 1 día por Fez para conocer los imprescindibles de la que dicen es la capital cultural, espiritual e intelectual de Marruecos. 
        Viaje realizado en enero de 2019. ',
        'link' => 'WTsq1adfXR8',
        'img'   => '',
        'date'  => Carbon::parse('27-3-2019')->format('Y-m-d'),
        'duration'=>'18:43',
        'visual' => '4595',
        'lat'       => 34.055734, 
        'lon'       => -4.99321
    ]);

        $name = "Guía Praga 2019, 5 lugares que ver - REPÚBLICA CHECA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 191,
        'excerpt' => 'Empezamos nuestro viaje por la República Checa conociendo su capital Praga, una de las ciudades más bonitas de Europa.',
        'body' => 'Hacemos una ruta por los lugares imprescindibles que visitar en Praga. El puente Carlos, la Plaza de la Ciudad Vieja o Stare Mesto, con el famoso reloj astronómico, el enorme Castillo con su Catedral de San Vito o la Torre de la Pólvora son lugares que no puedes perderte en tu primera visita a Praga.
        Viaje realizado en febrero de 2019. ',
        'link' => 'KMO7uj28S9w',
        'img'   => '',
        'date'  => Carbon::parse('3-4-2019')->format('Y-m-d'),
        'duration'=>'16:11',
        'visual' => '49.077',
        'lat'       => 50.0869745, 
        'lon'       => 14.42075
    ]);

    $name = "Lugares poco conocidos en Praga - REPÚBLICA CHECA 2";


    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 191,
        'excerpt' => 'Hoy hacemos una ruta por lugares menos visitados de Praga a través de las esculturas más famosas de David Cerny, un polémico escultor de estatuas provocadoras.',
        'body' => 'Es una buena manera de callejear por Praga y pasear por lugares poco turísticos. Además visitamos la Torre de la Televisión de Praga para disfrutar de las vistas 360 grados de Praga desde sus miradores. Finalmente realizamos un tour de la cerveza para comprobar a través de divertidas anécdotas porqué los checos son los mayores bebedores de cerveza del mundo. En este tour probamos la famosa cerveza checa Pilsner Urquell.
        Viaje realizado en febrero de 2019. ',
        'link' => 'wWjDuOKG7Kc',
        'img'   => '',
        'date'  => Carbon::parse('10-4-2019')->format('Y-m-d'),
        'duration'=>'15:08',
        'visual' => '25.776',
        'lat'       => 50.0841696, 
        'lon'       => 14.408374
    ]);

        $name = "La iglesia de huesos de Praga - REPÚBLICA CHECA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 191,
        'excerpt' => 'Hoy hacemos una ruta hacia el este de la República Checa que nos llevará a conocer lugares fascinantes y curiosos como el Osario de Sedlec, una original capilla cuya decoración está compuesta por huesos humanos.',
        'body' => 'Aprovechamos para pasear tranquilamente por la p`reciosa ciudad de Kutna Hora. Posteriormente nos dirigimos hacia Olomuc, una joya por explorar ya que pocos turistas la visitan. Pero no sin antes conocer el maravilloso Castillo de Bouzov donde grabaremos algunas tomas aéreas para tener una buena perspectiva del castillo y de toda la zona. 
        Viaje realizado en febrero de 2019. ',
        'link' => 'NgJiKl-sPkw',
        'img'   => '',
        'date'  => Carbon::parse('24-4-2019')->format('Y-m-d'),
        'duration'=>'16:20',
        'visual' => '8933',
        'lat'       => 49.961777, 
        'lon'       => 15.28802
    ]);

        $name = "El barrio Judío de Praga - REPÚBLICA CHECA 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 191,
        'excerpt' => 'Hoy hacemos una ruta por los dos barrios más conocidos de Praga, el encantador barrio de Mala Strana y el histórico Josefov, el barrio judío en el que nació Kafka. ',
        'body' => 'Visitaremos las sinagogas más importantes de Praga y el antiguo cementerio judío. Una visita imprescindible para cualquier viajero que visite Praga. 
        Viaje realizado en febrero de 2019. ',
        'link' => 'NgJiKl-sPkw',
        'img'   => '',
        'date'  => Carbon::parse('8-5-2019')->format('Y-m-d'),
        'duration'=>'9:48',
        'visual' => '7487',
        'lat'       => 50.089568, 
        'lon'       => 14.417588
    ]);

    $name = "El timo de las casas de cambio en Praga! Que no te pase!!";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 191,
        'excerpt' => 'Mucho cuidado con las casas de cambio en la ciudad de Praga porque aplican abusivas comisiones de hasta el 28% sin avisarte!',
        'body' => 'Así que te recomiendo que siempre calcules el cambio y compruebes que el importe recibido coincide con el cambio que te dicen! Si quieres saber donde cambiar dinero sin pagar comisiones de más, no te pierdas el vídeo!',
        'link' => '4UFyHBJvLb8',
        'img'   => '',
        'date'  => Carbon::parse('8-4-2019')->format('Y-m-d'),
        'duration'=>'3:58',
        'visual' => '4848',
        'lat'       => 50.086733, 
        'lon'       => 14.41887
    ]);



        $name = "Guia Amsterdam 2019 - PAISES BAJOS 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 188,
        'excerpt' => 'Bienvenidos a los Países Bajos, empezamos nuestra ruta por los Paises Bajos por su capital, Amsterdam.',
        'body' => 'Hoy recorreremos los canales de Amsterdam, el mercado de flores flotante, la plaza Dam, con su Iglesia Nueva y los museos más importantes de Amsterdam, el Museo Van Gogh y la Casa de Ana Frank. 
        Además te cuento cómo aparcar barato en Amsterdam.
        Viaje realizado en abril de 2019. ',
        'link' => 'l2Stw9wHXPo',
        'img'   => '',
        'date'  => Carbon::parse('15-4-2019')->format('Y-m-d'),
        'duration'=>'12:54',
        'visual' => '4105',
        'lat'       => 52.369730, 
        'lon'       => 4.898949
    ]);

        $name = "Barrio Rojo de Amsterdam - PAISES BAJOS 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 188,
        'excerpt' => 'Uno de los barrios más visitados y famosos de Amsterdam es el Barrio Rojo, llamado de esta forma por las luces de color rojo que provienen de los famosos escaparates en los que trabajan las prostitutas.',
        'body' => 'Nos adentramos en el museo de la prostitución de Amsterdam, el Red Light Secrets, para ver cómo son estos escaparates y vitrinas, para saber más sobre la historia y curiosidades sobre el oficio de la prostitución legalizada en los Paises Bajos desde el año 2000. 
        Viaje realizado en abril de 2019. ',
        'link' => 'oRuq1nlIPtw',
        'img'   => '',
        'date'  => Carbon::parse('22-4-2019')->format('Y-m-d'),
        'duration'=>'8:22',
        'visual' => '3823',
        'lat'       => 52.371857, 
        'lon'       => 4.896086
    ]);

        $name = "Pueblos típicos de Holanda y mercado del queso - PAISES BAJOS 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 188,
        'excerpt' => 'Ningún viaje a los Paises Bajos está completo si no dedicas un día mínimo a recorrer los pueblos típicos holandeses. Marken, Volendam y Edam son los más encantadores y famosos.',
        'body' => 'Sus casas y pequeños puertos pesqueros hacen que estos pueblos parezcan los escenarios de un cuento. Pero te recomiendo también llegar hasta Alkmaar donde todos los viernes celebran su histórico mercado del queso de Alkmaar, donde disfrutarás del tradicional queso holandés a la vez que pasarás una divertida mañana viendo las peripecias de este gremio tan especial y con ese puntito “friki” que tanto me gusta!  
        Viaje realizado en abril de 2019. 
        ',
        'link' => '2WqytPKyVlM',
        'img'   => '',
        'date'  => Carbon::parse('29-4-2019')->format('Y-m-d'),
        'duration'=>'14:10',
        'visual' => '202.788',
        'lat'       => 52.4953396, 
        'lon'       => 5.069852
    ]);

        $name = "Campos de tulipanes a vista de dron. Visitando Keukenhof - PAISES BAJOS 4";
    
    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 188,
        'excerpt' => 'Holanda se caracteriza por sus molinos y sus tulipanes. Así que en tu viaje a los Países Bajos no puedes perderte Keukenhof que es el parque floral de tulipanes más importante del mundo donde miles de especies diferentes de tulipanes se cultivan cada año.',
        'body' => 'Además, si te interesa saber dónde encontrar los campos de tulipanes y que ruta seguir desde Amsterdam para ver campos de tulipanes, en este vídeo hallarás la respuesta. Algo precioso es disfrutar de la vista desde el aire de los coloridos campos de tulipanes a través de las imágenes de drone que te muestro en este vídeo. 
        Otro de los lugares imprescindibles de los Países Bajos es el famoso conjunto de molinos de viento de Zaanse Schans, que puedes visitar muy cerca de Amsterdam y donde también te muestro imágenes a vista de drone de los molinos más famosos de Holanda.
        Viaje realizado en abril de 2019. 
        ',
        'link' => '2335Su5gZcw',
        'img'   => '',
        'date'  => Carbon::parse('5-5-2019')->format('Y-m-d'),
        'duration'=>'5:12',
       'visual' => '26.310',
       'lat'        => 52.2631186, 
       'lon'        => 4.548330
    ]);

        $name = "Rotterdam 2019 - PAISES BAJOS 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 188,
        'excerpt' => 'En este vídeo visitamos la ciudad de Rotterdam, situada al sur de los Países Bajos, una ciudad que contrasta con el resto del país y que dará a tu viaje un toque diferente.',
        'body' => 'Además está a muy poca distancia de una de las mayores atracciones del país, Kinderdijk, la zona de molinos que te mostraré en el siguiente vídeo. 
        Despuntando en modernidad y arquitectura, la ciudad de Rotterdam supone la principal base comercial de los Países Bajos, y es que en Rotterdam se encuentra en mayor puerto de Europa y el segundo mayor puerto del mundo, por detrás de Shanghái.
        Además, Rotterdam es una ciudad cosmopolita, caracterizada por su gran arquitectura patente en sus edificios y construcciones. El puente Erasmusbrug, o el Markthal son algunos ejemplos de la innovación y tecnología desarrollada en las últimas construcciones que combinan espacios multifuncionales sostenibles. Aunque sin duda, lo que no puedes perderte en tu visita, son las curiosas casas cúbicas de Rotterdam, unas curiosas viviendas que atraen a turistas y curiosos. Si te apetece ver como es una casa cúbica por dentro no te pierdas este vídeo. 
        Viaje realizado en abril de 2019. ',
        'link' => 'RRdOZylEXxo',
        'img'   => '',
        'date'  => Carbon::parse('12-5-2019')->format('Y-m-d'),
        'duration'=>'9:57',
        'visual' => '12.273',
        'lat'       => 51.920745, 
        'lon'       => 4.488141
    ]);

        $name = "Molinos en Holanda, Kinderdijk - PAISES BAJOS 6";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 188,
        'excerpt' => 'Último día de nuestro viaje por los Países Bajos y hoy visitamos la zona de molinos más importante de los Países Bajos.',
        'body' => 'Kinderdijk al sur del país y muy cerca de Rotterdam, es el mejor lugar para entender cómo se formó el país y la importancia histórica que tienen los molinos de viento, que durante siglos bombean el agua para ganar terreno al mar. 
        Además, la zona es ideal para pasear a pie o en bicicleta y relajarse, apartándose de las zonas más industriales como Rotterdam. Visitamos el molino museo donde aprendemos más sobre la historia de esta región. 
        Viaje realizado en abril de 2019. ',
        'link' => 'vGihp2iDBpQ',
        'img'   => '',
        'date'  => Carbon::parse('19-6-2019')->format('Y-m-d'),
        'duration'=>'11:24',
        'visual' => '6755',
        'lat'       => 51.883540, 
        'lon'       => 4.641235
    ]);

        $name = "Guía Bruselas 2019 - BELGICA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 152,
        'excerpt' => 'En el vídeo de hoy os muestro una ruta por los lugares más importantes de la capital de Bélgica.',
        'body' => 'La Grand Place es el punto de partida de nuestra ruta a pie por el centro de Bruselas, que nos llevará a visitar el famoso Manneken Pis, la catedral o las galerías del rey y la reina. Además, no podéis perderos los dos productos estrella de Bélgica: el chocolate y la cerveza belgas. 
        Viaje realizado en abril de 2019. ',
        'link' => 'H-zzk0GqJAc',
        'img'   => '',
        'date'  => Carbon::parse('26-7-2019')->format('Y-m-d'),
        'duration'=>'9:31',
        'visual' => '2313',
        'lat'       => 50.846927, 
        'lon'       => 4.352390
    ]);

        $name = "Qué ver en Brujas en 1 día - BELGICA 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 152,
        'excerpt' => 'En este viaje visitamos las tres ciudades más importantes de Bélgica: Bruselas, Brujas y Gante.',
        'body' => 'En el vídeo de hoy os muestro una ruta por los lugares más importantes de Brujas. No te pierdas la que para muchos es la ciudad más bonita de Europa.
        Viaje realizado en abril de 2019. ',
        'link' => 'siSG7nnZDfA',
        'img'   => '',
        'date'  => Carbon::parse('3-7-2019')->format('Y-m-d'),
        'duration'=>'10:55',
        'visual' => '7709',
        'lat'       => 51.208553, 
        'lon'       => 3.226751
    ]);

        $name = "Gante qué ver - BELGICA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 152,
        'excerpt' => 'En este viaje visitamos las tres ciudades más importantes de Bélgica: Bruselas, Brujas y Gante.',
        'body' => 'En el vídeo de hoy os muestro una ruta por los lugares más importantes de Gante. Para muchos Brujas es la ciudad más bonita de Bélgica, sin embargo yo prefiero Gante y es que Gante es una de las ciudades con más encanto de Europa, además de ser una de las ciudades más bonitas de noche por su iluminación. ¿Y tú? ¿Prefieres Brujas o Gante?
        Viaje realizado en abril de 2019. ',
        'link' => 'OP5-3deJCuA',
        'img'   => '',
        'date'  => Carbon::parse('10-7-2019')->format('Y-m-d'),
        'duration'=>'16:31',
        'visual' => '3534',
        'lat'       => 51.054656, 
        'lon'       => 33.720343
    ]);

        $name = "Guía de Venecia 2019 (Parte 1) - ITALIA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 176,
        'excerpt' => 'En  el vídeo de hoy os muestro una parte de Venecia en la que recorremos el gran canal con el vaporetto, la Plaza San Marcos y el Cannaregio',
        'body' => 'Este es nuestro primer día de un recorrido por el norte de Italia, en el que visitamos Venecia, Verona, Lago de Garda, Lago de Como y Milán.
        Viaje realizado en mayo de 2019. ',
        'link' => 'Atm3FZ0WXbI',
        'img'   => '',
        'date'  => Carbon::parse('17-7-2019')->format('Y-m-d'),
        'duration'=>'24:32',
        'visual' => '2818',
        'lat'       => 45.4343925, 
        'lon'       => 12.339094
    ]);

        $name = "Guía de Venecia 2019 (Parte 2) Cómo ahorrar en Venecia - ITALIA 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 176,
        'excerpt' => 'En  el vídeo de hoy os muestro las visitas más culturales de Venecia, el Palacio Ducal, la Basílica de San Marcos o la iglesia de Santa María de la Salute.',
        'body' => 'Además os doy algunos tips para ahorrar dinero en Venecia en el alojamiento. 
        Además, paseamos por zonas menos turísticas de Venecia como el Dorsoduro o el Squero de San Trovaso donde os cuento algunas curiosidades sobre las góndolas. 
        Este es nuestro segundo día de un recorrido por el norte de Italia, en el que visitamos Venecia, Verona, Lago de Garda, Lago de Como y Milán.
        Viaje realizado en mayo de 2019. ',
        'link' => 'xv3T29mySTY',
        'img'   => '',
        'date'  => Carbon::parse('24-7-2019')->format('Y-m-d'),
        'duration'=>'14:27',
        'visual' => '3104',
        'lat'       => 45.439879, 
        'lon'       => 12.327268
    ]);

        $name = "Guía de Verona 2019, la ciudad de Romeo y Julieta - ITALIA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 176,
        'excerpt' => 'En  el vídeo de hoy os muestro nuestro tercer día de un recorrido por el norte de Italia, en el que visitamos Venecia, Verona, Lago de Garda, Lago de Como y Milán.',
        'body' => 'Hoy toca parada de un día en Verona, la ciudad de Romeo y Julieta. Aunque después de visitarla descubrimos que Verona tiene mucho más que ofrecernos.
        Viaje realizado en mayo de 2019. ',
        'link' => 'yLriabzLclc',
        'img'   => '',
        'date'  => Carbon::parse('31-7-2019')->format('Y-m-d'),
        'duration'=>'14:10',
        'visual' => '2224',
        'lat'       => 45.4389735, 
        'lon'       => 10.994251
    ]);

        $name = "Lago de Garda, Sirmione, Lago de Como, Bellagio y Varena - ITALIA 4";
    
    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 176,
        'excerpt' => 'En  el vídeo de hoy os muestro los dos lagos principales del norte de Italia: el Lago de Garda y el Lago de Como.',
        'body' => 'Estos lagos tienen pueblos tan pintorescos como Sirmione, Como, Bellagio o Varena, ideales para escaparse a descansar y relajarse en un entorno muy bello donde algunas personas muy VIP eligen pasar sus vacaciones. Estos son nuestros días cuarto y quinto de un recorrido por el norte de Italia, en el que visitamos Venecia, Verona, Lago de Garda, Lago de Como y Milán.
        Viaje realizado en mayo de 2019. ',
        'link' => '8zkLuicajBs',
        'img'   => '',
        'date'  => Carbon::parse('7-8-2019')->format('Y-m-d'),
        'duration'=>'11:31',
       'visual' => '2923',
       'lat'        => 45.4972934, 
       'lon'        => 10.604893
    ]);

        $name = "Milán en dos días - ITALIA 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 176,
        'excerpt' => 'En  el vídeo de hoy os muestro los lugares imprescindibles que hay que visitar en Milán. Qué ver y hacer en dos días en Milán, a través de un recorrido por el centro histórico de Milán, donde visitamos el Duomo, el teatro Alla Scala o el Castillo, la zona de los navigli y la zona más moderna en la plaza Gae Aulenti. ',
        'body' => 'Aunque nuestra ruta fue un poco caótica por la celebración de los militares, finalmente pudimos ver todos los imprescindibles de la ciudad. 
        Estos son nuestros dos últimos  días de un recorrido por el norte de Italia, en el que visitamos Venecia, Verona, Lago de Garda, Lago de Como y Milán.
        Viaje realizado en mayo de 2019. ',
        'link' => 'bwKpz0aoB-s',
        'img'   => '',
        'date'  => Carbon::parse('14-9-2019')->format('Y-m-d'),
        'duration'=>'21:06',
        'visual' => '3190',
        'lat'       => 45.4641835, 
        'lon'       => 9.190392
    ]);

        $name = "Comida callejera en Hanoi - VIETNAM 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' => 'Lista de reproducción con los vídeos del viaje a Vietnam. Una ruta por Vietnam en la que recorremos desde la capital Hanoi, hasta Hoian, pasando por Ninh Binh, Sapa y la espectacular Bahía de Halong.
        Viaje realizado en agosto de 2019. ',
        'link' => 'phM84Ghh-hU',
        'img'   => '',
        'date'  => Carbon::parse('18-9-2019')->format('Y-m-d'),
        'duration'=>'12:35',
        'visual' => '5338',
        'lat'       => 21.0307494, 
        'lon'       => 105.852552
    ]);

        $name = "8 lugares que ver en Hanoi - VIETNAM 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' =>'En el capítulo de hoy, hacemos una ruta en moto para visitar los imprescindibles de Hanoi. Las motos inundan las calles de Hanoi y los vietnamitas son unos auténticos expertos en conducir dentro del caos. Muy recomendable y divertido. Entre los imprescindibles que ver en Hanoi en 1 día están: el mausoleo de Ho Chi Minh, el templo de la literatura, la pagoda del pilar único, el puente Long Bien, la Snake Village o la curiosa calle del tren.
        Viaje realizado en agosto de 2019. ',
        'link' => '-M4cwK9f8I4',
        'img'   => '',
        'date'  => Carbon::parse('25-9-2019')->format('Y-m-d'),
        'duration'=>'26:03',
        'visual' => '3553',
        'lat'       => 21.0371976, 
        'lon'       => 105.8353
    ]);

        $name = "Las mejores vistas de Vietnam, Ninh Binh - VIETNAM 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' =>'En el capítulo de hoy, visitamos la provincia de Ninh Binh. Conocida como la “Bahía de Halong terrestre”, se pueden encontrar paisajes tan impresionantes como Van Lon, Tam Coc y Hang Mua, donde la subida de las 500 escaleras te lleva directo a una de las mejores vistas de Vietnam. Además, la zona es ideal para hacer turismo rural y visitar alguna de las familias de la zona que ofrecen alojamiento o almuerzos a precios más que razonables. 
        Viaje realizado en agosto de 2019. ',
        'link' => 'AjgxMFoiq_M',
        'img'   => '',
        'date'  => Carbon::parse('2-10-2019')->format('Y-m-d'),
        'duration'=>'19:00',
        'visual' => '2082',
        'lat'       => 20.2417426, 
        'lon'       => 105.90465
    ]);

        $name = "Sapa, cómo llegar, qué ver, donde alojarse - VIETNAM 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt'=> 'En el capítulo de hoy, llegamos a Sapa, la zona norte de Vietnam característica por sus montañas y sus arrozales. El traslado desde Hanoi hasta Sapa lo hacemos en el histórico tren nocturno. Todos los tips y consejos sobre cómo llegar, donde alojarse y qué ver en Sapa. Además vemos de primera mano cómo se hace la cosecha del arroz sin máquinas.
        Viaje realizado en agosto de 2019.',
        'link' => 'Nt_M50BIVU0',
        'img'   => '',
        'date'  => Carbon::parse('9-10-2019')->format('Y-m-d'),
        'duration'=>'17:49',
        'visual' => '2056',
        'lat'       => 22.320420, 
        'lon'       => 103.85472
    ]);

        $name = "Sapa, mejor zona para hacer un trekking - VIETNAM 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' => 'En el capítulo de hoy, recorremos la zona sur de Sapa, haciendo un trekking por las montañas y los arrozales de la zona. Todos los tips y consejos sobre qué hacer en Sapa en tres días. 
        Viaje realizado en agosto de 2019. ',
        'link' => 'xcwook7JKVA',
        'img'   => '',
        'date'  => Carbon::parse('16-10-2019')->format('Y-m-d'),
        'duration'=>'14:10',
        'visual' => '1139',
        'lat'       => 22.3287744, 
        'lon'       => 103.829355
    ]);

        $name = "Guía de Sapa, las aldeas del norte - VIETNAM 6";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' => 'En el capítulo de hoy, recorremos la zona norte de Sapa, haciendo un trekking por las aldeas de la zona. Todos los tips y consejos sobre qué hacer en Sapa en tres días. 
        Viaje realizado en agosto de 2019.', 
        'link' => 'VluL2CXZtLE',
        'img'   => '',
        'date'  => Carbon::parse('23-10-2019')->format('Y-m-d'),
        'duration'=>'13:36',
        'visual' => '833',
        'lat'       => 22.3243952, 
        'lon'       => 103.844808
    ]);

        $name = "Lan Ha Bay, la mejor zona de la Bahía de Halong - VIETNAM 7";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' => ' En el capítulo de hoy, nos vamos a la bahía de Halong, una de las 7 maravillas naturales del mundo, donde pasamos dos días y una noche a bordo del Perla Dawn Sails, en Lan Ha Bay. Te doy todos los consejos que debes saber antes de contratar un crucero por la Bahía de Halong, así como las recomendaciones sobre las mejores zonas de la bahía de Halong y las mejores actividades que hacer. 
        Viaje realizado en agosto de 2019. ',
        'link' => '-4stxJxHGRs',
        'img'   => '',
        'date'  => Carbon::parse('30-10-2019')->format('Y-m-d'),
        'duration'=>'21:09',
        'visual' => '1355',
        'lat'       => 20.7590534, 
        'lon'       => 107.0687
    ]);

        $name = "Hoian, guía de viaje - VIETNAM 8";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 146,
        'excerpt' => ' En el capítulo de hoy, recorremos la preciosa ciudad de Hoian. Durante el día una ruta por los lugares más importantes que hay que visitar y por la noche la magia de la luz de los miles de faroles que inundan la ciudad, un espectáculo inolvidable!
        Viaje realizado en agosto de 2019. ',
        'link' => 'Ry_HrHu8W_Q',
        'img'   => '',
        'date'  => Carbon::parse('6-11-2019')->format('Y-m-d'),
        'duration'=>'22:05',
        'visual' => '1655',
        'lat'       => 15.8769547, 
        'lon'       => 108.324898
    ]);

        $name = "Llegamos a Yangón - MYANMAR 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => 'En el capítulo de hoy, primera toma de contacto con el país desde Yangón, donde conocemos parte de la historia reciente del país y visitamos la que es la mayor y más importante pagoda de todo el país, la Shwedagon. Además del Buda reclinado más grande del mundo.
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'DdBi2V__IWQ',
        'img'   => '',
        'date'  => Carbon::parse('13-11-2019')->format('Y-m-d'),
        'duration'=>'23:48',
        'visual' => '2597',
        'lat'       => 16.7986012, 
        'lon'       => 96.149199
    ]);

        $name = "Guía de Bagan 2019 (1/2) - MYANMAR 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => ' En el capítulo de hoy, llegamos a Bagan, el lugar arqueológico más importante del país, con unas 2000 pagodas. Visitamos los lugares más relevantes e imprescindibles de la zona.
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'qduosPSK5BU',
        'img'   => '',
        'date'  => Carbon::parse('20-11-2019')->format('Y-m-d'),
        'duration'=>'19:09',
        'visual' => '3390',
        'lat'       => 21.172182, 
        'lon'       => 94.85766
    ]);

        $name = "Guía de Bagan 2019 (2/2) - MYANMAR 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => 'En el capítulo de hoy, nos adentramos en Bagan, a través de una ruta en moto por las pagodas más recónditas. 
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'DFqDZOYxNbU',
        'img'   => '',
        'date'  => Carbon::parse('27-11-2019')->format('Y-m-d'),
        'duration'=>'14:06',
        'visual' => '1996',
        'lat'       => 21.1686303, 
        'lon'       => 94.86314
    ]);

        $name = "El monte Popa, viaje desde Bagan - MYANMAR 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => 'En el capítulo de hoy, visitamos el Monte Popa, uno de los lugares más místicos y desconocidos de Myanmar, a través de una ruta desde Bagan. 
        Todo lo que debes saber para una excursión de un día al Monte Popa.
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'SHFc_jejyrs',
        'img'   => '',
        'date'  => Carbon::parse('4-12-2019')->format('Y-m-d'),
        'duration'=>'17:04',
        'visual' => '1684',
        'lat'       => 20.9204924, 
        'lon'       => 95.25317
    ]);

        $name = "Así viven los monjes - MYANMAR 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => 'En el capítulo de hoy, llegamos a Mandalay, el lugar donde viven más monjes. En nuestra ruta por algunas zonas de Mandalay visitamos algunos monasterios de monjes y aprendemos sobre su manera de vivir. Cerca  la antigua capital, Ava, un lugar que no puedes perderte en los alrededores de Mandalay.
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'a2R9ewADtT4',
        'img'   => '',
        'date'  => Carbon::parse('11-2-2019')->format('Y-m-d'),
        'duration'=>'19:45',
        'visual' => '5845',
        'lat'       => 21.8916135, 
        'lon'       => 96.05561
    ]);

        $name = "Ruta por Mandalay, Mingún y Amarapura - MYANMAR 6";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => 'En el capítulo de hoy, llegamos a Mandalay, el lugar donde viven más monjes. En nuestra ruta por algunas zonas de Mandalay visitamos algunos monasterios de monjes y aprendemos sobre su manera de vivir. Cerca  la antigua capital, Ava, un lugar que no puedes perderte en los alrededores de Mandalay.
        Viaje realizado en agosto/septiembre de 2019. 
        ',
        'link' => 'hHephKWN7Ss',
        'img'   => '',
        'date'  => Carbon::parse('18-12-2020')->format('Y-m-d'),
        'duration'=>'20:33',
        'visual' => '1657',
        'lat'       => 22.0508776, 
        'lon'       => 96.01784
    ]);

        $name = "Guía del Lago Inle (1/2) - MYANMAR 7";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => ' En el capítulo de hoy, llegamos al Lago Inle, un maravilloso lugar en el que todo transcurre encima del agua. Cómo llegar, donde alojarse y qué visitar? Daremos respuesta a todas esas preguntas a lo largo de dos vídeos con nuestra guía del Lago Inle.
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'm0kAJ41CTS4',
        'img'   => '',
        'date'  => Carbon::parse('8-1-2020')->format('Y-m-d'),
        'duration'=>'12:19',
        'visual' => '1712',
        'lat'       => 20.5882785, 
        'lon'       => 96.91090
    ]);

        $name = "Guía del Lago Inle (2/2) - MYANMAR 8";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 130,
        'excerpt' => 'En el capítulo de hoy, visitamos los lugares más importantes del Lago Inle, un maravilloso lugar en el que todo transcurre encima del agua. Cómo llegar, donde alojarse y qué visitar? Daremos respuesta a todas esas preguntas a lo largo de dos vídeos con nuestra guía del Lago Inle.
        Viaje realizado en agosto/septiembre de 2019. ',
        'link' => 'Zfes7fBimvQ',
        'img'   => '',
        'date'  => Carbon::parse('15-1-2020')->format('Y-m-d'),
        'duration'=>'17:42',
        'visual' => '1366',
        'lat'       => 20.476391, 
        'lon'       => 96.91536
    ]);

        $name = "5 cosas que ver en la Valeta y sus alrededores - MALTA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'Bienvenidos a Malta, empezamos nuestra ruta por Malta recorriendo su capital, La Valeta. Aún siendo la capital más pequeña de Europa, hay mucho por visitar y en este vídeo te muestro las 8 cosas imprescindibles que hay que ver y hacer en esta bonita ciudad.
        Viaje realizado en noviembre de 2019. ',
        'link' => 'iMs-bN-1Xl8',
        'img'   => '',
        'date'  => Carbon::parse('22-1-20')->format('Y-m-d'),
        'duration'=>'18:15',
        'visual' => '3971',
        'lat'       => 35.8982544, 
        'lon'       => 14.51292
    ]);

        $name = "Pueblos típicos de Malta - MALTA 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'En nuestro segundo día de la Ruta de cuatro días por Malta nos vamos al interior de la isla para ver dos históricas y tradicionales ciudades Mosta y Mdina. ',
        'link' => 'xV1mKwUYVUc',
        'img'   => '',
        'date'  => Carbon::parse('29-1-2020')->format('Y-m-d'),
        'duration'=>'10:02',
        'visual' => '1715',
        'lat'       => 35.913255, 
        'lon'       => 14.421690
    ]);

        $name = "Catacumbas de Rabat - MALTA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'Seguimos con nuestra ruta por Malta en una de sus ciudades más antiguas, Rabat, famosa por albergar en su subsuelo las Catacumbas de San Pablo, una visita imprescindible en tu viaje a Malta. Además, muy cerca se encuentra el museo de la aviación, con una interesante colección de aviones de guerra.
        Viaje realizado en noviembre de 2019. ',
        'link' => 'lzkVlgE9-n0',
        'img'   => '',
        'date'  => Carbon::parse('5-2-2020')->format('Y-m-d'),
        'duration'=>'12:03',
        'visual' => '1995',
        'lat'       => 35.8816845, 
        'lon'       => 14.39905
    ]);

        $name = "5 mejores lugares de costa - MALTA 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'En nuestro último día en Malta recorremos la Costa Sur del País, desde Marsaxlokk, un encantador pueblo maltés de pescadores hasta los acantilados de Dingli, pasando por la formación rocosa de Blue Grotto y visitando los antiguos templos neolíticos de Hgar Qim, los más antiguos que aún se conservan en pie.
        Viaje realizado en noviembre de 2019. ',
        'link' => 'YP9wLtLR1Eo',
        'img'   => '',
        'date'  => Carbon::parse('2-2-2020')->format('Y-m-d'),
        'duration'=>'11:38',
        'visual' => '1197',
        'lat'       => 35.8415075, 
        'lon'       => 14.543645
    ]);

        $name = "Jerusalén, 3 iconos religiosos - ISRAEL 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Bienvenidos a Israel. Hoy empieza un viaje fascinante al país con más historia del mundo.',
        'body' => 'El lugar que se disputan las 3 religiones más importantes del mundo: el judaísmo, el cristianismo y el islam. Seas o no religioso, Jerusalén no te dejará indiferente. En nuestro primer día en el país visitamos los 3 iconos religiosos de Jerusalén: el muro de las lamentaciones, el domo de la roca y la vía dolorosa con el santo sepulcro. 
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => '0BcuIvtKSVk',
        'img'   => '',
        'date'  => Carbon::parse('19-2-2020')->format('Y-m-d'),
        'duration'=>'18:12',
        'visual' => '278.955',
        'lat'       => 31.7641496, 
        'lon'       => 35.21329
    ]);

        $name = "Lugares poco conocidos de Jerusalén - ISRAEL 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Hoy seguimos en Jerusalén, visitando lugares como el Monte de los Olivos y el Cardo, y otros menos conocidos, como el Yad Vashem, el mayor memorial a las víctimas del holocausto de todo el mundo..',
        'body' => ' Además, caminamos por los tejados de Jerusalén, desde donde hay unas vistas muy chulas! 
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        Ubicación Tejados de Jerusalem
        https://goo.gl/maps/cuzv8EEfiQWcMBuX7
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv',
        'link' => 'cikzb0AkF3w',
        'img'   => '',
        'date'  => Carbon::parse('26-2-2020')->format('Y-m-d'),
        'duration'=>'15:31',
        'visual' => '218.171',
        'lat'       => 31.755740, 
        'lon'       => 35.213567
    ]);

        $name = "Así es Palestina, de Belén a Hebrón - ISRAEL 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Hoy nos vamos a Palestina, a la zona de Cisjordania y visitamos dos de las ciudades más importantes: Belén y Hebrón.',
        'body' => 'Te contamos todo lo que debes saber para visitar esta zona por libre.
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => 'vWgk92Zgy7s',
        'img'   => '',
        'date'  => Carbon::parse('4-3-2020')->format('Y-m-d'),
        'duration'=>'20:49',
        'visual' => '788.517',
        'lat'       => 31.7042356, 
        'lon'       => 35.20749
    ]);

        $name = "Ruta 90, de San Jorge a Masada - ISRAEL 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Hoy empezamos la famosa ruta 90 en dirección al sur de Israel. A lo largo de nuestro camino visitaremos el Monasterio de San Jorge, pasaremos por la bíblica ciudad de Jericó y haremos una parada en el río Jordan, famoso por ser el lugar donde se cree que fue bautizado Jesús. ',
        'body' => 'Aunque sin duda, la estrella del día será subir a Masada, la montaña en la que el rey Herodes construyó una fortificación que años más tarde fue escenario del suicidio colectivo de una comunidad de judíos, motivado por el ataque inminente de los soldados romanos. Paisaje e historia a partes iguales en este capítulo... no te lo pierdas!
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => 'KEAdqOY5s38',
        'img'   => '',
        'date'  => Carbon::parse('11-3-2020')->format('Y-m-d'),
        'duration'=>'14:26',
        'visual' => '26.232',
        'lat'       => 31.310773, 
        'lon'       => 35.360444
    ]);

        $name = "Flotar en el Mar Muerto - ISRAEL 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Hoy visitamos el Mar Muerto en la parte de Israel. Este curioso lago es famoso por su alto contenido en sal que hace que se pueda flotar sin ningún esfuerzo.',
        'body' => ' Además, según dicen, el barro del Mar Muerto tiene propiedades muy beneficiosas para la piel. Descubre qué hacer y cuales son las mejores playas y zonas para disfrutar de este fantástico lugar. 
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        
        Ubicaciones playas Mar Muerto en Israel: 
        Playa Ein Bokek: 
        https://goo.gl/maps/t1xFc8ZBDEvL1QaR8 
        Playa Hamei Zohar: 
        https://goo.gl/maps/dJG2jtyfYTgGK2hd8 
        Árbol dentro del Mar Muerto: 
        https://goo.gl/maps/SAsvUwRdWXvwSsMMA 
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => 'gaX0l-lWKPE',
        'img'   => '',
        'date'  => Carbon::parse('18-3-2020')->format('Y-m-d'),
        'duration'=>'11:07',
        'visual' => '18.921',
        'lat'       => 31.4692625, 
        'lon'       => 35.39478897749809
    ]);

        $name = "Red Canyon, no creerás que es Israel - ISRAEL 6";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Hoy descubrimos un lugar de Israel que no conocíamos hasta hace poco tiempo: el Red Canyon, un cañon rocoso que poco tiene que envidiar al famoso Antelope Canyon de Arizona. ',
        'body' => 'Situado al sur de Israel, a pocos kilómetros de Eilat y bordeando la frontera de Egipto, el Red Canyon ofrece una ruta de senderismo con unas vistas espectaculares, tanto desde dentro como desde fuera del cañón. 
        apúntalo en tu lista de mejores trekkings en Israel. Además, no te llevará mucho tiempo recorrerlo, por lo que es una opción ideal para una excursión de un día desde Eilat. 
        En este día además, nos vamos a Jordania, así que te dejo toda la información que debes tener en cuenta para saber como pasar de Isarel a Jordania por la frontera sur.
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => 'vDnYw3yja80',
        'img'   => '',
        'date'  => Carbon::parse('25-3-2020')->format('Y-m-d'),
        'duration'=>'18:32',
        'visual' => '26.145',
        'lat'       => 29.6806507, 
        'lon'       => 34.88317
    ]);

    
    $name = "De Galilea a Haifa, ruta norte - ISRAEL 7";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Hoy visitamos la parte norte de Israel, a través de una ruta por Galilea, Nazaret, Acre y Haifa, cuatro ciudades muy relacionadas con la religión, pero que además ofrecen algunos de los paisajes más pintorescos de todo el país. ',
        'body' => 'Viaje realizado en diciembre de 2019 y enero de 2020. 

        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => 'wSuSm1l5I3U',
        'img'   => '',
        'date'  => Carbon::parse('17-6-2019')->format('Y-m-d'),
        'duration'=>'10:28',
        'visual' => '27.309',
        'lat'       => 32.811410, 
        'lon'       => 34.9854
    ]);

        $name = "Tel Aviv, qué ver en un día - ISRAEL 8";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'En nuestro último día en Israel visitamos Tel Aviv, en una ruta rápida de un día.',
        'body' => 'Mi recomendación, es usar sus bicicletas para recorrer sus largas playas hasta la vieja Jaffa, la milenaria ciudad portuaria. 
        Viaje realizado en diciembre de 2019 y enero de 2020. 
        
        Web oficial de bicicletas en Tel Aviv:
        https://www.tel-o-fun.co.il/en/
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => 'hRxefvo3Nyg',
        'img'   => '',
        'date'  => Carbon::parse('30-6-2020')->format('Y-m-d'),
        'duration'=>'10:40',
        'visual' => '27.825',
        'lat'       => 32.0541074, 
        'lon'       => 34.75329050678089
    ]);

        $name = "Desierto de Wadi Rum - JORDANIA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'Empezamos nueva lista con el viaje a Jordania. Llegando al país por el sur desde Israel, nuestra primera parada es el espectacular desierto de Wadi Rum, uno de los más visitados del mundo. ',
        'body' => 'Paisaje, actividades y descanso a partes iguales, es una visita imprescindible de Jordania. Te muestro cómo llegar, donde alojarse y qué hacer en el desierto de Wadi Rum.
        Viaje realizado en enero de 2020. 
        
        Hoteles recomendados en Jordania:
        Petra Palace: http://www.booking.com/Share-0c17lrg
        Petra Sky: http://www.booking.com/Share-4O2KH2
        Hasan Zawaideh Camp: http://www.booking.com/Share-GZHrFgv
        Captains Desert Camp: http://www.booking.com/Share-DOWXClv
        Amman Pasha: http://www.booking.com/Share-lwaObj',
        'link' => '0QrAwkugcKw',
        'img'   => '',
        'date'  => Carbon::parse('8-4-2020')->format('Y-m-d'),
        'duration'=>'16:35',
        'visual' => '18.815',
        'lat'       => 29.5305675, 
        'lon'       => 35.4220117155026
    ]);

        $name = "Petra de noche - JORDANIA 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'En nuestro segundo día de viaje a Jordania viajamos desde el desierto de Wadi Rum hasta Wadi Musa, la ciudad donde está Petra. Visitamos el espectáculo de Petra by night, muy recomendable para tener una primera impresión de una de las siete maravillas del mundo.',
        'body' => 'Infórmate de qué días se realiza el espectáculo de Petra by night y disfruta de una experiencia mística llena de historia y misterio.
        Viaje realizado en enero de 2020. 
        
        Hoteles recomendados en Jordania:
        Petra Palace: http://www.booking.com/Share-0c17lrg
        Petra Sky: http://www.booking.com/Share-4O2KH2
        Hasan Zawaideh Camp: http://www.booking.com/Share-GZHrFgv
        Captains Desert Camp: http://www.booking.com/Share-DOWXClv
        Amman Pasha: http://www.booking.com/Share-lwaObj',
        'link' => 'ea0eVv0ZANU',
        'img'   => '',
        'date'  => Carbon::parse('22-4-2020')->format('Y-m-d'),
        'duration'=>'8:06',
        'visual' => '7160',
        'lat'       => 30.3222717, 
        'lon'       => 35.45174410363278
    ]);

        $name = "Petra, guía completa de 1 día - JORDANIA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'Hoy visitamos la espectacular Petra, la ciudad que los nabateos tallaron en la roca y que actualmente forma parte de la lista de las siete maravillas del mundo. Si quieres descubrir la belleza de este lugar y conocer su historia y sus curiosidades, no te pierdas el vídeo.',
        'body' => 'Aunque la parte más conocida de Petra es el Tesoro, en realidad Petra es muy grande y vale la pena recorrerla a fondo, así que en este vídeo te ayudamos a organizar tu visita de 1 o 2 días, con todos los lugares que debes conocer, así como los lugares desde donde tendrás las mejores vistas para hacer las mejores fotos. 
        Viaje realizado en enero de 2020. 
        Ubicación miradores Petra:
        Mirador medio:
        Treasury Viewpoint
        Siq, Jordania
        https://goo.gl/maps/ze4k8zk4gBAqZkjf8
        
        Mirador alto:
        Al-Khubtha Trail Viewpoint
        Street of Facades, Jordania
        https://goo.gl/maps/Jw2RZQ82j3ThBTms7
        
        Hoteles recomendados en Jordania:
        Petra Palace: http://www.booking.com/Share-0c17lrg
        Petra Sky: http://www.booking.com/Share-4O2KH2
        Hasan Zawaideh Camp: http://www.booking.com/Share-GZHrFgv
        Captains Desert Camp: http://www.booking.com/Share-DOWXClv
        Amman Pasha: http://www.booking.com/Share-lwaObj',
        'link' => '4mBddmEOS9I',
        'img'   => '',
        'date'  => Carbon::parse('6-5-2020')->format('Y-m-d'),
        'duration'=>'20:46',
        'visual' => '427.570',
        'lat'       => 30.338224, 
        'lon'       => 35.43085
    ]);

        $name = "Ammán, lo imprescindible - JORDANIA 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'Hoy visitamos Ammán, la capital de Jordania, donde visitamos su Ciudadela y su teatro romano, los dos imprescindibles de la ciudad, que te trasladarán a su época romana en que gozó de mayor esplendor.',
        'body' => 'Si tienes poco tiempo para visitar Amman, en este vídeo encontrarás los imprescindibles que no te puedes perder.
        Viaje realizado en enero de 2020. 
        
        Hoteles recomendados en Jordania:
        Petra Palace: http://www.booking.com/Share-0c17lrg
        Petra Sky: http://www.booking.com/Share-4O2KH2
        Hasan Zawaideh Camp: http://www.booking.com/Share-GZHrFgv
        Captains Desert Camp: http://www.booking.com/Share-DOWXClv
        Amman Pasha: http://www.booking.com/Share-lwaObj
        ',
        'link' => '2luWOMydzdo',
        'img'   => '',
        'date'  => Carbon::parse('20-5-2020')->format('Y-m-d'),
        'duration'=>'11:46',
        'visual' => '13.024',
        'lat'       => 31.961057, 
        'lon'       => 35.9123
    ]);

        $name = "Jerash visita a la ciudad romana y Ajlun- JORDANIA 5";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 120,
        'excerpt' => 'Último día de nuestro viaje a Jordania, en el que visitamos la espectacular ciudad romana de Jerash y el bien conservado Castillo de Ajlun. ',
        'body' => 'Viaje realizado en enero de 2020.

        Hoteles recomendados en Jordania:
        Petra Palace: http://www.booking.com/Share-0c17lrg
        Petra Sky: http://www.booking.com/Share-4O2KH2
        Hasan Zawaideh Camp: http://www.booking.com/Share-GZHrFgv
        Captains Desert Camp: http://www.booking.com/Share-DOWXClv
        Amman Pasha: http://www.booking.com/Share-lwaObj
        ',
        'link' => '8AlhkbivtHE',
        'img'   => '',
        'date'  => Carbon::parse('3-5-2020')->format('Y-m-d'),
        'duration'=>'12:42',
        'visual' => '5140',
        'lat'       => 32.272222, 
        'lon'       => 35.89128
    ]);

        $name = "Cómo organizar un viaje por Israel y Jordania";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 118,
        'excerpt' => 'Viaje realizado en diciembre de 2019 y enero de 2020.',
        'body' => '
        Hoteles recomendados en Jordania:
        Petra Palace: http://www.booking.com/Share-0c17lrg
        Petra Sky: http://www.booking.com/Share-4O2KH2
        Hasan Zawaideh Camp: http://www.booking.com/Share-GZHrFgv
        Captains Desert Camp: http://www.booking.com/Share-DOWXClv
        Amman Pasha: http://www.booking.com/Share-lwaObj
        
        Hoteles recomendados en Israel:
        
        Holy Land Hotel en Jerusalen
        http://www.booking.com/Share-MkQBE1
        Abraham Hostel en Jerusalen
        http://www.booking.com/Share-7jU4W6V
        Residencia vacacional Custo Club en Eilat
        http://www.booking.com/Share-3lxM0N
        Tiberias Hostel en el Mar de Galilea
        http://www.booking.com/Share-bDR6e5
        Dream Beach TLV en Tel Aviv
        http://www.booking.com/Share-sXN42l',
        'link' => '8JZ5fA6315I',
        'img'   => '',
        'date'  => Carbon::parse('26-7-2020')->format('Y-m-d'),
        'duration'=>'23:37',
        'visual' => '3917',
        'lat'       => 31.8733684, 
        'lon'       => 35.540197843900245
    ]);


        $name = "Paris 1, su centro histórico - FRANCIA 1";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 166,
        'excerpt' => 'En tu primer día de visita en París te recomiendo recorrer su centro histórico para tener una primera toma de contacto con la historia de la ciudad de la luz. ',
        'body' => '¿sabías que los inicios de París se remontan al año 200 a.C. en la pequeña isla en mitad del río Sena? Te lo contamos a lo largo de un recorrido en el que pasamos la mañana en las pequeñas islas de La Cité y de Saint Louis. Visitamos la sorprendente iglesia gótica de la Sainte Chapelle y paseamos alrededor de la Catedral de Notre Dame. Además de los edificios históricos, la Île de la Cité ofrece agradables calles y plazas para pasear en las que se pueden encontrar hermosos lugares como el mercado de las flores de la Place Louis Lépine.
        Por la tarde, un recorrido por el Barrio Latino nos recuerda la época medieval en que los estudiantes tuvieron un importante papel político y social. En esta zona visitamos el Panteón, los Jardines de Luxemburgo y la Iglesia de Saint Sulpice, famosa por su papel en el libro del Código Da Vinci. 
        Para rematar el día, un paseo en barco al atardecer por el río Sena nos acerca hasta la impresionante Torre Eiffel completamente iluminada para maravillarnos de su belleza antes de visitarla al día siguiente, ¡bien temprano!
        Viaje realizado en julio/agosto de 2020.',
        'link' => 'CSc0ZDiD7HM',
        'img'   => '',
        'date'  => Carbon::parse('16-10-2020')->format('Y-m-d'),
        'duration'=>'21:10',
        'visual' => '2976',
        'lat'       => 48.852942, 
        'lon'       => 2.369249
    ]);

        $name = "Paris 2, recorrido por los imprescindibles - FRANCIA 2";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 166,
        'excerpt' => 'Hoy toca madrugar para conocer todos los atractivos turísticos más importantes de París. ',
        'body' => 'Visitamos la Torre Eiffel, el Arco del Triunfo, recorremos los Campos Eliseos hasta la Plaza de la Concordia, visitamos la Opera Garnier y finalmente el Museo del Louvre. La mejor manera de moverse por París para nosotros es sin duda la bicicleta, ya que es una opción más rápida y menos cansada que caminar y mientras pedaleas no te pierdes el encanto de las calles, como ocurre cuando tomas el metro. Te contamos cómo funciona el sistema de bicicletas de Velib de Paris y te damos algunos trucos para ahorrar usando tantas bicicletas como quieras.  
 
        Viaje realizado en julio/agosto de 2020.',
        'link' => '5p3KEQOxWwo',
        'img'   => '',
        'date'  => Carbon::parse('30-9-2020')->format('Y-m-d'),
        'duration'=>'20:59',
        'visual' => '2972',
        'lat'       => 48.858127, 
        'lon'       => 2.294632
    ]);

        $name = "Paris 3, Montmartre, Pintores y Amelie - FRANCIA 3";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 166,
        'excerpt' => 'Hoy visitamos el encantador barrio de Montmartre.',
        'body' => 'Recorremos las calles donde un día vivieron pintores como Picasso, Van Gogh y Dalí. Nos adentramos en la historia de la belle epoque de los cabarets y visitamos la imponente iglesia del Sacre Coeur. 
        Además, conoceremos mejor a la excéntrica Amelie recorriendo los escenarios de grabación de la película. 
         
        Viaje realizado en julio/agosto de 2020.',
        'link' => 'xH7vd6m0nPY',
        'img'   => '',
        'date'  => Carbon::parse('14-10-2020')->format('Y-m-d'),
        'duration'=>'13:44',
        'visual' => '1405',
        'lat'       => 48.886187, 
        'lon'       => 2.34317
    ]);

        $name = "Paris 4, lugares poco turísticos - FRANCIA 4";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 166,
        'excerpt' => 'Hoy visitamos algunos lugares no tan conocidos de Paris, lugares con pocos turistas donde se reúnen los parisinos. ',
        'body' => 'Si quieres ver cómo es la auténtica Paris, no te pierdas este vídeo en el que visitamos la Rue Cremieux, la Plaza Vendome, las Galerie Vivienne, el barrio de le Marais, con su bonita Place des Vosges, el sorprendente canal de Saint Martin o el Viaducto Rene Dumont. Además, visitamos un curioso museo de la tecnología y disfrutamos de una de las mejores vistas de Paris gratis!',
        'link' => '01k0bpOlZK8',
        'img'   => '',
        'date'  => Carbon::parse('28-10-2020')->format('Y-m-d'),
        'duration'=>'17:52',
        'visual' => '1469',
        'lat'       => 48.859090, 
        'lon'       => 2.36153
    ]);

    
    $name = "Viajar en tiempos de Covid19 - Vuelo a Islandia";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 175,
        'excerpt' => 'En este vídeo te enseño cómo ha sido nuestra experiencia de viaje en avión a Islandia, cómo hemos encontrado los aeropuertos y cómo cambian continuamente las normativas en cuanto al paso de viajeros por las fronteras. ',
        'body' => 'El coronavirus ha afectado nuestra vida en muchos aspectos y por supuesto a la hora de viajar. Actualmente nos da miedo realizar actividades que antes considerábamos normales, como coger un avión o visitar un museo.
        Viaje realizado en agosto de 2020.',
        'link' => 'J3uQ8srulik',
        'img'   => '',
        'date'  => Carbon::parse('27-7-2020')->format('Y-m-d'),
        'duration'=>'11:00',
        'visual' => '2884',
        'lat'       => 63.976434, 
        'lon'       => -22.58265
    ]);

        $name = "ISLANDIA - Tráiler";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 175,
        'excerpt' => 'Dos minutos y medio de imágenes de nuestro viaje a Islandia. Un país con una maravillosa naturaleza y algunos de los paisajes más increíbles del mundo. Pasen y vean!
        Viaje realizado en agosto de 2020.',
        'link' => 'sqVFccxntAU',
        'img'   => '',
        'date'  => Carbon::parse('8-11-2020')->format('Y-m-d'),
        'duration'=>'2:33',
        'visual' => '826',
        'lat'       => 64.845741, 
        'lon'       => -19.312237
    ]);

        $name = "ISLANDIA Día 1 Reikiavik";

    Video::create([
        'name' => $name,
        'slug' => Str::slug($name),
        'country_id' => 175,
        'excerpt' => 'En nuestro primer día de viaje en Islandia visitamos su capital, Reikiavik, una ciudad pequeña y acojedora que, con aires de pueblo encantador, nos enamora a primera vista.',
        'body' => 'Descubre toda la ruta imprescindible para descubrir Reikiavik en un día. 
        Viaje realizado en agosto de 2020.',
        'link' => '6Y0GYVHj_0M',
        'img'   => '',
        'date'  => Carbon::parse('18-11-2020')->format('Y-m-d'),
        'duration'=>'18:28',
        'visual' => '1711',
        'lat'       => 64.144732, 
        'lon'       => -21.93535
    ]);

 }

}