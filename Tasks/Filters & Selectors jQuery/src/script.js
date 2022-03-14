//globle scope
var products=[];

$(document).ready(function () {
    console.log('file loaded..');
    $('body').css("background","lightsteelblue");
    $('body').css('font-family','sans-serif');

    $('#submit').click(function (e) { 
        // console.log('submit Clicked')
        var id=$('#id').val();
        var name=$('#name').val();
        var brand=$('#brand').val();
        var system=$('#system').val();
        console.log(id,name,brand,system);
        checkvalidation(id,name,brand,system);

    });

    function checkvalidation(id,name,brand,system){
        if(id=="" || name=="" || brand=="" || system==""){
            $('#warning').text('All Feilds Are Required!!');
        }
        else{
            add(id,name,brand,system);
            
        }
    }

    function add(id,name,brand,system){
        var obj={
            pid:id,
            pname:name,
            pbrand:brand,
            psystem:system
        }
        if(products.length==0){
            products.push(obj);
            $('#sucessfull').text('Values Are Added Sucessfully');
            console.log(' value push');
            console.log(products[0].pid);
            display(products);
        }
        else if(checkid(id)==false){
            products.push(obj);
            $('#sucessfull').text('Values Are Added Sucessfully');
            console.log(' value push');
            display(products);
        }
        else if(checkid(id)==true){
            $('#warning').text('Id Already Exist!!');

        }
        

        
    }

    function checkid(id) {

        for (var i = 0; i < products.length; i++) {
            if(products[i].pid==id){
                 return true;
            }
            
    
        }
        return false;
    
    }

    function display(products){
        var main="";
        for(var i=0;i<products.length;i++){
            main += "\
            <tr><td>" + products[i].pid + "</td> \
            <td>" + products[i].pname + "</td>\
            <td>" + products[i].pbrand + "</td>\
            <td>" + products[i].psystem + "</td>\
            <td><u><a onclick=hide('"+products[i].id+"')>hide</a></u></td>\
             </tr>";
        }

        $('#table').html(main);
        // document.getElementById('table').innerHTML=Html;
        // console.log(Html);
    }

    function hide(id){
        for(var i=0;i<products.length;i++){
            if(id==products[i].pid){
                $('td').hide();
            }
        }
    }
});