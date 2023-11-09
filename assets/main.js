// xu li like anh 

var like = document.querySelectorAll('.fa-thumbs-up');
var likeNumber = document.querySelector('.like-icon');
likeNumber = 1
console.log()

like.onclick = (e) => {
    let htmlLike = likeNumber ++;
    this.style.color = "#1877F2";
    
    // console.log(event.target.this)
    
    // console.log(this)
    document.querySelector('.numLike').innerHTML = htmlLike
    
}