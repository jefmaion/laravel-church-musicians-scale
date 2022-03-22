<?php

namespace Database\Seeders;

use App\Models\Instrument;
use Illuminate\Database\Seeder;

class InstrumentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Acordeom','Acordeona','Acordeão','Aerofone','Afoxé','Agogô','Alaúde','Aristão','Arrabil','Atabaque','Avena','Baglateia','Baixo','Baixo De Corda','Balafão','Balalaica','Bambula','Bandola','Bandolim','Bandurra','Banjo','Bateria','Berimbau','Berimbau De Boca','Bimbirimbau','Bimbirimbão','Birimbau','Birimbão','Birlimbau','Birlimbão','Bombo','Bombolom','Bongô','Boé','Bumbo','Buso','Calíope','Canza','Canzá','Carimbó','Carrilhão','Castanhola','Cavaco','Cavaquinho','Caxambu','Celesta','Celo','Chocalho','Clarinete','Clarone','Clavicórdio','Claviórgão','Contrabaixo','Cordofone','Corneta','Craviórgão','Cuíca','Címbalo','Cítara','Daxofone','Didgeridoo','Didjeridu','Dulcitone','Estradivário','Eufônio','Fagote','Figle','Flauta','Flautim','Fliscorne','Gaita','Gaita De Foles','Gambá','Gongo','Guitarra','Guitarra Elétrica','Guitarra Portuguesa','Guitolão','Gunga','Harmoniocordo','Harmónica','Harmónio','Harmônica','Harmônio','Harpa','Instrumento Musical','Koto','Lira','Ló','Mandolim','Maraca','Maracá','Marimba','Mirliton','Mizefe','Museta','Oboé','Ocarina','Oficleide','Oficlide','Ofigle','Pandeiro','Piano','Piano De Armário','Piano De Cauda','Piano De Vidro','Piano Elétrico','Piano Transpositor','Piano Vertical','Prato','Pífaro','Quissanje','Rabeca','Rabeca Chuleira','Rabela','Rabil','Ramaldeira','Realejo','Rebeca','Reco-Reco','Sacabuxa','Samisém','Sanfona','Serrote','Shamisen','Sintetizador','Sonidor','Sousafone','Surdo','Taiko','Tambor','Tamboril','Tamborim','Tantã','Teclado','Teremim','Timbal','Tina','Tipofone','Tipofono','Tom','Traste','Triângulo','Trombeta','Trombone','Trompa','Trompete','Tuba','Tímpano','Vibrafone','Viola','Viola Organista','Violeta','Violino','Violino Popular','Violoncelo','Violone','Violão','Xeol','Xilarmónico','Xilarmônico','Xilofone','Xofar','Xuatê','Zabumba','Órgão'];

        foreach($data as $item) {
           Instrument::create(['name' => $item])  ;
        }

      
    }
}
