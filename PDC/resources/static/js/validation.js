var isValid = true;
$(function(){
    $("#loginForm").on("submit", function(e){

        e.preventDefault();

        isValid = true;

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val);
                        isValid = false;
                    });
                }else{
                }
            },
            complete: function(data){
                validate();
            }
        });        
    });
});


$(function(){
    $("#signupForm").on("submit", function(e){
        e.preventDefault();

        $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },
            success:function(data){
                if(data.status == 0){
                    $.each(data.error, function(prefix, val){
                        $('span.'+prefix+'_error').text(val[0]);
                    });
                }else{
                    $('#signupForm')[0].reset();
                    alert(data.msg);
                }
            }
        });
    });
});


   
function validate(){
    const form = document.getElementById('loginForm');
    console.log(isValid);
    if(isValid){
        form.submit();
    }
}

function myFunc(){
    var x = "document.getElementById('val1').innerHTML";
    alert(x);
}

function image(){
    var x = document.getElementById("myFile");
    document.getElementById("para").innerHTML = x.value;

}



const patternPassword = /^[0-9a-z@-_]{8,20}$/;
const patternEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/i;
const patternText = /^[a-zA-Z]{8,}/;
const patternAge = /^[0-9]{1,3}$/;

// var imageID=0;
// function changeImage(){
// var img1 = document.getElementById("myimage1");
// var img2 = document.getElementById("myimage2");
// var img3 = document.getElementById("myimage3");
// var img4 = document.getElementById("myimage4");
// var img5 = document.getElementById("myimage5");
// img1.style.display = 'none';
// img2.style.display = 'none';
// img3.style.display = 'none';
// img4.style.display = 'none';
// img5.style.display = 'none';
//  if(imageID == 0){
//      img1.style.display = 'block';
//  }
// if (imageID == 1){
//     img2.style.display = 'block';
// }
// else if (imageID == 2){
//     img3.style.display = 'block';
// }
// else if (imageID == 3){
//     img4.style.display = 'block';
// }
// else {
//     img5.style.display = 'block';
// }
// imageID++;
// if (imageID >= 5)
// {
//     imageID=0;
// }
// }

// setInterval(changeImage, 1000);


function validateText(field){
    if (patternText.test(field.value))
    {
        field.id='valid';
    }
    else{
        field.id='invalid';
    }
}

function validateEmail(field){
    if (patternEmail.test(field.value))
    {
        field.id='valid';
    }
    else{
        field.id='invalid';
    }
}

function validatePassword(field){
    if (patternPassword.test(field.value))
    {
        field.id ='valid';
    }
    else{
        field.id ='invalid';
    }

}
function validateSelect(field){
    const sel = document.getElementsByTagName('select');

    if(sel[0].value == 'Chose Following'){
        field.id = 'invalid';
    }
    else{
        field.id = 'valid';
    }
}

function validateAge(field){    
    if (patternAge.test(field.value))
    {
        field.id ='valid';
    }
    else{
        field.id ='invalid';
    }
}

function validateRadio(){
    const gender = document.getElementsByName('gender');

    for(let g of gender){
        if(g.checked){
            gender[0].id = 'valid';
            gender[1].id = 'valid';
            gender[2].id = 'valid';    
        }
    }
    
}

function validateVacc(){

    const vacc = document.getElementsByName('vaccination');

    for(let i of vacc){
        if(i.checked){
            vacc[0].id = 'valid';
            vacc[1].id = 'valid';   
        }
    }
}

function validateCov(){

    const covid = document.getElementsByName('covid');

    for(let k of covid){
        if(k.checked){
            covid[0].id = 'valid';
            covid[1].id = 'valid';    
        }
    }
}



function disableSubmit1(){
    const k = document.getElementsByTagName("input");
    const j = document.getElementsByTagName("select");
    const l = document.getElementsByTagName("textarea");
    var x = 1;



    for(let i of k){
        if(i.id == 'valid'){
            x++;
        }
    }
    
    if(j[0].id == 'valid'){
        x++;
    }
    
    for(let z of l){
        if(z.id == 'valid'){
            x++;
        }
    }


    if(x == (k.length+l.length+j.length)){
        document.getElementById("button").disabled = false;
    }
    else{
        document.getElementById("button").disabled = true;
    }
}
