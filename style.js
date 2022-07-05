//chaing the navbar background on scroll
function changeNavBg() {
    const navbar = document.querySelector('nav');
    const scrollValue = window.scrollY;
    if(scrollValue < 150) {
        navbar.classList.remove('navFixed');
    }else {
        navbar.classList.add('navFixed');
    }
}

window.addEventListener('scroll', changeNavBg);

//meakig the colse icon of menu
const menuIcon = document.querySelector('.menu');
const ul = document.querySelector('ul');
menuIcon.addEventListener('click', () => {

    menuIcon.classList.toggle('active');

    ul.classList.toggle('active');

    //removeing class of active when link clicked
    const links = document.querySelectorAll('.link');
    links.forEach(link => {
        link.addEventListener('click', () => {
            link.classList.toggle('active');

            ul.classList.remove('active');

            menuIcon.classList.remove('active');

        });
    });
});

//on click on profile icon 
const userProfile = document.querySelector('.user-profile');
const profileMenu = document.querySelector('.profile-menu');

userProfile.addEventListener('click', () => {
    profileMenu.classList.toggle('active');

    const proLinks = document.querySelectorAll('.pro-link');
    proLinks.forEach(proLink => {
        proLink.addEventListener('click', () => {
            profileMenu.classList.remove('active');
        });
    });
  
});

//when search icon clicked
const search = document.querySelector('.search');

search.addEventListener('click', () => {
    const searchBox = document.querySelector('.search-box');
    searchBox.classList.toggle('active');
});

//going to login and signup page 
const login = document.querySelector('.login');
const signup = document.querySelector('.sign-up');
const logining= document.querySelector('.logining');
const signingUp = document.querySelector('.signup');
const close = document.querySelector('.close');

//goging to login page
login.addEventListener('click', () => {
    logining.classList.add('active');
    //remove the login page on click the close icon
    close.addEventListener('click', () => {
        logining.classList.remove('active');
    });
});

//going to signup page
signup.addEventListener('click', () => {
    signingUp.classList.add('active');
    //remove the signup page on click the close icon
    const Close = document.querySelector('#Close');
    Close.addEventListener('click', () => {
        signingUp.classList.remove('active');
    });
});

//properties section animations
const PropertyOptions = {
    rootMargin: '0px',
    threshold: 0.5
}
const PropertyObserver= new IntersectionObserver((entries, PropertyObserver) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('show');
            PropertyObserver.unobserve(entry.target);
        }else {
            return;
        }
    });
     
}, PropertyOptions);

const cards= document.querySelectorAll('.card');

//property card animation
cards.forEach(card => {
    PropertyObserver.observe(card);
});

//animation for services section
const ServicesOptions = {
    rootMargin: '0px',
    threshold: 1
}
const ServicesObserver= new IntersectionObserver((entries, ServicesObserverr) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('appear');
            ServicesObserver.unobserve(entry.target);
        }else {
            return;
        }
    });
     
}, ServicesOptions);

const services = document.querySelectorAll('.service');

//service card animation
services.forEach(service => {
    ServicesObserver.observe(service);
});

//animations for about section
const AboutOptions = {
    threshold: 0.5,
    rootMargin: '0px'
}
const AboutObserver= new IntersectionObserver((entries, AboutObserver) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('ab-Show');
            AboutObserver.unobserve(entry.target);
        }else {
            return;
        }
    });
     
}, AboutOptions);

const abs = document.querySelectorAll('.ab');

//about each block animation
abs.forEach(ab => {
    AboutObserver.observe(ab);
});

//animations for contact section
const ContactOptions = {
    rootMargin: '0px',
    threshold: '0.5'
}
const ContactObserver= new IntersectionObserver((entries, ContactObserver) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('Rotate');
            ContactObserver.unobserve(entry.target);
        }else {
            return;
        }
    });
     
}, ContactOptions);

const contactForm = document.querySelector('#contact-form');

//contact content animation
ContactObserver.observe(contactForm);

//animations for footer section
const FooterOptions = {
    rootMargin: '0px',
    threshold: 0.3
}
const FooterObserver= new IntersectionObserver((entries, FooterObserver) => {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('appear');
            FooterObserver.unobserve(entry.target);
        }else {
            return;
        }
    });
     
}, FooterOptions);

const infos = document.querySelectorAll('.info-content');

//footer each block animation
   infos.forEach(info => {
       FooterObserver.observe(info);
   });


//validation of user inputs
//login input validation
const lgForm = document.querySelector('#lg-form');
const lgBtn = document.querySelector('#login');


lgForm.addEventListener('submit', (e) => {
    e.preventDefault();
    if(lgForm.username.value.trim() === "") {
        let parent = lgForm.username.parentElement;
        parent.classList.add('error');
        let usernameEro = document.querySelector('#username-error');
        usernameEro.style.display = 'block';
        usernameEro.textContent = 'من فضلك ادخل اسم المستخدم';
      
    } else {
        let parent = lgForm.username.parentElement;
        parent.classList.remove('error');
        parent.classList.add('success');
        let usernameEro = document.querySelector('#username-error');
        usernameEro.style.display = 'none';
        usernameEro.textContent = '';
    }

    if(lgForm.password.value.trim() === "") {
        let parent = lgForm.password.parentElement;
        parent.classList.add('error');
        let passwordEro = document.querySelector('#password-error');
        passwordEro.style.display = 'block';
        passwordEro.textContent = 'ادخل كلمة المرور';
    } else {
       
        let parent = lgForm.password.parentElement;
        parent.classList.remove('error');
        parent.classList.add('success');
        let passwordEro = document.querySelector('#password-error');
        passwordEro.style.display = 'none';
        passwordEro.textContent = '';
    }

    if(lgForm.username.value.trim()  !== "" && lgForm.password.value.trim() !== "") {
        let success = document.querySelector('#lg-msg');
        success.style.display = "block";
        success.style.color = "green";
      
        logining.classList.remove('active');

        let userActive = document.querySelector('.user-active');
        let proBtns = document.querySelectorAll('.pro-link');
        let userIcon = document.querySelector('#user');
        let userPic = document.querySelector('#user-pic');

        userActive.classList.add('active');
        proBtns.forEach(proBtn => {
            proBtn.style.display = "none";
        });

        //hiding profile icon
        userIcon.style.display = "none";
        //displaying user profile picture
        userPic.sytle.display = "block";

    } else {
        let success = document.querySelector('#lg-msg');
        success.style.display = "none";
        success.textContent = '';

        let userActive = document.querySelector('.user-active');
        let proBtns = document.querySelectorAll('.por-link');

        userActive.classList.remove('active');
        proBtns.forEach(proBtn => {
            proBtn.style.display = "block";
        });
    }
});

//validation for signup inputs 
const signupBtn = document.querySelector('#signupBtn');
const firstname = document.querySelector('#firstname');
const lastname = document.querySelector('#lastname');
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');

signupBtn.addEventListener('click', e => {
    e.preventDefault();
    if(firstname.value.trim() === "") {
        let parent = firstname.parentElement;
        parent.classList.add('error');
        let error = document.querySelector('#firstnameEro');
        error.style.display = "block";
        error.textContent = 'ادخل لاسم الاول';
    } else {
        let parent = firstname.parentElement;
        parent.classList.remove('error');
        parent.classList.add('success');
        let error = document.querySelector('#firstnameEro');
        error.style.display = "none";
        error.textContent = '';
    }

    if(lastname.value.trim() === "") {
        let parent = lastname.parentElement;
        parent.classList.add('error');
        let error = document.querySelector('#lastnameEro');
        error.style.display = "block";
        error.textContent = 'ادخل الاسم الاخير';
    } else {
        let parent = lastname.parentElement;
        parent.classList.remove('error');
        parent.classList.add('success');
        let error = document.querySelector('#lastnameEro');
        error.style.display = "none";
        error.textContent = '';
    }

    if(username.value.trim() === "") {
        let parent = username.parentElement;
        parent.classList.add('error');
        let error = document.querySelector('#usernameEro');
        error.style.display = "block";
        error.textContent = 'ادخل اسم المستخدم';
    } else {
        let parent = username.parentElement;
        parent.classList.remove('error');
        parent.classList.add('success');
        let error = document.querySelector('#usernameEro');
        error.style.display = "none";
        error.textContent = '';
    }
    
    if(email.value.trim() === "") {
        let parent = email.parentElement;
        parent.classList.add('error');
        let error = document.querySelector('#emailEro');
        error.style.display = "block";
        error.textContent = 'ادخل البريد الالكتروني';
    } else {
        let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(!filter.test(email.value.trim())) {
            let parent = email.parentElement;
            parent.classList.add('error');
    
            let error = document.querySelector('#emailEro');
            error.style.display = "block";
            error.textContent = 'البريد الالكتروني غير صالح';
        } else {
            let parent = email.parentElement;
            parent.classList.remove('error');
            parent.classList.add('success');
            let error = document.querySelector('#emailEro');
            error.style.display = "none";
            error.textContent = '';
        }
    }

    if(password.value.trim() === "") {
        let parent = password.parentElement;
        parent.classList.add('error');
        let error = document.querySelector('#passwordEro');
        error.style.display = "block";
        error.textContent = 'ادخل كلمة المرور';
    } else {
        let checkPw = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;

        if(!checkPw.test(password.value.trim())) {
            let parent = password.parentElement;
            parent.classList.add('error');
            let error = document.querySelector('#passwordEro');
            error.style.display = "block";
            error.textContent = 'كلمة المرور يجب ان تتكون من 8حرف على الاقل، وحرف كبير ، وحرف صغير، رقم، وحرف خاص'
        } else {
            let parent = password.parentElement;
            parent.classList.remove('error');
            parent.classList.add('success');
            let error = document.querySelector('#passwordEro');
            error.style.display = "none";
            error.textContent = '';
        }

    }

    if(firstname.value !== "" && lastname.value !== "" &&
       username.value !== "" && email.value !== "" && password.value !== "") {
           let success = document.querySelector('.sign-success');
           success.style.display = "block";
           success.style.color = "#27ae56";
           success.textContent = "تم التسجيل بنجاح";

           signingUp.classList.remove('active');

           //clearing inputs
           firstname.value =="";
           lastname.value =="";
           username.value =="";
           email.value =="";
           password.value =="";

       } else {
        let success = document.querySelector('.sign-success');
        success.style.display = "none";
        success.textContent = "";
       }
});

//contact us validation 
const Contfullname = document.querySelector('#cont-fullname');
const Contemail = document.querySelector('#cont-email');
const Conttxtar = document.querySelector('#cont-text-ar');
const sendBtn = document.querySelector('.send');

sendBtn.addEventListener('click', e => {
    e.preventDefault();

    if(Contfullname.value.trim() === "") {
        let parent= Contfullname.parentElement;
        let error = document.querySelector('.fullnameEro');

        parent.classList.add('error');
        error.style.display = "block";
        error.textContent = "ادخل الاسم كامل";
    } else {
        let parent= Contfullname.parentElement;
        let error = document.querySelector('.fullnameEro');

        parent.classList.add('success');
        error.style.display = "none";
        error.textContent = "";

    }

    if(Contemail.value.trim() === "") {
        let parent= Contemail.parentElement;
        let error = document.querySelector('.emailEro');

        parent.classList.add('error');
        error.style.display = "block";
        error.textContent = "ادخل البريد الالكتروني";
    } else {
        let filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if(!filter.test(Contemail.value.trim())) {
            let parent= Contemail.parentElement;
            let error = document.querySelector('.emailEro');
    
            parent.classList.add('error');
            error.style.display = "block";
            error.textContent = "البريد الالكتروني غير صالح";
        } else {
            let parent= Contemail.parentElement;
            let error = document.querySelector('.emailEro');
    
            parent.classList.add('success');
            error.style.display = "none";
            error.textContent = "";
        }

    }

    if(Conttxtar.value.trim() === "") {
        let error = document.querySelector('.textarEro');

        Conttxtar.style.border = "2px solid red";
        error.style.display = "block";
        error.textContent = "رسالتك مهمة بالنسبة لنا، الرجاء اكتب شيئا ";
    } else {
        let error = document.querySelector('.textarEro');

        Conttxtar.style.border = "2px solid #27ae56";
        error.style.display = "none";
        error.textContent = "";
    }

});

//admin control panel

// const adminMenu = document.querySelector('.admin-menu');
// const adminLink = document.querySelector('.admin-menu a');
// const secs = document.querySelectorAll('.sec');

// adminMenu.addEventListener('click', e => {
//     e.preventDefault();
    
//     if(e.target.tagName  =="A") {
//         const targetSection = document.querySelector(e.target.dataset.target);
//         secs.forEach(sec => {
//             if(sec == targetSection) {
//                 sec.stle.display == "flex";
//             } else {
//                 sec.style.display == "none";
//             }
//         });
//     }
// });
