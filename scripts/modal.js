
    var modal = document.getElementsByClassName("modal");
    var post = document.getElementsByClassName("title");
    var span = document.getElementsByClassName("close");
    console.log(post);

    var displayModal = function(x) {
       return function() {modal[x].style.display = "block";};
    }

    for (var i = 0; i < post.length; i ++) {
         post[i].addEventListener("click", displayModal(i), false);
     }

    var hideModal = function(y) {
       return function() {modal[y].style.display = "none";}
    }

    for (var y = 0; y < post.length; y++) {
        span[y].addEventListener("click", hideModal(y), false);
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
