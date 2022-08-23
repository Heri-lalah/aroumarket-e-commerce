<p>Aroumarket est une application E-Commerce que j'ai dévéloppé avec Laravel et bootstrap + sass .</p>
<h3>##Installation</h3>
Ouvrer votre ligne de commande :
<p>1- Clounez l'application</p>

<p>2-Installer toutes les dependances :</p>
ouvrez votre terminal et tapez
<ul>
    <li>composer -install</span> puis npm install & npm run dev</li>
    <li>Reliez l'api avec votre Base de données puis php artisan migrate</li>
    <li>php artisan db:seed pour ajouter les données que j'ai préparé pour tester l'application.</li>
</ul>
<p>3-Ajoutez cette ligne de code dans : vendor\laravel\ui\auth-backend\AuthenticatesUsers.php</p>

    protected function authenticated(Request $request, $user)
    {
        if($user->admin){
            return  redirect(route('admin'));
        }
    }

<p>Liste des utilisateurs suite au db:seed</p>
<ul>
    <li>Utilisateur client</li>
    <li>login : user1@gmail.com  mot de passe : 123456789</li>
    <li>login : user2@gmail.com  mot de passe : 123456789</li>
    <li>login : user3@gmail.com  mot de passe : 123456789</li>

    <li>Utilisateur admin</li>
    <li>login : admin1@gmail.com  mot de passe : 123456789</li>
    <li>login : admin2@gmail.com  mot de passe : 123456789</li>
</ul>
