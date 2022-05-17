<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contenu;

class ContenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Contenu = new Contenu();
        $Contenu->titre = "Rainy";
        $Contenu->nom = "Quand la pluie tombe";
        $Contenu->degre = 9;
        $Contenu->description = "Plus une atmosphère est chaude, plus elle peut contenir de l'eau. Celle-ci se condense en altitude et retombe sous forme de pluie. Donc là où il pleut déjà, les précipitations survenant avec plus d'intensité devraient augmenter, de quelques pourcents supplémentaires par degré de réchauffement";
        $Contenu->image ="image1.png";
        $Contenu->save();

        $Contenu = new Contenu();
        $Contenu->titre = "Sunny";
        $Contenu->nom = "Quand le solei brule";
        $Contenu->degre = 31;
        $Contenu->description = "Le principal moteur du changement climatique est l'effet de serre. Certains gaz de l'atmosphère terrestre agissent à la manière des parois d'une serre: ils permettent à l'énergie solaire d'entrer dans l'atmosphère mais l'empêchent de s'en échapper, provoquant le réchauffement climatique";
        $Contenu->image ="image2.png";
        $Contenu->save();

        $Contenu = new Contenu();
        $Contenu->titre = "Cloudy";
        $Contenu->nom = "Quand il est nuageux";
        $Contenu->degre = 15;
        $Contenu->description = "L’évolution des nuages aura des effets sur le dérèglement climatique, indique une nouvelle étude. Certains nuages devraient être moins refroidissants, quand d’autres risquent d’avoir un effet de serre plus important";
        $Contenu->image ="image3.png";
        $Contenu->save();
    }
}
