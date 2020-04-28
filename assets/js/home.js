// display register and anonymous
let start = document.querySelector('#startButton');

if(start) {

    start.addEventListener('click', ()=>{
        document.querySelector('#displayContainer').style.display = 'none'; 
        document.querySelector('#displayContainer2').style.display = 'flex';
        start.style.display = 'none';
    })  

}


// if user wants to register
let registerPath = document.querySelector('#registerPath');

if(registerPath) {
    
    registerPath.addEventListener('click', ()=>{
        location.href = './register.php';
    })

}


// if user wants to answer questions anonymously
let guestPath = document.querySelector('#guestPath');

if(guestPath) {

    guestPath.addEventListener('click', ()=>{
        location.href = './questions.php';
    })
}


// register validation
let register = document.querySelector('#register');

if(register) {

    register.addEventListener('click', ()=>{
        if(document.querySelector('#password').value !== document.querySelector('#confirmPassword').value) {
            alert('Passwords do not match!');
        }
    })
}


// questions flow
let next = document.querySelector('#next');

if(next) {
    
    next.addEventListener('click', ()=>{
        if(document.querySelector('#yes1').checked == true) {
            document.querySelector('#question1').style.display = 'none';
            document.querySelector('#question2-1').style.display = 'block';
            
            next.addEventListener('click',()=>{
                if(document.querySelector('#yes2-1').checked == true) {
                    document.querySelector('#question2-1').style.display = 'none';
                    document.querySelector('#question3').style.display = 'block';
                    
                    next.addEventListener('click',()=>{
                        if(document.querySelector('#above').checked == true) {
                            document.querySelector('#question3').style.display = 'none';
                            document.querySelector('#heading').style.display = 'none';
                            document.querySelector('#pui').style.display = 'block';
                            document.querySelector('#next').style.display = 'none';
                            document.querySelector('#getresults').style.display = 'block';
                        } else {
                            document.querySelector('#question3').style.display = 'none';
                            document.querySelector('#heading').style.display = 'none';
                            document.querySelector('#pum').style.display = 'block';
                            document.querySelector('#next').style.display = 'none';
                            document.querySelector('#getresults').style.display = 'block';
                        }
                    })

                } else {
                    document.querySelector('#question2-1').style.display = 'none';
                    document.querySelector('#question3').style.display = 'block';

                    next.addEventListener('click',()=>{
                        if(document.querySelector('#above').checked == true) {
                            document.querySelector('#question3').style.display = 'none';
                            document.querySelector('#heading').style.display = 'none';
                            document.querySelector('#pui').style.display = 'block';
                            document.querySelector('#next').style.display = 'none';
                            document.querySelector('#getresults').style.display = 'block';
                        } else {
                            document.querySelector('#question3').style.display = 'none';
                            document.querySelector('#heading').style.display = 'none';
                            document.querySelector('#pum').style.display = 'block';
                            document.querySelector('#next').style.display = 'none';
                            document.querySelector('#getresults').style.display = 'block';
                        }
                    })
                }
            })
            
        } else {
            document.querySelector('#question1').style.display = 'none';
            document.querySelector('#question2-2').style.display = 'block';

            next.addEventListener('click',()=>{
                if(document.querySelector('#yes2-2').checked == true) {
                    document.querySelector('#question2-2').style.display = 'none';
                    document.querySelector('#question2-1').style.display = 'block';

                    next.addEventListener('click',()=>{
                        if(document.querySelector('#yes2-1').checked == true) {
                            document.querySelector('#question2-1').style.display = 'none';
                            document.querySelector('#question3').style.display = 'block';
                            
                            next.addEventListener('click',()=>{
                                if(document.querySelector('#above').checked == true) {
                                    document.querySelector('#question3').style.display = 'none';
                                    document.querySelector('#heading').style.display = 'none';
                                    document.querySelector('#pui').style.display = 'block';
                                    document.querySelector('#next').style.display = 'none';
                                    document.querySelector('#getresults').style.display = 'block';
                                } else {
                                    document.querySelector('#question3').style.display = 'none';
                                    document.querySelector('#heading').style.display = 'none';
                                    document.querySelector('#pum').style.display = 'block';
                                    document.querySelector('#next').style.display = 'none';
                                    document.querySelector('#getresults').style.display = 'block';
                                }
                            })
        
                        } else {
                            document.querySelector('#question2-1').style.display = 'none';
                            document.querySelector('#question3').style.display = 'block';

                            next.addEventListener('click',()=>{
                                if(document.querySelector('#above').checked == true) {
                                    document.querySelector('#question3').style.display = 'none';
                                    document.querySelector('#heading').style.display = 'none';
                                    document.querySelector('#pui').style.display = 'block';
                                    document.querySelector('#next').style.display = 'none';
                                    document.querySelector('#getresults').style.display = 'block';
                                } else {
                                    document.querySelector('#question3').style.display = 'none';
                                    document.querySelector('#heading').style.display = 'none';
                                    document.querySelector('#pum').style.display = 'block';
                                    document.querySelector('#next').style.display = 'none';
                                    document.querySelector('#getresults').style.display = 'block';
                                }
                            })
                        }
                    })


                } else {
                    document.querySelector('#question2-2').style.display = 'none';
                    document.querySelector('#heading').style.display = 'none';
                    document.querySelector('#not').style.display = 'block';
                    document.querySelector('#next').style.display = 'none';
                    document.querySelector('#getresults').style.display = 'block';
                }    
            })
        }
    })

}