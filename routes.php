<?php 

Route::set('about-us', function(){
    AboutUs::CreateView('AboutUs');
    AboutUs::test();
});

Route::set('contact-us', function(){
    ContactUs::CreateView('ContactUs');
});

Route::set('index.php', function(){
    Index::CreateView('Index');
});
?>