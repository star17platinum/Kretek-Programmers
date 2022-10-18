
var pengaturan = document.getElementsByClassName('pengaturan');
var setting = document.getElementsByClassName('setting')
var range = document.getElementsByClassName('range');
var card = document.getElementsByClassName('card');
pengaturan[0].addEventListener('click', function(){
    setting[0].classList.toggle('hidden');
});

range[0].addEventListener('mousemove', function(){
    for (var i = 0;i < card.length;i++){
        card[i].style.marginBottom = this.value+"px";
        // console.log(card[i]);
    }
});
