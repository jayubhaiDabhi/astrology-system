<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persistent Comment System</title>
    <link rel="stylesheet" href="comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="comment-box">
        <!-- Comment Input Section -->
        <div class="reply-box">
            <img src="bgimg.jpg" alt="User Avatar" class="avatar">
            <textarea id="comment-input" placeholder="Write a comment..."></textarea>
            <button class="comment-btn" onclick="addComment()">Comment</button>
        </div>

        <!-- Comments Section -->
        <div id="comment-section"></div>
    </div>

    <script>
        window.onload = function() {
            loadComments();
            updateTimeAgo();
        };

        function addComment() {
            const commentText = document.getElementById("comment-input").value.trim();
            if (commentText === "") return;

            const timestamp = Date.now();
            const commentObj = {
                id: timestamp,
                text: commentText,
                time: timestamp,
                likes: 0,
                dislikes: 0
            };

            let comments = JSON.parse(localStorage.getItem("comments")) || [];
            comments.push(commentObj);
            localStorage.setItem("comments", JSON.stringify(comments));

            document.getElementById("comment-input").value = "";
            loadComments();
        }

        function loadComments() {
            const commentSection = document.getElementById("comment-section");
            commentSection.innerHTML = "";

            let comments = JSON.parse(localStorage.getItem("comments")) || [];
            comments.forEach(comment => {
                const newComment = document.createElement("div");
                newComment.classList.add("comment");

                newComment.innerHTML = `
                    <div class="user-info">
                        <img src="bg.jpeg" alt="User Avatar" class="avatar">
                        <span class="username">New User</span>
                        <span class="time" data-time="${comment.time}">${getTimeAgo(comment.time)}</span>
                    </div>
                    <p class="comment-text">${comment.text}</p>

                    <!-- Like & Dislike Section -->
                                <div class="like-dislike">
                    <div>
                        <span class="like-btn" onclick="toggleLike(${comment.id})">
                            <i class="fa fa-thumbs-up"></i> <span id="like-count-${comment.id}">${comment.likes}</span>
                        </span>
                        <span class="dislike-btn" onclick="toggleDislike(${comment.id})">
                            <i class="fa fa-thumbs-down"></i> <span id="dislike-count-${comment.id}">${comment.dislikes}</span>
                        </span>
                        <a href="#" class="reply" style="margin-left:300px;">Reply</a>
                    </div>
                    <button class="delete-btn" onclick="deleteComment(${comment.id})">Delete</button>
                </div>

                `;

                commentSection.prepend(newComment);
            });

            updateTimeAgo();
        }

        function toggleLike(commentId) {
            let comments = JSON.parse(localStorage.getItem("comments")) || [];
            comments = comments.map(comment => {
                if (comment.id === commentId) {
                    comment.likes = comment.likes === 0 ? 1 : 0;
                    comment.dislikes = 0;
                }
                return comment;
            });

            localStorage.setItem("comments", JSON.stringify(comments));
            loadComments();
        }

        function toggleDislike(commentId) {
            let comments = JSON.parse(localStorage.getItem("comments")) || [];
            comments = comments.map(comment => {
                if (comment.id === commentId) {
                    comment.dislikes = comment.dislikes === 0 ? 1 : 0;
                    comment.likes = 0;
                }
                return comment;
            });

            localStorage.setItem("comments", JSON.stringify(comments));
            loadComments();
        }

        function deleteComment(commentId) {
            let comments = JSON.parse(localStorage.getItem("comments")) || [];
            comments = comments.filter(comment => comment.id !== commentId);
            localStorage.setItem("comments", JSON.stringify(comments));
            loadComments();
        }

        function updateTimeAgo() {
            const timeElements = document.querySelectorAll(".time");
            timeElements.forEach(el => {
                let timestamp = parseInt(el.getAttribute("data-time"));
                el.textContent = getTimeAgo(timestamp);
            });
        }

        function getTimeAgo(timestamp) {
            let currentTime = Date.now();
            let timeDifference = Math.floor((currentTime - timestamp) / 1000);

            if (timeDifference < 60) return "Just now";
            if (timeDifference < 3600) return `${Math.floor(timeDifference / 60)} minutes ago`;
            if (timeDifference < 86400) return `${Math.floor(timeDifference / 3600)} hours ago`;
            return `${Math.floor(timeDifference / 86400)} days ago`;
        }

        setInterval(updateTimeAgo, 60 * 1000);
    </script>
</body>

</html>