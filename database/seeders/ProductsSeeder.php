<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit01=new \App\Models\Product();
        $produit01->name='midea-microonde-combi-grill-28l-900w-ag928e3d';
        $produit01->prix_ht=70000;
        $produit01->description='description';
        $produit01->photo_principal='midea-microonde-combi-grill-28l-900w-ag928e3d.jpg';
        $produit01->save();

        $produit02=new \App\Models\Product();
        $produit02->name='midea-purificateur-d-eau-17l-bleu';
        $produit02->prix_ht=70001;
        $produit02->description='description';
        $produit02->photo_principal='midea-purificateur-d-eau-17l-bleu.jpg';
        $produit02->save();

        $produit03=new \App\Models\Product();
        $produit03->name='midea-radiateur-en-ceramique';
        $produit03->prix_ht=70002;
        $produit03->description='description';
        $produit03->photo_principal='midea-radiateur-en-ceramique.jpg';
        $produit03->save();

        $produit04=new \App\Models\Product();
        $produit04->name='moulinex-cuiseur-riz-r12-c-inicio-28l-mk158811';
        $produit04->prix_ht=70003;
        $produit04->description='description';
        $produit04->photo_principal='moulinex-cuiseur-riz-r12-c-inicio-28l-mk158811.jpg';
        $produit04->save();

        $produit05=new \App\Models\Product();
        $produit05->name='promo-pack-4';
        $produit05->prix_ht=70004;
        $produit05->description='description';
        $produit05->photo_principal='promo-pack-4.jpg';
        $produit05->save();

        $produit06=new \App\Models\Product();
        $produit06->name='promo-pack-5';
        $produit06->prix_ht=70005;
        $produit06->description='description';
        $produit06->photo_principal='promo-pack-5.jpg';
        $produit06->save();

        $produit07=new \App\Models\Product();
        $produit07->name='trust-blender-2in1-300w';
        $produit07->prix_ht=70006;
        $produit07->description='description';
        $produit07->photo_principal='trust-blender-2in1-300w.jpg';
        $produit07->save();

        $produit08=new \App\Models\Product();
        $produit08->name='trust-bouilloire-plastique-2l-rouge';
        $produit08->prix_ht=70007;
        $produit08->description='description';
        $produit08->photo_principal='trust-bouilloire-plastique-2l-rouge.jpg';
        $produit08->save();

        $produit09=new \App\Models\Product();
        $produit09->name='trust-bouilloire-plastique-3l-blanc-tck-kec3002';
        $produit09->prix_ht=70008;
        $produit09->description='description';
        $produit09->photo_principal='trust-bouilloire-plastique-3l-blanc-tck-kec3002.jpg';
        $produit09->save();

        $produit10=new \App\Models\Product();
        $produit10->name='trust-four-45lrotisserie-avec-lampe-2000w-ty450bl';
        $produit10->prix_ht=70009;
        $produit10->description='description';
        $produit10->photo_principal='trust-four-45lrotisserie-avec-lampe-2000w-ty450bl.jpg';
        $produit10->save();

        $produit11=new \App\Models\Product();
        $produit11->name='trust-four-60l-2000w';
        $produit11->prix_ht=70010;
        $produit11->description='description';
        $produit11->photo_principal='trust-four-60l-2000w.jpg';
        $produit11->save();

        $produit12=new \App\Models\Product();
        $produit12->name='trust-four-maxi-45l-avec-rotissoire';
        $produit12->prix_ht=70011;
        $produit12->description='description';
        $produit12->photo_principal='trust-four-maxi-45l-avec-rotissoire.jpg';
        $produit12->save();

        $produit13=new \App\Models\Product();
        $produit13->name='trust-rechaud-a-gaz-vitre-en-haute';
        $produit13->prix_ht=70012;
        $produit13->description='description';
        $produit13->photo_principal='trust-rechaud-a-gaz-vitre-en-haute.jpg';
        $produit13->save();

        $produit14=new \App\Models\Product();
        $produit14->name='trust-refrigerateur-2-portes-vitrees-tddc-850gc-850l';
        $produit14->prix_ht=70013;
        $produit14->description='description';
        $produit14->photo_principal='trust-refrigerateur-2-portes-vitrees-tddc-850gc-850l.jpg';
        $produit14->save();

        $produit15=new \App\Models\Product();
        $produit15->name='trust-rice-cooker-25l-blanc-gris';
        $produit15->prix_ht=70014;
        $produit15->description='description';
        $produit15->photo_principal='trust-rice-cooker-25l-blanc-gris.jpg';
        $produit15->save();

        $produit16=new \App\Models\Product();
        $produit16->name='trust-rice-cooker-3l-rouge-bleu-blanc';
        $produit16->prix_ht=70015;
        $produit16->description='description';
        $produit16->photo_principal='trust-rice-cooker-3l-rouge-bleu-blanc.jpg';
        $produit16->save();
    }
}
