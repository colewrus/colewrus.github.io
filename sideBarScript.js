$(document).ready(function () {    
    var $sideBarItems = $('.sidebar .sideBar_item');

    $sideBarItems.click(function(event){      
        var selected = 'side-selected';
        $sideBarItems.removeClass(selected);
        $(event.target).addClass(selected);
    })

   

    $("#doorman-agree").click(function(event){
        console.log("agree");
    });
    $("#doorman-disagree").click(function(event){
        console.log("disagree");
    })
});