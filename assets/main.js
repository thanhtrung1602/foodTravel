// xu li like anh 

const likes = document.querySelectorAll('.fa-thumbs-up');
const likeNumbers = document.querySelectorAll('.like-icon');
let  numLikes = document.querySelectorAll('.numLike')
likes.forEach(function(like, index) {
    let numLike = likeNumbers[index]
    let likeNum = likeNumbers[index]

    likeNum = 0
    like.onclick = () => {
        if (like.style.color === "rgb(128, 128, 128)" || like.style.color === "#808080") {
            like.style.color = "#1877F2"
            likeNum ++;
        } 
        numLike.innerHTML = likeNum
    }
})
