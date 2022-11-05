<h1> MultiPayment System(Stripe, Paystack, Flutterwave)<h1>

<h3>Stack: Laravel, JQuery, Boostrap, MySQL, Apache, Vuejs-CDN</h3>
<h3>Local OS: Linux(Ubuntu)</h3>
<h4>Setup</h4>
<p> Clone the repository clone. Switch to the @master branch. Configure your database credentials in your environment variable. Migrate the table by running <b>php artisan migrate</b>, then run <b>php artisan db:seed UserTableSeeder</b> to seed the database to get default users. Login to the Admin or or user gotten from the UserSeeder.php file in <b>migrations/seeder/UserTableSeeder.php</b> file . To add payment integration, go to Interation and select payment. Add your stripe or selected Api keys(secret and public keys), of which you can edit and delete from the integration</p>
<p>
    As an administrator, you can add products(sketch). Then you can view the products added(any user level) and make payment with you integrated payment service.
</p>

<h3>Design Pattern: Service Pattern Repository. Binding the interface(coming soon...)</h3>
