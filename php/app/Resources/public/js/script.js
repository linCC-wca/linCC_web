(function(){

$(document).ready(function(){

    $('nav').find('ul.nav').find('li.active').on('click', 'a', function(event){
        event.preventDefault();
    });

});

}());
