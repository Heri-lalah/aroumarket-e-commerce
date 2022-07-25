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
        $produit=new \App\Models\Product();
        $produit->name='midea-microonde-combi-grill-28l-900w-ag928e3d';
        $produit->prix_ht=70000;
        $produit->description='description';
        $produit->photo_principal='midea-microonde-combi-grill-28l-900w-ag928e3d.jpg';
        $produit->category_id=1;
        $produit->save();

        $produit02=new \App\Models\Product();
        $produit02->name='midea-purificateur-d-eau-17l-bleu';
        $produit02->prix_ht=70001;
        $produit02->description='description';
        $produit02->photo_principal='midea-purificateur-d-eau-17l-bleu.jpg';
        $produit02->category_id=1;
        $produit02->save();

        $produit03=new \App\Models\Product();
        $produit03->name='midea-radiateur-en-ceramique';
        $produit03->prix_ht=70002;
        $produit03->description='description';
        $produit03->photo_principal='midea-radiateur-en-ceramique.jpg';
        $produit03->category_id=1;
        $produit03->save();

        $produit04=new \App\Models\Product();
        $produit04->name='moulinex-cuiseur-riz-r12-c-inicio-28l-mk158811';
        $produit04->prix_ht=70003;
        $produit04->description='description';
        $produit04->photo_principal='moulinex-cuiseur-riz-r12-c-inicio-28l-mk158811.jpg';
        $produit04->category_id=1;
        $produit04->save();

        $produit05=new \App\Models\Product();
        $produit05->name='promo-pack-4';
        $produit05->prix_ht=70004;
        $produit05->description='description';
        $produit05->photo_principal='promo-pack-4.jpg';
        $produit05->category_id=1;
        $produit05->save();

        $produit06=new \App\Models\Product();
        $produit06->name='promo-pack-5';
        $produit06->prix_ht=70005;
        $produit06->description='description';
        $produit06->photo_principal='promo-pack-5.jpg';
        $produit06->category_id=1;
        $produit06->save();

        $produit07=new \App\Models\Product();
        $produit07->name='trust-blender-2in1-300w';
        $produit07->prix_ht=70006;
        $produit07->description='description';
        $produit07->photo_principal='trust-blender-2in1-300w.jpg';
        $produit07->category_id=1;
        $produit07->save();

        $produit08=new \App\Models\Product();
        $produit08->name='trust-bouilloire-plastique-2l-rouge';
        $produit08->prix_ht=70007;
        $produit08->description='description';
        $produit08->photo_principal='trust-bouilloire-plastique-2l-rouge.jpg';
        $produit08->category_id=1;
        $produit08->save();

        $produit09=new \App\Models\Product();
        $produit09->name='trust-bouilloire-plastique-3l-blanc-tck-kec3002';
        $produit09->prix_ht=70008;
        $produit09->description='description';
        $produit09->photo_principal='trust-bouilloire-plastique-3l-blanc-tck-kec3002.jpg';
        $produit09->category_id=1;
        $produit09->save();

        $produit10=new \App\Models\Product();
        $produit10->name='trust-four-45lrotisserie-avec-lampe-2000w-ty450bl';
        $produit10->prix_ht=70009;
        $produit10->description='description';
        $produit10->photo_principal='trust-four-45lrotisserie-avec-lampe-2000w-ty450bl.jpg';
        $produit10->category_id=1;
        $produit10->save();

        $produit11=new \App\Models\Product();
        $produit11->name='trust-four-60l-2000w';
        $produit11->prix_ht=70010;
        $produit11->description='description';
        $produit11->photo_principal='trust-four-60l-2000w.jpg';
        $produit11->category_id=1;
        $produit11->save();

        $produit12=new \App\Models\Product();
        $produit12->name='trust-four-maxi-45l-avec-rotissoire';
        $produit12->prix_ht=70011;
        $produit12->description='description';
        $produit12->photo_principal='trust-four-maxi-45l-avec-rotissoire.jpg';
        $produit12->category_id=1;
        $produit12->save();

        $produit13=new \App\Models\Product();
        $produit13->name='trust-rechaud-a-gaz-vitre-en-haute';
        $produit13->prix_ht=70012;
        $produit13->description='description';
        $produit13->photo_principal='trust-rechaud-a-gaz-vitre-en-haute.jpg';
        $produit13->category_id=1;
        $produit13->save();

        $produit14=new \App\Models\Product();
        $produit14->name='trust-refrigerateur-2-portes-vitrees-tddc-850gc-850l';
        $produit14->prix_ht=70013;
        $produit14->description='description';
        $produit14->photo_principal='trust-refrigerateur-2-portes-vitrees-tddc-850gc-850l.jpg';
        $produit14->category_id=1;
        $produit14->save();

        $produit15=new \App\Models\Product();
        $produit15->name='trust-rice-cooker-25l-blanc-gris';
        $produit15->prix_ht=70014;
        $produit15->description='description';
        $produit15->photo_principal='trust-rice-cooker-25l-blanc-gris.jpg';
        $produit15->category_id=1;
        $produit15->save();

        $produit16=new \App\Models\Product();
        $produit16->name='trust-rice-cooker-3l-rouge-bleu-blanc';
        $produit16->prix_ht=70015;
        $produit16->description='description';
        $produit16->photo_principal='trust-rice-cooker-3l-rouge-bleu-blanc.jpg';
        $produit16->category_id=1;
        $produit16->save();

        $produit17=new Product();
        $produit17->name='table-a-manger-ifana-4-places-';
        $produit17->prix_ht=500000;
        $produit17->description='table-a-manger-ifana-4-places-';
        $produit17->photo_principal='table-a-manger-ifana-4-places-.jpg';
        $produit17->category_id=2;
        $produit17->save();

        $produit18=new Product();
        $produit18->name='armoire-03-portes-acai-avec-pieds-da133-138';
        $produit18->prix_ht=500000;
        $produit18->description='armoire-03-portes-acai-avec-pieds-da133-138';
        $produit18->photo_principal='armoire-03-portes-acai-avec-pieds-da133-138.jpg';
        $produit18->category_id=2;
        $produit18->save();


        $produit19=new Product();
        $produit19->name='table-a-manger-nice-4-places-a164-b03-164';
        $produit19->prix_ht=500000;
        $produit19->description='table-a-manger-nice-4-places-a164-b03-164';
        $produit19->photo_principal='table-a-manger-nice-4-places-a164-b03-164.jpg';
        $produit19->category_id=2;
        $produit19->save();

        $produit20=new Product();
        $produit20->name='executive-desk-eden-with-return-tab-eden-a18022';
        $produit20->prix_ht=500000;
        $produit20->description='executive-desk-eden-with-return-tab-eden-a18022';
        $produit20->photo_principal='executive-desk-eden-with-return-tab-eden-a18022.jpg';
        $produit20->category_id=2;
        $produit20->save();

        $produit21=new Product();
        $produit21->name='texas-table-a-manger-4-places';
        $produit21->prix_ht=500000;
        $produit21->description='texas-table-a-manger-4-places';
        $produit21->photo_principal='texas-table-a-manger-4-places.jpg';
        $produit21->category_id=2;
        $produit21->save();

        $tel=new Product();
        $tel->name='infinix-hot-10-lite-68-smartphone-4g-322-x657b';
        $tel->prix_ht=1000000;
        $tel->description='infinix-hot-10-lite-68-smartphone-4g-322-x657b';
        $tel->photo_principal='infinix-hot-10-lite-68-smartphone-4g-322-x657b.jpg';
        $tel->category_id=3;
        $tel->save();

        $tel2=new Product();
        $tel2->name='samsung-a01-lte-ds-216gb-bleu';
        $tel2->prix_ht=1000000;
        $tel2->description='samsung-a01-lte-ds-216gb-bleu';
        $tel2->photo_principal='samsung-a01-lte-ds-216gb-bleu.jpg';
        $tel2->category_id=3;
        $tel2->save();


        $tel3=new Product();
        $tel3->name='infinix-zero-8-smartphone-1288-685-x687';
        $tel3->prix_ht=600000;
        $tel3->description='infinix-zero-8-smartphone-1288-685-x687';
        $tel3->photo_principal='infinix-zero-8-smartphone-1288-685-x687.jpg';
        $tel3->category_id=3;
        $tel3->save();

        $tel4=new Product();
        $tel4->name='samsung-a01-lte-ds-216gb-noir';
        $tel4->prix_ht=500000;
        $tel4->description='samsung-a01-lte-ds-216gb-noir';
        $tel4->photo_principal='samsung-a01-lte-ds-216gb-noir.jpg';
        $tel4->category_id=3;
        $tel4->save();

        $tel5=new Product();
        $tel5->name='samsung-a12-lte-ds-464gb-65-bleu-sm-a127fzbgxfe';
        $tel5->prix_ht=700000;
        $tel5->description='samsung-a12-lte-ds-464gb-65-bleu-sm-a127fzbgxfe';
        $tel5->photo_principal='samsung-a12-lte-ds-464gb-65-bleu-sm-a127fzbgxfe.jpg';
        $tel5->category_id=3;
        $tel5->save();

        $tel6=new Product();
        $tel6->name='samsung-a12-lte-ds-464gb-65-noir-sm-a127fzbgxfe';
        $tel6->prix_ht=1000000;
        $tel6->description='samsung-a12-lte-ds-464gb-65-noir-sm-a127fzbgxfe';
        $tel6->photo_principal='samsung-a12-lte-ds-464gb-65-noir-sm-a127fzbgxfe.jpg';
        $tel6->category_id=3;
        $tel6->save();

        $tel7=new Product();
        $tel7->name='samsung-galaxy-a22-lte-ds4128-sm-a225fz';
        $tel7->prix_ht=1500000;
        $tel7->description='samsung-galaxy-a22-lte-ds4128-sm-a225fz';
        $tel7->photo_principal='samsung-galaxy-a22-lte-ds4128-sm-a225fz.jpg';
        $tel7->category_id=3;
        $tel7->save();
    }
}
