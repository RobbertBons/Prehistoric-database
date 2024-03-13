

<header class="header">
    <img src="img/image2.png" class="logo" alt="">
        <ul class ="nav">
            <a href="index.php">Home</a>
            <a href="">About</a>
            <a href="">Continets</a>
            <a href="">Species</a>
            <a href="login.php" class = 'button'>Login</a>
        </ul>
        <input type="text" class="search-bar" placeholder="Search">
</header>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.button{
    border-radius: 10;
}

.logo{
    width: 15%;
    height: auto;
    text-decoration: none;
    color: 	#808080;
    font-size: 18px;
    font-weight: 500;
    margin-right: 190px;
}
.search-bar {
    padding: 4px 5px; /* Adjust padding as needed */
    border-radius: 5px; /* Add some border-radius for rounded corners */
    border: 1px solid #ccc; /* Add a border for better visibility */
}

.header{
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        background-color: #fed684;
        display: flex;
        align-items: center; /* Vertically center the content */
        justify-content: space-between;
}

.nav {
        list-style: none; /* Remove default list styles */
        display: flex;
        align-items: center; /* Vertically center the content */
    }

.nav li {
        margin-right: 20px; /* Add spacing between nav items */
    }
    
    .nav a {
        text-decoration: none;
        color: 	#808080;
        font-size: 18px;
        font-weight: 500;
        margin-right: 20px;
    }

</style>