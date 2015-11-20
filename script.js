$(document).ready(function() {
    settimeout(myfunction, 1000);
    function myfunction (){ $('#clientsOpen').click(function() {
        $('#clientsDropDown #clientsDashboard').slideToggle(300);
        $(this).toggleClass('clientsClose');
    }); // end click}

}

});