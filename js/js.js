var faq = document.getElementsByClassName('faq_page');
var i;
for (i = 0; i < faq.length; i++){
    faq[i].addEventListener("click", function (){
        this.Classlist.toggle(".activQn");
        var body = this.nextElementSiblings;
        if (body.style.display === "block"){
            body.style.display = "none"
        } else{
            body.style.display = "block";
        }
    });
}