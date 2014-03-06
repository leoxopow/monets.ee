<div class="container">

    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Вход на сайт</h2>
        <div class="alert alert-error">
            {{Theme.place('errors')}}
        </div>
        <p>
            <a class="btn btn-primary" href="/social/vk">Вконтакте</a>
            <a class="btn btn-primary" href="/social/fb">Facebook</a>
        </p>
        <input name="username" type="text" class="form-control" placeholder="Email address" autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password">
        <p>
            <input type="checkbox" id="remember-me" name="remember" value="remember-me">
            <label for="remember-me"> Запомнить меня</label>
        </p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>

</div> <!-- /container -->

<style>
    .form-signin {
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }
    .form-signin .checkbox {
        font-weight: normal;
    }
    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>