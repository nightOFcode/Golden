<style>
    * {
        margin: 0;
        padding: 0;
        border-spacing: 0;

    }

    body {
        background-color: dodgerblue;
        color: white;
        font-family: sans-serif;

    }

    a {
        text-decoration: none;
        color: white;
    }

    #navbar {
        display: block;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        background-color: #1b1b31;
        text-align: center;
        font-size: 30px;
        padding: 10px;
    }

    #sidebar-button {
        position: absolute;
        display: inline-block;
        left: 10px;
        font-size: 35px;
        cursor: pointer;
        border-radius: 5px;
        transition: 1s;
    }

    #sidebar-button:hover {
        background-color: dodgerblue;
    }

    #navbar-logo {
        display: inline-block;
        caret-color: transparent;
        cursor: grab;
    }

    #navbar-search {
        display: inline-block;
        position: absolute;
        right: 50px;
        top: 5px;
    }

    #navbar-search input {
        border: none;
        outline: none;
        padding: 5px;
        border-radius: 5px;
    }

    #navbar-search button {
        border: none;
        outline: none;
        padding: 5px;
        border-radius: 5px;
        background-color: #1b1b31;
        color: white;
        transition: 500ms;
    }

    #navbar-search button:hover {
        background-color: dodgerblue;
    }

    #sidebar {
        display: none;
        background-color: #1b1b31;
        position: fixed;
        left: 0;
        top: 55px;
        bottom: 0;
        color: white;
    }

    #categories {
        display: none;
        background-color: #111123;
        border-radius: 5px;
        padding: 5px;
    }

    #head-text {
        margin: 35px 10px 10px 10px;
        border-radius: 5px;
        background-color: rgba(0, 0, 0, .3);
        padding: 10px;
        text-align: center;
    }

    #head-text h1 {
        text-align: center;
        font-family: sans-serif;

    }

    #head-text p {
        margin: 20px;
        padding: 20px;
        background-color: rgba(0, 0, 0, .3);
        line-height: 2;
        font-size: 20px;
        border-radius: 5px;

    }

    #loading-holder {
        background-color: black;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: block;
    }

    #loading {
        position: absolute;
        top: 250px;
        left: 680px;
        z-index: 1000;
    }

    #home-list-holder {
        display: block;
        background: rgba(0, 0, 0, .3);
        border-radius: 5px;
        margin: 10px;
        padding: 30px;
    }

    #list-categories {
        caret-color: transparent;
        cursor: pointer;
    }

    #home-category-list-holder {
        display: none;
        background: rgba(0, 0, 0, .3);
        margin: 10px;
        padding: 30px;
        border-radius: 5px;
        font-size: 150px;
        text-align: center;

    }

    #login-holder {
        display: block;
        background: rgba(0, 0, 0, .3);
        margin: 35px 10px 10px 10px;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        caret-color: transparent;

    }

    #login-holder h1 {
        text-align: center;
        font-family: sans-serif;

    }

    #login-text {
        margin: 10px;
    }


    #sign-text {
        margin: 10px;
    }

    #login-content-holder {
        background: rgba(0, 0, 0, .3);
        margin: 10px;
        border-radius: 5px;
        display: none;
        padding: 10px;
        box-sizing: border-box;
        width: 50%;
        vertical-align: top;
        height: 553px;
        font-size: 20px;
        caret-color: transparent;
    }

    #l-holder {
        margin: 10px;
        background: rgba(0, 0, 0, .3);
        padding: 5px;
        border-radius: 5px;
        box-sizing: border-box;

    }

    #content-login-button {
        margin-top: 230px;
    }


    #sign-content-holder {
        background: rgba(0, 0, 0, .3);
        margin: 10px;
        border-radius: 5px;
        display: none;
        padding: 10px;
        box-sizing: border-box;
        width: 50%;
        height: 553px;
        font-size: 20px;
        caret-color: transparent;
    }

    #s-holder {
        margin: 10px;
        background: rgba(0, 0, 0, .3);
        padding: 5px;
        border-radius: 5px;
        box-sizing: border-box;

    }


    #contact-holder {
        display: block;
        margin:35px 10px 10px 10px;
        background: rgba(0, 0, 0, .3);
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        caret-color: transparent;

    }

    #content-message {
        padding: 20px;
        text-align: center;
        display: inline-block;
        width: 800px;
        margin: 0 200px;
    }

    #content-message div {
        background: #26315c;
        margin: 2px;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
    }

    #message {
        width: 700px;
        border-radius: 5px;
        height: 100px;
        outline: none;
        border: none;
        font-size: 16px;
        padding: 10px;
        caret-color: black;
    }

    #send-button {
        margin-top: 10px;
    }


    .holder {
        font-size: 35px;
        padding: 20px 10px;
        border-radius: 5px;
        margin: 10px;
        transition: 500ms;
        cursor: pointer;
        caret-color: transparent;
        display: block;

    }

    .holder:hover {
        background-color: dodgerblue;
    }

    .list {
        padding: 20px 10px;
        font-size: 35px;
        text-decoration: none;
        margin: 10px;
        border-radius: 5px;
        transition: 500ms;
        display: block;
    }

    .list:hover {
        background-color: #464665;

    }

    .home-list {
        display: inline-block;
        background: rgba(0, 0, 0, .3);
        padding: 60px;
        border-radius: 5px;
        width: 33.1%;
        text-align: center;
        box-sizing: border-box;
        font-size: 30px;
        transition: 500ms;
    }

    .home-list:hover {
        background: dodgerblue;
    }


    .category-list-holder {
        display: inline-block;
        background: rgba(0, 0, 0, .3);
        border-radius: 5px;
        width: 16%;
        box-sizing: border-box;
        transition: 500ms;
        margin: 10px -20px;

    }

    .category-list-holder div {
        padding: 18px;
    }

    .category-list-holder:hover {
        background: dodgerblue;
    }

    .login {
        background: rgba(0, 0, 0, .3);
        margin: 20px;
        padding: 20px;
        display: inline-block;
        width: 800px;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 20px;

    }

    .login-button {
        background: #1b1b31;
        border-radius: 5px;
        border: none;
        font-size: 20px;
        color: white;
        padding: 10px;
        margin: 5px;
        width: 200px;
        cursor: pointer;


    }

    .login-button:hover {
        background: dodgerblue;
        transition: 500ms;
    }

    .login-input {
        padding: 20px;

    }

    .login-input div {
        background: #26315c;
        margin: 2px;
        text-align: center;
        padding: 10px;
        border-radius: 10px;

    }

    .login-input input {
        padding: 5px;
        width: 300px;
        outline: none;
        border-radius: 5px;
        border: none;
        caret-color: black;
    }

    .content-button-holder {
        text-align: center;
    }

    .center-login {
        display: block;
        width: 50%;
        margin-left: 684px;
    }


    .contact-input {
        padding: 20px;
        text-align: justify;
        display: inline-block;
        width: 400px;
        margin: 0 200px;
    }


    .contact-input input {
        padding: 5px;
        width: 300px;
        outline: none;
        border-radius: 5px;
        border: none;
        caret-color: black;
    }

    .contact-input div {
        background: #26315c;
        margin: 2px;
        text-align: center;
        padding: 10px;
        border-radius: 10px;
    }
</style>
