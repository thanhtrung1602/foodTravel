// xu li like anh 
const likes = document.querySelectorAll('.fa-thumbs-up');
const likeNumbers = document.querySelectorAll('.like-icon');
// let  numLikes = document.querySelectorAll('.numLike')
likes.forEach(function(like, index) {
    let numLike = parseInt(likeNumbers[index].textContent);
    let storedLike = localStorage.getItem(`like${index}`);
    if (storedLike) {
        numLike = parseInt(storedLike);
        like.style.color = "#1877F2";
    }
    like.onclick = () => {
        if (like.style.color === 'rgb(128, 128, 128)' || like.style.color === "#808080") {
            numLike = 0
            numLike ++;
            likeNumbers[index].textContent = numLike;
            like.style.color = "#1877F2";
            localStorage.setItem(`like${index}`, numLike);
        } else {
            numLike --;
            likeNumbers[index].textContent = numLike;
            like.style.color = "#808080";
            localStorage.removeItem(`like${index}`)
        }
    }
    localStorage.setItem('num',numLike)
})
