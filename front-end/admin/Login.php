<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <link href="../css/general.css" rel="stylesheet" media="screen"/>
	<title>Admin Agenda</title>
</head>
<script src="../librerias/js/jquery-1.11.3.min.js"></script>
<script src="../librerias/js/bootstrap.js"></script> 
<body background="">

 <nav role="navigation" class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Agenda Telefonica</a>
    </div>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Inicio</a></li>
            
        </ul>
        
        </form>
         <ul class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Volver</a></li>
        </ul>
        </ul>
    </div>

</nav>

<form method="POST" action="">
 <div id="bar" style="center">
        <div id="container">
            <center>
            <div id="loginContainer">
                <div style="clear:both"></div>
                <div id="loginBox">                
                    <form id="loginForm">
                        <fieldset id="body">
                            <fieldset>
                                <label for="email">Usuario</label>
                                <input type="text" name="email" id="email" />
                                <br />
                            </fieldset>
                            <br />
                            <fieldset>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" />
                            </fieldset>
                            <br />
                            <input type="submit" id="login" value="Entrar" />
                        </fieldset>

                    </form>
                </div>
            </div>
            </center>
        
        </div>
    </div>

</form>
</body>
</html>