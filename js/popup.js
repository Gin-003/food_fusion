$(document).ready(function () {

    $('#menu').click(function () {
 
         $(this).toggleClass('fa-times');
         $('.navbar').toggleClass('nav-toggle');
 
     });
 
     $('.list').click(function()
     {
         const value = $(this).attr('data-filter');
         if(value=='All')
         {
             $('.itemBox').show('1000');
         }
         else{
             $('.itemBox').not('.'+value).hide('1000');
             $('.itemBox').filter('.'+value).show('1000');
         }
         
     })
     $('.list').click(function()
     {
         $(this).addClass('active').siblings().removeClass('active');
     })
 
 });
 
 class loveLooks{
     constructor(){
         this.offLink()
     }
     offLink(){
         const allLInk = document.querySelectorAll('.box-container a');
         for(let i = 0; i<allLInk.length; i++){
             if(allLInk[i].classList.contains('fa-heart') || allLInk[i].classList.contains('fa-eye')){
             allLInk[i].addEventListener('click',(event)=>{
                 
                 if(allLInk[i].classList.contains('fa-heart')){
                     allLInk[i].classList.toggle('liked')
                 }else if(allLInk[i].classList.contains('fa-eye')){
                     const src = event.target.parentNode.parentNode.querySelector('img').getAttribute('src')
                     this.lightBox(src)
                 }
                 event.preventDefault()
                 return false;
             })
             } 
         }
     }
 
     lightBox(src){
         const element = document.createElement('div');
         element.setAttribute('id','popUp')
         document.body.appendChild(element)
         const subElement = document.createElement('div');
         subElement.setAttribute('class','pop-image');
         element.appendChild(subElement)
         const  img = document.createElement('img')
         img.setAttribute('src',src);
         subElement.appendChild(img)
 
         const close = document.createElement('span')
         close.innerText = 'x';
         close.setAttribute('class','close');
         subElement.appendChild(close)
         close.addEventListener('click',()=>{
             document.body.removeChild(element)
         })
     }
 }
 
 let love = new loveLooks;
 
 function openPopup() {
     document.getElementById('signInSignUpPopup').classList.add('active');
 }
 
 function closePopup() {
     document.getElementById('signInSignUpPopup').classList.remove('active');
 }
 
 // Form submission handling
 document.getElementById('loginForm').addEventListener('submit', function(e) {
     e.preventDefault();
     const formData = new FormData(this);
     
     fetch('login.php', {
         method: 'POST',
         body: formData
     })
     .then(response => response.json())
     .then(data => {
         if (data.success) {
             location.reload();
         } else {
             alert(data.message);
         }
     });
 });
 
 document.getElementById('signupForm').addEventListener('submit', function(e) {
     e.preventDefault();
     const formData = new FormData(this);
     
     fetch('signup.php', {
         method: 'POST',
         body: formData
     })
     .then(response => response.json())
     .then(data => {
         if (data.success) {
             location.reload();
         } else {
             alert(data.message);
         }
     });
 });
 
 // Copy the slider movement functions from sign.js
 function moveSliderRight() {
     const overlay = document.getElementById('overlay');
     const signInForm = document.getElementById('signInForm');
     overlay.style.transform = 'translateX(50%)';
     signInForm.classList.remove('shiftRight');
 }
 
 function moveSliderLeft() {
     const overlay = document.getElementById('overlay');
     const signInForm = document.getElementById('signInForm');
     overlay.style.transform = 'translateX(0)';
     signInForm.classList.add('shiftRight');
 }