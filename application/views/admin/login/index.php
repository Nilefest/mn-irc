<?php echo $header ?>
<style>
    label{
        width: 30%;
    }
    input[type="text"],
    input[type="password"]{
        width: 65%;
    }
    .button{
        border: 1px solid #500;
        background-color: #025;
        color: #fff;
        padding: 5px 15px;
        float: right;
    }
    .button:hover{
        background-color: #028;
    }
</style>
<div class="article">
    <h1>Log In</h1>
    <form action="" method="post">
        <label for="mirc_login">Login</label>
        <input type="text" name="mirc_login">
        <label for="mirc_pass">Password</label>
        <input type="password" name="mirc_pass">
        <input type="submit" class="button" value="Log in">
    </form>
</div>
<?php echo $footer ?>
