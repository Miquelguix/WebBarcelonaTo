<?php

namespace App\Http\Controllers;


use Goutte\Client;
use App\Models\Country;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class ScrapingController extends Controller
{
    public function gob_scrap(){

        $countries = country::where('gob_id','>',0)->select('id','gob_id')->all();


        // dd('ok');
        // $client = new Client();
        // // dd('ok');
        
        // $crawler = $client->request('GET', 'https://www.amazon.es/kindle-ahora-con-luz-frontal-integrada-negro/dp/B07FQ4XCR1/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=e-readers%2Bkindle&qid=1605466670&s=amazon-devices&sr=1-1&th=1');
        // $description = $crawler->filter('div[id="content-grid-widget-v1.0"]')->html();
        // dd($description);

        
        // $docu = $crawler->filter('div[id="descripcion"]')->filter('div[class="divEtiquetaDesplegableJQ"]')->parents()->each(function (Crawler $node) {
        //     // dd($node->html());
        //     $countryName = Str::slug($node->filter('div[class="divEtiquetaDesplegableJQ"]')->text());
        //     $gobId = $node->filter('div[class="recomendacionesViaje"]')->filter('a')->attr('href');
        //     $gob_id = explode('IdP=',$gobId)[1];
        //     Country::where('countrySlug', $countryName)->update(['gob_id' => $gob_id]);
        //     Print ($countryName.'<br>');
        //     }
        // );

        return view('web.seed', compact('countries'));
    }

    public function seeder_country(){

        $countries = Country::all();

        foreach ($countries as $country) {
            
            print(
            
                "Country::create([<br>
                'name' => '".$country->name ."',<br>
                'countrySlug' => '" . Str::slug($country->countrySlug) ."',<br>
                'continent' => '{ !! $country->continen !! }',<br>
                'continentSlug' => '" . Str::slug($country->continentSlug) ."',<br>
                'gob_id' => '{ !! $country->gob_i !! }',<br>
                ]);<br><br>");
        };
    }

    public function dades_web_gob(){

        $countries = country::where('gob_id','>',0)->select('id','gob_id')->get();

        foreach ($countries as $country) {
        
        $client = new Client();
        
        $crawler = $client->request('GET', 'http://www.exteriores.gob.es/Portal/es/ServiciosAlCiudadano/SiViajasAlExtranjero/Paginas/DetalleRecomendacion.aspx?IdP=' . $country->gob_id .'');
        
        $importante = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoNotasImportantes"]')->html();
        // dd($importante);
        Country::where('gob_id', $country->id)->update(['importante' => $importante]);
        $visados = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoDocumentacion"]')->html();
        // dd($visados);
        Country::where('gob_id', $country->id)->update(['visados' => $visados]);
        $seguridad = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoSeguridad"]')->html();
        Country::where('gob_id', $country->id)->update(['seguridad' => $seguridad]);
        $sanidad = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoSanidad"]')->html();
        Country::where('gob_id', $country->id)->update(['sanidad' => $sanidad]);
        $divisas = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoDivisas"]')->html();
        Country::where('gob_id', $country->id)->update(['divisas' => $divisas]);
        $otros = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoOtros"]')->html();
        Country::where('gob_id', $country->id)->update(['otros' => $otros]);
        $direcciones = $crawler->filter('div[id="ctl00_SPWebPartManager1_g_91a26404_e729_4d20_aa63_65a96ad158df_ctl00_infoDirecciones"]')->html();
        Country::where('gob_id', $country->id)->update(['direcciones' => $direcciones]);
        }

        return redirect()->route('blog');

    }


}
 