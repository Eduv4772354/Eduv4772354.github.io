


function changeTitle(){
    let h1=document.getElementById("Main-heading");
    let input=document.getElementById("inputText").value;
    if(input!=""){
        h1.textContent=input;
    }
}

function inputValidation(){
    const firstName = document.getElementById("firstname").value.trim();
    const lastName = document.getElementById("lastname").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    if(!firstName||!lastname||!email||!pasword){
        alert("please enter values in each field");
        return;
    }
}
;