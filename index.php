<?php include("head.php"); ?>
<body>
	<div id ="left-menu"></div>
	<div id ="content">
		<div class="jumbotron">
		  <h1>Zaloguj się!</h1>
		  <p>Strona dostępna tylko dla zalogowanych użytkowników!</p>
		  <p><a id="loginButton" class="btn btn-primary btn-lg" href="#" role="button">Zaloguj się</a></p>
		  Nie masz jeszcze konta? <a id="registration">Zarejestuj się</a>
		</div>

		<div class="loginSubWindow">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Zaloguj się</h3>
			  </div>
			  <div class="panel-body">
			    <div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"></span>
				  <input type="text" class="form-control" placeholder="Nazwa użytkownika" aria-describedby="basic-addon1">
				  <input type="text" class="form-control" placeholder="Hasło" aria-describedby="basic-addon1">
				</div>
				  <br>
				  <button type="button" class="btn btn-primary">Zaloguj się</button>
				  <button id="closeLoginSubWindow" type="button" class="btn btn-default">Wstecz</button>
			  </div>
			</div>
		</div>

		<div class="registrationSubWindow">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">Zarejestruj się</h3>
			  </div>
			  <div class="panel-body">
			    <div class="input-group">
				  <span class="input-group-addon" id="basic-addon1"></span>
				  <input type="text" class="form-control" placeholder="Nazwa użytkownika" aria-describedby="basic-addon1">
				  <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
				  <input type="text" class="form-control" placeholder="Hasło" aria-describedby="basic-addon1">
				  <input type="text" class="form-control" placeholder="Powtórz Hasło" aria-describedby="basic-addon1">
				</div>
				  <br>
				  <button type="button" class="btn btn-primary">Zarejstruj się</button>
				  <button id="closeRegistrationSubWindow" type="button" class="btn btn-default">Wstecz</button>
			  </div>
			</div>
		</div>

	</div>
</body>

</html>